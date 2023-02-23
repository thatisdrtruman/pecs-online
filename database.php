<?php
    $server="sql205.epizy.com";
    $username="epiz_33573391";
    $password="NK8NUu030hZhP";
    $databasename="epiz_33573391_pecs_online";

    $conn=mysqli_connect($server,$username,$password,$databasename);

    if (!$conn){
        die("Failed Connection:".mysqli_connect_error());
    }
?>