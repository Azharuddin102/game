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
  if($password==$password1)
  {
    $q1=$_SESSION['q1'];
    $q2=$_SESSION['q2'];
    $q3=$_SESSION['q3'];
    $q4=$_SESSION['q4'];
    $q5=$_SESSION['q5'];
    $q6=$_SESSION['q6'];
    $q7=$_SESSION['q7'];
    $q8=$_SESSION['q8'];
    $q9=$_SESSION['q9'];
    $q10=$_SESSION['q10'];
    //$password =md5($password);//hash password before storing for security openssl_x509_checkpurpose
    mysqli_select_db($con,'signup_db');
    $q="INSERT INTO login(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,username,password) values('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$username','$password')";
    $q1="INSERT INTO detail(username,password,email,p_number,payment,distric) values('$username','$password','$email',$p_number,'$payment','$distric')";
    $status=mysqli_query($con,$q);
    $status=mysqli_query($con,$q1);
    mysqli_close($con);
    $_SESSION['message']="WELCOME TO ADMIN PAGE";
    //$_SESSION['choice']="$choice";
    session_destroy();
    header("location: http://localhost/html/welcome.html");
}
}
?>
