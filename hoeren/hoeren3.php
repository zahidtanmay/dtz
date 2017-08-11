<?php $test_part = 'H&ouml;ren Teil 3'; $time_text = 'H&ouml;ren insgesamt 45 Minuten'; ?>
<?php include("../partials/header.php") ?>
<?php echo $_SESSION['q5'];echo $_SESSION['q6'];echo $_SESSION['q7'];echo $_SESSION['q8'];
echo $_SESSION['q9']; ?>

<div class="clear"></div>
<div class="decoration add_cell"></div>

<div class="explain_box add_cell">
 <p>
  Sie h&ouml;ren vier Gespr&auml;che. Zu jedem Gespr&auml;ch gibt es zwei Aufgaben. Zusammen die Aufgaben 10 bis 17.<br>
  Entscheiden Sie bei jedem Gespr&auml;ch, ob die Aussage dazu richtig oder falsch ist und welche Antwort am besten passt.
  <br>Links w&auml;hlen Sie: Richtig oder Falsch. Rechts w&auml;hlen Sie Ihre L&ouml;sungen im Listenfeld. Vorsicht: Was Sie hier sehen, muss nicht die korrekte L&ouml;sung sein!
</p>
</div>
<div class="clear"></div>
<div class="decoration"></div>
<!--Audio Play 14%-->
<div class="cell_hoeren1">
 <button type="button" id="audio" class="audio_bt fa fa-play" onclick="document.getElementById('myaudio').play()"></button>
 <audio id="myaudio">
  <source src="../audio/hv3.mp3" type="audio/mpeg">
  </audio>
  <a class="button_tit"><b>Abspielen</b></a>
  <!--Timer Counter-->
</div>
<div class="clear"></div>
<div class="decoration"></div>
<!--Title question -->
<div class="cell_hoeren1 bg-1">
  <h4 class="color-red-dark">Beispiel</h4>
  <!--Title1 question-->
  <div class="half_left">
   <p class="cell_left1">Frau Erdmann ist die Chefin von Herrn Becker.</p>

   <nav class="segmented l3_seg">
    <input type="radio" name="q31" value="1" id="30a">
    <label for="30a">Richtig</label>
    <input type="radio" name="q31" value="2" id="30b">
    <label for="30b">Falsch</label>
  </nav>
</div>
<!--title2 question -->
<div class="half_right">
 <p class="cell_left2">Worum geht es?</p>
 <select action="php/contact.php" id="qh32" class="select_right1">
  <option value="1">Herr Becker erkl&auml;rt Frau Erdmann die Firmengeschichte.</option>
  <option value="2">Herr Becker m&ouml;chte f&uuml;r die Firma arbeiten.</option>
  <option value="3">Herr Becker m&ouml;chte mehr Gehalt.</option>
</select>
</div>
</div>
<div class="clear"></div>
<div class="decoration"></div>
<form>
  <!--Cell1 question -->
  <div class="cell_hoeren1">
   <!--10 question-->
   <div class="half_left remove_cell">
    <p class="cell_left1"><b>10.&nbsp</b> Das Gespr&auml;ch findet in Norwegen statt.</p>

    <nav class="segmented l3_seg">
     <input type="radio" name="q10" value="1" id="10a">
     <label for="10a">Richtig</label>
     <input type="radio" name="q10" value="2" id="10b">
     <label for="10b">Falsch</label>
   </nav>
 </div>
 <!--11 question -->
 <div class="half_right remove_cell">
  <p class="cell_left2"><b>11.&nbsp</b> Worum bittet Herr Jansen Frau Samsonov?</p>
  <select name="q11" id="q11" class="select_right1">
  <option>wählen</option>
   <option value="1">Sie soll auf das Haus von Familie Jansen aufpassen.</option>
   <option value="2">Sie soll Herrn Jansen den Schl&uuml;ssel geben.</option>
   <option value="3">Sie soll sich um die Katzen von Familie Jansen k&uuml;mmern.</option>
 </select>
</div>
</div>
<div class="clear"></div>
<div class="decoration"></div>


<!--Cell2 question -->
<div class="cell_hoeren1">
 <!--12 question-->
 <div class="half_left remove_cell">
  <p class="cell_left1"><b>12.&nbsp</b> Frau Baier und Herr Steiner sind Kollegen.</p>
  <nav class="segmented l3_seg">
   <input type="radio" name="q12" value="1" id="12a">
   <label for="12a">Richtig</label>
   <input type="radio" name="q12" value="2" id="12b">
   <label for="12b">Falsch</label>
 </nav>
