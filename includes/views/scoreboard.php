<?php
echo $this->header;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script src="js/scoreboard.js" type="text/javascript">
</script>
<style>
    html {
  overflow-y: overlay;
}
</style>

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
            <a class="nav-link selector" href="#" id="quiz1">Sport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link selector" href="#"  id="quiz2">Kriege und Geschichte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link selector" href="#" id="quiz3">WEB 18</a>
          </li>
          <li class="nav-item">
            <a class="nav-link selector" href="#" id="quiz4">Fun Fragen</a>
          </li>
          </ul>
  </div>


    <table class="table" id="scoreTable">
        <thead>
        <tr>
            <th scope="col">Position</th>
            <th scope="col">Name</th>
            <th scope="col">Zeit</th>
            <th scope="col">Punkte</th>
        </tr>
        </thead>
</body>
</div>
</html>
