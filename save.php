<?php

   ini_set('display_errors',1);
   error_reporting(E_ALL);

   require "api.php";
   $fill = array(
           "nimi" => $_POST['nimi'],
           "tel" => $_POST['tel'],
           "sex" => $_POST['sex'],
           "muu" => $_POST['muu'],
           "pilt" => $_FILES['img']['tmp_name']);

   if (isset($_GET["id"])) {
           $fill["id"] = $_GET["id"];
           muuda($fill);
   }
   else {
           loo($fill);
   }
 
   header("Location:http://robert.vkhk.ee/~rando.pallon/kool/III/htmljaphp/katse/all.php");
   die();
?>

