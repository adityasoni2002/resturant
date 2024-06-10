<?php
require 'DatabaseConnection.php';
session_start();
if(!isset($_SESSION['session_userid'])) {
    header("Location:AdminLogin.php?direct_attempt");
}
$username=$_SESSION['session_username'];
$name=$_SESSION['session_name'];
$sessionid = $_SESSION['session_userid'];
$conn=dbConnect();
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM adminlogin WHERE lid = $sessionid"));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Home/Bookings</title>
    <link href="img/icon.png" rel="icon">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js">
        $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                $("nav ul").toggleClass("showing");
            });
        });
        $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                $('nav').addClass('black');
            }
            else {
                $('nav').removeClass('black');
            }
        })
    </script>
</head>
<style>
    html, body {
        margin: 0;
        padding: 0;
        width: 100%;
    }

    body {
        font-family: "Helvetica Neue",sans-serif;
        font-weight: lighter;
    }

    header {
        width: 100%;
        height: 100vh;
        background: url(img/events-bg1.jpg) no-repeat 50% 50%;
        background-size: cover;
    }
    .content {
        width: 94%;
        margin: 4em auto;
        font-size: 20px;
        line-height: 30px;
        text-align: justify;
    }
    .logo {
        line-height: 60px;
        position: fixed;
        float: left;
        margin: 16px 46px;
        color: #fff;
        font-weight: bold;
        font-size: 20px;
        letter-spacing: 2px;
    }
    nav {
        position: fixed;
        width: 100%;
        line-height: 60px;
    }
    nav ul {
        line-height: 60px;
        list-style: none;
        background: rgba(0, 0, 0, 0);
        overflow: hidden;
        color: #fff;
        padding: 0;
        text-align: right;
        margin: 0;
        padding-right: 40px;
        transition: 1s;
    }
    nav.black ul {
        background: #000;
    }
    nav ul li {
        display: inline-block;
        padding: 16px 40px;;
    }
    nav ul li a {
        text-decoration: none;
        color: #fff;
        font-size: 16px;
    }
    .menu-icon {
        line-height: 60px;
        width: 100%;
        background: #000;
        text-align: right;
        box-sizing: border-box;
        padding: 15px 24px;
        cursor: pointer;
        color: #fff;
        display: none;
    }
    @media(max-width: 786px) {
        .logo {
            position: fixed;
            top: 0;
            margin-top: 16px;
        }
        nav ul {
            max-height: 0px;
            background: #000;
        }
        nav.black ul {
            background: #000;
        }
        .showing {
            max-height: 34em;
        }
        nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
        }

        .menu-icon {
            display: block;
        }
    }
    #footer {
        background: black;
        padding: 0 0 30px 0;
        color: #fff;
        font-size: 14px;
    }
    #footer .copyright {
        text-align: center;
        padding-top: 30px;
    }
    #footer .credits {
        padding-top: 10px;
        text-align: center;
        font-size: 13px;
        color: #fff;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
        margin-top: -5%;
        font-size: 20px;
        width: 60%;
    }
    a:link {
        color: lightblue;
        background-color: transparent;
        text-decoration: none;
    }
    a:visited {
        color: pink;
        background-color: transparent;
        text-decoration: none;
    }
    a:hover {
        color: red;
        background-color: transparent;
        text-decoration: underline;
    }
    a:active {
        color: green;
        background-color: transparent;
        text-decoration: underline;
    }
</style>
<body>
<div class="wrapper">
    <header data-aos="fade-up" >
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
                ATMOSPHERIA
            </div>
            <div class="menu">
                <ul>
                    <li><a href="AdminHome.php">Bookings</a></li>
                    <li><a href="ApprovedBooking.php">Approved Bookings</a></li>
                    <li><a href="Feedback.php">Feedback</a></li>
                    <li><a href="AdminLogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </nav>
        <?php
            $sql_product_show = "SELECT * FROM cust_booking";
            $rs_product = mysqli_query($conn, $sql_product_show);
            if ($rs_product->num_rows > 0) {
            ?>
        <table  class=" table-responsive-lg center " border="1" style="width:90%" >
            <tr>
                <h2 style="text-align: center;font-size: -100% ; color:#D6D6D6;padding:10%">Booking Details</h2>
                <th style="text-align:center;color: orange">Name</th>
                <th style="text-align:center;color: orange">Email</th>
                <th style="text-align:center;color: orange">Phone</th>
                <th style="text-align:center;color: orange">Date</th>
                <th style="text-align:center;color: orange">Time</th>
                <th style="text-align:center;color: orange;">Table For</th>
                <th style="text-align:center;color: orange">Message</th>
                <th style="text-align:center;color: orange">Action</th>
            </tr>
            <br>
            <?php
            while ($row_product = mysqli_fetch_assoc($rs_product)) {
                ?>
                <tr>
                    <td style="text-align:center; color: #D6D6D6  "><?php echo $row_product['cname']; ?></td>
                    <td  style="text-align:center; color: #D6D6D6 "><?php echo $row_product['cemail']; ?></td>
                    <td style="text-align:center; color: #D6D6D6  "><?php echo $row_product['cphone']; ?></td>
                    <td style="text-align:center; color: #D6D6D6  "><?php echo $row_product['cdate']; ?></td>
                    <td style="text-align:center; color: #D6D6D6  "><?php echo $row_product['ctime']; ?></td>
                    <td style="text-align:center; color: #D6D6D6  "><?php echo $row_product['nop']; ?></td>
                    <td style="text-align:center; color: #D6D6D6  "><?php echo $row_product['cmessage']; ?></td>
                    <td style="text-align:center; color: #D6D6D6 " >
                        <a class="" href="DeleteBooking.php?s=<?= $row_product['cid'] ?>">Reject</a> &nbsp;
                        <a href="AllotTableE.php?id=<?= $row_product['cid'] ?>">approve</a>
                    </td>
                </tr>
                <?php
            }
            }
            else {
                ?>
                <h2 style="text-align: center;font-size: -100% ; color:#D6D6D6;padding:20%">No customer booking.</h2>
                <?php
            }
            ?>
        </table>
</div>
</div>
</header>
</div>
</body>
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>ATMOSPHERIA</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">TheGoldenTrio</a>
        </div>
    </div>
</footer>
</html>
