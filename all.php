<!DOCTYPE html>
<html>
<head>
         <meta charset="utf-8">
         <title>Koik</title>
</head>
<body>
         <?php
         require "api.php";
         $reganud = eemalda();
   
         $kkoos = '<table>';
         foreach ($reganud as $yksik) {
            $kkoos .= '
                 <tr>
                    <td>' . $yksik["id"] . '</td>
                    <td>
                          <img src="kasutaja/' . $yksik["id"] . '/pilt.jpg" height="50" width="50">
</td>
<td>' . $yksik["nimi"] . '</td>
<td>
<a href="one.php?id=' .
$yksik["id"] . '">Vaata</a>
<a href="edit.php?id=' .
$yksik["id"] . '">Muuda</a>
<a href="delete.php?id=' .
$yksik["id"] . '">Kustuta</a>
</td>
</tr>';
}
$kkoos .= '</table>';
print $kkoos;
?>
</body>
</html> 
