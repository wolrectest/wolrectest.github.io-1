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
                <h1 class="display-4 text-white">Projects</h1>
                <a href="">Home</a>
               
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
            <?php
       
        $query = "SELECT * FROM projects ORDER BY p_id desc";
        //running the query
        $run = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($run)){

        // $cat_id = $row['cat_id'];
        // $run2 = mysqli_query($conn, "SELECT * FROM `category` WHERE `cat_id` = $cat_id");
        // $rw = mysqli_fetch_assoc($run2);
        ?>
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 mb-5" src="admin/images/<?php  echo $row['image'] ?>" alt="">
                   <a href="project_detail.php?p_id=<?php echo $row['p_id'] ?>"> <h1 class="mb-4"><?php  echo $row['title'] ?></h1></a>
                    <p><?php  echo $row['content'] ?></p>
                    
                </div>
                <!-- Blog Detail End -->
            <?php } ?>
                <!-- Comment List Start -->
               
               
                <div class="mb-5">
 
 <!-- PROJECT 1-->
<img class="img-fluid w-10" src="img/brot-3.jpg" alt="">
<h1>BREAD FOR THE WORLD </h1>
        </br>
<H4><b>PROJECT TITLE:</b></h4> Empowering rural women’s groups to demand implementation of social policies at local and national levels in Malawi
<h4><b>IMPACT AREA:</b></h4> Zomba, Salima and Lilongwe Rural <p>

<h4><b>PROJECT PERIOD:</b></h4> 2012 to 2021 </BR><p>

WOLREC is implementing a project funded by Bread For the World formerly EED.  The project is targeting poor rural women who have limited access to social services and are also not economically empowered. Project beneficiaries have been identifying problems within their communities and have been finding their own solutions to the same e.g demanding from duty bearers. Apart from demanding from duty bearers, community members are also able to contribute towards community projects. For example, if it is drilling of a borehole, the community would be expected to contribute some of the materials that can be found locally such as quarry stones among others.
<p>
<img class="img-fluid w-100" src="img/bread.jpg" alt="">
The project has the following three indicators to monitor and evaluate extent to which objectives have been achieved:
   <ol style="bullets">
<li>At least 80% of the targeted rural women’s groups have developed project proposals and get at least three types of social services for their communities
<li>At least 70% of targeted rural women’s groups have entered into fruit bearing dialogue with duty bearers at local and national levels to demand provision of social services.
    <li>At least 450 cases of neglecting, abuse, child trafficking, etc. are attended to by paralegals and at least 50 cases are brought to court
        </ol>
<hr><hr>
        </br>
<!-- project 1 end -->               

<!-- PROJECT START 2-->
<img class="img-fluid w-10" src="img/FtF_logo.jpg" alt="">
<h1><b>Feed The Future</b></h1>
<p>
<h4><b>PROJECT TITLE:</b></h2> Promoting Women’s Economic and Social Empowerment through Increased Access to Finance
<h4><b>IMPACT AREA:</b></h2> Blantyre rural, Ntcheu and Lilongwe rural
<h4><b>PROJECT PERIOD:</b></h4> 2019 to 2022
<p>

Women’s Legal Resources Centre (WOLREC) is working with communities to economically empower women with funding from Feed the Future.   WOLREC is working with women’s groups that are involved in Village Savings and Loans. WOLREC’s immediate goal is enhanced economic capacity of women in Blantyre Rural, Ntcheu, Lilongwe Rural, Mchinji, Dedza, Rumphi and Balaka districts in generating income.
The project is responding to Feed the Future AgDiv thematic area number 4 which is “Empower Women Through increased access to Finance.” 
<img class="img-fluid w-100" src="img/_CHU9636.jpg" alt="">
  </BR>
