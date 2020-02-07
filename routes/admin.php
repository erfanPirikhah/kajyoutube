<?php



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

use Illuminate\Http\Resources\Json\Resource;

//-------------------------Admin Route--------------------------------------//
Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
   
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'auth'], function () {
    Route::get('/', 'AdminController@panel');
    Route::Resource("content", 'ContentController');
    Route::Resource('personnel', 'PersonnelController');
    Route::Resource('sample', 'SampleController');
    Route::Resource('us', 'UsController');
    Route::resource('category', 'CategoryController');
    Route::resource('order', 'OrderController');
    Route::get('search/sample', 'SampleController@search')->name('search.sample');
    Route::get('search/content', 'ContentController@search')->name('search.content');
});

Auth::routes();