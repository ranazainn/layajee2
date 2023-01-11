<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PhpParser\Builder\Namespace_;

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

Route::get('/legal-services', 'ContactUsController@contactForm');
Route::post('/legal-services', 'ContactUsController@send')->name('legal-services');

Auth::routes();

Route::group(['middleware' => ['email_verified']],function (){
Route::get('/office','OfficeInfoController@index')->name('office');
Route::post('/office','OfficeInfoController@createOffice')->name('office');

Route::get('/schoolchildinfo','ChildController@schoolChildInfo')->name('schoolchildinfo');
Route::post('/schoolchildinfo','ChildController@save')->name('schoolchildinfo');
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
route::get('/logout','Auth\LoginController@logout')->name('logout');

});


Route::get('/very',function(){
    return view('profilepagelayajee');
});


Route::group(['namespace'=>'userControllers','prefix'=>'user'],function (){
    
Route::get('/register','UserController@registerIndex')->name('register');
Route::post('/register','UserController@registerSave')->name('register');

Route::get('/login','UserController@loginIndex')->name('user_login');
Route::post('/login','UserController@getUser')->name('user_login');

 });

    Route::get('/indexoffice','UserController@indexOffice2')->name('indexoffice');
    Route::post('/indexoffice','UserController@createIndexOffice')->name('indexoffice');
    Route::post('/verification','UserController@emailVerificationPost')->name('verification');
    Route::get('/verification','UserController@emailVerificationForm');
    route::get('/verification-resend', 'UserController@emailVerificationResend')->name('code.resend');
    
    Route::post('/schoolparentinfo','UserController@saveParent')->name('schoolparentinfo');
    
    Route::get('/schoolparentinfo','CustomerController@schoolParentInfo')->name('schoolparentinfo');
    Route::get('login/{provider}', 'Auth\SocialLoginController@redirect')->name('login.social');
    Route::get('login/{provider}', 'Auth\SocialLoginController@redirect')->name('login.social');
    
    Route::get('/', 'HomeController@index')->name('userhome');


  

 Route::group(['namespace'=>'AdminPanel','prefix'=>'admin','middleware' => ['auth']],function(){

    // user routes
    Route::get('/user-list', 'HomeController@getUserList')->name('getUserList');
    // office routes
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/officeinfolist', 'HomeController@getOfficeInfoList')->name('officeinfolist');
    Route::get('/assigndriver/{id}', 'HomeController@getAssignDriver');
    Route::post('/assigndriver', 'HomeController@AssignDriver')->name('assigndriver');
    Route::post('assign-drivers/{id}', 'HomeController@assignDriverChild');
    // Customer routes
    Route::get('/customer-get', 'HomeController@customerList')->name('customer-get');
    Route::post('customers', 'HomeController@customerget')->name('customers');
    Route::get('/customer_view/{id}', 'HomeController@customerview')->name('customer_view');
    Route::get('/child_view/{id}', 'HomeController@childview')->name('child_view');
    Route::post('/update/{id}', 'HomeController@update');
    
    // Provider routes
    Route::get('/provider-get', 'HomeController@providerList')->name('provider-get');
    Route::post('/provider', 'HomeController@providerget')->name('provider');
    Route::get('/provider_view/{id}', 'HomeController@providerview')->name('provider_view');
     /**Notify Me */
     Route::post('notify-me', 'HomeController@notifyCreate');
     Route::get('/notification', 'HomeController@notification')->name('notification');

});