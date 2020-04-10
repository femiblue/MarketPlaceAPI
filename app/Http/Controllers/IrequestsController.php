<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Irequests;
use App\Service;
use App\User;
use App\StoreAddress;
class IrequestsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
		
    }
	
	//Returns all store addresses
	public function index()
    {
     
     $irequests = Irequests::all();
     return response()->json($irequests);
    }
    
	//create a new rate users
	public function create(Request $request)
	{
	  $irequest = new Irequests;
      print_r($request->input('rate_user_request'));
	  $irequest->irequest_requester    = $request->input('irequest_requester');
      $irequest->irequest_reciever     = $request->input('irequest_reciever');
      $irequest->irequest_service      = $request->input('irequest_service');
      $irequest->irequest_requester_msg= $request->input('irequest_requester_msg');
      $irequest->irequest_reciever_msg = $request->input('irequest_reciever_msg');
      $irequest->irequest_status       = $request->input('irequest_status');
	   
	  $irequest->save();
	  return response()->json($irequest);
	 }
	 
	//return specific rating
	public function show($id)
    {
      $irequests = Irequests::find($id);
      return response()->json($irequests);
    }
	//update my rating
	public function update(Request $request, $id)
    { 
      $irequest= Irequests::find($id);
        
 	  $irequest->irequest_requester    = $request->input('irequest_requester');
      $irequest->irequest_reciever     = $request->input('irequest_reciever');
      $irequest->irequest_service      = $request->input('irequest_service');
      $irequest->irequest_requester_msg= $request->input('irequest_requester_msg');
      $irequest->irequest_reciever_msg = $request->input('irequest_reciever_msg');
      $irequest->irequest_status       = $request->input('irequest_status');
      $irequest->save();
      return response()->json($irequest);
    }
	//delete my rating
	public function destroy($id)
    {
      $irequest = Irequests::find($id);
      $irequest->delete();
      return response()->json('rating removed successfully');
     }
     
    //Returns incoming service requests (in & out))
	public function my_in_requests($id)
    {
     $counter    = 0;
     $r_provider = "";
     $thisservice= "";
     //$irequests = Irequests::all();
     //find way to pick service info and service provider info
     /*
     $irequests = Irequests::where(function ($query) use ($id) {
                                    $query->where('irequest_requester', '=', $id)
                                          ->orWhere('irequest_reciever', '=', $id);
                                  })->get();
     */
     $irequests= Irequests::where('irequest_reciever', '=', $id)->get();
     //print_r($irequests);
     foreach($irequests as $irequest){
        //get service prover
        $thisuser  = $irequest['irequest_reciever'];
        $r_provider= User::where('user_id', '=', $thisuser)->get();
        unset($r_provider[0]['user_password']);
        $irequests[$counter]['r_provider'] = $r_provider[0];
        
        //get service
        $thisservice  = $irequest['irequest_service'];
        $r_service= Service::where('service_id', '=', $thisservice)->get();
        $irequests[$counter]['r_service'] = $r_service[0];
        
        //get provider address
        $storeid = $r_service[0]['service_store'];
        $s_addy  = StoreAddress::where('store_address_store', '=', $storeid)->get();
        $irequests[$counter]['s_addy'] = $s_addy[0];
        
        //increament counter
        $counter++;
     }
     
    // print_r($irequests);
     return response()->json($irequests);
    }
    
    public function my_out_requests($id)
    {
     $counter    = 0;
     $r_provider = "";
     $thisservice= "";
     //$irequests = Irequests::all();
     //find way to pick service info and service provider info
      $irequests= Irequests::where('irequest_requester', '=', $id)->get();
     //print_r($irequests);
     foreach($irequests as $irequest){
        //get service prover
        $thisuser  = $irequest['irequest_reciever'];
        $r_provider= User::where('user_id', '=', $thisuser)->get();
        unset($r_provider[0]['user_password']);
        $irequests[$counter]['r_provider'] = $r_provider[0];
        
        
        //get service
        $thisservice  = $irequest['irequest_service'];
        $r_service= Service::where('service_id', '=', $thisservice)->get();
        $irequests[$counter]['r_service'] = $r_service[0];
        
        
        //get provider address
        $storeid = $r_service[0]['service_store'];
        $s_addy  = StoreAddress::where('store_address_store', '=', $storeid)->get();
        $irequests[$counter]['s_addy'] = $s_addy[0];
        
        //increament counter
        $counter++;
     }
     
    // print_r($irequests);
     return response()->json($irequests);
    }
    
    //update my rating
	public function update_status(Request $request, $id)
    { 
        
      $irequest= Irequests::find($id);
        
      $irequest->irequest_status       = $request->input('irequest_status');
      $irequest->save();
      return response()->json($irequest);
    }


}
