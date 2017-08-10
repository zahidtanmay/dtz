/**
 * Created by madam on 5/6/16.
 */
function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        // get the number of seconds that have elapsed since
        // startTimer() was called
        diff = duration - (((Date.now() - start) / 1000) | 0);

        // does the same job as parseInt truncates the float
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 024:59
            start = Date.now() + 1000;
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000);
}
$(document).ready(function(){

    //Timer Counter
    window.onload = function () {
        var set_minutes = 60 * 25,
            display = document.querySelector('#timer');
        startTimer(set_minutes, display);
    };

    //Audio Player
    $("#audio").on("click",function(){
        $( "#audio" ).toggleClass( "fa-pause" );

        var myaudio= document.getElementById("myaudio");
        if (myaudio.paused){
            myaudio.play();
        }
        else
        {
            myaudio.pause();
        }
    });

    $("#result").click(function() {


    var answer5, answer6, answer7, answer8, answer9 ;
    // q5
    if($("#q5").val() == 1)
    { answer5 = "5";}
else{ answer5 = "0";}

   // q6
 if($("#q6").val() == 3)
    { answer6 = "5";}
else { answer6 = "0";}

   // q7
    if($("#q7").val() == 1)
   { answer7 = "5";}
else { answer7 = "0";}

    // q8
    if($("#q8").val() == 3)
        {answer8 = "5";}
else{ answer8 = "0"; }
    // q9
    if($("#q9").val() == 3)
        {answer9 = "5";}
else { answer9 = "0";}
var h2 = Number(answer5) + Number(answer6) + Number(answer7) + Number(answer8) + Number(answer9);
alert ( h2);


});

});