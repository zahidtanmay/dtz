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

    //Answers

var answer_h31 = 0 ,answer_h32, answer10=0, answer11, answer12 = 0,answer13, answer14 = 0, 
   answer15, answer16 = 0,  answer17;


    $('input:radio[name="q31"]').change(
    function(){
       if ($(this).val() == 1) {
       answer_h31 = "5";}
       else{ answer_h31 = "0";}
    });
    

    $('input:radio[name="q10"]').change(
    function(){
       if ($(this).val() == 2) {
       answer10 = "5";}
       else{ answer10 = "0";}
    });
    

    $('input:radio[name="q12"]').change(
    function(){
       if ($(this).val() == 2){
       answer12 = "5";}
       else{ answer12 = "0";}
    });

    $('input:radio[name="q14"]').change(
    function(){
       if ($(this).val() == 1) {
       answer14 = "5";}
       else{ answer14 = "0";}
    });

    $('input:radio[name="q16"]').change(
    function(){
       if ($(this).val() == 2) {
       answer16 = "5";}
       else{ answer16 = "0";}
    });
    


$("#result").click(function() {

    // qh31
    if($("#qh32").val() == 1)
    { answer_h32 = "5";}
else{ answer_h32 = "0";}

   // q11
 if($("#q11").val() == 3)
    { answer11 = "5";}
else { answer11 = "0";}

   // q13
    if($("#q13").val() == 3)
   { answer13 = "5";}
else { answer13 = "0";}

    // q15
    if($("#q15").val() == 3)
        {answer15 = "5";}
else{ answer15 = "0"; }

    // q17
    if($("#q17").val() == 2)
        {answer17 = "5";}
else { answer17 = "0";}

var h3 = Number(answer_h31) + Number(answer_h32) + Number(answer10) 
+ Number(answer11) + Number(answer12) + Number(answer13) + Number(answer14) 
+ Number(answer15) + Number(answer16) + Number(answer17);

alert(h3);

});

});