<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test</title>

  </head>
  <body>

<?php

  $kuvat = array(
     array(
       "imgsrc" => "kuvat/1.jpg",
       "alt" => "syksyinen maisema"),
     array(
       "imgsrc" => "kuvat/2.jpg",
       "alt" => "keväinen maisema"),
     array("imgsrc" => "kuvat/3.jpg",
       "alt" => "keväinen maisema"),
     array("imgsrc" => "kuvat/4.jpg",
       "alt" => "keväinen maisema")
  );

  <img src= "echo $kuvat[rand(0,3)]["alt"]">




</body>
</html>
