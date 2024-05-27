<?php
session_start();
$con=mysqli_connect('localhost','root',"");
if (isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];

 //$password = md5($password);
 mysqli_select_db($con,'signup_db');
 $q= "SELECT * FROM detail WHERE username='$username' AND password='$password'";
 $qq= "SELECT * FROM login WHERE username='$username' AND password='$password'";
 $result =mysqli_query($con,$q);
 $result1 =mysqli_query($con,$qq);
 if (mysqli_num_rows($result) == 1)
  {
     if(mysqli_num_rows($result1) == 0)
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
    $q13="INSERT INTO login(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,username,password) values('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$username','$password')";
    $status=mysqli_query($con,$q13);
     $_SESSION['message'] = "SUCESSFULLY LOGIN";
     $_SESSION['username']= $username;
     session_destroy();
     echo "SUCESSFULLY LOGIN";
      header("location: http://localhost/html/welcome.html");

   }
   else {
     echo "You Play More Than One Time";
     header("location: http://localhost/html/welcome.html");
   }
  }
 else {
   $_SESSION['message'] = "FALED LOGIN username /password incorrect";
   echo "FALED LOGIN username /password incorrect";
   header("location: http://localhost/html/signup.php");
 }
 mysqli_close($con);
 session_destroy();
}
