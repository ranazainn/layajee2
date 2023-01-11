<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



// Route::group([

//     // 'middleware' => 'jwtAuth',
//     'prefix' => 'auth'

// ], function () {

//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');
 


// });

// Route::post('/register', 'UserController@registerApi');
// Route::post('login', 'UserController@authenticate');
// Route::get('open', 'DataController@open');

// Route::group(['middleware' => ['jwt.verify']], function() {
//     // Route::get('user', 'UserController@getAuthenticatedUser');
//     // Route::get('closed', 'DataController@closed');
// });

///this is before  token
// Route::get('getvehicle', 'ApiController@getVehicleApi');
// Route::get('getdoctype', 'ApiController@getDocTypeApi');
// Route::get('getvehiclemodel', 'ApiController@getVehicleModelApi');

// Route::post('driver_start_end', 'ApiController@saveDriver_st_end_Api');

// Route::post('savedriverdocs', 'ApiController@saveDriverDocs');
// Route::post('savedriver', 'ApiController@saveDriverData');
// Route::post('getservice', 'ApiController@getServiceApi');
// Route::post('saveoffice', 'ApiController@saveOfficeApi');
// Route::post('savechild', 'ApiController@saveChildApi');
// Route::post('register', 'UserController@registerApi');
Route::post('verify-code', 'UserController@verifyUserToken');
Route::get('resend-verify-code/{id}', 'UserController@resendVerifyUserToken');
Route::post('login', 'UserController@authenticate'); 
Route::post('forgotpassword', 'ApiController@forgotPassword');

Route::get('open', 'DataController@open');
Route::get('user', 'UserController@getAuthenticatedUser');
Route::post('saveMobileUser', 'ApiController@saveMobileUser');
Route::post('savePhoneNumber', 'ApiController@savePhoneNumber');

    /* Mobile Banner */

     Route::post('save-banner', 'ApiController@createBanner');
     Route::get('getbanner', 'ApiController@getBanner');   

Route::group(['middleware' => ['jwtAuth']], function() {
    Route::post('register', 'UserController@registerApi');

    /*
     |-------------------------------------------------------
     |                  Provider Api's
     |-------------------------------------------------------
     */
    Route::get('getvehicle', 'ApiController@getVehicleApi');
    Route::get('getdoctype', 'ApiController@getDocTypeApi');
    Route::get('getvehiclemodel', 'ApiController@getVehicleModelApi');
    Route::get('getvehicletype', 'ApiController@getVehicleType');
    Route::post('savedriverdocs', 'ApiController@saveDriverDocs');
    Route::post('savedriver', 'ApiController@saveDriverData');
    Route::post('getservice', 'ApiController@getServiceApi');
    Route::post('saveoffice', 'ApiController@saveOfficeApi');
    Route::post('savechild', 'ApiController@saveChildApi');
    Route::post('driver_start_end', 'ApiController@saveDriver_st_end_Api');
    // Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('logout', 'DataController@closed');
    Route::get('getDriverDocs', 'ApiController@getDriverDocs');
    // user api
    Route::get('getAuthUserData', 'ApiController@getAuthUserData');
    Route::post('updateUserById', 'ApiController@updateUserById');
    Route::post('change-password', 'ApiController@updatePassword');
    // DriverRoute
    Route::post('saveRoute', 'ApiController@driverRoutes');
    Route::post('updateDriverRoutes/{id}', 'ApiController@updateDriverRoutes');
    Route::get('getRoute', 'ApiController@getAuthUserRoutes');
    Route::get('getRouteById/{id}', 'ApiController@getAuthUserRoutesById');
    Route::get('getLicense', 'ApiController@getAuthUserLicense');
    Route::get('getRegistrationBook', 'ApiController@getAuthUserRegistrationBook');
    Route::post('updateRegistrationBook', 'ApiController@updateAuthUserRegistrationBook');
    Route::post('updateLicense', 'ApiController@updateAuthUserLicense');
    Route::get('getVehicleInfo', 'ApiController@getVehicleInfo');
    Route::post('updateVehicleInfo', 'ApiController@updateVehicleInfo');
    Route::delete('routeDelete/{id}', 'ApiController@deleteRoute');
    Route::get('get-driver-booking', 'ApiController@getDriverBooking');

    /**
     * ------------------------------------------
     *              Notify Me
     * ------------------------------------------
     */

     Route::post('notify-me', 'ApiController@notifyCreate');

 
    /*
     |-------------------------------------------------------
     |                  User Side Api's
     |-------------------------------------------------------
     */

    // Child

    Route::post('save-child', 'ApiController@saveChildApi');
    Route::get('get-all-child/{id}', 'ApiController@getAllChildApi');
    Route::get('get-child/{id}', 'ApiController@getChildByIdApi');
    Route::put('update-child/{id}', 'ApiController@childUpdate');
    Route::delete('delete-child/{id}', 'ApiController@childDelete');

    // OfficeUser

    Route::post('save-officeUser', 'ApiController@saveOfficeUser');
    Route::put('update-officeUser/{id}', 'ApiController@updateOfficeUser');
    Route::delete('delete-officeUser/{id}', 'ApiController@officeUserDelete');
    Route::get('get-all-officeUser/{id}', 'ApiController@getAllOfficeUser');
    Route::get('get-officeUser/{id}', 'ApiController@getOfficeUserById');

    //Booking

    Route::post('save-booking', 'ApiController@saveBooking');
    Route::put('update-booking/{id}', 'ApiController@UpdateBooking');
    Route::get('get-booking', 'ApiController@authUserBookings');
    Route::delete('booking-delete/{id}', 'ApiController@deleteBooking');
    // Facebook
    Route::post('otp-phone', 'ApiController@saveMobile');
    Route::post('otp', 'ApiController@sendOtpMobile');
});
// Child Apis


// Route::group([

//     'middleware' => 'api',
//     'prefix' => 'auth'

// ], function ($router) {

//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });
