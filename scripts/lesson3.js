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

var answer31 = 0, answer32, answer33 = 0,answer34, answer35 = 0, 
   answer36;

    $('input:radio[name="q31"]').change(
    function(){
       if ($(this).val() == 2) {
       answer31 = "5";}
       else{ answer31 = "0";}
    });
    
    $('input:radio[name="q33"]').change(
    function(){
       if ($(this).val() == 2) {
       answer33 = "5";}
       else{ answer33 = "0";}
    });
    
    $('input:radio[name="q35"]').change(
    function(){
       if ($(this).val() == 1){
       answer35 = "5";}
       else{ answer35 = "0";}
    });

$("#result").click(function() {
    // qh31
    if($("#q32").val() == 2)
    { answer32 = "5";}
else{ answer32 = "0";}
   // q11
 if($("#q34").val() == 3)
    { answer34 = "5";}
else { answer34 = "0";}
   // q13
    if($("#q36").val() == 1)
   { answer36 = "5";}
else { answer36 = "0";}


var l3 =  Number(answer31) + Number(answer32) + Number(answer33) + Number(answer34)
 + Number(answer35) + Number(answer36);

alert(l3);

});

});