WOLREC is undertaking the following interventions:</br>
<ol style="bullets">
<li>Capital injection into village savings and loan groups
<li>Financial literacy
<li>Training of the women’s groups in VSL management
<li>Training of village agents who will act as community level supervisors for the VSL groups
<li>Capacity building of women in business management and gender equality
<li>Capacity building in labor saving technologies as well as linkages to financial institutions among other activities.
<p>
<img class="img-fluid w-100" src="img/_CHU9565.jpg" alt="">
The project is targeting 7,500 beneficiaries with 80% of the beneficiaries being female. Some of the expected outcomes of the project include the following;
<ol style="bullets">
<li>Improved economic status of women
<li>Increased access to financial resources by women
<li>Increased income for households
<li>Improved nutrition for women and children
<li>Improved women’s participation in household decision making
<br>

<!--project 2 END -->
 
             <!-- PROJECT TITLE--> 

                     
 
                   </div>
                
               


                 <!-- PROJECT START 2-->
<div class="mb-5">

<!-- PROJECT START--> 
<hr><hr>
<!-- PROJECT 3 START-->

<img class="img-fluid w-10" src="img/image_01_02_1.png" alt="">
<h1>The McConnell International Foundation (MIF) </h1>
<p>
<h4><b>PROJECT TITLE:</b></h2> Keeping Girls in school
<h4><b>IMPACT AREA:</b></h2> Balaka and Salima
<h4><b>PROJECT PERIOD:</b></h4> 2022 TO 2026
<p>
 
   <P>
The McConnell International Foundation (MIF) in partnership with WOLREC are implementing a four year scholarship programme which started in 2022 titled “Keeping Girls in school” in the two districts of Balaka and Salima.
The programme will prioritise support for girls forced to leave school because of pregnancy, child marriage and other reasons.  
<img class="img-fluid w-100" src="img/IMG_20221111_120622938.jpg" alt="">

</P>

<P>
The project, which is a pilot, is supporting a cohort of up to 100 girls in Balaka and Salima (50 girls in each district ) to access up to four years of secondary education through the provision of scholarships which will cover school fees,
uniforms and other essential needs (such as sanitary products and stationery) in community day secondary schools.
The girls are also being supported with mentorship classes, role modeling sessions and how to make reusable sanitary pads. 
<img class="img-fluid w-100" src="img/IMG_20221111_12062288949.jpg" alt="">
</p>
<p>

The programme will then be rolled to other two districts of Mzimba and Mangochi. The following community day secondary schools are being supported in Balaka; Kankao, Chendausiku, Chambera and St Louise while in Salima the schools are; Maganga, Thavite and Parachute.  
<img class="img-fluid w-100" src="img/IMG_20221110_515.jpg" alt="">
</p>

   </div>
   <!-- PROJECT END 3 -->

<hr><hr>
<!-- Project  -->
<!-- Project 4 -->
<img class="img-fluid w-10" src="img/NCA-DCA_Malawi_JPG-300x246.jpg" alt="">

<h4><b>PROJECT TITLE:</b></h4> Empowering women and girls to live a life free from GBV and are able to access SRH services in Ntchisi District.
<h4><b>IMPACT AREA: </b></h4> Traditional Authorities Chilooko and Kalumo in Ntchisi
<h4><b>PROJECT PERIOD: </b></h4>2020-2024
<p>

WOLREC is implementing a five year project funded by Norwegian Church Aid and DanChurchAid The project is targeting women and girls to empower them to be able to do the following;
<img class="img-fluid w-100" src="img/_CHU3580.jpg" alt="">
<ol style="bullets"> 
<br>
<li>Report violence
<li>defend their rights
<li>develop the confidence to freely access sexual reproductive health services
<li>develop the confidence to participate in decision making bodies
<li>Promote community dialogues/conversations between women and girls with relevant duty bearers particularly those working on GBV issues.
<p>The project is empowering women and girls as well as men and boys through the use of two participatory approaches of STAR circle and SASA! Together. In this regard, WOLREC established 90 STAR circles, 34 Village Savings and Loans groups and trained 30 Community Activists to facilitate the SASA! Together approach.
<img class="img-fluid w-100" src="img/_CHU3537.jpg" alt="">
<h4>EXPECTED OUTCOMES OF THE PROJECT;</h4>
<ol style="bullets"> 
<li>	Dominant norms transformed to protect girls and women from violence and harmful practices
<li>	Women and girls at risk of violence and survivor’s access lifesaving and specialized GBV services
<li>	Women and adolescent girls are empowered to lead, build self-esteem and realize their rights
<li>	Women and adolescents access comprehensive sexuality education and modern family planning
<p>The following are some of the indicators that the project is responding to;

