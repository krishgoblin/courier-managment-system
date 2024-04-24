<?php

    $dbcon = mysqli_connect('localhost','root','Skrish_73','courierdb');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>