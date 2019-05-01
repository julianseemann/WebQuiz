var wahl=sessionStorage.getItem("quiz");
//entnehme relevante variablen
$.getJSON( "JSON/question.json", function( json )
	{
		var title=json[wahl].name;
		var length=json[wahl].fragen.length;

		//entnehme Informationen aus der JSON WHERE quizID=wahl

		sessionStorage.setItem("length",length);

		// speicher Länge vom Quiz in Sessionstorage

		$(document).ready(function()
			{
				//setze den Entsprechenden Quiztitel
				$("#title").append(title);
			});
	});