<ol style="bullets">

<li>Number of rights holders reached by religious and traditional leaders on GBV, human rights and harmful practices
<li>% of GBV cases reported and referred for service provision by the informal justice systems
<li>Number of girls and women survivors accessing appropriate clinical management of rape
<li>Number of health care providers trained in clinical management of rape and psychosocial support on GBV
<li>Number of women and girls with improved knowledge of civic rights
<li>% of women trained who actively participate in decision-making bodies
<li>Number of women and girls with improved knowledge on economic decision making
<li>Number of women who accessed comprehensive sexuality education and modern family planning
<li>% of men reached and referred by male champions on FP (disaggregated by method)
<p>

<img class="img-fluid w-100" src="img/_CHU3404.jpg" alt="">
The following are some of the interventions that WOLREC is undertaking;
<ol style="bullets">
<li>Training of Community Activists in SASA! Together start phase
<li>Training of Health Centres in clinical management of rape
<li>Training of women and girls in VSL and business management
<li>Training of women and girls in leadership
<li>Strengthening of Health facilities/outreach clinics on GBV handling
<li>Training of women and girls GBV survivors in vocational skills such as bee keeping and tailoring
<li>Training of women and girls in family planning and SRH in new villages
<li>Training of men change agents in SRHR and modern family planning methods.

<br>
<hr><hr>
<!-- project 4 end -->

<!--  project 5 start -->
<img class="img-fluid w-10" src="img/noweigan-embassy-logo-300x149.jpg" alt="">
<h4><b>FUNDER:</b></h4> Royal Norwegian Embassy (RNE)
<h4><b>PROJECT TITLE: </b></h4> Capacity Building and Transparency in Local Government
<h4><b>IMPACT AREA:</b></h4> Chiradzulu, Dedza, Mwanza, Mzuzu City, Neno, Nsanje, Ntcheu, Phalombe, Rumphi, Salima, and Thyolo districts

<h4><b>PROJECT PERIOD: </b></h4>January 2019 to December 2020 <p>

<img class="img-fluid w-100" src="img/Ward-councillors-group-photo-18.09.19.jpg" alt="">
Overall aim of project:

<ol style="bullets">

<li>	To strengthen local government by showing it can make a difference by:
<li>	Supporting elected councillors in their role (oversight, budgets, anti-corruption, citizen engagement, communication, peer support)
<li>	Supporting citizen engagement – focus on District Development Budgets – Parliament visits
<li>	Telling a positive story about local government – social, mainstream media and face-to-face – national conversation
<br><hr>

<!-- PROJECT 5 end -->
<hr width="100%" height="40%">
 <!-- PROJECT 6 START--> 
             
 <h1><b>Save the Children</b></h1>
<p>
<h4><b>PROJECT TITLE:</b></h2> SIDA Strengthening CSOs programme in Malawi
<h4><b>IMPACT AREA:</b></h2>Salima district
<h4><b>PROJECT PERIOD:</b></h4> 2022 – 2026
<p>
             <img class="img-fluid w-10" src="img/save.png" alt="">
            
                
<P>WOLREC through Save the Children Malawi with funding from Swedish International Development Cooperation Agency (SIDA) through Save the Children Sweden is implementing a five-year programme (2022 – 2026) called SIDA Strengthening CSOs programme in Malawi in Salima district and at national level. The programme aims at strengthening civil society in Malawi that demands and support the Fulfilment of girls' and boys' rights – holding the state to account, mobilizing and empowering children and their communities.
<img class="img-fluid w-100" src="img/IMG_20221110_100701_515.jpg" alt="">
        </br>
<P>
    <h4>OUTCOMES</h4></P>
<P>
Civil society organizations in Malawi, including child led organizations, are well-functioning and have increased their independence, sustainability and competency as child rights actors in a changing context. 

Children (girls and boys) express their views and organize themselves to play an active part in civil society, individually and collectively, influencing decision-making regarding issues of their concern. 

