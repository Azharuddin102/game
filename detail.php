<?php
session_start();
$con=mysqli_connect('localhost','root',"");
if (isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$password1=$_POST['password1'];
$distric=$_POST['distric'];
$email=$_POST['email'];
$payment=$_POST['c'];
$p_number=$_POST['number'];
echo "$payment";
if ($password== $password1) {

  //$password = md5($password);//hash password before storing for security openssl_x509_checkpurpose
    mysqli_select_db($con,'signup_db');
    $q="INSERT INTO detail(username,password,email,p_number,payment,distric) values('$username','$password','$email',$p_number,'$payment','$distric')";
    $status=mysqli_query($con,$q);
    mysqli_close($con);
    $_SESSION['message']="WELCOME TO ADMIN PAGE";
    $_SESSION['username']="$username";
    header("location: home.html");
}else {
    $_SESSION['message']="BOTH PASSWORD ARE NOT MATCH";
    header("location: http://localhost/html/signup.html"");
}
}
session_destroy();
?>
