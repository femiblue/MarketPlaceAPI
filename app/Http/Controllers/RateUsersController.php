<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\RateUsers;

class RateUsersController extends Controller
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
     
     $rating = RateUsers::all();
     return response()->json($rating);
    }
    
	//create a new rate users
	public function create(Request $request)
	{
	  $rating = new RateUsers;
	  $rating->rate_user_request  = $request->input('rate_user_request');
      $rating->rate_user_comment  = $request->input('rate_user_comment');
      $rating->rate_user_score    = $request->input('rate_user_score');
      $rating->rate_user_in       = $request->input('rate_user_in');
      $rating->rate_user_out      = $request->input('rate_user_out');
	   
	  $rating->save();
	  return response()->json($rating);
	 }
	 
	//return specific rating
	public function show($id)
    {
      $rating = RateUsers::find($id);
      return response()->json($rating);
    }
	//update my rating
	public function update(Request $request, $id)
    { 
      $rating= RateUsers::find($id);
        
 	  $rating->rate_user_request = $request->input('rate_user_request');
      $rating->rate_user_comment = $request->input('rate_user_comment');
      $rating->rate_user_score   = $request->input('rate_user_score');
      $rating->rate_user_in      = $request->input('rate_user_in');
      $rating->rate_user_out     = $request->input('rate_user_out');
      $rating->save();
      return response()->json($rating);
    }
	//delete my rating
	public function destroy($id)
    {
      $rating = RateUsers::find($id);
      $rating->delete();
      return response()->json('rating removed successfully');
     }


}
