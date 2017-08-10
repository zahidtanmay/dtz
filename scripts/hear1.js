/**
 * Created by madam on 5/5/16.
 */
function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
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
        var set_minutes = 60 * 100,
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
    // Local stroage.

$("#result").click(function() {


    var answer1_0, answer1, answer2, answer3, answer4 ;
    // qh1
    if($("#qh1").val() == 1)
    { answer1_0 = "5";}
else{ answer1_0 = "0";}

   // q1
 if($("#q1").val() == 3)
    { answer1 = "5";}
else { answer1 = "0";}

   // q2
    if($("#q2").val() == 2)
   { answer2= "5";}
else { answer2 = "0";}

    // q3
    if($("#q3").val() == 2)
        {answer3 = "5";}
else{ answer3 = "0"; }
    // q4
    if($("#q4").val() == 3)
        {answer4 = "5";}
else { answer4 = "0";}

var h1 = Number(answer4) + Number(answer3) + Number(answer2) + Number(answer1) + Number(answer1_0);
alert (h1);


});
    
    


});

