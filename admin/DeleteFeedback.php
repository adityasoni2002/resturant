<?php
include 'DatabaseConnection.php';
$myconn=dbConnect();
$id=$_REQUEST['f'];
$sql="DELETE FROM feedback WHERE fid='$id'";
mysqli_query($myconn,$sql);
if(mysqli_affected_rows($myconn)>0) {
    header("Location:Feedback.php?Successfully Deleted");
}
?>
