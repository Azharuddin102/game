<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="refresh" content="310;URL=http://localhost/html/home.html" />
      <link href="images/my_logo.ico" type="image" rel="icon" />
    <title>Practice Questions</title>
    <link rel="stylesheet" type="text/css" href="stylesheet/practice.css">
    <script type="text/javascript">
      var pos = 0, test,test_status,question,choice,choices,chA,chB,chC,chD,correct = 0;
      var questions=[
      ["which is a html tag?","date","script","marks","loco","A"],
      ["which is a css tag?","background","brave","loco","tag","C"],
      ["which is a js tag?","date","script","marks","loco","B"],
      ["which is a js tag?","date","script","marks","loco","B"],
      ["which is a js tag?","date","loco","script","marks","B"],
      ["which is a js tag?","date","loco","script","marks","B"],
      ["which is a js tag?","date","loco","script","marks","B"],
      ["which is a js tag?","date","script","loco","marks","B"],
      ["which is a js tag?","date","script","loco","marks","B"],
      ["which is a js tag?","loco","date","script","marks","B"]
      ];
      function _(x){
        return document.getElementById(x);
      }
      function renderQuestion(){
        test=_("test");
        if(pos >= questions.length)
        {
                           test.innerHTML="<h2>You Got "+ correct +" of "+questions.length+" QUESTION Correct</h2>";
                    _("test_status").innerHTML="Test Completed";
                    pos=0;
                     correct=0;
                    return false;
        }
                  _("test_status").innerHTML = "Question "+ (pos+1) +" of "+questions.length;
                  question = questions [pos] [0];
                  chA=questions [pos] [1];
                  chB=questions[pos] [2];
                  chC=questions[pos] [3];
                  chD=questions[pos] [4];
                  test.innerHTML = "<h5>"+ question +"</h5>";
                  test.innerHTML +="<input type='radio' name='choices' value='A'>"+chA+"<br>";
                  test.innerHTML +="<input type='radio' name='choices' value='B'>"+chB+"<br>";
                  test.innerHTML +="<input type='radio' name='choices' value='C'>"+chC+"<br>";
                  test.innerHTML +="<input type='radio' name='choices' value='D'>"+chD+"<br>";
                  test.innerHTML += "<button onclick='checkAnswer()'> Submit Answer </button>";
          }
          function checkAnswer(){
            choices=document.getElementsByName("choices");
            for(var i=0;i<choices.length;i++)
            {
              if(choices[i].checked){
                choice=choices[i].value;
              }
            }
            if(choice==questions[pos][5]){
              correct++;
            }
            pos++;
            renderQuestion();
          }
          window.addEventListener("load",renderQuestion,false);
    </script>
    <style media="screen">
      div#test{border:1px solid #000;padding:10px 40px 40px 40px}
    </style>
  </head>
  <body>
          <div class="timecounter">
            <script>
              function countDown(secs,elem)
              {
                var element=document.getElementById(elem);
                element.innerHTML='<br><br><h2 style="font-size:25px">ATTEMPT QUESTION IN </h2>'+secs+'<h4>SECONDS</h4>';
                if(secs < 1){
                  clearTimeout(timer);
                   element.innerHTML='<br><h1 style="color:white;font-size:25px">TIME OFF</h1>';
                  element.innerHTML +='<a class="btn"></a>';
                }
                secs--;
                var timer=setTimeout('countDown('+secs+',"'+elem+'")',1000);
              }
            </script>
            <div id="status"> </div>
            <script type="text/javascript">countDown(300,"status");
            </script>
          </div>
          <h2 id="test_status"></h2>
          <div id="test"> </div>
  </body>
</html>
