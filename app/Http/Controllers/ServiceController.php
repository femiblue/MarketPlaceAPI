<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\Store;
use App\User;


class ServiceController extends Controller
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
	
	//Returns all services
	public function index()
    {
     
     //$services = Service::all();
     $services = Service::where('service_status', '=', 1)->get();
     return response()->json($services);
    }
    
	//create a new service
	public function create(Request $request)
	{
	  $service = new Service;
	  $service->service_name   = $request->input('service_name');
      $service->service_desc   = $request->input('service_desc');
      $service->service_price  = $request->input('service_price');
      $service->service_cat    = $request->input('service_cat');
      $service->service_store  = $request->input('service_store');
      $service->service_status = $request->input('service_status');
	   
	  $service->save();
	  return response()->json($service);
	 }
	 
	//return specific service
	public function show($id)
    {
      $service = Service::find($id);
      $store_id= $service['service_store'];
      $store   = Store::find($store_id); //print_r($store);
      $user_id = $store['store_owner']; //echo "USER..$user_id";
      $user    = User::find($user_id); //print_r($user);
      $username = $user['user_username'];
      //push to return array
      $service['user_id'] = $user_id;
      $service['username'] = $username;
      
      return response()->json($service);
    }
	//update my service
	public function update(Request $request, $id)
    { 

      $service= Service::find($id);
        
 	  $service->service_name   = $request->input('service_name');
      $service->service_desc   = $request->input('service_desc');
      $service->service_price  = $request->input('service_price');
      $service->service_cat    = $request->input('service_cat');
      $service->service_store  = $request->input('service_store');
      $service->service_status = $request->input('service_status');
      $service->save();
      return response()->json($service);
    }
	//delete my service
	public function destroy($id)
    {
      $service = Service::find($id);
      $service->delete();
      return response()->json('service removed successfully');
     }



}
