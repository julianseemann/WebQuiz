<?php
echo $this->header;
?>
<body class="bodyquestions">

<div class="QuestionBox text-center">
  <div class="QuestionSqaure card">
    <p class="text-center questionArea"></p>
  </div>
  <div class="timer card">

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

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/isCheater.js"></script>
<script type="text/javascript" src="js/questions.js"></script>
</body>
</html>
