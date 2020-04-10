<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix'=>'api/v1'], function() use($router){
    
//User endpoints
$router->group(['prefix'=>'user'], function() use($router){
    $router->post('/create', 'UserController@create');
    $router->get('/edit/{user_id}', 'UserController@edit');
    $router->post('/update/{user_id}', 'UserController@update');
    $router->post('/login', 'UserController@login');
    //$app->post('/logout', 'UserController@logout');
    $router->get('/mystore/{user_id}', 'UserController@mystore');
});

//Store endpoints
$router->get('/stores', 'StoreController@index');
$router->group(['prefix'=>'store'], function() use($router){
    $router->post('/create', 'StoreController@create');
    $router->get('/show/{store_id}', 'StoreController@show');
    $router->put('/update/{store_id}', 'StoreController@update');
    $router->delete('/delete/{store_id}', 'StoreController@destroy');
    $router->get('/services/{store_id}', 'StoreController@storeservices');
    $router->get('/address/{store_id}', 'StoreController@mystoreaddress');
});

//Services endpoints
$router->get('/services', 'ServiceController@index');
$router->group(['prefix'=>'service'], function() use($router){
    $router->post('/create', 'ServiceController@create');
    $router->get('/show/{service_id}', 'ServiceController@show');
    $router->put('/update/{service_id}', 'ServiceController@update');
    $router->delete('/delete/{service_id}', 'ServiceController@destroy');
});

//Service Categories endpoints
$router->get('/services_cat', 'ServiceCategoryController@index');
$router->group(['prefix'=>'sc'], function() use($router){
    $router->post('/create', 'ServiceCategoryController@create');
    $router->get('/show/{cat_id}', 'ServiceCategoryController@show');
    $router->put('/update/{cat_id}', 'ServiceCategoryController@update');
    $router->delete('/delete/{cat_id}', 'ServiceCategoryController@destroy');
    $router->get('/services/{cat_id}', 'ServiceCategoryController@categoryservices');
    
});

//Store Address endpoints
$router->get('/storeaddresses', 'StoreAddressController@index');
$router->group(['prefix'=>'storeaddress'], function() use($router){
    $router->post('/create', 'StoreAddressController@create');
    $router->get('/show/{store_addr_id}', 'StoreAddressController@show');
    $router->put('/update/{store_addr_id}', 'StoreAddressController@update');
    $router->delete('/delete/{store_addr_id}', 'StoreAddressController@destroy');
});

//User Rating endpoints
$router->get('/userratings', 'RateUsersController@index');
$router->group(['prefix'=>'userrating'], function() use($router){
    $router->post('/create', 'RateUsersController@create');
    $router->get('/show/{rating_id}', 'RateUsersController@show');
    $router->put('/update/{rating_id}', 'RateUsersController@update');
    $router->delete('/delete/{rating_id}', 'RateUsersController@destroy');
});

//User Service requests endpoints
$router->get('/service/requests', 'IrequestsController@index');
$router->get('/service/in/requests/{user_id}', 'IrequestsController@my_in_requests');
$router->get('/service/out/requests/{user_id}', 'IrequestsController@my_out_requests');
$router->group(['prefix'=>'/service/request'], function() use($router){
    $router->post('/create', 'IrequestsController@create');
    $router->get('/show/{req_id}', 'IrequestsController@show');
    $router->put('/update/{req_id}', 'IrequestsController@update');
    $router->delete('/delete/{req_id}', 'IrequestsController@destroy');
    $router->put('/update_status/{req_id}', 'IrequestsController@update_status');
    
});


});