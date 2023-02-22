<?php
session_start();

$conn=mysqli_connect('localhost','root','','wolrec');

if (isset($_GET['cat_id'])) {
    $_SESSION['categories'] = $_GET['cat_id'];
}

if (isset($_GET['blog_id'])) {
    $_SESSION['category_id'] = $_GET['blog_id'];
    header("location:detail.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WOLREC - Bringing Law to women</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/WOLREC LOGO_PNG.PNG" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrapicons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<div>
    <!-- Topbar Start -->
   
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav style = "background-color:#e6ffff;" class="navbar navbar-expand-lg navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0 text-uppercase  text-color= #4B0082"> <img class="w-40" height="60" src="img/WOLREC LOGO_PNG.PNG" alt="Image"></i>WOLREC</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="index.php" class="nav-item nav-link text-color= #4B0082">Home</a>
                <a href="about.php" class="nav-item nav-link text-color= #4B0082" >About Us</a>
                <a href="project.php" class="nav-item nav-link text-color= #4B0082">Projects</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-color= #4B0082" data-bs-toggle="dropdown">Media Center</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.php" class="dropdown-item" >News</a>
                        <a href="gallery.php" class="dropdown-item">Gallery</a>
                       
             
                    
                    </div>
                </div>
                <a href="vacancy.php" class="nav-item nav-link text-color= #4B0082">Vacancies</a>
                <a href="team.php" class="nav-item nav-link text-color= #4B0082">our Team</a>
                
           
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
             
            <!-- image''' start-->
            <div class="carousel-item active">
                    <img class="w-100" src="img/CHU2376.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img class="w-100" src="img/CHU9565.PNG" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/CHU3580.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        
                    </div>
                </div> 
                <div class="carousel-item">
                    <img class="w-100" src="img/CHU3537.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        
                    </div>
                </div> 
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        
                    </div>
                </div> 

                <!-- image end -->
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
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h2 class="display-5 mb-4">WELCOME TO WOLREC</h2>
                Women’s Legal Resources Centre (WOLREC) is a women’s rights Non-governmental organization based in Blantyre.<BR> WOLREC is along Kenyatta Drive, Plot No. SW8/517/3&4. WOLREC was registered under the Trustees Incorporation Act (1962) in 2006 and became operational the same year. WOLREC’s mission is to facilitate increased access to legal, socio-political and economic justice for women and girls in Malawi.</p>
                <a href="tel:+265888381965" class="btn btn-warning py-md-3 px-md-5 rounded-pill">Contact Us</a>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-warning p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Our Vision</h3>
                            <p class="mb-0">A society in which women’s rights are recognised, respected  and protected.</p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-chart-line fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Our Mission</h3>
                            <p class="mb-0">To facilitate increased access to legal, socio-political and economic justice for women and girls in Malawi.</p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-balance-scale fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Our Values</h3>
                            <p class="mb-0">WOLREC believes in respect for human rights and empowerment of vulnerable groups especially girls and women.</p>
                        </div>
                    </div><br>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-balance-scale fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Objectives</h3>
                            <p class="mb-0">To lobby and advocate for gender equality, good governance, democracy, transparency, accountability and corruption free society.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

<!-- TABLE Start -->
<div class="container-fluid bg- text-secondary p-5" style = "background-color:#db66ff">
        <div class="row g-5 " >
            <div class="col-12 text-center bg-" style = "background-color:#db66ff">
                <h1 class="display-5 mb-4 text-warning">FACT SHEET</h1>
                <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 15px;
}
</style>
                <table style="width:100%" >
  <thead>
    <tr>
    
      <th scope="col"></th>
      <th scope="col"></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td> <b>Number of Project Beneficiaries</b> </td>
      <td> 47,640 (33,335 Females, 14,305 Males)</td>
     
    </tr>
    <tr>
      
      <td> <b>Impact Districts</b> </td>
      <td>Balaka, Blantyre, Chiradzulu, Dedza, Dowa, Lilongwe Rural, Mwanza, Mzimba, Mzuzu City, Neno, Ntcheu, Ntchisi, Nsanje, Phalombe, Rumphi, Salima, Thyolo, Zomba</td>
     
    </tr>

    <tr>
      
      <td> <b>Target Groups</b> </td>
      <td>Women, Men, Girls, Youth, People Living With HIV, People With Disabilities and other vulnerable groups.</td>
     
    </tr>
    
  </tbody>
</table>
            </div>
        </div>
    </div>
<!-- table end-->
   <!-- Latest news start -->
<!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Latest News</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>

        <div class="row g-5">
        <?php
                $query = "SELECT * FROM blog ORDER BY blog_id desc limit 0,4";

                //running the query
                $run = mysqli_query($conn, $query);
                //fetching the data from the database
                while ($row = mysqli_fetch_array($run)) {
                ?>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="admin/images/<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="bg-secondary d-flex">
                        <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-warning text-white px-4">
                            <span></span>
                            <h5 class="text-uppercase m-0"><?php echo $row['date'] ?></h5>
                            <span></span>
                        </div>
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <div class="d-flex mb-2">
                                <small class="text-uppercase "><i class="bi bi-person me-2"></i><?php echo $row['first_name'] ?></small>
                                <!-- <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small> -->
                            </div>
                            <a class="h4" href="detail.php?blog_id=<?php echo $row['blog_id'] ?>"><?php echo $row['blog_title'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>  
        </div>
    </div>
    <!-- Blog End -->
   
   <!--Latest news end-->

    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Team Members</h1>
            <hr class="w-25 mx-auto bg-warning">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/MS MAGGIE KATHEWERA BANDA - EXECUTIVE DIRECTOR.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-warning p-4">
                        <h3 class="text-white">MS KATHEWERA BANDA</h3>
                        <p class="text-white text-uppercase mb-0">  EXECUTIVE DIRECTOR</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/GLADSON NAMACHA - PROJECT OFFICER.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-warning p-4">
                        <h3 class="text-white">GLADSON NAMACHA</h3>
                        <p class="text-white text-uppercase mb-0">PROJECT OFFICER</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/CHIMWEMWE CHIMASULA - PROGRAMMES MANAGER.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-warning p-4">
                        <h3 class="text-white">CHIMWEMWE CHIMASULA</h3>
                        <p class="text-white text-uppercase mb-0">PROGRAMMES MANAGER</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

<!footer start -->
    <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="https://wolrec.org:2096/"><i class="bi bi-arrow-right text-warning me-2"></i>Webmail</a>
                    <a class="text-secondary mb-2" href="vacancy.php"><i class="bi bi-arrow-right text-warning me-2"></i>Vacancies</a>
                    <a class="text-secondary mb-2" href="admin/index.php"><i class="bi bi-arrow-right text-warning me-2"></i>admin</a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="index.php"><i class="bi bi-arrow-right text-warning me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="about.php"><i class="bi bi-arrow-right text-warning me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="project.php"><i class="bi bi-arrow-right text-warning me-2"></i>Projects</a>
                    <a class="text-secondary mb-2" href="blog.php"><i class="bi bi-arrow-right text-warning me-2"></i>Latest Blog</a>
                    <a class="text-secondary" href="contact.php"><i class="bi bi-arrow-right text-warning me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-warning me-2"></i>Kenyatta Drive</p>
                <p class="mb-2"><i class="bi bi-geo-alt text-warning me-2"></i>Plot No. SW8/517/384</p>
                <p class="mb-2"><i class="bi bi-geo-alt text-warning me-2"></i>P.O Box, 31472, Chichiri BT 3</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-warning me-2"></i>wolrec@wolrec.org</p>
                <p class="mb-0"><i class="bi bi-telephone text-warning me-2"></i>+265 888 750 183</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                <a class="btn btn-lg btn-warning btn-lg-square rounded-circle me-2" href="https://web.facebook.com/people/Womens-Legal-Resources-Centre-WOLREC/100070288541359/"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-lg btn-warning btn-lg-square rounded-circle me-2" href="https://twitter.com/WOLREC"><i class="fab fa-twitter fw-normal"></i></a>
                
                    <a class="btn btn-lg btn-warning btn-lg-square rounded-circle me-2" href="https://www.youtube.com/channel/UCk1o_qGFoY2gwntdzVoyDjQ/videos?view_as=subscriber"><i class="fab fa-youtube fw-normal"></i></a>
                    <a class="btn btn-lg btn-warning btn-lg-square rounded-circle" href="https://www.instagram.com/wolrec_/"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; <a class="text-secondary border-bottom" href="index.php">wolrec</a>. All Rights Reserved.</p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="css/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>