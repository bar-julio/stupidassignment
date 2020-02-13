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

  $rando=rand(0,3);
  $src = $kuvat[$rando]["imgsrc"];
  $alt = $kuvat[$rando]["alt"];
  echo  "<img src=" . $src . " alt=" .  $alt . ">"; 

?>




</body>
</html>
