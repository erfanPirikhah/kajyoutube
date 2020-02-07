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

//--------------------blog Route-------------------



    
    Route::namespace('Blog')->group(function () {
        Route::get('/', 'BlogController@index')->name('home');
        Route::get('/about', 'BlogController@about')->name('about');
        Route::get('/us', 'BlogController@us')->name('us');
        Route::get('/order', 'BlogController@order')->name('order');
        Route::get('/web-design', 'BlogController@webdesign')->name('webdesign');
        Route::get('/Content-Generation', 'BlogController@ContentGeneration')->name('Content-Generation');
        Route::get('/social-media', 'BlogController@socialmedia')->name('socialmedia');
        Route::get('/pinting-design', 'BlogController@pintingdesign')->name('pintingdesign');
        Route::get('/photography-animation', 'BlogController@photography')->name('photography');
        Route::get('/logo-design', 'BlogController@logo')->name('logo');
        Route::get('/android', 'BlogController@android')->name('android');
        Route::get('/banding-advice', 'BlogController@banding')->name('banding');
        Route::get('/content', 'BlogController@content')->name('content');
        Route::get('/conten-show/{content}', 'BlogController@contentShow')->name('contentshow');
        Route::get('/sample-show/{sample}', 'BlogController@SampleShow')->name('sampleshow');
        // Route::get('/sample-show-teaser/{sample}', 'BlogController@sampleshowTeaser')->name('sampleshow.teaser');
        Route::get('/sample/web-design', 'BlogController@indexWeb')->name('indexWeb');
        Route::get('/sample-all','BlogController@sampleAll')->name('sample.all');

        Route::get('/sample-android','BlogController@sampleAndroid')->name('sample.android');
        Route::get('/sample-animaite','BlogController@sampleAnimaite')->name('sample.animaite');
        Route::get('/sample-Campaign','BlogController@sampleCampaign')->name('sample.Campaign');
        Route::get('/sample-logo','BlogController@sampleLogo')->name('sample.logo');
        Route::get('/sample-poster','BlogController@samplePoster')->name('sample.poster');
        Route::get('/sample-program','BlogController@sampleProgram')->name('sample.program');
        Route::get('/sample-teaser','BlogController@sampleTeaser')->name('sample.teaser');


    });




Auth::routes();

