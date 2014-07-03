<?php

/*
WeMo Web Controller
by Paul Loeb
@loebpaul
https://github.com/loebpaul/wemo-web-controller
I am not affiliated with WeMo or Belkin, Inc. in any way.
*/

require_once('config.php');

$devices = "";
foreach ($IFTTT_RECIPES as $name=>$recipe){
    $devices.="<button id=\"".$name."\">".$name."</button>";
}

?>
<html>
  <head><title>WeMo Web Controller</title></head>
  <style type="text/css">
    button {font:14px arial;border:solid 1px #000;background:#fff;padding:1em 2em;cursor:pointer;margin:1em;}
  </style>
  <body>
    <h1>WeMo Web Controller</h1>
    <?php echo $devices; ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
    $(function(){
      $("button").click(function(){
        $.post("post.php",{"name":this.id});
      });
    });
    </script>
  </body>
</html>
