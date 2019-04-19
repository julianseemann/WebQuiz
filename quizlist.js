$(document).ready(function()
	{
		$(".quizWahl").click( function()
  {
    sessionStorage.setItem("quiz",this.id);
    	window.location = "startQuiz.html";
  });
	});
