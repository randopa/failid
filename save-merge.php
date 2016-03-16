<?php
   ini_set('display_errors',1);
   error_reporting(E_ALL);
   require "api-merge.php";
   $userData = array(
           "name" => $_POST['name'],
           "phone" => $_POST['phone'],
           "gender" => $_POST['gender'],
           "comment" => $_POST['comment'],
           "displayPicture" => $_FILES['img']['tmp_name']);
   if (isset($_GET["id"])) {
           $userData["id"] = $_GET["id"];
           editUser($userData);
   }
   else {
           createUser($userData);
   }
 
   header("Location:http://robert.vkhk.ee/~rando.pallon/kool/III/htmljaphp/katse/merge/all-merge.php");
   die();
?>
