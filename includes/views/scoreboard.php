<?php
echo $this->header;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
var quizID='quiz1';
 function query()
{
  $.ajax({

     'url':    'scoreboard',
     'method': 'post',
     'data':    {'action': 'saveScore','quizID':quizID},
     'success': function(receivedData)
     {
         if(receivedData.result)
            {
             //after save change url to scoreboard
             console.log("aaa");
            }
     }


        });
}
$(document).ready(function()
  {
    $('.selector').click(function()
  {
    quizID=this.id;
       query();
    console.log(quizID);
  });
});
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1 class="navbar-brand">WebQuiz</h1>
  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="quizlist">Alle Quizes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="scoreboard">Scoreboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout">logout</a>
          </li>
        </ul>
  </div>
</nav>
<div class="QuestionBox ">
<body class="scorebordbody">
<h1 class="text-centerscoreboard">Scoreboard</h1>
<div class="text-centerscoreresult navbar-expand-lg navbar-light text-center">
    <ul class="navbar-nav">
      <li class="nav-item ">
            <a class="nav-link selector" id="quiz1">Sport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active selector"   id="quiz2">Kriege und Geschichte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link selector" id="quiz3">WEB 18</a>
          </li>
          <li class="nav-item">
            <a class="nav-link selector"  id="quiz4">Fun Fragen</a>
          </li>
          </ul>
  </div>


    <table class="table" id="scoreTable">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Zeit</th>
            <th scope="col">Punkte</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1235</th>
            <td>Tom</td>
            <td>12,00min</td>
            <td>80</td>
        </tr>
        <tr>
            <th scope="row">2342</th>
            <td>Jacob</td>
            <td>15,00min</td>
            <td>60</td>
        </tr>
        <tr>
            <th scope="row">3142</th>
            <td>Larry</td>
            <td>18,00min</td>
            <td>40</td>
        </tr>
        </tbody>
    </table>

</body>
</div>
</html>
