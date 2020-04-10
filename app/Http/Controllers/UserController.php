<?php

namespace App\Http\Controllers;

use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\User;
use App\Store;
use App\StoreAddress;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
		//$this->middleware('auth');
    }

    //
	//this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'user_username' => 'required|unique:users',
            'user_password' => 'required|min:6',
            'user_email' => 'required|email|unique:users'
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $user = new User();
        
        //adding values to the users
        $user->user_username = $request->input('user_username');
        $user->user_email    = $request->input('user_email');
        $user->user_password = (new BcryptHasher)->make($request->input('user_password'));
        $user->user_firstname= $request->input('user_firstname');
        $user->user_lastname = $request->input('user_lastname');
        $user->user_mobile   = $request->input('user_mobile');
        $user->user_photo    = "no_photo.jpg";
        
        //saving the user to database
        $user->save();
        
        //try create a default shop and shop address for every user (Every user is a potential service provider)
        //creating a store for user
        $store = new Store();
        $store->store_name = $request->input('user_username');
        $store->store_desc = $request->input('user_username')."'s  Shop";
        $store->store_owner = $user->user_id;
        //saving the store to database
        $store->save();
        
        //creating a default store address for user
        $storeaddy = new StoreAddress();
        $storeaddy->store_address_number = '123';
        $storeaddy->store_address_street = 'Leipziger';
        $storeaddy->store_address_area = 'Fulda';
        $storeaddy->store_address_postcode = '36037';
        $storeaddy->store_address_city = 'Fulda';
        $storeaddy->store_address_store = $store->store_id;
        //saving the store address to database
        $storeaddy->save();
        
        //unsetting the password so that it will not be returned 
        unset($user->password);
        
        //send email to user
        
        //returning the registered user, store, address 
        return array('error' => false, 'user' => $user, 'store' => $store, 'storeaddy' => $storeaddy);
    }
	
   	public function edit($id)
    {
      $user = User::find($id);
      //unsetting the password so that it will not be returned 
      unset($user->user_password);
      return response()->json($user);
    }

    public function update(Request $request, $id)
    { 
        $validator = Validator::make($request->all(), [
            'user_username' => 'required|unique:users',
            'user_password' => 'required|min:6',
            //'user_email' => 'required|email|unique:users',
            'user_firstname' => 'required',
            'user_lastname' => 'required'
        ]);
       
        $user = User::find($id);
        //Upload user profile image
        $upload_res = array();
        $filename   = "no_photo.jpg";
        if ($request->hasFile('user_photo')) {
            $image      = $request->file('user_photo');
            $filename   = date('d-m-Y-His').'.'.$image->getClientOriginalExtension();
            $upload_res = $this->fileUpload($image,$filename);     
            //$this->fileUpload($image);       
        }
        //Updating values to the users
        //$user->user_id = $request->input('user_id');
        //$user->user_username = $request->input('user_username');
        //$user->user_email    = $request->input('user_email');
        //$user->user_password = (new BcryptHasher)->make($request->input('user_password'));
        $user->user_firstname= $request->input('user_firstname');
        $user->user_lastname = $request->input('user_lastname');
        $user->user_mobile   = $request->input('user_mobile');
        $user->user_photo    = $filename;

        $user->save();
        
        //get store
        $store = Store::where('store_owner', '=', $user->user_id)->first();
        //get address
        $address = StoreAddress::where('store_address_store', '=', $store->store_id)->first();

        //return back();
        //returning the registered user 
        return array('error' => false, 'user' => $user, 'upload_status' => $upload_res, 'store' => $store, 'address' => $address);
    }
    
     public function fileUpload($image,$name) {

        if ($image) {
            $destinationPath = storage_path('/public/images/uploads');
            $image->move($destinationPath, $name);


            return response()->json(['data'=>"image is uploaded"]);
        }else{
            return response()->json(['data'=>"image is not uploaded"]);
        }
    }
 
    //function for user login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_username' => 'required',
            'user_password' => 'required|min:6'
        ]);
 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
 
        //$user = User::where('user_username', $request->input('user_username'))->first();
        //check for username or email
        $user = User::where('user_username', '=', $request->input('user_username'))
                     ->orWhere('user_email', '=', $request->input('user_username'))->first();
 
        if (count($user)) {
            if (password_verify($request->input('user_password'), $user->user_password)) {
                unset($user->user_password);
                //get store
                $store = Store::where('store_owner', '=', $user->user_id)->first();
                //get address
                $address = StoreAddress::where('store_address_store', '=', $store->store_id)->first();
                //return success msg etc
                return array('error' => false, 'user' => $user, 'store' => $store, 'address' => $address);
            } else {
                return array('error' => true, 'message' => 'Invalid password');
            }
        } else {
            return array('error' => true, 'message' => 'User not exist');
        }
    }
	
	public function logout(Request $request) {
		//do some stuffs
	 
		return [
			'status' => 'success',
			'message' => 'Logout successfully.'
		];
	}
 
    //getting the store for a particular user 
    public function mystore($id)
    {
        //$stores = User::find($id)->stores;
        $stores = Store::where('store_owner', $id)->first();
        return array('error' => false, 'stores' => $stores);
    }

}
