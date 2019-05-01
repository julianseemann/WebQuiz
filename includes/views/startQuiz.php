<?php
echo $this->header;
?>
<body class="bodystartQuiz">
<h1 id="title"></h1> <!-- Da liest JS den Quiznamen von der JSON datei ein, bitte nix neischreiben -->
<btn id="gotoFrage" class="btn btnSize ">
    <a href="questions.html" class="schriftstartquiz">Willst mit dem Quiz beginnen ?</a></btn>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/isCheater.js"></script>
<script type="text/javascript" src="js/startQuiz.js"></script>
</body>
</html>
