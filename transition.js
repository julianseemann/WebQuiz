var index=sessionStorage.getItem("index");
var scoreSum=sessionStorage.getItem("score");
var timeSum=sessionStorage.getItem("time");
var quizLength=sessionStorage.getItem("length");
$(document).ready(function()
	{
		var time = window.location.hash.substring(1).split('s')[0];
		var score= window.location.hash.substring(1).split('s')[1];
		var args=window.location.hash.substring(0)
		append();
		console.log(index);

		function append()
		{
			console.log(quizLength);
			console.log(time);
			console.log(score);
			console.log(index);
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
        $("#gotoFrage").remove();
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
