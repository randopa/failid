<!DOCTYPE html>
<html>
<head>
         <meta charset="utf-8">
         <title>All users</title>
</head>
<body>
         <?php
         require "api-merge.php";
         $users = userList();
   
         $allUsers = '<table>';
         foreach ($users as $oneUser) {
            $allUsers .= '
                 <tr>
                    <td>' . $oneUser["id"] . '</td>
                    <td>
                          <img src="userID/' . $oneUser["id"] . '/displayPicture.jpg" height="50" width="50">
</td>
<td>' . $oneUser["name"] . '</td>
<td>
<a href="one-merge.php?id=' .
$oneUser["id"] . '">View</a>
<a href="edit-merge.php?id=' .
$oneUser["id"] . '">Edit</a>
<a href="delete-merge.php?id=' .
$oneUser["id"] . '">Delete</a>
</td>
</tr>';
}
$allUsers .= '</table>';
print $allUsers;
?>
</body>
</html> 
