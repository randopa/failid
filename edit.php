<!DOCTYPE html>
<html lang="et">
<head>
         <meta charset="utf-8">
         <title>Muuda</title>
</head>
<body>
         <?php
                require "api.php";
                $id = $_GET["id"];
                $andmed = vaata($id);
         ?>

         <form action="save.php?id=<?php print $andmed["id"]; ?>" method="post" enctype="multipart/form-data">
                Nimi: <input type="text" name="nimi" value="<?php print $andmed["nimi"]; ?>" required<br>
                Telefon: <input type="text" name="tel" value="<?php print $andmed["tel"]; ?>" required<br>
                Sugu: <input value="mmees" type="radio" name="sex" <?php print ($andmed["sex"] == "Mees" ? "checked" : ""); ?>required >Mees
                          <input value="nnaine" type="radio" name="sex" <?php print ($andmed["sex"] == "Naine" ? "checked" : ""); ?>required >Naine<br>
                Pilt:<br>
                <img src="<?php print "./kasutaja/$id/pilt.jpg"; ?>" height="100" width="100"><br>
                <input type="file" name="img" accept="image/*"><br>
                <textarea rows="3" name="muu" placeholder="Milles mure?" required><?php print $andmed["muu"]; ?></textarea><br>
                <input type="submit" value="Submit"> <br>              
                Loomisaeg: <?php print $andmed["aeg"]; ?><br>

         </form>
</body>
</html>


