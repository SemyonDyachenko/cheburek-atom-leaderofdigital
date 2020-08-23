<?php

function reg_user($conn,$tablename,$username,$password) {
    $username = mysqli_real_escape_string($conn,trim($username));
    $password = mysqli_real_escape_string($conn,trim($password));

    $query_str = "INSERT INTO {$tablename} (username,password) VALUES ('$username','$password')";

    mysqli_query($conn.$query_str) or die(mysqli_error());

}


?>