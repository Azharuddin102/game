<?php
session_start();
$con=mysqli_connect('localhost','root',"");
if (isset($_POST['submit']))
{
      $q7=$_POST['choice'];
    echo "string";
    $_SESSION['q7']=$q7;
  header("location: http://localhost/html/quiz8.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="30;URL=http://localhost/html/quiz8.php" />
    <link href="images/my_logo.ico" type="image" rel="icon" />
    <title> Question 7</title>
    <link rel="stylesheet" type="text/css" href="stylesheet/practice.css">
    <style media="screen">
      div#test{border:1px solid #000;padding:10px 40px 40px 40px}
      input{
        margin-left:0px;
      }
      button:hover
      {
        background: #d90f0f;
        background-image: -webkit-linear-gradient(top, #d90f0f , #38070f);
        background-image: -moz-linear-gradient(top, #d90f0f , #38070f);
        background-image: -ms-linear-gradient(top, #d90f0f , #38070f);
        background-image: -o-linear-gradient(top, #d90f0f , #38070f);
        background-image:  linear-gradient(to bottom, #d90f0f , #38070f);
        text-decoration: none;
        cursor: pointer;
      }
      #submit{width:120px;
        background: #d93434;
        background-image: -webkit-linear-gradient(top, #d93434 , #b8b82b);
        background-image: -moz-linear-gradient(top, #d93434 , #b8b82b);
        background-image: -ms-linear-gradient(top, #d93434 , #b8b82b);
        background-image: -o-linear-gradient(top, #d93434 , #b8b82b);
        background-image:  linear-gradient(to bottom, #d93434 , #b8b82b);
         -webkit-border-radius:19;
         -moz-border-radius:19;
          border-radius:19;
      text-shadow: 0px 6px 6px #666666;
      font-family: arial;
      color: #ffffff;
      padding: 6px 21px 11px 20px;
      text-decoration: none;
      cursor: pointer;
      }
    </style>
  </head>
  <body>
          <div class="timecounter">
            <script type="text/javascript">
              function countDown(secs,elem)
              {
                var element=document.getElementById(elem);
                element.innerHTML="<br><br><h2> </h2>"+secs+"<h2 style='font-size:25px'>SECONDS LEFT </h2>";
                if(secs < 1){
                  clearTimeout(timer);
                  element.innerHTML='<br><h1 style="color:white">TEST LOADED</h1>';
                  element.innerHTML +='<a class="btn"> </a>';
                }
                secs--;
                var timer=setTimeout('countDown('+secs+',"'+elem+'")',1000);
              }
            </script>
            <div id="status"> </div>
            <script type="text/javascript">countDown(30,"status");
            </script>

          </div>
          <h2 id="test_status"> Question 7 of 10</h2>
          <div id="test"><h2> Q7.what is the full form of RS?</h2>
            <form action="http://localhost/html/quiz7.php" method="post">
              <div id="option">
                  <input type="radio" name="choice" value="A" />Rupees<br/>
                  <input type="radio" name="choice" value="B" />ROHILL sarai<br/>
                  <input type="radio" name="choice" value="C" />Ram station<br/>
                  <input type="radio" name="choice" value="D" />Both a & b<br/><br/>
              </div>
              <div>
                <input type="submit" name="submit" id="submit" value="Submit Answer" style="cursor:pointer">
              </div>
            </form>
          </div>
  </body>
</html>
