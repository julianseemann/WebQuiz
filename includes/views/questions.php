<?php
echo $this->header;
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1 class="navbar-brand">Sport</h1>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
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
<body class="bodyquestions">

<div class="QuestionBox text-center">
  <div class="QuestionSqaure">
    <h1 class="text-center questionArea"></h1>
  </div>
  <div class="timer">

    <!-- Umbedingt wichtig !!!! Da brauch ich von jemandem, dass er mir keyframes mit
    transition-timing function linear und transition duration 15s reintut... damit ma sehen,
    dass der Zeitbar ansteigt und die Zeit knapp wird -->
  </div>
  <div class="btnCont">
<button type="button" class="btn btnSize antwort" id="1"></button>
<button type="button" class="btn btnSize antwort" id="2"></button>
</div>
<div class="btnCont">
<button type="button" class="btn btnSize antwort" id="3"></button>
<button type="button" class="btn btnSize antwort" id="4"></button>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/questions.js"></script>

</body>
</html>
