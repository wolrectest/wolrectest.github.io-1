<?php



include('connection.php');

if (isset($_GET['blog_id'])) {
  $_SESSION['categories'] = $_GET['blog_id'];

  $blog_idd = $_SESSION['categories'];



  if (isset($_POST['addcom'])) {

    $comment = strip_tags($_POST['comment']);
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);

    $addcomment = mysqli_query($conn, "INSERT INTO comments(`blog_id`,`name`,`email`,`comment`,`date`)VALUES('$blog_idd','$name','$email','$comment',NOW())");

    if ($addcomment) {
      $msg = "comment uploaded successfully! ";
    } else {
      $msg2 = "Failed to add comment! ";
    }
  }
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
    <link href="img/logo.jpg" rel="icon">

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
                <a href="team.php" class="nav-item nav-link text-color= #4B0082">Know our Team</a>
                
           
            </div>
        </div>
    </nav>
    <!-- Navbar End -->




    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Vacancies</h1>
                <a href="index.php">Home</a>
               
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
            <h2>Recent Vacancies</h2> 
            <?php
       
        $query = "SELECT * FROM vacancies ORDER BY v_id desc";
        //running the query
        $run = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($run)){

        // $cat_id = $row['cat_id'];
        // $run2 = mysqli_query($conn, "SELECT * FROM `category` WHERE `cat_id` = $cat_id");
        // $rw = mysqli_fetch_assoc($run2);
        ?>
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    
                  
                   <hr>
<h4>POSITION : <?php  echo $row['position'] ?></h4>
                   <p> <h4>Who we are <br>

</h4><?php  echo $row['summary'] ?></p>


                    
                   <p> <h4>Location <br>

</h4><?php  echo $row['location'] ?></p>
                   <p> <h4>Requirements <br>

                   </h4><?php  echo $row['requirements'] ?></p>

                   <p> <h4>Other Details <br>
                   

</h4><?php  echo $row['details'] ?></p>


<p> <h4>Closing Date <br>

</h4><?php  echo $row['closing_date'] ?></p>

<p>
<a href="vacancy_detail.php?v_id=<?php echo $row['v_id'] ?>" class = "btn btn-warning">View</a>
</p>
                    
                </div>
                <!-- Blog Detail End -->
            <?php } ?>
                <!-- Comment List Start -->
                <div class="mb-5">
             

                  
                  
                 
                   
                   
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <!-- <div class="bg-secondary p-5">
                    <h2 class="mb-4">Leave a comment</h2>
                    <form method = "post" action = "detail.php?blog_id=<?php echo $blog_id ?>">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" name = "name" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" name = "email" placeholder="Your Email" style="height: 55px;">
                            </div>
                           
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" name = "comment" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name = "addcom">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div> -->
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <!-- <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                 
                    </div>
                </div> -->
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Other Vacancies</h2>
                    <?php
                $query = "SELECT * FROM vacancies ORDER BY v_id desc limit 0,5";

                //running the query
                $run = mysqli_query($conn, $query);
                //fetching the data from the database
                while ($row = mysqli_fetch_array($run)) {
                ?>
                    <div class="d-flex mb-3">
                        <!-- <img class="img-fluid" src="admin/images/<?php echo $row['image'] ?>" style="width: 100px; height: 100px; object-fit: cover;" alt=""> -->
                        <a href="vacancy_detail.php?v_id=<?php echo $row['v_id'] ?>" class="h5 d-flex align-items-center bg-secondary px-3 mb-0"> Position:  <?php echo $row['position'] ?>
                        </a>
                    </div>
                 <?php } ?>   
                </div>
                <!-- Recent Post End -->

               

                <!-- Tags Start -->
                <!-- <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-secondary m-1">Design</a>
                        <a href="" class="btn btn-secondary m-1">Development</a>
                        <a href="" class="btn btn-secondary m-1">Marketing</a>
                        <a href="" class="btn btn-secondary m-1">SEO</a>
                        <a href="" class="btn btn-secondary m-1">Writing</a>
                        <a href="" class="btn btn-secondary m-1">Consulting</a>
                        <a href="" class="btn btn-secondary m-1">Design</a>
                        <a href="" class="btn btn-secondary m-1">Development</a>
                        <a href="" class="btn btn-secondary m-1">Marketing</a>
                        <a href="" class="btn btn-secondary m-1">SEO</a>
                        <a href="" class="btn btn-secondary m-1">Writing</a>
                        <a href="" class="btn btn-secondary m-1">Consulting</a>
                    </div>
                </div> -->
                <!-- Tags End -->

                
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
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-warning me-2"></i>Webmail</a>
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