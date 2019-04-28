<?php
echo $this->header;
?>
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
<div class="QuestionBox">
<body class="scorebordbody">
<h1 class="text-centerscoreboard">Scoreboard</h1>
<h2 class="text-centerscoreresult">Dein Ergebnis</h2>


    <table class="table">
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