CSOs in Malawi advocate and hold the State to account for the fulfillment of children's rights and equitable access to quality systems and services.

Expanded civic space and voice for CSOs in Malawi including child led organizations with support from Save the Children and other key actors to influence policy and practice.

<img class="img-fluid w-100" src="img/IMG_20221111_120622_213.jpg" alt=""><p>
<img class="img-fluid w-100" src="img/IMG_20221111_121528_892.jpg" alt="">
     <!-- PROJECT END 6 -->     
<!-- Project 8 start -->
<img class="img-fluid w-10" src="img/Stephen-Lewis-232x300.jpg" alt="">

<h4><b>FUNDER:</b></h4> The Stephen Lewis Foundation (SLF)
 <h4><b>PROJECT TITLE: </b></h4>Enhancing the capacity of people living with HIV/AIDS and community members in mitigating the impact of HIV/AIDS in Salima District
<h4><b>IMPACT AREA: </b></h4> T/A Khombedza and Mwanza in Salima
<h4><b>PROJECT PERIOD: </b></h4>2008 to 2021
<p>
 Since 2008, WOLREC has been implementing a project titled “Enhancing the capacity of people living with HIV/AIDS and community members in mitigating the impact of HIV/AIDS in Salima District” targeting 310 beneficiaries (208 females, 102 males).
 
 <img class="img-fluid w-100" src="img/SLF.jpg" alt="">

 The project is guided by the following objectives:
 <p>
 <ol style="bullets">
<li>	To support economic empowerment and financial literacy of People Living With HIV/AIDS (PLWAs) and community volunteers
<li>	To improve the health and nutrition status of people living with AIDS through the production of nutritious food and provision of drugs.
<li>	To empower PLWA and community volunteers in agricultural practices in order to create food security and sustainable income generating activities in Salima
<h4><b>Some of the achievements of the project are:</b></h4>
<li>	PLWAs and community members have increased knowledge on HIV/AIDS such as transmission and treatment.
<li>	PLWAs have been empowered to demand for services from duty bearers
<li>	More recognition by community members of the rights that PLWAS have. PLWAs are now being involved in developmental work such as food for work or money for work. At the inception of the project, it had been reported that PLWAs would not be allowed to benefit from such programmes because they were being regarded as weak.
<li>	Reduced risk to personal health since most people are now taking drugs after taking the porridge that we buy for them. It should be noted that most of the PLWAs we are working with, do not attain food sufficiency. As a result, they used to take ARV drugs even without eating food. This put their personal health at risk. This situation improved as they used to receive food supplements from the project. PLWAs have also been empowered to cultivate crops using modern agricultural practices. They use the produce to make nutritious food items for themselves. Furthermore, PLWAs have established individual kitchen gardens where they grow vegetables to supplement their daily nutritional intake.
<li>	There is reduced stigma and discrimination towards PLWAs.
<li>	More and more community members are going for VCT
<li>	There are more linkages created with government health institutions that are able to provide advice and support where necessary.
<p>More PLWAs are now participating in Village Savings and Loans where they save and lend to each other. With the loans they are getting from the groups, they are able to engage in small scale businesses like grocery shops etc.
</p>
<!-- project 8 end -->

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
                    <h2 class="mb-4">Recent Projects</h2>

                 <!-- recent projects start-->
                     <ol></ol>
                     <li>Bread For The World</LI>
                     <li>Feed The Future</li>
                     <li>The McConnell International Foundation (MIF)</li>
                     <li>Royal Norwegian Embassy (RNE)</li>
                     <li>Save The Children</LI>
                     <li>The Stephen Lewis Foundation (SLF)</li>
                     
                    
                  <!-- recent projects end-->
                    <?php
                $query = "SELECT * FROM projects ORDER BY p_id desc limit 0,5";

                //running the query
                $run = mysqli_query($conn, $query);
                //fetching the data from the database
                while ($row = mysqli_fetch_array($run)) {
                ?>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="admin/images/<?php echo $row['image'] ?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="project_detail.php?p_id=<?php echo $row['p_id'] ?>" class="h5 d-flex align-items-center bg-secondary px-3 mb-0"><?php echo $row['title'] ?>
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