<?php
include 'DatabaseConnection.php';
$myconn=dbConnect();
$pid=$_REQUEST['id'];
$sql_product="SELECT * FROM cust_booking c,approved_booking a WHERE a.cid='$pid' AND  c.cid='$pid' AND a.cid = c.cid";
$rs=mysqli_query($myconn,$sql_product);
$row=mysqli_fetch_assoc($rs);
?>
<html>
<head>
    <title>Admin Home/Allot Table</title>
    <link href="img/icon.png" rel="icon">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body#LoginForm{ background-image:url("img/events-bg1.jpg"); background-repeat:no-repeat;  background-position:center; background-size:cover; }
        header {
            width: 100%;
            height: 90vh;
            font-family: "Helvetica Neue",sans-serif;
            font-weight: lighter;
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
        .form-heading {
            color:#aaaaaa;
            font-size:23px;
        }
        .panel h2{
            color:#444444;
            font-size:18px;
            margin:0 0 8px 0;
        }
        .panel p {
            color:#777777;
            font-size:14px;
            margin-bottom:30px;
            line-height:24px;
        }
        .login-form .form-control {
            background: #f7f7f7 none repeat scroll 0 0;
            border: 1px solid #d4d4d4;
            border-radius: 4px;
            font-size: 14px;
            height: 50px;
            line-height: 50px;
        }
        .main-div {
            background: #ffffff none repeat scroll 0 0;
            border-radius: 2px;
            margin: 10px auto 30px;
            max-width: 38%;
            padding: 50px 70px 70px 71px;
        }
        .login-form .form-group {
            margin-bottom:10px;
        }
        .login-form{
            text-align:center;
        }
        .forgot a {
            color: #777777;
            font-size: 14px;
            text-decoration: underline;
        }
        .login-form  .btn.btn-primary {
            background: #f0ad4e none repeat scroll 0 0;
            border-color: #f0ad4e;
            color: #ffffff;
            font-size: 14px;
            width: 100%;
            height: 50px;
            line-height: 50px;
            padding: 0;
        }
        .forgot {
            text-align: left; margin-bottom:30px;
        }
        .botto-text {
            color: #ffffff;
            font-size: 14px;
            margin: auto;
        }
        .login-form .btn.btn-primary.reset {
            background: #ff9900 none repeat scroll 0 0;
        }
        .back {
            text-align: left;
            margin-top:10px;
        }
        .back a {
            color: #444444;
            font-size: 13px;
            text-decoration: none;}
        #footer {
            background: black;
            padding: 0 0 30px 0;
            color: #fff;
            font-size: 14px;
        }
        #footer .copyright {
            text-align: center;
            padding-top: 30px;
            margin:20px;
        }
        #footer .credits {
            padding-top: 10px;
            text-align: center;
            font-size: 13px;
            color: #fff;
        }
    </style>
</head>
<body id="LoginForm">
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
                    <li style="font-family: Helvetica Neue,sans-serif;"><?php
                        date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
                        echo date('d-m-Y, H:i');
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-top: -32%">
      <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h2>Allot Table To</h2>
                    <p>
                        <?=$row['cname']?> For <?=$row['nop']?> Peoples
                    </p>
                </div>
                <form method="POST" action="AllotTableU.php" style>
                    <input type="hidden" name="pid" value="<?=$row['cid']?>">
                    <p><?=$row['cemail']?></p>
                    <br>
                   <select name="tableno" class="form-control text-center" value="<?=$row['atableno']?>">
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                       <option value="11">11</option>
                       <option value="12">12</option>
                       <option value="13">13</option>
                       <option value="14">14</option>
                       <option value="15">15</option>
                   </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Book</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
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
</body>
</html>
