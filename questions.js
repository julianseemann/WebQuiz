

$(document).ready(function()
{
  var antwort=$('.antwort')
  var score=900;
  var richtig=1;
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
            window.location = "transition.html" + '#' + end +'s'+0;  //füge Transition auf seite zwischen Fragen zu, speicher in Datenbank
          }
      });

      setTimeout(function timeOver()
    {
      score=0;
      console.log("Antwortszeit überschritten");
      window.location = "transition.html"+'#'+15000+'s'+0;},15000)  //füge Transition auf seite zwischen Fragen zu, speicher in DB
    function timer(end)
    {
      //console.log(score-(((stop-start)/10)*(score/1500)));
      if(end<15000)
      score=score-((end/10)*(score/1500));
      else
      score=0;
    }

});
