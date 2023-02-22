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
    <link href="img/favicon.ico" rel="icon">

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
            <h1 class="m-0 text-uppercase  text-color= #4B0082"> <img class="w-40" height="60" src="img/logo2.jpg" alt="Image"></i>WOLREC</h1>
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
                <a href="team.php" class="nav-item nav-link text-color= #4B0082">Our Team</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">News</h1>
                <a href="index.php">Home</a>
                <i class="far fa-square text-warning px-2"></i>
                <!-- <a href="">Blog Grid</a> -->
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">

                <?php 

$cats = mysqli_query($conn,"select * from blog");

while($row = mysqli_fetch_assoc($cats)){
    
    $cat_id = $row['cat_id'];

    $extract_cat_name = mysqli_query($conn,"select * from category where cat_id = $cat_id");
    $catname = mysqli_fetch_assoc($extract_cat_name);
    $cat_name = $catname['cat_name'];
    ?>
                    <div class="col-xl-6 col-lg-12 col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="admin/images/<?php echo $row['image'] ?>  " alt="">
                            </div>
                            <div class="bg-secondary d-flex">
                                <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-warning text-white px-4">
                                    <span></span>
                                    <h5 class="text-uppercase m-0"><?php echo $row['date'] ?></h5>
                                    <span></span>
                                </div>
                                <div class="d-flex flex-column justify-content-center py-3 px-4">
                                    <div class="d-flex mb-2">
                                        <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i><?php echo $row['first_name'] ?></small>
                                        <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i><?php echo $cat_name ?></small>
                                    </div>
                                    <a class="h4" href="detail.php?blog_id=<?php echo $row['blog_id'] ?>"><?php echo $row['blog_title'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
    <?php } ?>             
                    
                  
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg m-0">
                            <li class="page-item disabled">
                              <a class="page-link rounded-0" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link rounded-0" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-warning px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                        <?php 

                            $cats = mysqli_query($conn,"select * from category");

                            while($row = mysqli_fetch_assoc($cats)){?>

                             <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $row['cat_name'] ?></a>
                           
                            <?php } ?>

                        
                       
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent News</h2>
                    <?php
                $query = "SELECT * FROM blog ORDER BY blog_id desc limit 0,4";

                //running the query
                $run = mysqli_query($conn, $query);
                //fetching the data from the database
                while ($row = mysqli_fetch_array($run)) {
                ?>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="admin/images/<?php echo $row['image'] ?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="detail.php?blog_id=<?php echo $row['blog_id'] ?>" class="h5 d-flex align-items-center bg-secondary px-3 mb-0"><?php echo $row['blog_title'] ?>
                        </a>
                    </div>
                 <?php } ?>  
                </div>
                <!-- Recent Post End -->

                
               

               
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
   
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