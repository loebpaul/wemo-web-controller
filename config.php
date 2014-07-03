<?php

/* 
WeMo Web Controller
by Paul Loeb
@loebpaul
https://github.com/loebpaul/wemo-web-controller
I am not affiliated with WeMo or Belkin, Inc. in any way.
*/

// Your Twilio account SID
DEFINE('TWILIO_ACCOUNT_SID','');
// Your Twilio auth token
DEFINE('TWILIO_AUTH_TOKEN','');
// Your Twilio Phone Number (SMS messages are sent FROM this number)
DEFINE('TWILIO_PHONE_NUMBER','+15555555555');
// Your IFTTT email address or username
DEFINE('IFTTT_LOGIN', '');
// Your IFTTT password
DEFINE('IFTTT_PASSWORD', '');
// Your IFTTT Phone Number (SMS messages are sent TO this number)
DEFINE('IFTTT_PHONE_NUMBER','+15555555555');
// An array of your WeMo switch names and associated IFTTT recipes
$IFTTT_RECIPES = array(
    "Office"	    => "12345",
    "Bedroom"       => "67890"
);

?>
