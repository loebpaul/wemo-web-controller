WeMo Web Controller
======

by Paul Loeb

[@loebpaul](http://twitter.com/loebpaul)

https://github.com/loebpaul/wemo-web-controller

I am not affiliated with WeMo or Belkin, Inc. in any way.

### Requirements

These instructions assume you already have:
* A web server that runs PHP
* A paid [Twilio account](http://twilio.com)
* A free [IFTTT account](http://ifttt.com)
* The [WeMo Switch channel](http://ifttt.com/wemo_switch) configured on IFTTT.

I know it's lame that you must use a paid Twilio account, but even at the minimum buy-in of $20, you can turn your switches on and off 2666 times.

### Installation

#### 1 - On IFTTT, create an [SMS channel](http://ifttt.com/sms) using your Twilio number.

If you already added in your own phone number, you will either need to erase it and put in this one, or create a new IFTTT account just for this recipe.

#### 2 - Create a Recipe:

##### If: SMS

Send YOUR IFTTT PHONE NUMBER an SMS tagged **#YOUR SWITCH NAME** from **YOUR TWILIO PHONE NUMBER**
```
ex: Send (555)-555-5555 an SMS tagged #Bedroom from 5555555555
```
##### Then: Wemo Switch

Toggle on/off **YOUR SWITCH NAME**
```
ex: Toggle on/off Bedroom
```
#### 3 - Edit config.php and define each variable

#### 4 - Upload the directory to your web server

#### 5 - Visit the directory on your web server
```
ex: http://localhost/wemo-web-controller
```