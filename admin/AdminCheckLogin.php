<?php
include 'DatabaseConnection.php';
$myconn=dbConnect();
$username=$_REQUEST['lusername'];
$password=$_REQUEST['lpassword'];
$sql_check="SELECT lid,lusername,lpassword FROM adminlogin WHERE lusername='$username' and lpassword='$password'";
$rs_userdata=mysqli_query($myconn,$sql_check);
if($rs_userdata->num_rows>0) {
    $row_user=mysqli_fetch_assoc($rs_userdata);
    session_start();
    $_SESSION['session_userid']=$row_user['lid'];
    $_SESSION['session_name']=$row_user['lname'];
    $_SESSION['session_username']=$username;
    header("Location:AdminHome.php");
}
else {
    header("Location:AdminLogin.php?login_attempt");
}
?>
