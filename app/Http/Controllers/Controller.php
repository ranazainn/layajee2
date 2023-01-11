<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{ 
    public $user;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct($userDataKey = 'userData', $guard = null) {
        
       $this->middleware(function($request, $next) use($guard) {
            $this->user = ($guard=='admin') ? session('ADMIN_DATA'): session('USER_DATA');
            return $next($request);
            
        });
        \View::composer('*', function($view) use($userDataKey, $guard) {
            // $currencyId = session('CURRENCY_ID', config('app.currencies.AED'));
            // $currencies = cache('CURRENCIES');
            // $conversionRates = cache('CONVERSION_RATES');
            // $currency = $currencies[session('CURRENCY_ID', env('DEFAULT_CURRENCY_ID', 1))];
           

            if (!$guard) {
                $languages = [];
                $segments = request()->segments(1);
                $queryParams = explode('?', request()->fullUrl());

                // foreach(cache('LANGUAGES') as $lang) {
                //     $segments[0] = $lang['short_code'];
                //     $languages[$lang['short_code']] = [
                //         'title' => $lang['title'],
                //         'url' => url(implode('/', $segments). ((count($queryParams) > 1) ? '?'.$queryParams[1]:''))
                //     ];
                // }


                // $this->currency = $currency;

//                $video = Video::get()->first();
//                if(isset($video))
//                {
//                    $video->file_name = url($video->file_name);
//
//                }


                $view->with([
                    $userDataKey => $this->user,
                    'user' => $this->user,
                    // 'maintenance_mode' => session('maintenanceMode', 1),
                    // 'breadcrumbs' => $this->breadcrumbs,
                    // 'breadcrumbTitle' => $this->breadcrumbTitle,
                    // 'locale' => config('app.locale'),
                    // 'title' => config('settings.company_name'),
                    // 'languages' => $languages,
                    // 'currency' => $currency,
                    // 'currencies' => $currencies,
                    // 'currencyId' => $currencyId,
                    // 'currencySymbol' => config('app.currencySymbols.'.$currency),
                    // 'currencyTitle' => $currencies[$currencyId],
                    // 'conversionRates' => $conversionRates,
                    // 'bodyClass' =>  config('app.locales.'.config('app.locale')) == 1 ? 'rtl' : '',
                    'userData' => $this->user,
//                    'video'=> $video,
                ]);
            }
//             else {

//                 // admin data
//                 $adminData = session('ADMIN_DATA');
// //                $notifications = Notification::where(['is_read'=>0, 'user_id'=>$adminData['id']])->get();
//                 $view->with([
// //                    'adminNotifications' => $notifications,
// //                    'adminNotificationsCount' => count($notifications),
//                     $userDataKey => $this->user,
//                     'admin' => $this->user,
//                     'maintenance_mode' => session('maintenanceMode', 1),
//                     'locales' => config('app.locales'),
//                     'userData'=>$this->user,
//                     'locale' => config('app.locale'),
//                     'breadcrumbs' => $this->breadcrumbs,
//                     'siteSettings' => config('settings'),
//                     'currentRouteName' => \Route::current()->getName(),
//                     'breadcrumbTitle' => $this->breadcrumbTitle,
//                     'adminData' => $this->user,
//                     'currency' => $currency,

//                 ]);
//             }
        });
    }
}