
var richtig;
  var index=sessionStorage.getItem("index");
  var quizLength=2;
$.getJSON( "JSON/question.json", function( json ) {
    console.log( "JSON Data: " + json.quiz1.name );
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
    richtig=json.quiz1.fragen[index].richtig;
    var antwort1=json.quiz1.fragen[index].antwort1;
    var antwort2=json.quiz1.fragen[index].antwort2;
    var antwort3=json.quiz1.fragen[index].antwort3;
    var antwort4=json.quiz1.fragen[index].antwort4;
    var name=json.quiz1.fragen[index].name;
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
  var antwort=$('.antwort')
  var score=900;
  var start = new Date().getTime();
      antwort.click(function()
      {
        var stop = new Date().getTime();
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
