
$(document).ready(function()
{
  var antwort=$('.antwort')
  var score=900;
  var richtig=1;
  var start = new Date().getTime();

      antwort.click(function()
      {
        var stop = new Date().getTime();
          if(this.id==richtig)
          {
            timer(stop);
          }
          else
          {
            score=0;
          }
      });
      function timer(stop)
      {
        //console.log(score-(((stop-start)/10)*(score/1500)));
        var complete=stop-start;
        if(complete<15000)
        score=score-(((complete)/10)*(score/1500));
        else
        score=0;
      }

});
