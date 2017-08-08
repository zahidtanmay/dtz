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

    // Answer

    var answerh4 = 0, answer18 = 0, answer19 = 0, answer20 = 0;

     $('input:radio[name="qh4"]').change(
    function(){
       if ($(this).val() == 1) {
       answerh4 = "5";}
       else{ answerh4 = "0";}
    });
    

    $('input:radio[name="q18"]').change(
    function(){
       if ($(this).val() == 5) {
       answer18 = "5";}
       else{ answer18 = "0";}
    });
    

    $('input:radio[name="q19"]').change(
    function(){
       if ($(this).val() == 1){
       answer19 = "5";}
       else{ answer19 = "0";}
    });

    $('input:radio[name="q20"]').change(
    function(){
       if ($(this).val() == 4){
       answer20 = "5";}
       else{ answer20 = "0";}
    });

$("#result").click(function() {

var h4 = Number(answerh4)+ Number(answer18) + Number(answer19) + Number(answer20)  ;

alert(h4);

});

});
