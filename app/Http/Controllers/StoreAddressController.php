<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\StoreAddress;

class StoreAddressController extends Controller
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
     
     $address = StoreAddress::all();
     return response()->json($address);
    }
    
	//create a new store address
	public function create(Request $request)
	{
	  $address = new StoreAddress;
	  $address->store_address_number    = $request->input('store_address_number');
      $address->store_address_street    = $request->input('store_address_street');
      $address->store_address_area      = $request->input('store_address_area');
      $address->store_address_postcode  = $request->input('store_address_postcode');
      $address->store_address_city      = $request->input('store_address_city');
      $address->store_address_store     = $request->input('store_address_store');
	   
	  $address->save();
	  return response()->json($address);
	 }
	 
	//return specific service
	public function show($id)
    {
      $address = StoreAddress::find($id);
      return response()->json($address);
    }
	//update my service
	public function update(Request $request, $id)
    { 
      $address= StoreAddress::find($id);
        
 	  $address->store_address_number    = $request->input('store_address_number');
      $address->store_address_street    = $request->input('store_address_street');
      $address->store_address_area      = $request->input('store_address_area');
      $address->store_address_postcode  = $request->input('store_address_postcode');
      $address->store_address_city      = $request->input('store_address_city');
      $address->store_address_store     = $request->input('store_address_store');
      $address->save();
      return response()->json($address);
    }
	//delete my store address
	public function destroy($id)
    {
      $address = StoreAddress::find($id);
      $address->delete();
      return response()->json('store address removed successfully');
     }


}
