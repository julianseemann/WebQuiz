sessionStorage.removeItem("isCheater"); 
/*falls der Nutzer unsere seite verlässt während des Quiz, wollen wir nicht, dass er
mit "Hey du Cheater" beim nächsten Quiz belästigt wird*/
$(document).ready(function()
	{
		$(".quizWahl").click( function()
			{
				//setze variable "quiz" in Sessionstorage auf die ID vom jeweiligen button und leite um zu startQuiz
				//wenn button angeklickt.  
				sessionStorage.setItem("quiz",this.id);
				window.location = "startQuiz";
			});
	});
