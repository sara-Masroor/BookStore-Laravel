<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller\HomeController;
use App\Http\Controllers\Controller\ProductController;
use App\Http\Controllers\Controller\CategoryController;
use App\Http\Controllers\Controller\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//[\App\Http\Controllers\IndexController::class,'index']
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'IndexController@index')->name('mainpage');
Route::get('/detail/{product}', 'ProductController@detail')->name('product.detail');
Route::get('/OriginalDownload/{id}','ProductController@OriginalDownload')->name('book.buy');
//Route::get('/OriginalDownload/uploads/{path}/{id}','ProductController@OriginalDownload')->name('book.buy');
//Route::get('/sampleDownload//uploads/{path}','ProductController@SampleDownload');
Route::get('/sampleDownload/{id}','ProductController@SampleDownload');

Route::get('/search', 'IndexController@showSearch')->name('search');;

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard','PanelController@Buys')->middleware(['auth'])->name('dashboard');
/////
Route::get('/authorDashboard/{id}','AuthorPanelController@books')->middleware(['auth'])->name('authorDashboard');
////
Route::get('/home', 'HomeController@index')->middleware(['auth','admin'])->name('home');
Route::get('/about', 'AboutController@about');

//Route::resource('/admin/product','ProductController')->middleware(['auth','admin']);

//Route::group(['namespace'=>'Admin','middleware'=>['auth','admin'],'prefix'=>'admin'],function (){
Route::group(['namespace'=>'Admin','middleware'=>['auth','admin'],'prefix'=>'admin'],function (){
    Route::resource('/product','ProductController');
    Route::resource('/category','CategoryController');
    Route::resource('/user','UserController');
    Route::resource('/author','AuthorController');
    Route::resource('/order','OrderController');
    Route::resource('/comment','CommentController');
});

Route::get('/category/{id}','CategoryController@showProduct');
Route::post('/comment/{product}','CommentController@add')->name('comment.add');

Route::get('/dashboard/changePasswordIndex', 'UserController@changePasswordIndex')->name('changePasswordIndex');
Route::post('/dashboard/changePassword', 'UserController@changePassword')->name('changePassword');

require __DIR__.'/auth.php';
