<?php 
//  include('connection.php');

$conn=mysqli_connect('localhost','root','','wolrec');
$msg = '';
$nameerror = '';

$email = $fullname = '';
if(isset($_POST['submit'])){

 
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$role = $_POST['role'];
$password = md5($_POST['password1']);
$password2 = md5($_POST['password2']);





$retireve = mysqli_query($conn,"SELECT * FROM user_details WHERE email = '$email'");
$result = mysqli_fetch_assoc($retireve);

if($result > 0){
  $msg= "<script language='javascript'>
                                       swal(
                                            'failed',
                                            'Username already exist!',
                                            'error'
                                            );
                  </script>";

}else{


if($password == $password2){

$sql =mysqli_query($conn,"INSERT INTO user_details (`fullname`,`phone`,`email`,`password`,`role`) VALUES('$fullname','$phone','$email','$password2','$role')");

if($sql){















$msg= "<script language='javascript'>
                                       swal(
                                            'Sucess',
                                            'User has been addedl!',
                                            'success'
                                            );
                  </script>";
                }else{

          $msg= "<script language='javascript'>
                                       swal(
                                            'failed',
                                            'failed to add user, contact admin!',
                                            'error'
                                            );
                  </script>";
                }


}else{
   $msg= "<script language='javascript'>
  
                     swal(
                                            'Operation failed!',
                                            'Two passwords dont match!!',
                                            'error'
                                            );            
                  </script>";
}

}


}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dashboardstyle.css">
  <link rel="stylesheet" href="../css/gridform.css">
 <link rel="stylesheet" href="../css/tablestyle.css"/>
  <link rel="stylesheet" type="text/css" href="../css/fontawesome-free-5.15.1-web/css/all.css">
  <link rel="stylesheet" href="../css/formsstyle.css">
   <link rel="stylesheet" href="../css/sweetalert2/sweetalert2.css">
   <script src="../css/sweetalert2/sweetalert2.min.js"></script>
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
     <!--<script src="../js/email-validation.js"></script>-->
  
</style>
</head>
<body onload='document.form.email.focus()'>
  <input type="checkbox" id="checkbox">
  <header class="header">
    <h2 class="u-name"> </b>
          <!--  <label for="checkbox">
        <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
      </label> -->
    </h2>
   <a href = "logout.php" onclick="return confirm('Are you sure you want to logout  <?php echo $user ?> ?')"><i class="fa fa-power-off" style="color: red; font-size: 22px;" aria-hidden="true"> logout</i></a>
  </header>
  <div class="body">
   
    <section class="section-1">
     <br><br><br>
           
<?php echo $nameerror ?>
         <?php echo $msg; ?>   
                <div class="container">
    <div class="content">
  
    <!--form area start-->
    <div class="form">
      <!--login form start-->
      <form class="login-form" name ="form" action="adduser.php" method="post">
         <p style="background-color:#23242b; color: white; padding:15px;margin: 10px; text-align: center; font-weight:bold; font-size: 20px;"><a href = "manageuser.php"><i class="fa fa-reply" style="float: left" > Back   </i></a> Register User</p>

 <div class="user-details">
  <div class="input-box">
         <label>Fullname</label><br>
        <input class="user-input" type="text" pattern="[a-zA-Z ]+" placeholder="fullname" name="fullname" required><br>
</div>



<div class="input-box">
        <label>email</label><br>
        <input class="user-input" name="email" type="email" placeholder="" required><br>
</div>

<div class="input-box">
        <label>phone</label><br>
        <input class="user-input" name="phone" pattern="[0-9]{10,10}" title="phone must start with 0" type="tel"  placeholder="099" required><br>
</div>





       
<input class="user-input" type="text"   name="role" value="pilot" hidden required>
       
        <input class="user-input" type="text"   name="password1" placeholder="password" required>

      
        <input class="user-input" type="text"  name="password2" placeholder="password" required><br>

<div class="input-box">
  <input type="submit" name="submit" class="btn btn-success" >
       
 </div>    
 </div>   
      </form>
    </div>
</div>
</div>
    </div>
</div>    
</body>
<script type="text/javascript">
function validateemail(){
  var x = document.myform.email.value;
  var atposition = x.indexOf("@");
  var dotposition = x.lastindexOf(".");

}
  
</script>
</html>