</div>
<!--13 question -->
<div class="half_right remove_cell">
  <p class="cell_left2"><b>13.&nbsp</b> Was macht Frau Baier?</p>
  <select name="q13" id="q13" class="select_right1">
  <option>wählen</option>
   <option value="1">Sie kauft die Wohnung.</option>
   <option value="2">Sie mietet die Wohnung.</option>
   <option value="3">Sie will ihrem Mann von der Wohnung erz&auml;hlen.</option>
 </select>
</div>
</div>
<div class="clear"></div>
<div class="decoration"></div>

<!--Cell3 question-->
<div class="cell_hoeren1">
 <!--14 question-->
 <div class="half_left remove_cell">
  <p class="cell_left1"><b>14.&nbsp</b> Frau Melnik telefoniert mit dem Lehrer ihrer Tochter..</p>
  <nav class="segmented l3_seg">
   <input type="radio" name="q14" value="1" id="14a">
   <label for="14a">Richtig</label>
   <input type="radio" name="q14" value="2" id="14b">
   <label for="14b">Falsch</label>
 </nav>
</div>
<!--15 question -->
<div class="half_right remove_cell">
  <p class="cell_left2"><b>15.&nbsp</b> Was kann Frau Melnik nicht so gut?</p>
  <select name="q15" id="q15" class="select_right1">
  <option>wählen</option>
   <option value="1">Einladungen schreiben.</option>
   <option value="2">Getr&auml;nke verkaufen.</option>
   <option value="3">Kuchen backen.</option>
 </select>
</div>
</div>
<div class="clear"></div>
<div class="decoration"></div>

<!--Cell4 question-->

<div class="cell_hoeren1">
 <!--16 question-->
 <div class="half_left remove_cell">
  <p class="cell_left1"><b>16.&nbsp</b> Frau Keller ist in einem Lebensmittelgesch&auml;ft.</p>

  <nav class="segmented l3_seg">
   <input type="radio" name="q16" value="1" id="16a">
   <label for="16a">Richtig</label>
   <input type="radio" name="q16" value="2" id="16b">
   <label for="16b">Falsch</label>
 </nav>
</div>
<!--17 question -->
<div class="half_right remove_cell">
  <p class="cell_left2"><b>17.&nbsp</b> Wie viel kosten die Medikamente?</p>
  <select name="q17" id="q17" class="select_right1">
  <option>wählen</option>
   <option value="1">20,00 Euro</option>
   <option value="2">18,50 Euro</option>
   <option value="3">1,50 Euro</option>

 </select>
</div>
</div>
<div class="clear"></div>
<div class="decoration"></div>
</form>

</div>
</div>
</div>
<script>
  $(function(){
    function showValues() {
      jQuery.ajax({
        type: "POST",
        data:  $( "form" ).serialize(),

        success: function(data){
          console.log('value');
        }
      });
    }
    $( "input[type='checkbox'], input[type='radio']" ).on( "click", showValues );
    $( "select" ).on( "change", showValues );
    showValues(); 
  });
</script>
<?php

if(isset($_POST['q10']))
{
  if($_POST['q10'] == 2){
    $_SESSION['q10']=1;
  }else{
    $_SESSION['q10']=0;
  }
}

if(isset($_POST['q11']))
{
  if($_POST['q11'] == 3){
    $_SESSION['q11']=1;
  }else{
    $_SESSION['q11']=0;
  }
}
if(isset($_POST['q12']))
{
  if($_POST['q12'] == 2){
    $_SESSION['q12']=1;
  }else{
    $_SESSION['q12']=0;
  }
}

if(isset($_POST['q13']))
{
  if($_POST['q13'] == 3){
    $_SESSION['q13']=1;
  }else{
    $_SESSION['q13']=0;
  }
}

if(isset($_POST['q14']))
{
  if($_POST['q14'] == 1){
    $_SESSION['q14']=1;
  }else{
    $_SESSION['q14']=0;
  }
}

if(isset($_POST['q15']))
{
  if($_POST['q15'] == 3){
    $_SESSION['q15']=1;
  }else{
    $_SESSION['q15']=0;
  }
}
if(isset($_POST['q16']))
{
  if($_POST['q16'] == 2){
    $_SESSION['q16']=1;
  }else{
    $_SESSION['q16']=0;
  }
}if(isset($_POST['q17']))
{
  if($_POST['q17'] == 2){
    $_SESSION['q17']=1;
  }else{
    $_SESSION['q17']=0;
  }
}

?>
<?php include("../partials/footer.php") ?>