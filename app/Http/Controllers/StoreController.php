<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Store;
use App\Service;
use App\StoreAddress;

class StoreController extends Controller
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
	
	//Returns all stores
	public function index()
    {
     
     $stores = Store::all();
     return response()->json($stores);
    }
    
	//create a new store
	public function create(Request $request)
	{
	  $store = new Store;
	  $store->store_name = $request->input('store_name');
      $store->store_desc = $request->input('store_desc');
      $store->store_owner = $request->input('store_owner');
	   
	  $store->save();
	  return response()->json($store);
	 }
	 
	//return specific store
	public function show($id)
    {
      $store = Store::find($id);
      return response()->json($store);
    }
	//update my store
	public function update(Request $request, $id)
    { 
      $store= Store::find($id);
        
      $store->store_name = $request->input('store_name');
      $store->store_desc = $request->input('store_desc');
      $store->store_owner = $request->input('store_owner');
      $store->save();
      return response()->json($store);
    }
	//delete my store
	public function destroy($id)
    {
      $store = Store::find($id);
      $store->delete();
      return response()->json('store removed successfully');
    }
    
    
     //getting the services for a particular store 
    public function storeservices($id)
    {
        $services = Service::where('service_store', $id)->get();
        return response()->json($services);
        //return array('error' => false, 'services' => $services);
    }
    
    //getting the services for a particular category 
    public function mystoreaddress($id)
    {
        //$services = ServiceCategory::find($id)->services;
        $services = StoreAddress::where('store_address_store', $id)->get();    
        return response()->json($services);            
        //return array('error' => false, 'address' => $services);
    }



}
