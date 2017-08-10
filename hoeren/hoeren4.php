<?php include("../partials/header.php") ?>

    <div class="clear"></div>
    <div class="decoration add_cell"></div>

    <div class="explain_box add_cell">
     <p>
      Sie h&ouml;ren Aussagen zu einem Thema. Welcher der S&auml;tze a bis f passt zu den Aussagen 18 bis 20?
      <br>Markieren Sie Ihre L&ouml;sungen f&uuml;r 18 bis 20.
      <br>Lesen Sie jetzt die S&auml;tze a bis f. Dazu haben Sie eine Minute Zeit. Danach h&ouml;ren Sie die Aussagen.
     </p>
    </div>
    <div class="clear"></div>
    <div class="decoration"></div>
    <!--Audio Play 14%-->
    <div class="head_title">
     <button type="button" id="audio" class="audio_bt fa fa-play audio_low"></button>
     <audio id="myaudio">
      <source src="audio/hv4.mp3" type="audio/mpeg">
     </audio>
     <a class="button_tit audio_add"><b>Abspielen</b></a>

    </div>
    <div class="clear"></div>
    <div class="decoration"></div>


    <div class="hour4_left">
     <!--a-->
     <div class="h4_cell">
      <p class="h4_cell1"><b>a</b></p>
      <p class="h4_cell2">Es ist gut, wenn Kinder ihre Hausaufgaben in der Schule machen können.</p>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>

     <!--b-->
     <div class="h4_cell">
      <p class="h4_cell1"><b>b</b></p>
      <p class="h4_cell2">Die ganztägige Grundschule ist zu teuer.</p>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>
     <!--a-->
     <div class="h4_cell">
      <p class="h4_cell1"><b>c</b></p>
      <p class="h4_cell2">Es ist schade, dass Kinder dann keine Freizeit mehr haben.</p>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>
     <!--a-->
     <div class="h4_cell">
      <p class="h4_cell1"><b>d</b></p>
      <p class="h4_cell2">Kinder sollen nachmittags nicht allein am Computer sitzen.</p>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>
     <!--a-->
     <div class="h4_cell">
      <p class="h4_cell1"><b>e</b></p>
      <p class="h4_cell2">Kinder haben nachmittags in der Ganztagsschule interessante Beschäftigung.</p>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>
     <!--a-->
     <div class="h4_cell">
      <p class="h4_cell1"><b>f</b></p>
      <p class="h4_cell2">In der ganztägigen Grundschule machen die Kinder Lernspiele am Computer.</p>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>
    </div>
    <!-- Head question -->
    <div class="hour4_right">
     <div class="h4_head1">
      <h3 class="color-red-dark">Beispiel</h3>
      <div class="h4_head2">
       <nav class="segmented">
        <input type="radio" name="qh4" value="1" id="40a">
        <label for="40a">a</label>
        <input type="radio" name="qh4" value="2" id="40b">
        <label for="40b">b</label>
        <input type="radio" name="qh4" value="3" id="40c">
        <label for="40c">c</label>
        <input type="radio" name="qh4" value="4" id="40d">
        <label for="40d">d</label>
        <input type="radio" name="qh4" value="5" id="40e">
        <label for="40e">e</label>
       </nav>
      </div>
     </div>
     <div class="clear cell5"></div>
     <div class="decoration"></div>


     <!--18question-->
     <div class="segment_h">
      <p class="h4_cell1"><b>18.&nbsp</b></p>
      <nav class="segmented segment_cell">
       <input type="radio" name="q18" value="1" id="a18">
       <label for="a18">a</label>
       <input type="radio" name="q18" value="2" id="b18">
       <label for="b18">b</label>
       <input type="radio" name="q18" value="3" id="c18">
       <label for="c18">c</label>
       <input type="radio" name="q18" value="4" id="d18">
       <label for="d18">d</label>
       <input type="radio" name="q18" value="5" id="e18">
       <label for="e18">e</label>
       <input type="radio" name="q18" value="6" id="f18">
       <label for="f18">f</label>
      </nav>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>

     <!--19 question-->
     <div class="segment_h">
      <p class="h4_cell1"><b>19.&nbsp</b></p>
      <nav class="segmented segment_cell">
       <input type="radio" name="q19" value="1" id="a19">
       <label for="a19">a</label>
       <input type="radio" name="q19" value="2" id="b19">
       <label for="b19">b</label>
       <input type="radio" name="q19" value="3" id="c19">
       <label for="c19">c</label>
       <input type="radio" name="q19" value="4" id="d19">
       <label for="d19">d</label>
       <input type="radio" name="q19" value="5" id="e19">
       <label for="e19">e</label>
       <input type="radio" name="q19" value="6" id="f19">
       <label for="f19">f</label>
      </nav>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>

     <!--20 question-->
     <div class="segment_h">
      <p class="h4_cell1"><b>20.&nbsp</b></p>
      <nav class="segmented segment_cell">
       <input type="radio" name="q20" value="1" id="a20">
       <label for="a20">a</label>
       <input type="radio" name="q20" value="2" id="b20">
       <label for="b20">b</label>
       <input type="radio" name="q20" value="3" id="c20">
       <label for="c20">c</label>
       <input type="radio" name="q20" value="4" id="d20">
       <label for="d20">d</label>
       <input type="radio" name="q20" value="5" id="e20">
       <label for="e20">e</label>
       <input type="radio" name="q20" value="6" id="f20">
       <label for="f20">f</label>
      </nav>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>

    </div>
   </div>
  </div>
 </div>
 <!--Footer Button-->
 <?php include("../partials/footer.php") ?>