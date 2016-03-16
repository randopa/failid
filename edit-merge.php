<!DOCTYPE html>
<html lang="et">
<head>
         <meta charset="utf-8">
         <title>Editing</title>
</head>
<body>
         <?php
                require "api-merge.php";
                $id = $_GET["id"];
                $data = viewUser($id);
         ?>

         <form action="save.php?id=<?php print $data["id"]; ?>" method="post" enctype="multipart/form-data">
                Name: <input type="text" name="name" value="<?php print $data["name"]; ?>" required<br>
                Phone number: <input type="text" name="phone" value="<?php print $data["phone"]; ?>" required<br>
                Gender: <input value="male1" type="radio" name="gender" <?php print ($data["gender"] == "Male" ? "checked" : ""); ?> >Male
                          <input value="female1" type="radio" name="gender" <?php print ($data["gender"] == "Female" ? "checked" : ""); ?> >Female<br>
                Picture:<br>
                <img src="<?php print "./userID/$id/displayPicture.jpg"; ?>" height="100" width="100"><br>
                <input type="file" name="img" accept="image/*"><br>
                <textarea rows="3" name="comment" placeholder="Insert your comment here" required><?php print $data["comment"]; ?></textarea><br>
                <input type="submit" value="Submit"> <br>              
                Time when created: <?php print $data["time"]; ?><br>

         </form>
</body>
</html>
