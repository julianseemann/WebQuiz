var wahl=sessionStorage.getItem("quiz");
$.getJSON( "JSON/question.json", function( json )
{
  var title=json[wahl].name;
  var length=json[wahl].fragen.length;

  sessionStorage.setItem("length",length);
$(document).ready(function()
	{
console.log(length);
$("#title").append(title);
	});
});
