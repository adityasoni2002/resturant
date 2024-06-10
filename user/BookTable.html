<?php
include 'DatabaseConnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myconn = dbConnect();
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $cphone = $_POST['cphone'];
    $cdate = $_POST['cdate'];
    $ctime = $_POST['ctime'];
    $nop = $_POST['nop'];
    $cmessage = $_POST['cmessage'];
    $sql_cust_booking_save = "INSERT INTO cust_booking(cname,cemail,cphone,cdate,ctime,nop,cmessage) VALUES('$cname','$cemail','$cphone','$cdate','$ctime','$nop','$cmessage')";
    $sql_approve_booking_save = "INSERT INTO approved_booking(aname,aemail,aphone,adate,atime,anop,amessage) VALUES('$cname','$cemail','$cphone','$cdate','$ctime','$nop','$cmessage')";
    mysqli_query($myconn, $sql_cust_booking_save);
    mysqli_query($myconn, $sql_approve_booking_save);
    if (mysqli_affected_rows($myconn) > 0) {
        header("Location:BookTable.php?Successfully_Booked");
    }
    else {
        echo "ERROR! Can't book a table currently.....";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ATMOSPHERIA/BOOK A TABLE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="../assets/img/icon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-phone d-flex align-items-center"><span>+91 62644 39300</span></i>
            <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Fri: 10AM - 10PM</span></i>
            <i class="bi bi-clock d-flex align-items-center ms-4"><span> Sat-Sun: 12PM - 12AM</span></i>
        </div>
    </div>
</div>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0"><a href="Main.php">ATMOSPHERIA</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="Main.php">Home</a></li>
                <li hidden><a class="nav-link scrollto" href="#menu">Menu</a></li>
                <li hidden><a class="nav-link scrollto" href="#specials">Specials</a></li>
                <li hidden><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                <li hidden><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
                <li><a class="nav-link scrollto" href="Events.php">Events</a></li>
                <li><a class="nav-link scrollto" href="About.php">About</a></li>
                <li><a class="nav-link scrollto" href="Contact.php">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <a href="BookTable.php" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>
    </div>
</header>
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up" style="margin-top: 5%">
        <div class="section-title">
            <h2>Reservation</h2>
            <p>Book a Table</p>
            <br>
            <?php
            if (isset($_REQUEST['Successfully_Booked'])) {
            ?>
                <div class="alert alert-success" role="alert">
                    YAY! Your table has been booked.....
                </div>
                <?php
            }
            ?>
        </div>
        <form action="" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="cname" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="cemail" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="number" class="form-control" name="cphone" id="phone" placeholder="Your Phone" pattern="[6-9]{1}[0-9]{9}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="date" name="cdate" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="time" class="form-control" name="ctime" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="nop" id="people" placeholder="Number of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="cmessage" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>
    </div>
</section>
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>ATMOSPHERIA</h3>
                        <p>
                            VIP Rd, Vishal Nagar<br>
                            Raipur, Chhattisgarh <br><br>
                            <strong>Phone:</strong> +91 62644 39300<br>
                            <strong>Email:</strong> atmospheria@gmail.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="Main.php">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="About.php">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="TOS.php">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="PP.php">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="Events.php">Parties</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="BookTable.php">Booking <Table></Table></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/js/main.js"></script>
