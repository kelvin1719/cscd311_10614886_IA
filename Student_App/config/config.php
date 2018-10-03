<?php


    session_start();
    $connection = mysqli_connect("localhost","root","","myschool");

    if(mysqli_connect_errno()){
        echo "failed to connect". mysqli_connect_errno();
    }

    

?>