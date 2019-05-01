var richtig;

var index=sessionStorage.getItem("index");
var wahl=sessionStorage.getItem("quiz");
var isCheater=sessionStorage.getItem("isCheater");
var quizLength=sessionStorage.getItem("length");

//extrahier Variablen auss sessionStorage
var cheater = true;

$.getJSON( "JSON/question.json", function( json ) {

	if (index==null)
	{
		index=0;
		//falls index=null setze index auf 0
	}
	//sessionStorage.removeItem("index");
	//window.location = "quizlist.html";
	richtig=json[wahl].fragen[index].richtig;
	var antwort1=json[wahl].fragen[index].antwort1;
	var antwort2=json[wahl].fragen[index].antwort2;
	var antwort3=json[wahl].fragen[index].antwort3;
	var antwort4=json[wahl].fragen[index].antwort4;
	var name=json[wahl].fragen[index].name;

	//entnehme variablen aus der JSON

	sessionStorage.setItem("index",Number(index)+Number(1));

	//inkrementiere index, nachdem variablen entnommen           

	fillHtml();
	function fillHtml()
	{
		$('.questionArea').append(name);
		$('#1').append(antwort1);
		$('#2').append(antwort2);
		$('#3').append(antwort3);
		$('#4').append(antwort4);

		//fülle Kästchen mit entsprechenden Werten
	}
});
$(document).ready(function()
	{
		var score=900;
		var start = new Date().getTime(); //nehme Anfangszeit auf
		var antwort=$('.antwort')
		antwort.click(function()
			{
				//wenn angecklickt wollen wir wissen ob richtig oder falsch angeklickt 
				//und in welcher zeit ebenso wollen wir dass der nutzer anklickt also
				//cheater=false
				//wenn angeklickt ... nutzer auf transition umgeleitet
				var stop = new Date().getTime(); //nehme endzeit auf

				cheater=false;
				var end=stop-start; //berechne gesamtzeit
				if(this.id==richtig)
				{
					timer(end);
					window.location = "transition"+'#'+end+'s'+score;
				}
				else
				{
					score=0;
					setScore(end);
					window.location = "transition" + '#' + end +'s'+0; 
				}
			});

		setTimeout(function timeOver()
			{
				//wenn zeit aus setze score auf null und geh auf transition
				//nutzer hat gewolltes verhalten gezeigt --> cheater=false
				cheater=false;
				score=0;
				setScore(15000);
				window.location = "transition"+'#'+15000+'s'+0;

			},15000)

		function timer(end)
		{
			//Berechne score in abhänigigkeit von Zeit... score=p, zeit=t: p=900-(t/10)*(700/1500)
			//console.log(score-(((stop-start)/10)*(score/1500)));
			if(end<15000)
			{
				score=score-((end/10)*((score-200)/1500));
			}
			else
			{
				score=0;
			}
			setScore(end);
		}
		function setScore(end)
		{
			//inkrementier variablen in sessionStorage um die Variablen, die bei dieser Frage entstanden
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
		//falls benutzer sich ungewollt verhalten hat... lösche seine Spieldaten und setz isCheater auf true
		sessionStorage.removeItem("score");
		sessionStorage.removeItem("time");
		sessionStorage.removeItem("index");
		sessionStorage.setItem("isCheater",true);
	}
}
