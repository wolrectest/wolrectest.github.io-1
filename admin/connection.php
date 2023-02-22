<?php
session_start();
//$conn = mysqli_connect('localhost', 'root', '', 'dronextechnologies');
$conn=mysqli_connect('localhost','root','','wolrec');



$event_msg = '';
if(isset($_SESSION['user'])){
$user=$_SESSION['user']['username'];
$id=$_SESSION['user']['user_id'];
$role = $_SESSION['user']['role'];


if($role == ''){
  header('location:../index.php');
}
if($role == ''){
  header('location:../index.php');
}
if($role == ''){
  header('location:../index.php');

}
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/../index.php");
exit();
}
?>