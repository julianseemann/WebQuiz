var quizLength=2;
var index=sessionStorage.getItem("index");
var scoreSum=sessionStorage.getItem("score");
var timeSum=sessionStorage.getItem("time");
$(document).ready(function()
	{
		var time = window.location.hash.substring(1).split('s')[0];
		var score= window.location.hash.substring(1).split('s')[1];
		var args=window.location.hash.substring(0)
		append();
		function append()
		{
			console.log(time);
			console.log(score);
			console.log(index);
			if(index>=quizLength)
			{
				$('#title').append(" Quiz fertig");
				$('#FertigZeit').append("insgesamt hast du "+parseInt(timeSum/100)/10+" s"+" Zeit braucht");
				$('#FertigPunkte').append("insgesamt hast du "+parseInt(scoreSum)+" Punkte erreicht");
				$("#Antwortszeit").append('Die letzte Frage hast du in '+parseInt(time/100)/10+" s"+" geantwortet");
				$("#Punkte").append(" Bei der letzten Frage hast du "+parseInt(score)+" erreicht");
        $('.QuestionBox').append('<br><btn id="neustarten" class="btn btnSize ">Neu Starten</btn>');
        $('.QuestionBox').append('<br><btn id="quizlist" class="btn btnSize ">Zurück zur Quizliste</btn>');
				sessionStorage.removeItem("score");
				sessionStorage.removeItem("time");
        sessionStorage.removeItem("index");
			}
			else if(time==15000)
			{
				$('#Antwortszeit').append("Bist du ein Denker ? Deine zeit ist abgelaufen Aristotheles");
			}
			else if(score==0&&time!=15000)
			{
				$('#Punkte').append("Ouch das muss weh tun so scheiße zu sein.");
			}
			else if(score!=0&&time!=15000)
			{
				$('#Antwortszeit').append("Du hast in "+parseInt(time/100)/10+" s geantwortet.");
				$('#Punkte').append("Du hast "+parseInt(score)+" Punkte.");
			}
			$('#gotoFrage').click(function()
      {
        window.location = "questions.html"+args;
      });
      $('#quizlist').click(function()
      {
        window.location="quizlist.html";
       sessionStorage.removeItem("quiz");
     });
      $('#neustarten').click(function()
      {
        window.location="startQuiz.html";
      });
		}

	});
