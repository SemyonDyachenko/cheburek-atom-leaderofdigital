<?php

$host = 'localhost';
    $username='u787959094_cheburek';
    $password='u787959094_chebureK';
    $dbname='u787959094_cheburek';

    $conn = mysqli_connect($host,$username,$password,$dbname);

function add_meetup($title,$type,$content,$location,$date) {
    $title = mysqli_real_escape_string($conn,trim($title));
    $type = mysqli_real_escape_string($conn,trim($type));
    $content = mysqli_real_escape_string($conn,trim($content));
    $location = mysqli_real_escape_string($conn,trim($location));
    $date = mysqli_real_escape_string($conn,trim($date));
    
    $by = "Sochi";
    
    $datetime = date('d-m-y h:i:s');
    
    
    $query_str = "INSERT INTO `mitUps` (name,type,organisedBy,descr,place,date,placementDate) VALUES ('$title','$type','$by','$content','$location','$date','$datetime')";
    
    mysqli_query($conn,$query_str) or die(mysqli_error());
    
    if(mysqli_query($conn,$query_str)) {
        return true;
    }
    else {
        return false;
    }
}


?>