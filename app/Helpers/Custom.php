<?php

use App\Http\Libraries\ResponseBuilder;
use App\Http\Libraries\Uploader;
use App\Models\City;
use App\Models\CityLanguage;
use Carbon\Carbon;
use Illuminate\Http\Request;

function imageUrl($path, $width = NULL, $height = NULL, $quality = NULL, $crop = NULL)
{
    if (!$width && !$height) {
        $url = env('IMAGE_URL') . $path;
    } else {
        $url = url('/') . '/images/timthumb.php?src=' . env('IMAGE_URL') . $path;
        if (isset($width)) {
            $url .= '&w=' . $width;
        }
        if (isset($height) && $height > 0) {
            $url .= '&h=' . $height;
        }
        if (isset($crop)) {
            $url .= "&zc=" . $crop;
        } else {
            $url .= "&zc=1";
        }
        if (isset($quality)) {
            $url .= '&q=' . $quality . '&s=0';
        } else {
            $url .= '&q=95&s=0';
        }
    }
    return $url;
}

function parseAsBlade($template, $params = [])
{
    $languages = [];
    $segments = request()->segments();
    $queryParams = explode('?', request()->fullUrl());
    unset($segments[0]);
    foreach (cache('LANGUAGES') as $lang) {
        $languages[$lang['short_code']] = [
            'title' => $lang['title'],
            'url' => url(implode('/', array_merge([$lang['short_code']], $segments)) . ((count($queryParams) > 1) ? '?' . $queryParams[1] : ''))
        ];
    }
    $data = [
        'locale' => config('app.locale'),
        'title' => config('settings.company_name'),
        'languages' => $languages,
        'currentRouteName' => \Route::current()->getName(),
    ];
    extract($data);
    extract($params);
    $response = "";
    ob_start();
    eval('?>' . \Blade::compileString($template));
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
}

