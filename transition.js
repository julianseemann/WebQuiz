$(document).ready(function()
{
var time = window.location.hash.substring(1).split('s')[0];
var score= window.location.hash.substring(1).split('s')[1];
var args=window.location.hash.substring(0)
append();
function append()
{
  console.log(time);
  console.log(score);
if(time==15000)
{
$('#Antwortszeit').append("Bist du ein Denker ? Deine zeit ist abgelaufen Aristotheles");
}
else if(score==0&&time!=15000)
{
$('#Punkte').append("Ouch das muss weh tun so scheiße zu sein.");
}
else if(score!=0&&time!=15000)
{
$('#Antwortszeit').append("Du hast in "+parseInt(time/100)/10+" s geantwortet.");
$('#Punkte').append("Du hast "+parseInt(score)+" Punkte.");
}
$('#gotoFrage').click(function(){window.location = "questions.html"+args;})
}
});
