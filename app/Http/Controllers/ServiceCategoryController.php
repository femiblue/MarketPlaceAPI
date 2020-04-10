<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ServiceCategory;
use App\Service;

class ServiceCategoryController extends Controller
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
	
	//Returns all services categories
	public function index()
    {
     $services_cat = ServiceCategory::all();
     return response()->json($services_cat);
    }
    
	//create a new service category
	public function create(Request $request)
	{
	  $services_cat = new ServiceCategory;
	  $services_cat->service_category_name  = $request->input('service_category_name');
	   
	  $services_cat->save();
	  return response()->json($services_cat);
	 }
	 
	//return specific service category
	public function show($id)
    {
      $services_cat = ServiceCategory::find($id);
      return response()->json($services_cat);
    }
	//update my service category
	public function update(Request $request, $id)
    { 
      $services_cat= ServiceCategory::find($id);
        
 	  $services_cat->service_category_name   = $request->input('service_category_name');
      $services_cat->save();
      return response()->json($services_cat);
    }
	//delete my service category
	public function destroy($id)
    {
      $services_cat = ServiceCategory::find($id);
      $services_cat->delete();
      return response()->json('service category removed successfully');
     }
    
    
    //getting the services for a particular category 
    public function categoryservices($id)
    {
        //$services = ServiceCategory::find($id)->services;
        $services = Service::where('service_cat', $id)->get();                
        return array('error' => false, 'services' => $services);
    }


}
