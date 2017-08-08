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

var answerl1, answer21, answer22, answer23, answer24, answer25 ;
    // ql1
    if($("#ql1").val() == 1)
    { answerl1 = "5";}
else{ answerl1 = "0";}

   // q21
 if($("#q21").val() == 1)
    { answer21 = "5";}
else { answer21 = "0";}

   // q22
    if($("#q22").val() == 2)
   { answer22= "5";}
else { answer22 = "0";}

    // q23
    if($("#q23").val() == 1)
        {answer23 = "5";}
else{ answer23 = "0"; }
    // q24
    if($("#q24").val() == 1)
        {answer24 = "5";}
else { answer24 = "0";}
// q25
    if($("#q25").val() == 3)
        {answer25 = "5";}
else { answer25 = "0";}

var l1 =  Number(answer25) +Number(answer24) + Number(answer23) + Number(answer22) + Number(answer21) + Number(answerl1);
alert (l1);

});
});



