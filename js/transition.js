var index=sessionStorage.getItem("index");
var scoreSum=sessionStorage.getItem("score");
var timeSum=sessionStorage.getItem("time");
var quizLength=sessionStorage.getItem("length");
var quizID=sessionStorage.getItem("quiz");
var cheater = true;
$(document).ready(function()
	{
		var time = window.location.hash.substring(1).split('s')[0];
		var score= window.location.hash.substring(1).split('s')[1];
		var args=window.location.hash.substring(0)
		append();

		function append()
		{
      if(index==null)
      {
        $('#title').append(" Hey Cheaten bringt dich nirgendwo");
        $("#gotoFrage").remove();
        $('.QuestionBox').append('<br><btn id="neustarten" class="btn btnSize ">Neu Starten</btn>');
        $('.QuestionBox').append('<br><btn id="quizlist" class="btn btnSize ">Zurück zur Quizliste</btn>');
        sessionStorage.removeItem("isCheater");
				sessionStorage.removeItem("length");
      }
			else if(index==quizLength)
			{
				$('#title').append(" Quiz fertig");
				$('#FertigZeit').append("insgesamt hast du "+parseInt(timeSum/100)/10+" s"+" Zeit braucht");
				$('#FertigPunkte').append("insgesamt hast du "+parseInt(scoreSum)+" Punkte erreicht");
				$("#Antwortszeit").append('Die letzte Frage hast du in '+parseInt(time/100)/10+" s"+" geantwortet");
				$("#Punkte").append(" Bei der letzten Frage hast du "+parseInt(score)+" erreicht");
        $('.QuestionBox').append('<br><btn id="neustarten" class="btn btnSize ">Neu Starten</btn>');
        $('.QuestionBox').append('<br><btn id="quizlist" class="btn btnSize ">Zurück zur Quizliste</btn>');
				$('.QuestionBox').append('<br><btn id="scoreboard" class="btn btnSize ">Zum Scoreboard</btn>');
        $("#gotoFrage").remove();
				$.ajax({
	         'url':    'transition',
	         'method': 'post',
	         'data':    {'action': 'saveScore','quizID':quizID, 'time': timeSum, 'score': scoreSum},
	         'success': function(receivedData) {
	             if(receivedData.result) {
	                 //after save change url to scoreboard

	             		}

	 							}
 							});

				sessionStorage.removeItem("score");
				sessionStorage.removeItem("time");
        sessionStorage.removeItem("index");
				sessionStorage.removeItem("length");
			}
			else if(time==15000)
			{

				$('#Antwortszeit').append("Bist du ein Denker ? Deine Zeit ist abgelaufen Aristotheles");
				$('#title').append("Oops");
			}
			else if(score==0&&time!=15000)
			{
				$('#Punkte').append("Ouch das muss weh tun.");

        $('#title').append("Oops");
			}
			else if(score!=0&&time!=15000)
			{
        $('#title').append("Gute Arbeit");
				$('#Antwortszeit').append("Du hast in "+parseInt(time/100)/10+" s geantwortet.");
				$('#Punkte').append("Du hast "+parseInt(score)+" Punkte.");
			}
			$('#gotoFrage').click(function()
      {
                cheater=false;
        window.location = "questions"+args;
      });
      $('#quizlist').click(function()
      {
          cheater=false;
        window.location="quizlist";
       sessionStorage.removeItem("quiz");
     });
      $('#neustarten').click(function()
      {
          cheater=false;
        window.location="startQuiz";
      });
        $('#scoreboard').click(function()
            {
            cheater=false;
            window.location="scoreboard";
					});
		}


	});

  window.onbeforeunload = function() {
    if(cheater)
    {
      sessionStorage.removeItem("score");
      sessionStorage.removeItem("time");
      sessionStorage.removeItem("index");
      sessionStorage.setItem("isCheater",true);
    }
}
