<?php


	$mobno=$_REQUEST['mobno'];
	$code=rand( 2000,32767 );
	$message="This is a OTP verfication from agritouch, Enter this code to continue ".$code;


session_start();
    
$_SESSION['veri']=$code;
$_SESSION['mobno']=$mobno;




$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=AGRITH&route=4&mobiles=$mobno&authkey=190530AwOy6bFrfp7W5a47590e&country=91&message=$message",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  
  echo $code;
}



?>
