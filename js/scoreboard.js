$(document).ready(function()
{
var quizID="quiz1";
 function query()
{
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
	for( i in scores)
	{
		$('#scoreTable').append("<tr><td>"+scores[i].name+"</td><td>"+parseInt(scores[i].compleTime/100)/10+"sec</td><td>"+scores[i].score+"</td></tr>");

	}
	$('#scoreTable').append("</tbody></table>");
}
query();
      $('.selector').click(function()
  {
		$("#scoreTable tr:gt(0)").remove();
    quizID=this.id;
       query();
  });
});
