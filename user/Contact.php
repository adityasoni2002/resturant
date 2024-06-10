<?php
include 'DatabaseConnection.php';
$myconn = dbConnect();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$fname = $_POST['fname'];
$femail = $_POST['femail'];
$fsubject = $_POST['fsubject'];
$fmessage = $_POST['fmessage'];
$sql_feedback_save = "INSERT INTO feedback(fname,femail,fsubject,fmessage) VALUES('$fname','$femail','$fsubject','$fmessage')";
mysqli_query($myconn, $sql_feedback_save);
if (mysqli_affected_rows($myconn) > 0) {
    header("Location:Contact.php?Successfully_Received");
} else {
    echo "ERROR! Can't save your response.....";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ATMOSPHERIA/CONTACT</title>
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
                <li><a class="nav-link scrollto active" href="Contact.php">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <a href="BookTable.php" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>
    </div>
</header>
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up" style="margin-top: 5%">
        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>
    </div>
    <div data-aos="fade-up" class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 mt-5 mt-lg-0">
            <iframe style="border:0; width: 100%; height: 350px;border-radius: 20px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.2284865600554!2d81.68206861493594!3d21.222786285893584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28ddb5070c7379%3A0xab53a6a233aad280!2sAtmospheria%20The%20Courtyard%20Kitchen!5e0!3m2!1sen!2sin!4v1664719013934!5m2!1sen!2sin"
                    frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>VIP Rd, Vishal Nagar, Raipur, Chhattisgarh 492001</p>
                    </div>
                    <div class="open-hours">
                        <i class="bi bi-clock"></i>
                        <h4>Open Hours:</h4>
                        <p>
                            Monday - Friday:<br>
                            10:00 AM - 10:00 PM<br><br>
                            Saturday - Sunday<br>
                            12:00 PM - 12:00 AM
                        </p>
                    </div>
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>atmospheria@gmail.com</p>
                    </div>
                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+91 62644 39300</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="fname" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="femail" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="fsubject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="fmessage" rows="8" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <?php
                    if (isset($_REQUEST['Successfully_Received'])) {
                        ?>
                        <div class="alert alert-success" role="alert" style="text-align: center">
                            HURRAY! We've received your response.....
                        </div>
                        <?php
                    }
                    ?>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
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
