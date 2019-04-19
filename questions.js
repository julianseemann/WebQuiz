
var richtig;
var index=sessionStorage.getItem("index");
var wahl=sessionStorage.getItem("quiz");
var isCheater=sessionStorage.getItem("isCheater");
var quizLength=sessionStorage.getItem("length");
var cheater = true;
$.getJSON( "JSON/question.json", function( json ) {
  if(isCheater)
  {
    window.location = "transition.html";
  }
	console.log( "JSON Data: " + json[wahl].name );
	if (index==null)
	{
		index=0;
	}
	if (index>=quizLength)
	{

		index=0;
		console.log(sessionStorage.getItem("score"));
		//sessionStorage.removeItem("index");
		//window.location = "quizlist.html";
	}
	console.log(index);
	richtig=json[wahl].fragen[index].richtig;
	var antwort1=json[wahl].fragen[index].antwort1;
	var antwort2=json[wahl].fragen[index].antwort2;
	var antwort3=json[wahl].fragen[index].antwort3;
	var antwort4=json[wahl].fragen[index].antwort4;
	var name=json[wahl].fragen[index].name;
	sessionStorage.setItem("index",Number(index)+Number(1));
	fillHtml();
	console.log(richtig);
	function fillHtml()
	{
		$('.questionArea').append(name);
		$('#1').append(antwort1);
		$('#2').append(antwort2);
		$('#3').append(antwort3);
		$('#4').append(antwort4);

	}
});
$(document).ready(function()
	{
    var start = new Date().getTime();
		var antwort=$('.antwort')
		var score=900;
		antwort.click(function()
			{
				var stop = new Date().getTime();
        cheater=false;
				var end=stop-start;
				if(this.id==richtig)
				{
					timer(end);
					window.location = "transition.html"+'#'+end+'s'+score;
					//füge Transition auf seite zwischen Fragen zu, speicher in Datenbank
				}
				else
				{
					score=0;
					setScore(end);
					window.location = "transition.html" + '#' + end +'s'+0;  //füge Transition auf seite zwischen Fragen zu, speicher in Datenbank
				}
			});

		setTimeout(function timeOver()
			{
        cheater=false;
				score=0;
				setScore(0);
				console.log("Antwortszeit überschritten");
				window.location = "transition.html"+'#'+15000+'s'+0;},15000)  //füge Transition auf seite zwischen Fragen zu, speicher in DB
		function timer(end)
		{
			//console.log(score-(((stop-start)/10)*(score/1500)));
			if(end<15000)
			{
				score=score-((end/10)*(score/1500));
			}
			else
			{
				score=0;
			}
			setScore(end);
		}
		function setScore(end)
		{
			var scoreSum=sessionStorage.getItem("score");
			scoreSum=Number(scoreSum)+Number(score);
			sessionStorage.setItem("score",scoreSum);
			var timeSum=sessionStorage.getItem("time");
			timeSum=Number(end)+Number(timeSum);
			sessionStorage.setItem("time",timeSum);
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
