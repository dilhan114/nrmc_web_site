<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NRMC Web Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>
<style>
    .new_box {
   
    color: white;
    padding: 20px 0;
    text-align: center;
    margin-top: -50px;
}
.blog-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .blog-card {
            background-color: white;
            width: 300px;
            height: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            text-decoration: none; /* Remove default underline */
            color: inherit; /* Inherit text color */
        }

        .blog-card:hover {
            transform: translateY(-10px);
        }

        .card-img {
            position: relative;
        }

        .card-img img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-img h1 {
            position: absolute;
            bottom: 10px;
            left: 10px;
            margin: 0;
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 5px 10px;
            font-size: 24px;
            border-radius: 4px;
        }

        .card-details {
            display: flex;
            justify-content: space-between;
            padding: 10px 15px;
            font-size: 14px;
            color: #666;
        }

        .card-details span {
            display: flex;
            align-items: center;
        }

        .card-details i {
            margin-right: 5px;
            color: #f39c12;
        }

        .card-text {
            padding: 15px;
            font-size: 16px;
            color: #333;
            border-top: 1px solid #f4f4f4;
        }

        .read-more {
            display: block;
            text-align: center;
            padding: 15px;
            font-size: 16px;
            color: #3498db;
            font-weight: bold;
            cursor: pointer;
            border-top: 1px solid #f4f4f4;
            transition: background-color 0.3s ease;
        }

        .read-more:hover {
            background-color: #f4f4f4;
        }
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html"><img src="assets/images/Department-LOGO.png"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Division</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="Division/Soil Conservation Division.php">Soil Conservation Division</a></li>
                            <li><a href="Division/Agro-Climatology and Climate Change.php">Agro-Climatology and Climate Change Division</a></li>
                            <li><a href="Division/Land use Planning and Geo Informatics.php">Land use Planning and Geo Informatics Division</a></li>
                            <li><a href="Division/Soil and Water Resources Management.php">Soil and Water Resources Management Division</a></li>
                             <li><a href="Division/Knowledge Management.php">Knowledge Management</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Admin Login</a>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex">
                <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
            </div>

        </div>
    </header><!-- End Header -->
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Admin Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" method="post" action="login.php">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/images/nrmc-min-1-scaled.jpg);">

                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/images/nrmc-min-1-scaled.jpg);">
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item"
                    style="background-image: url(assets/images/nrmc-min-1-scaled.jpg);">

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            </div>
    </section><!-- End Hero -->
    <main id="main">
    <section id="new_box" class="new_box">
         <!-- box -->
    <header class="bg-success text-white text-center py-4">
        <h1>ස්වාභාවික සම්පත් කළමනාකරණ මධ්‍යස්ථානය වෙත සාදරයෙන් පිළිගනිමු</h1>
    </header>
    </section>
    <section id="group" class="group">
        <div class="blog-wrapper">
    <a href="Program_details/Program.php" class="blog-card">
        <div class="card-img">
            <img src="assets/images/Program.svg" alt="criket">
            <h1>Program</h1>
        </div>
        <div class="card-details">
            <span><i class="fa fa-calendar">NRMC</i></span>
            <span><i class="fa fa-heart"></i>2024</span>
        </div>
    </a>

    <a href="Admin Page/Presentation File/index.php" class="blog-card">
        <div class="card-img">
            <img src="assets/images/Presentation.svg" alt="San Francisco">
            <h1>Presentation</h1>
        </div>
        <div class="card-details">
            <span><i class="fa fa-calendar"></i>NRMC</span>
            <span><i class="fa fa-heart"></i>2024</span>
        </div>
    </a>
  <a href="Admin Page/video_file/index.php" class="blog-card">
                <div class="card-img">
                    <img src="assets/images/video.svg" alt="">
                    <h1>Video's</h1>
                </div>
                <div class="card-details">
                    <span><i class="fa fa-calendar"></i> NRMC</span>
                    <span><i class="fa fa-heart"></i> 2024</span>
                </div>
            </a>
        </div>
</div>

    </section>
      
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-8 footer-contact">
                        <h3>Contact Us</h3>
                       <p>
                        <i class="bi bi-geo-alt"></i> Address: Natural Resources Management Center, P.O. Box:52, Sarasavi Mawatha, Peradeniya, Sri Lanka<br>
                        <i class="bi bi-telephone"></i> <strong>Telephone : </strong> +94 812 388355<br>
                        <i class="bi bi-envelope"></i> <strong>Email:nrmcperadeniyadoa@gmail.com</strong><br>
                        <i class="bi bi-printer"></i> <strong>Fax:</strong>+94 812 388920<br>
                        <i class="bi bi-box-arrow-up-right"></i> <strong>Open:</strong> Mon to Fri - 8.30am to 4.15pm (Closed on weekends and public holidays)<br>
                    </p>
                    </div>

                    <div class="col-lg-5 col-md-1 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Ministry of Agriculture</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Department of Meteorology</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">C-SUCSeS</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">ACASA</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Government Information Centre</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Hadabima Authority of Sri Lanka</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Rice Knowledge Bank</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>jjjjjjjjjj</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">

                <div class="credits">

                    Designed by <a href="https://bootstrapmade.com/">Dilhan Saliya</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>