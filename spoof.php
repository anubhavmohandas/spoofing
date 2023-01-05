<?php
$to = "hackeru@gmail.com";
$subject = "Email spoofing testing";
$txt = "This is email spoofing, more info about us visit:- www.ehcci.in";
$header = " From: avictim7@gmail.com";
mail($to,$subject,$txt,$header);
?>