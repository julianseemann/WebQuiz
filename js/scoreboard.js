$(document).ready(function()
	{

		var number =sessionStorage.getItem("quiz");

		if(number!=null)
		{
			quizID=number;
			//falls number in sessionStorage... setze quizID auf sie
		}
		else
		{
			quizID='quiz1';
			//sonst setze quizID auf 1;
		}

		//wir wollen, dass die Benutzer trotzdem einen Scoreboard angezeigt haben, auch wenn sie
		//nichts ausgewählt haben 

		function mark()
		{
			$('.selector').removeClass("active");
			$('#'+quizID).addClass("active");
			//Mach buttons, auf die geklickt Bold
		}
		sessionStorage.removeItem("quiz");
		query();
		mark();
		function query()
		{
			//poste einen JSON an den controller
			$.ajax({
				'url':    'scoreboard',
				'method': 'post',
				'data':    {'action':'getScore','quizID':quizID},
				'success': function(receivedData) {
					if(receivedData.result) {
						//after save change url to scoreboard
						var scores=JSON.parse(receivedData.message);
						write(scores);
					}

				}
			});

		}
		function write(scores)
		{
			//schreibe scores in die tabelle ein
			for( i in scores)
			{
				$('#scoreTable').append("<tr><td>"+(parseInt(i)+1)+"</td><td>"+scores[i].name+"</td><td>"+parseInt(scores[i].compleTime/100)/10+"sec</td><td>"+scores[i].score+"</td></tr>");

			}
			$('#scoreTable').append("</tbody></table>");
		}


		$('.selector').click(function()
			{
				//falls selector angeklickt, lösche werte in der tabelle und schreibe neue Werte ein und markiere was angecklickt
				$("#scoreTable tr:gt(0)").remove();
				quizID=this.id;
				query();
				mark();
			});
	});
