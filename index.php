<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>W-Ajibika System</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700&display=swap" rel="stylesheet">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            padding: 15px 0;
        }

        .navbar-brand h1 {
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }

        .navbar-nav .nav-item .nav-link {
            font-size: 18px;
            color: white !important;
            padding: 8px 15px;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #ffd700 !important;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .header_section {
            padding: 10px 0;
        }

        .banner_section {
            position: relative;
            padding: 80px 0;
        }

        /* .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 255, 0.7); /* Blue overlay with 50% opacity */
            z-index: 1;
        } */

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            text-align: center;
        }

        .banner_taital {
            font-size: 50px;
            color: white;
        }

        .read_bt {
            font-size: 20px;
            color: white;
            margin-top: 20px;
        }

        .number_main {
            margin-top: 30px;
        }

        .number_text {
            font-size: 40px;
            color: white;
        }

        .services_section {
            background: #f8f9fa;
            padding: 60px 0;
        }

        .service_box {
            background: white;
            padding: 30px;
            margin: 20px 0;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .service_box i {
            font-size: 50px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .service_box h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .service_box p {
            font-size: 16px;
            color: #6c757d;
        }

        .about_section {
            padding: 80px 0;
        }

        .about_taital_main h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .about_taital_main p {
            font-size: 18px;
            color: #6c757d;
        }

        .about_img img {
            width: 100%;
            border-radius: 10px;
        }

        .contact_section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .contact_form h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .contact_input,
        .contact_textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .contact_submit {
            padding: 10px 30px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact_submit:hover {
            background: #0056b3;
        }

        .footer_section {
            padding: 30px 0;
            text-align: center;
            color: white;
        }

        .footer_section .container {
            display: flex;
            justify-content: space-between;
        }

        .footer_section .container div {
            flex: 1;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <!-- Header Section Start -->
    <div class="header_section bg-primary">
        <div class="container-fluid bg-primary">
            <div class="row">
                <div class="col-sm-2 col-6">
                    <a class="navbar-brand" href="index.php">
                        <h1 style="font-size: 28px; color: white;">KYWP</h1>
                    </a>
                </div>
                <div class="col-sm-10 col-6">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin/index.php">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user/index.php">User Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user/registration.php">User Registration</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Section End -->

    <!-- Banner Section Start -->
    <div class="banner_section layout_padding bg-primary">
        <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/slider1.jpg" class="d-block w-100" alt="Water Conservation">
                        <div class="carousel-overlay"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="banner_taital">Water Conservation Efforts</h1>
                            <p class="read_bt">Join us in preserving our water resources.</p>
                            <div class="number_main">
                                <div class="number_text">01</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/slider1.jpg" class="d-block w-100" alt="Social Accountability">
                        <div class="carousel-overlay"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="banner_taital">Community and Social Accountability</h1>
                            <p class="read_bt">Empowering communities for sustainable change.</p>
                            <div class="number_main">
                                <div class="number_text">02</div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Services Section Start -->
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service_box">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <h3>Register/Sign Up</h3>
                        <p>Register to access our services and lodge complaints.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_box">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <h3>Lodge Your Complaint</h3>
                        <p>File your complaints and get them resolved efficiently.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_box">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h3>Community Engagement</h3>
                        <p>Participate in community events and contribute to social accountability.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- About Section Start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <div class="about_img">
                        <img src="./images/slider1.jpg" alt="About Us" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="about_taital_main">
                        <h1>About Our System</h1>
                        <p>Our W-Ajibika System is designed to provide efficient and transparent handling of complaints. We aim to empower communities by offering a platform for raising issues and ensuring they are addressed promptly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Contact Section Start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="contact_form">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="contact_input" placeholder="Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="contact_input" placeholder="Email" required>
                        </div>
                        <div class="col-md-12">
                            <textarea class="contact_textarea" placeholder="Message" rows="5" required></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="contact_submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <div class="footer_section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="footer_text">W-Ajibika System. &copy; 2024 All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section End -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- Sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.js"></script>
    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
