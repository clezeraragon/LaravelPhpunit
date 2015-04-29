<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

App::bind('PostRepositoryInterFace','EloquentPostRepository');
//class Customer {
// function __construct(Order $order){
//     $this->order = $order;
// }
//}
//class Order{}

//App::bind('Customer',function()
//{
//    return new Customer(new Order);
//});
Route::get('/', function()
{
//	return View::make('hello');
//    var_dump(App::make('Customer'));
});
Route::resource('posts', 'PostsController');