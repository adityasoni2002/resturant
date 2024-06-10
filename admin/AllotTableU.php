<?php
include 'DatabaseConnection.php';
$myconn=dbConnect();
$tableno=$_REQUEST['tableno'];
$xid=$_REQUEST['pid'];
$sql_update="UPDATE approved_booking SET atableno='$tableno' WHERE cid='$xid'";
$sql_delete="DELETE FROM cust_booking WHERE cid='$xid'";
mysqli_query($myconn,$sql_update);
mysqli_query($myconn,$sql_delete);
print_r($tableno);
if(mysqli_affected_rows($myconn)>0) {
    header("Location:ApprovedBooking.php?Successfully Updated");
}
?>