<?php $test_part = 'H&ouml;ren Teil 2'; $time_text = 'H&ouml;ren insgesamt 45 Minuten'; ?>
<?php include("../partials/header.php") ?>
<?php echo $_SESSION['q1'];echo $_SESSION['q2'];echo $_SESSION['q3'];echo $_SESSION['q3']; ?>
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
     <div class="title_cell">
 <button type="button" id="audio" class="audio_bt fa fa-play" 
 onclick="document.getElementById('myaudio').play()"></button>
 <audio id="myaudio">
  <source src="../audio/hv2.mp3" type="audio/mpeg">
</audio>
  <a class="button_tit"><b> Abspielen </b></a>
  <!--Timer Counter-->
</div>
<form>
  <div class="clear"></div>
     <div class="decoration"></div>

     <!--5 question -->
     <div class="cell_hoeren1">
      <p class="question_cell1"><b>5.&nbsp</b>Was h&ouml;ren Sie?</p>
      <select name="q5" id="q5" class="select_cell1">
      <option>wählen</option>
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
      <select name="q6" id="q6" class="select_cell1">
      <option>wählen</option>
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
      <select name="q7" id="q7" class="select_cell1">
      <option>wählen</option>
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
      <select name="q8" id="q8" class="select_cell1">
      <option>wählen</option>
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
      <select name="q9" id="q9" class="select_cell1">
      <option>wählen</option>
       <option value="1"> Es gibt Regen.</option>
       <option value="2"> Es gibt Schnee.</option>
       <option value="3"> Es wird sonnig.</option>
      </select>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>
</form>
     


    </div>
   </div>
  </div>

  <script>

  $(function(){
    $( "select" ).change(function(){
      jQuery.ajax({
        type: "POST",
        data:  $( "form" ).serialize(),

        success: function(data){
          console.log('value');
        }
      }); 
    });


  });
</script>


<?php

if(isset($_POST['q5']))
{
  if($_POST['q5'] == 1){
    $_SESSION['q5']=1;
  }else{
    $_SESSION['q5']=0;
  }
}

if(isset($_POST['q6']))
{
  if($_POST['q6'] == 3){
    $_SESSION['q6']=1;
  }else{
    $_SESSION['q6']=0;
  }
}

if(isset($_POST['q7']))
{
  if($_POST['q7'] == 1){
    $_SESSION['q7']=1;
  }else{
    $_SESSION['q7']=0;
  }
}

if(isset($_POST['q8']))
{
  if($_POST['q8'] == 3){
    $_SESSION['q8']=1;
  }else{
    $_SESSION['q8']=0;
  }
}

if(isset($_POST['q9']))
{
  if($_POST['q9'] == 3){
    $_SESSION['q9']=1;
  }else{
    $_SESSION['q9']=0;
  }
}

?>
  <!--Footer Button-->
  <?php include("../partials/footer.php") ?>