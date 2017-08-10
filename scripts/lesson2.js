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

   $(".bt_border").click(function(){

        var imagename=$(this).html();
        $("#image1").attr("src","images/"+imagename+".png");
    });
    //Timer Counter
    window.onload = function () {
        var set_minutes = 60 * 25,
            display = document.querySelector('#timer');
        startTimer(set_minutes, display);
    };
    //
   
 var answer26 = 0, answer27 = 0, answer28 = 0, answer29 = 0, answer30 = 0;

     $('input:radio[name="q26"]').change(
    function(){
       if ($(this).val() == 6) {
       answer26 = "5";}
       else{ answer26 = "0";}
    });
 $('input:radio[name="q27"]').change(
    function(){
       if ($(this).val() == 1) {
       answer27 = "5";}
       else{ answer27 = "0";}
    });
    
    $('input:radio[name="q28"]').change(
    function(){
       if ($(this).val() == 2) {
       answer28 = "5";}
       else{ answer28 = "0";}
    });
    

    $('input:radio[name="q29"]').change(
    function(){
       if ($(this).val() == 5){
       answer29 = "5";}
       else{ answer29 = "0";}
    });

    $('input:radio[name="q30"]').change(
    function(){
       if ($(this).val() == 9){
       answer30 = "5";}
       else{ answer30 = "0";}
    });

$("#result").click(function() {

var l2 = Number(answer26)+ Number(answer27)+ Number(answer28) + Number(answer29) + Number(answer30)  ;

alert(l2);

});
 

});


