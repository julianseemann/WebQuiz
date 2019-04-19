var wahl=sessionStorage.getItem("quiz");
$.getJSON( "JSON/question.json", function( json )
{
  var title=json[wahl].name;
$(document).ready(function()
	{
$("#title").append(title);
	});
});
