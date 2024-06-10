<?php
include 'DatabaseConnection.php';
$myconn=dbConnect();
$id=$_REQUEST['id'];
$sql="DELETE FROM approved_booking WHERE cid='$id'";
mysqli_query($myconn,$sql);
if(mysqli_affected_rows($myconn)>0) {
    header("Location:ApprovedBooking.php?Successfully Deleted");
}
?>
