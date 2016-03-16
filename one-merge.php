<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>One user</title>
</head>
<body>
     <?php
             require "api-merge.php";
             $id = $_GET["id"];
             $data = viewUser($id);
             print '<img src="' . "./userID/$id/displayPicture.jpg" . '" height=100" width="100">'. "<br>";
             print "Name : ". $data["name"]. "<br>";
             print "Phone number : ". $data["phone"]. "<br>";
             print "Gender : ". $data["gender"]. "<br>";
             print "Your comment : ". $data["comment"]. "<br>";
             print "Time when created : ". $data["time"];
     ?>
</body>
</html> 
