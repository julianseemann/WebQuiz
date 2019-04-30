<?php
echo $this->header;
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-sticky">
  <h1 class="navbar-brand">WebQuiz</h1>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="quizlist">Alle Quizes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="scoreboard">Scoreboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout">logout</a>
      </li>
    </ul>
  </div>
</nav>

<body class="quizlistebody">

<div class="QuestionBox">
<h1 class="text-centerscoreboard">Alle Quizes</h1>
    <div class="btns">
<button type="button" class="btn btn-default btn-block btn-lg quizWahl" id="quiz1">Sport</button>
<button type="button" class="btn btn-default btn-block btn-lg quizWahl" id="quiz2">Kriege und Geschichte</button>
<button type="button" class="btn btn-default btn-block btn-lg quizWahl" id="quiz3">WEB 18</button>
<button type="button" class="btn btn-default btn-block btn-lg quizWahl" id="quiz4">Fun Fragen</button>
    </div>
</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/quizlist.js"></script>

</body>
</html>
