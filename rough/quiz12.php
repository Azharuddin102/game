<?php
session_start();
$con=mysqli_connect('localhost','root',"");
if (isset($_POST['submit']))
{
      $q10=$_POST['choice'];
    echo "string";
    $q1=$_SESSION['q1'];
    $q2=$_SESSION['q2'];
    $q3=$_SESSION['q3'];
    $q4=$_SESSION['q4'];
    $q5=$_SESSION['q5'];
    $q6=$_SESSION['q6'];
    $q7=$_SESSION['q7'];
    $q8=$_SESSION['q8'];
    $q9=$_SESSION['q9'];
    $_SESSION['q10']=$q10;
    //$password =md5($password);//hash password before storing for security openssl_x509_checkpurpose
    mysqli_select_db($con,'signup_db');
    $q="INSERT INTO login(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,username,password) values('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','SULTAN','1234')";
    $status=mysqli_query($con,$q);
    mysqli_close($con);
    $_SESSION['message']="WELCOME TO ADMIN PAGE";
    //$_SESSION['choice']="$choice";
    header("location: https://localhost/html/offer.html");
}
?>
