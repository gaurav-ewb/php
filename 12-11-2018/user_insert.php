<?php 
include('connection.php');

$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$password=md5($_REQUEST['password']);
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];

$query = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($con,$query);
if ($result) {
  if (mysqli_num_rows($result) > 0) {
  	 echo 'found!';
  }
  else {
echo $query=mysqli_query($con,"INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `phone`, `address`) VALUES ('$fname', '$lname', '$email',  '$password', '$phone', '$address')"); 
 }
} else {
  echo 'Error: '.mysqli_error();
}
header('location:dashboard.php');
?>



