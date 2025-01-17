<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <meta charset="utf-8">
     <title>THE LOGICAL GAME</title>
     <link rel="stylesheet" type="text/css" href="stylesheet/home.css">
     <link rel="stylesheet" type="text/css" href="stylesheet/formstyle.css">
     <link href="images/my_logo.ico" type="image" rel="icon" />
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script type="text/javascript" src="javascript/formscript.js"></script>
  </head>
  <body>
    <div id="manager">
      <div id="header">
        <div class="img1">
          <img src="images/my_logo.png" alt="logo of company" />
        </div>
        <div class="img2">
          <img src="images/the.png" alt="heading" />
        </div>
      </div>
      <div id="menu">
        <ul>
          <a href="home.html"> <li>  HOME </li> </a>
          <a href="about.html"> <li>  ABOUT </li> </a>
          <a href="quizrule.html"> <li>  QUIZ RULE  </li> </a>
          <a href="result.html"> <li>  RESULT </li> </a>
          <a href="signup.html"> <li>  SIGN UP/LOGIN </li> </a>
        </ul>
      </div>
      <div id="form-div">
        <div id="sign-up">
                              <h3>SIGN UP</h3>
          <form action="http://localhost/html/signup1.php" method="post">
            <div id="username">
                 <label>Username</label><br/>
                 <input type="text" name="username" placeholder="Username" required/>
            </div>
            <div id="password">
                <br/> <label>Password</label><br/>
                 <input type="text" name="password" placeholder="Password" required/>
            </div>
            <div id="conform-password">
                 <br/> <label>Conform Password</label><br/>
                 <input type="password" name="password1" placeholder="Conform Password" />
            </div>
            <div id="distric">
                <br/><label>Distric</label><br/>
                <input type="text" name="distric" placeholder="Distric" required />
            </div>
            <div id="email">
                <br/><label>Email</label><br/>
                <input type="email" name="email" placeholder="Email" required />
            </div>
            <div id="option1">
                <br/><label>Payment Mode</label><br/>
                <select name="c" required>
                   <option> </option>
                   <option value="paytm"> Paytm </option>
                   <option value="pay phone"> Pay Phone</option>
                </select>
            </div>
            <div id="option2">
              <br/><label>Enter Number:</label>
              &nbsp&nbsp&nbsp&nbsp<input type="number"  name="number" placeholder="Enter number" required />
            </div>
            <div>
              <br/><br/><input type="Submit" value="Signup" name="submit"/>
              <input type="Reset" value="Reset" />
            </div>
          </form>

      </div>
        </div>
      </div>
      <div id="footer" style="margin-top:5%;margin-left:5%;margin-right:5%">
        <div id="logos">
          <a href="https:\\www.facebook.com" target="_blank">  <img src="images/facebook.png" alt="facebook_logo" />  </a>
            <a href="https:\\www.youtube.com" target="_blank">  <img src="images/youtube.png" alt="youtube_logo" />  </a>
             <a href="https:\\www.instagram.com" target="_blank">  <img src="images/instagram.png" alt="instagram_logo" />  </a>
            <a href="https:\\www.gmail.com" target="_blank">  <img src="images/gmail.png" alt="gmail_logo" />  </a>
          <a href="https:\\www.twitter.com" target="_blank">  <img src="images/twitter.png" alt="twitter_logo" />  </a>
        </div>
            <p> 2019-20,COPYRIGHT@ TO JMI CS GROUP</p>
      </div>
    </div>
</body>
</html>
