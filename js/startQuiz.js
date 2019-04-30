var wahl=sessionStorage.getItem("quiz");
var isCheater=sessionStorage.getItem("isCheater");
$.getJSON( "JSON/question.json", function( json )
{
      if(isCheater)
  {
    window.location = "transition";
  }
  var title=json[wahl].name;
  var length=json[wahl].fragen.length;

  sessionStorage.setItem("length",length);
$(document).ready(function()
	{
$("#title").append(title);
	});
});
