<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Stellar Haven</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0"  style="position: fixed; top: 0; left: 0; z-index: 10;" >
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h2 class="m-0 text-primary text-uppercase">Stellar Haven</h2>
                    </a>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2"></div>
                <div class="col-lg-1"></div>
                <div class="col-lg-1">
                        <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h2 class="m-0 text-primary text-uppercase">Stellar Haven</h2>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" style="text-align: right; margin-right: 50px;" id="navbarCollapse">
                            <div class="navbar-nav py-0">
                                <!-- <a href="pemilik-home.php" class="nav-item nav-link">Home</a>
                                <a href="pemilik-home.php#room" class="nav-item nav-link">Rooms</a>
                                <a href="pemilik-home.php#keuangan" class="nav-item nav-link">Finance </a>
                                <a href="pemilik-home.php#keluhan" class="nav-item nav-link">Complaints</a>
                                <a href="pemilik-home.php#datapenghuni" class="nav-item nav-link">Tenants</a> -->
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login as</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="pemilik-login.php#login" class="dropdown-item">Pemilik</a>
                                        <a href="pengelola-login.php#login" class="dropdown-item">Pengelola</a>
                                        <a href="penghuni-login.php#login" class="dropdown-item">Penghuni</a>
                                    </div>
                                </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Carousel Start -->
            <section id="carr">
                <div class="container-fluid p-0 mb-5">
                    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Comfy Living</h6>
                                        <h3 class="display-3 text-white mb-4 animated slideInDown">Discover The Most Comfortable Place to Rest</h3>
                                        <a href="#room" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Comfy Living</h6>
                                        <h3 class="display-3 text-white mb-4 animated slideInDown">Discover The Most Comfortable Place to Rest</h3>
                                        <a href="#room" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
        <!-- Carousel End -->


       <!-- Room Start -->
        <section id="room">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                        <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">

                            <?php 
                                include 'connection.php';

                                $query1 = mysqli_query($connect, "SELECT * FROM kamar WHERE tipe='standart'");
                                $data   = mysqli_fetch_array($query1);

                                $query2 = mysqli_query($connect, "SELECT COUNT(id_kamar) AS 'Total' FROM kamar WHERE tipe='standart'");
                                $jumlah = mysqli_fetch_array($query2);

                                $query3 = mysqli_query($connect, "SELECT COUNT(id_kamar) AS 'Sisa'  FROM kamar WHERE tipe='standart' AND status='available'");
                                $sisa = mysqli_fetch_array($query3);

                                $query4 = mysqli_query($connect, "SELECT * FROM kamar WHERE tipe='standart' AND status='available' ");

                             ?>

                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/room-1.jpg" alt="">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"> Rp <?= $data['harga']; ?>/Month</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Standart Room</h5>
                                        <div class="ps-2">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>Total Rooms: <?= $jumlah['Total']; ?></small>
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>Available: <?= $sisa['Sisa']; ?> </small>
                                    </div>
                                    <p class="text-body mb-3 pt-3 pb-3"><?= $data['fasilitas']; ?></p>
                                    <div class="" style="text-align: right;">
                                        <!-- Default dropup button -->
                                        <div class="btn-group dropup" >
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" ><small>Rent Now</small>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <!-- Dropdown menu links -->
                                                <?php       
                                                    include 'connection.php';

                                                    $query4 = mysqli_query($connect, "SELECT * FROM kamar WHERE tipe='standart' AND status='available' ");
                                               
                                                    while ($id = mysqli_fetch_array($query4)) { ?>
                                                        <li><a class="dropdown-item" href="register.php?id_kamar=<?= $id['id_kamar']; ?>" > <?= $id['id_kamar']; ?></a></li>
                                                        <?php }
                                                ?> 
                                            </ul>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">

                            <?php 
                                include 'connection.php';

                                $query1 = mysqli_query($connect, "SELECT * FROM kamar WHERE tipe='large'");
                                $data   = mysqli_fetch_array($query1);

                                $query2 = mysqli_query($connect, "SELECT COUNT(id_kamar) AS 'Total' FROM kamar WHERE tipe='large'");
                                $jumlah = mysqli_fetch_array($query2);

                                $query3 = mysqli_query($connect, "SELECT COUNT(id_kamar) AS 'Sisa' FROM kamar WHERE tipe='large' AND status='available'");
                                $sisa = mysqli_fetch_array($query3);
                             ?>

                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/room-3.jpg" alt="">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"> Rp <?= $data['harga']; ?>/Month</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Large Room</h5>
                                        <div class="ps-2">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>Total Rooms: <?= $jumlah['Total']; ?></small>
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>Available: <?= $sisa['Sisa']; ?> </small>
                                    </div>
                                    <p class="text-body mb-3 pt-3 pb-3"><?= $data['fasilitas']; ?></p>
                                    <div class="" style="text-align: right;">
                                        <!-- Default dropup button -->
                                        <div class="btn-group dropup" >
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" ><small>Rent Now</small>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <!-- Dropdown menu links -->
                                                <?php       
                                                    include 'connection.php';

                                                    $query4 = mysqli_query($connect, "SELECT * FROM kamar WHERE tipe='large' AND status='available' ");
                                               
                                                    while ($id = mysqli_fetch_array($query4)) { ?>
                                                        <li><a class="dropdown-item" href="register.php?id_kamar=<?= $id['id_kamar']; ?>" > <?= $id['id_kamar']; ?></a></li>
                                                        <?php }
                                                ?> 
                                            </ul>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">

                            <?php 
                                include 'connection.php';

                                $query1 = mysqli_query($connect, "SELECT * FROM kamar WHERE tipe='exclusive'");
                                $data   = mysqli_fetch_array($query1);

                                $query2 = mysqli_query($connect, "SELECT COUNT(id_kamar) AS 'Total' FROM kamar WHERE tipe='exclusive'");
                                $jumlah = mysqli_fetch_array($query2);

                                $query3 = mysqli_query($connect, "SELECT COUNT(id_kamar) AS 'Sisa' FROM kamar WHERE tipe='exclusive' AND status='available'");
                                $sisa = mysqli_fetch_array($query3);
                             ?>

                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/room-2.jpg" alt="">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"> Rp <?= $data['harga']; ?>/Month</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Exclusive Room</h5>
                                        <div class="ps-2">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>Total Rooms: <?= $jumlah['Total']; ?></small>
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>Available: <?= $sisa['Sisa']; ?> </small>
                                    </div>
                                    <p class="text-body mb-3 pt-3 pb-3"><?= $data['fasilitas']; ?></p>
                                    <div class="" style="text-align: right;">
                                        <!-- Default dropup button -->
                                        <div class="btn-group dropup" >
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" ><small>Rent Now</small>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <!-- Dropdown menu links -->
                                                <?php       
                                                    include 'connection.php';

                                                    $query4 = mysqli_query($connect, "SELECT * FROM kamar WHERE tipe='exclusive' AND status='available' ");
                                               
                                                    while ($id = mysqli_fetch_array($query4)) { ?>
                                                        <li><a class="dropdown-item" href="register.php?id_kamar=<?= $id['id_kamar']; ?>#register" > <?= $id['id_kamar']; ?></a></li>
                                                        <?php }
                                                ?> 
                                            </ul>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Room End -->

        <!-- Footer Start -->
        <div class="container-xl bg-dark text-light fadeIn" data-wow-delay="0.1s">
            <center>
                <div><h1 class="text-primary">STELLAR HAVEN</h1></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-primary">ABOUT</div>
                        <center>
                        <div class="col-12" style="width: 550px;">Discover the Most Comfortable Place to Rest. We provide a comfortable place to rest in a strategic location close to supermarkets, cafes, laundry, main roads, stationery shops, and many others.<br><br></div>
                        </center>
                        <div class="col-12 text-primary">CONTACT</div>
                        <div>
                            <ul style="inline-block">
                                <i class="fa fa-map-marker-alt me-1"></i>Dirgantara 3 Street, Babarsari&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-phone-alt me-1"></i>+628239109369&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-envelope me-1"></i>stellarhaven@gmail.com&nbsp;&nbsp;&nbsp;
                                <i class="fab fa-instagram me-1"></i>@stellarhaven&nbsp;&nbsp;&nbsp;
                                <i class="fab fa-youtube me-1"></i>Stellar Haven   
                            </ul>
                        </div>
                    </div>
                </div>
            </center>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html> 