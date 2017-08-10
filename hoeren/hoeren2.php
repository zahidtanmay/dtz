<?php include("../partials/header.php") ?>
<?php $_SESSION['test1'] = 0; 
echo $_SESSION['sweets']; ?>
     <div class="clear"></div>
     <div class="decoration add_cell"></div>

     <div class="explain_box">
      <p class="heading-subtitle no-bottom">
       Sie h&ouml;ren f&uuml;nf Ansagen aus dem Radio. Zu jeder Ansage gibt es eine Aufgabe. Welche L&ouml;sung passt am besten?
       <br>W&auml;hlen Sie Ihre L&ouml;sungen f&uuml;r die Aufgaben 5 bis 9 im Listenfeld.
       <br>Vorsicht: Was Sie hier sehen, muss nicht die korrekte L&ouml;sung sein!
      </p>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>
     <!--Audio Play 14%-->
     <div class="cell_hoeren1 ">
      <button type="button" id="audio" class="audio_bt fa fa-play"></button>
      <audio id="myaudio">
       <source src="audio/hv2.mp3" type="audio/mpeg">
      </audio>
      <a class="button_tit"><b>Abspielen</b></a>

     </div>
     <div class="clear"></div>
     <div class="decoration"></div>

     <!--5 question -->
     <div class="cell_hoeren1">
      <p class="question_cell1"><b>5.&nbsp</b>Was h&ouml;ren Sie?</p>
      <select action="php/contact.php" id="q5" class="select_cell1">
       <option value="1"> Das Horoskop.</option>
       <option value="2"> Den Wetterbericht.</option>
       <option value="3"> Die Sportnachrichten.</option>
      </select>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>

     <!--6 question -->
     <div class="cell_hoeren1">
      <p class="question_cell1"><b>6.&nbsp</b> Die Z&uuml;ge ...</p>
      <select action="php/contact.php" id="q6" class="select_cell1">
       <option value="1"> fahren mit Verspätung.</option>
       <option value="2">fahren wie immer.</option>
       <option value="3"> werden durch Busse ersetzt.</option>
      </select>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>

     <!--7 question-->
     <div class="cell_hoeren1">
      <p class="question_cell1"><b>7.&nbsp</b> Wie macht man bei dem Gewinnspiel mit?</p>
      <select action="php/contact.php" id="q7" class="select_cell1">
       <option value="1"> Man muss beim Sender anrufen.</option>
       <option value="2"> Man muss sich auf der Internetseite anmelden.</option>
       <option value="3"> Man schreibt eine Postkarte.</option>
      </select>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>

     <!--8 question -->
     <div class="cell_hoeren1">
      <p class="question_cell1"><b>8.&nbsp</b> Wo fährt der Falschfahrer?</p>
      <select action="php/contact.php" id="q8" class="select_cell1">
       <option value="1"> Auf der A 7.</option>
       <option value="2"> Auf der A 8.</option>
       <option value="3"> Auf der A 96.</option>
      </select>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>
     <!--9 question-->
     <div class="cell_hoeren1">
      <p class="question_cell1"><b>9.&nbsp</b> Wie wird das Wetter in Westdeutschland?</p>
      <select action="php/contact.php" id="q9" class="select_cell1">
       <option value="1"> Es gibt Regen.</option>
       <option value="2"> Es gibt Schnee.</option>
       <option value="3"> Es wird sonnig.</option>
      </select>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>


    </div>
   </div>
  </div>
  <!--Footer Button-->
  <?php include("../partials/footer.php") ?>