function generate_string($input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', $strength = 10) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

function responseBuilder()
{
    $responseBuilder = new ResponseBuilder();
    return $responseBuilder;
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function getConversionRate()
{
    if (Cache::has('AED')) {
        $rate = Cache::get('AED');
    } else {
//        $swapEURToUSD = \Swap::latest('EUR/USD');
//        $swapEURToAED = \Swap::latest('EUR/AED');
//        // rate of 1 USD in EUR
//        $rateUSDToEUR = 1 / $swapEURToUSD->getValue();
//        // rate of 1 AED in EUR
//        $rateAEDToEUR = 1 / $swapEURToAED->getValue();
////                $rate  = round(((1 / $rateUSDToEUR) * $rateAEDToEUR), 2);
        $rate = 0.98;
        Cache::put('AED', $rate, Carbon::now()->addMinutes(60));
    }
    return $rate;

}

function getAEDCoversationRate(){
    $swapEURToUSD = \Swap::latest('EUR/USD');
    $swapEURToAED = \Swap::latest('EUR/AED');
    // rate of 1 USD in EUR
    $rateUSDToEUR = 1 / $swapEURToUSD->getValue();
    // rate of 1 AED in EUR
    $rateAEDToEUR = 1 / $swapEURToAED->getValue();
//                $rate  = round(((1 / $rateUSDToEUR) * $rateAEDToEUR), 2);
    return round(((1 / $rateAEDToEUR) * $rateUSDToEUR), 2);
}

function getUSDCoversationRate(){
    $swapEURToUSD = \Swap::latest('EUR/USD');
    $swapEURToAED = \Swap::latest('EUR/AED');
    // rate of 1 USD in EUR
    $rateUSDToEUR = 1 / $swapEURToUSD->getValue();
    // rate of 1 AED in EUR
    $rateAEDToEUR = 1 / $swapEURToAED->getValue();
    return round(((1 / $rateUSDToEUR) * $rateAEDToEUR), 2);
//    $rate = round(((1 / $rateAEDToEUR) * $rateUSDToEUR), 2);
}

function trim_text($input)
{
    $middle = ceil(strlen($input) / 2);
    $middle_space = strpos($input, " ", $middle - 1);
    $first_half = substr($input, 0, $middle_space);
    $second_half = substr($input, $middle_space);
    return $first_half . '@' . $second_half;
}

/**
 * Set session alert / flashdata
 * @param string $type Alert type
 * @param string $message Alert message
 */
function set_alert($type, $message)
{
    session()->flash('alert_type', $type);
    session()->flash('alert_message', $message);
}

function get_user_id()
{
    if (\Auth::check()) {
        return \Auth::user()->id;
    }
    return null;
}

function getUserProfileImage($path)
{
    $img_path = 'img/default_profile.jpg';
    if ($path != null) {
        $img_path = $path;
    }
    return imageUrl($img_path, 500, 500, 100);
}

function getCityDropDown()
{
    $dropDownCities = CityLanguage::whereHas('city')
        ->with(['language_id' => config('app.locales')[config('app.locale')]])
        ->pluck('title', 'city_id');
    return $dropDownCities;
}

function calcualateDistance($lat1, $lon1, $lat2, $lon2, $unit)
{
    if (($lat1 == $lat2) && ($lon1 == $lon2)) {
        return 0;
    } else {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);
        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
}

function getStarRating($value)
{
    $star_rate = $value;
    if ($value > 0 && $value < 0.5) {
        $star_rate = 0.5;
    }
    if ($value > 0.5 && $value < 1) {
        $star_rate = 1;
    }
    if ($value > 1 && $value < 1.5) {
        $star_rate = 1.5;
    }
    if ($value > 1.5 && $value < 2) {
        $star_rate = 2;
    }
    if ($value > 2 && $value < 2.5) {
        $star_rate = 2.5;
    }
    if ($value > 2.5 && $value < 3) {
        $star_rate = 3;
    }
    if ($value > 3 && $value < 3.5) {
        $star_rate = 3.5;
    }
    if ($value > 3.5 && $value < 4) {
        $star_rate = 4;
    }
    if ($value > 4 && $value < 4.5) {
        $star_rate = 4.5;
    }
    if ($value > 5) {
        $star_rate = 5;
    }
    return $star_rate;
}

function pluckPackagesValue($availablePackages)
{
    $packges = [];
    foreach ($availablePackages as $key => $availablePackage) {
        $packges[$availablePackage->id] = $availablePackage->package->translation->title . ' ( views ' . $availablePackage->package->views . ' )';
    }
    return $packges;
}
function DateToUnixformat($date)
{

    $dateTime = new DateTime($date);

    $timestamp = $dateTime->format('U');

    return $timestamp;
}

function unixTODateformate($date)
{
    return Carbon::parse(gmdate("Y-m-d H:i:s", $date))->addHours(24)->format('Y-m-d');
}
function unixTODateformate2($date)
{
    return Carbon::parse(gmdate("Y-m-d H:i:s", $date))->format('Y-m-d');
}

function getConvertedPrice($currency_id, $price)
{
    $conversionRates = cache('CONVERSION_RATES');
    $currencyId = session('CURRENCY_ID', config('app.currencies.AED'));
//    Log::info('currency_id '.$currency_id.' CurrencyId session '.$currencyId);
    if ($currency_id == 1 && $currencyId == 1) {
        $price = round($price, 2);
    }
    if ($currency_id == 1 && $currencyId == 2) {
        $price = round($price / 0.98, 2);
    }
    if ($currency_id == 2 && $currencyId == 2) {
        $price = 0;
    }
    if ($currency_id == 2 && $currencyId == 1) {
        $price = 0;
    }

    return $price;
}

function getUsdRate(){

    return 0.98;
}

function deleteImage($path = ''){
    if (\File::exists($path)) {
        unlink($path);
    }else{
        return false;
    }
}

function translate($data)
{
    $locale = app()->getLocale();
    if($data instanceof stdClass){
        if ($locale == 'ar' && $data->ar == '') {
            return $data->en;
        }
        return $data->{$locale};
    }

    if ($locale == 'ar' && $data['ar'] == '') {
        return $data['en'];
    }
    return $data[$locale];
}

function getPriceObject($productPrice)
{

    $rate = getConversionRate();
    $price = new \stdClass();

    $price->aed = new \stdClass();
    $price->aed->amount = number_format(($productPrice), 2, '.', '')+0;
    $price->aed->currency = 'AED';
    $price->sar = new \stdClass();
    $price->sar->amount = number_format(($productPrice / $rate), 2, '.', '')+0;
    $price->sar->currency = 'SAR';

    return $price;
}

function getUsdPrice($price)
{
    $price = $price * 0.27;
    return number_format($price, 2, '.', '');
//    return round($price * 0.27 ,2);

}

function getUsdAedPrice($price)
{
    $price = $price * 3.67;
    return number_format($price, 2, '.', '');
//    return round($price * 0.27 ,2);

}

function checkSettings($id)
{
    $user = \App\Models\User::where('id', $id)->first();
    if ($user !== null && $user->settings == 1) {
        return $user;
    }
    return false;
}

function getPrice($price, $currency,$discount = 0)
{

    if($price instanceof stdClass){
         $amount = $price->{strtolower($currency)}->amount;
    }else{
        $amount = $price[strtolower($currency)]['amount'];
    }
    if ($discount > 0){

        $discountedAmount = $amount * ($discount/100);
        $discount = $amount - $discountedAmount;
        return $currency . ' ' . $discount;
    }else{
        return $currency . ' ' . $amount;
    }
}

function getDiscountedAmount($price, $discount){
    $discountedAmount = $price * ($discount/100);
   return $discount = $price - $discountedAmount;
}
function getDiscountValue($price, $discount){
   return $discountedAmount = $price * ($discount/100);
}

function pushFCMNotification($fields)
{
    $headers = array(
        env('FCM_URL'),
        'Content-Type: application/json',
        'Authorization: key=' . env('FCM_SERVER_KEY')
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, env('FCM_URL'));
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    logger('=========FCM RESULT============', [$result]);
    curl_close($ch);
    if ($result === FALSE) {
        return 0;
    }
    $res = json_decode($result);
    logger('=========FCM============', [$res]);
    if (isset($res->success)) {
        return $res->success;
    } else {
        return 0;
    }

}

function limit_text($text, $limit){
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

function convertDateFormat($format, $value){
   return date($format,$value);
}

function uploadImage($request, $path = 'media', $input = 'image'){
    $imageUploadedPath = '';
    if ($request->hasFile($input)) {
        $uploader = new Uploader($input);
        if ($uploader->isValidFile()) {

            $uploader->upload($path, $uploader->fileName);
            if ($uploader->isUploaded()) {
                $imageUploadedPath = $uploader->getUploadedPath();
            }
        }
        if (!$uploader->isUploaded()) {
            return responseBuilder()->error(__('Something went Wrong'));
        }
    }
    $data['file_name'] = $imageUploadedPath;
    $data['file_path'] = url($imageUploadedPath);

    return responseBuilder()->success(__('Image Uploaded'), $data);

}
