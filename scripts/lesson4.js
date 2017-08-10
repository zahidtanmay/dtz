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
    //Audio Player

var answer37 = 0,  answer38 = 0, answer39 = 0;

    $('input:radio[name="q37"]').change(
    function(){
       if ($(this).val() == 2) {
       answer37 = "5";}
       else{ answer37 = "0";}
    });
    
    $('input:radio[name="q38"]').change(
    function(){
       if ($(this).val() == 2) {
       answer38 = "5";}
       else{ answer38 = "0";}
    });
    
    $('input:radio[name="q39"]').change(
    function(){
       if ($(this).val() == 1){
       answer39 = "5";}
       else{ answer39 = "0";}
    });

    $("#result").click(function() {

    var l3 =  Number(answer37) + Number(answer38) + Number(answer39);
   

    alert(l3);
    });
});

