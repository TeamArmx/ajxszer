<?php # HEADER 
 

header("Content-Type: text/plain"); # GET STRING FUNCTION 

function GetStr($string, $start, $end) { $str = explode($start, $string); $str = explode($end, $str[1]); return $str[0]; } # GENERATED CUSTOM EMAIL
 $random = rand(100000000, 999999999); $email = '' . $random . '@wabu.com'; # GENERATED CUSTOM PASSWORD 
 $password = 'wab0u' .$random. ''; 
 # SPOTIFY REGSITER CURL
 $url = "https://spclient.wg.spotify.com/signup/public/v2/account/create"; 
 $curl = curl_init($url); curl_setopt($curl, CURLOPT_URL, $url); curl_setopt($curl, CURLOPT_POST, true); curl_setopt($curl,
  CURLOPT_RETURNTRANSFER, true);
  
  
  
curl_setopt($curl, CURLOPT_PROXY, "127.0.0.1");
curl_setopt($curl, CURLOPT_PROXYPORT, "8080");


 $headers = array( "sec-ch-ua: \"Google Chrome\";v=\"105\", \"Not)A;Brand\";v=\"8\", \"Chromium\";v=\"105\"", "sec-ch-ua-mobile: ?0", "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36", "sec-ch-ua-platform: \"Windows\"", "content-type: application/json", "accept: */*", "origin: https://www.spotify.com", "sec-fetch-site: same-site", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://www.spotify.com/", "accept-language: en" ); 
 
 
 
 curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); $data = '{"account_details":{"birthdate":"1991-01-01","consent_flags":{"eula_agreed":true,"send_email":false,"third_party_email":true},"display_name":"Spot Gen","email_and_password_identifier":{"email":"' . $email . '","password":"' . $password . '"},"gender":1},"callback_uri":"https://www.spotify.com/signup/challenge?forward_url=https%3A%2F%2Fopen.spotify.com%2F&locale=ph-en","client_info":{"api_key":"bff58e9698f40080ec4f9ad97a2f21e0","app_version":"v2","capabilities":[1],"installation_id":"7b5b74a36218beed9120dda4d28fb20e","platform":"www"},"tracking":{"creation_flow":"","creation_point":"https://www.spotify.com/ph-en/","referrer":""}}'; curl_setopt($curl, CURLOPT_POSTFIELDS, $data); $resp = curl_exec($curl); curl_close($curl); 
# CUSTOM REGISTRATION RESPONSE 
$check = getstr($resp, '{"', '"'); if ($check == "error") { 

# ERROR REGISTRATION RESPONSE
 $title = getstr($resp, 'title":"', '"'); $body = getstr($resp, 'body":"', '"'); echo "Status: Error\nTitle: $title\nBody: $body\n"; } else { # SUCCESS REGISTRATION RESPONSE
  $username = getstr($resp, 'username":"', '"'); $login_token = getstr($resp, 'login_token":"', '"'); 
echo  "Status: Success\nUsername: $username\nLogin Token: $login_token\nEmail: $email\nPassword: $password\n"; } 

 #fileet
 
 
$logFile = 'user_logs.txt';
$message = "Status: Success\nUsername: $username\nLogin Token: $login_token\nEmail: $email\nPassword: $password\n";

// Write the message to the log file
file_put_contents($logFile, $message . "\n", FILE_APPEND);


?>