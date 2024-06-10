<?php
include 'DatabaseConnection.php';
$myconn=dbConnect();
$id=$_REQUEST['s'];
$sql="DELETE FROM cust_booking WHERE cid='$id'";
mysqli_query($myconn,$sql);
if(mysqli_affected_rows($myconn)>0) {
    header("Location:AdminHome.php?Successfully Deleted");
}
?>
