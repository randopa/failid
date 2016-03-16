<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Yks</title>
</head>
<body>
     <?php
             require "api.php";
             $id = $_GET["id"];
             $andmed = vaata($id);

             print '<img src="' . "./kasutaja/$id/pilt.jpg" . '" height=100" width="100">'. "<br>";
             print "Nimi : ". $andmed["nimi"]. "<br>";
             print "Telefon : ". $andmed["tel"]. "<br>";
             print "Sugu : ". $andmed["sex"]. "<br>";
             print "Enda kommentaar : ". $andmed["muu"]. "<br>";
             print "Loomisaeg : ". $andmed["aeg"];

     ?>
</body>
</html> 

