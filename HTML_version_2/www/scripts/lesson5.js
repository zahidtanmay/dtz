/**
 * Created by madam on 5/6/16.
 */
/**
 * Created by madam on 5/5/16.
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

$("#result").click(function() {

    var answer_l1, answer_l2, answer_l3, answer_l4, answer_l5, answer_l6, answer_l7 ;
    // qh1
    if($("#ql1").val() == 1)
    { answer_l1 = "5";}
else{ answer_l1 = "0";}
   // q1
 if($("#ql2").val() == 3)
    { answer_l2 = "5";}
else { answer_l2 = "0";}
   // q2
    if($("#ql3").val() == 1)
   { answer_l3= "5";}
else { answer_l3 = "0";}

    // q3
    if($("#ql4").val() == 1)
        {answer_l4 = "5";}
else{ answer_l4 = "0"; }
    // q4
    if($("#ql5").val() == 2)
        {answer_l5 = "5";}
else { answer_l5 = "0";}

// q4
    if($("#ql6").val() == 2)
        {answer_l6 = "5";}
else { answer_l6 = "0";}
// q4
    if($("#ql7").val() == 2)
        {answer_l7 = "5";}
else { answer_l7 = "0";}


var l5 = Number(answer_l1) + Number(answer_l2) + Number(answer_l3) + Number(answer_l4) + Number(answer_l5)+ Number(answer_l6) + Number(answer_l7) ;
alert (l5);


});

});

