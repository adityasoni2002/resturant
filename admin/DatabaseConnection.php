<?php
function dbConnect(){
    $servername="localhost";
    $username="root";
    $pwd="";
    $dbname="atmospheria";
    $conn=mysqli_connect($servername,$username,$pwd,$dbname);
    return $conn;
}
?>
