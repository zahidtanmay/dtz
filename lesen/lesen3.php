<?php $page_session = 7; $page = 'lesen_3'; $test_part = 'Lesen Teil 3'; $time_text = 'Lesen insgesamt 45 Minuten';?>
<?php include('../partials/header.php'); ?>
    <div class="clear"></div>
    <div class="decoration"></div>

    <div class="explain_box head_title">
     <p class="l3_he">
      Lesen Sie die drei Texte. Zu jedem Text gibt es zwei Aufgaben. Insgesamt die Aufgaben 31 bis 36.<br>
      Entscheiden Sie bei jedem Text, ob die Aussage richtig oder falsch ist und welche Antwort im Listenfeld am besten passt.<br>
      Jeweils oben w&auml;hlen Sie: Richtig oder Falsch.
      Darunter w&auml;hlen Sie Ihre L&ouml;sung im Listenfeld. Vorsicht: Was Sie hier sehen, muss nicht die korrekte L&ouml;sung sein!
     </p>
    </div>
    <div class="clear"></div>
    <div class="decoration"></div>

    <!--Title question -->
    <div class="lesen3_he">
     <!--Title1 question-->
     <div class="left60 image_border1"></div>
     <!--title2 question -->
     <div class="right40">
     <form>
      <div>
       <p class="l3_p"><b>31.&nbsp</b> Die KKB Krankenkasse bezahlt ihren Mitgliedern einen Kurs
        im Fitness-Club.</p>
       <nav class="segmented segment_btn">
        <input type="radio" name="q31" value="1" id="31a">
        <label for="31a">Richtig</label>
        <input type="radio" name="q31" value="2" id="31b">
        <label for="31b">Falsch</label>
       </nav>
      </div>
      <div class="clear"></div>
      <div class="decoration"></div>
      <div>
       <p class="l3_p"b>32.&nbsp</b>Um am Trainingsprogramm von Trainer Tom teilzunehmen,</p>

       <select name="q32" id="q32" class="lesen3_op">
       <option>wählen</option>
        <option value="1">braucht man viel Zeit und Ausdauer.</option>
        <option value="2">muss man ins Internet gehen.</option>
        <option value="3">muss man sehr sportlich sein.</option>
       </select>
      </div>
      <div class="clear"></div>
      <div class="decoration"></div>
     </div>
    </div>
    <div class="clear"></div>
    <div class="decoration"></div>

    <!--Cell1 question -->
    <div class="lesen3_he">
     <!--Title1 question-->
     <div class="left60 image_border2"></div>

     <!--title2 question -->
     <div class="right40">
      <div>
       <p class="l3_p"><b>33.&nbsp</b> Kinder sollen immer den kürzesten Weg zur Schule nehmen.</p>
       <nav class="segmented segment_btn">
        <input type="radio" name="q33" value="1" id="33a">
        <label for="33a">Richtig</label>
        <input type="radio" name="q33" value="2" id="33b">
        <label for="33b">Falsch</label>
       </nav>
      </div>
      <div class="clear"></div>
      <div class="decoration"></div>
      <div>
       <p class="l3_p"><b>34.&nbsp</b> Eltern sollen </p>
       <select name="q34" id="q34" class="lesen3_op">
       <option>wählen</option>
        <option value="1">den ganzen Weg zur Schule langsam fahren.</option>
        <option value="2">ihre Kinder immer begleiten.</option>
        <option value="3">mit ihren Kindern den Schulweg üben.</option>
       </select>
      </div>
      <div class="clear"></div>
      <div class="decoration"></div>
     </div>
    </div>
    <div class="clear"></div>
    <div class="decoration"></div>

    <div class="lesen3_he">
     <!--Title1 question-->
     <div class="left60 image_border3"></div>
     <!--title2 question -->
     <div class="right40">

     <!-- 35 question -->
      <div>
       <p class="l3_p"><b>35.&nbsp</b> Die Firma Teletronica GmbH kann auch an einem anderen
        Termin kommen.</p>
       <nav class="segmented segment_btn">
        <input type="radio" name="q35" value="1" id="35a">
        <label for="35a">Richtig</label>
        <input type="radio" name="q35" value="2" id="35b">
        <label for="35b">Falsch</label>
       </nav>
      </div>
      <div class="clear"></div>
      <div class="decoration"></div>
      <!-- 36 question -->
      <div>
       <p class="l3_p"><b>36.&nbsp</b> Herr Demir soll vor dem 30.11. die Firma Teletronica GmbH
        anrufen.</p>

       <select name="q36" id="q36" class="lesen3_op">
       <option>wählen</option>
        <option value="1">wenn er an dem Tag nicht zu Hause ist.</option>
        <option value="2">wenn er Informationen zu seinem TV- und Radioempfang braucht.</option>
        <option value="3">wenn er keinen neuen Anschluss m&ouml;chte.</option>
       </select>
      </div>
      <div class="clear"></div>
      <div class="decoration"></div>
     </div>
     </form>
    </div>
    <div class="clear"></div>
    <div class="decoration"></div>
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


if(isset($_POST['q31']))
{
  if($_POST['q31'] == 2){
    $_SESSION['q31']=1;
  }else{
    $_SESSION['q31']=0;
  }
}
if(isset($_POST['q32']))
{
  if($_POST['q32'] == 2){
    $_SESSION['q32']=1;
  }else{
    $_SESSION['q32']=0;
  }
}
if(isset($_POST['q33']))
{
  if($_POST['q33'] == 2){
    $_SESSION['q33']=1;
  }else{
    $_SESSION['q33']=0;
  }
}
if(isset($_POST['q34']))
{
  if($_POST['q34'] == 3){
    $_SESSION['q34']=1;
  }else{
    $_SESSION['q34']=0;
  }
}
if(isset($_POST['q35']))
{
  if($_POST['q35'] == 1){
    $_SESSION['q35']=1;
  }else{
    $_SESSION['q35']=0;
  }
}
if(isset($_POST['q36']))
{
  if($_POST['q36'] == 1){
    $_SESSION['q36']=1;
  }else{
    $_SESSION['q36']=0;
  }
}

?>
 <!--Footer Button-->
 <?php include('../partials/footer.php'); ?>