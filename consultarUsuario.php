<?php
$host = "db4free.net:3306";
$username = "wms2023";
$password = "Narfa2201$";
$db = "wms_alfa";

$connect = new mysqli($host,$username,$password,$db);

$USUARIO = "NRUIZ";
     $result = mysqli_query($connect,"SELECT * FROM t_usuarios WHERE usuario='$USUARIO'");

    $qCol= mysqli_field_count($connect);
    echo $qCol."!";

    while ($row = mysqli_fetch_array($result)) 
    {
    for($i=0;$i<$qCol;$i++)
        {
        echo $row[$i]."!";
        }
    }
?>
