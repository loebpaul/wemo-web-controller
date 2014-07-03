<?php

/*
Wemo Web Controller
by Paul Loeb
@loebpaul
https://github.com/loebpaul/wemo-web-controller
I am not affiliated with WeMo or Belkin, Inc. in any way.
*/

require_once('config.php');

if (isset($_POST["name"])){
  $name = $_POST["name"];
  $url = "https://api.twilio.com/2010-04-01/Accounts/".TWILIO_ACCOUNT_SID."/SMS/Messages.json";
  $fields = http_build_query(array(
      "From" => TWILIO_PHONE_NUMBER,
      "To" => IFTTT_PHONE_NUMBER,
      "Body" => "#".$name
  ));
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_USERPWD, TWILIO_ACCOUNT_SID.":".TWILIO_AUTH_TOKEN);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
  $result = curl_exec($ch);
  curl_close($ch);
  print_r($result);
}
?>
