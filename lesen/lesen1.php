<?php $page_session = 5; $page = 'lesen_1'; $test_part = 'Lesen Teil 1'; $time_text = 'Lesen insgesamt 45 Minuten';?>
<?php include("../partials/header.php"); ?>
     <div class="clear"></div>
     <div class="decoration"></div>
     <div class="explain_box head_title add_cell">
      <p> Sie sind beim B&uuml;rgerb&uuml;ro Ihrer Stadtverwaltung. Lesen Sie die Aufgaben 21 bis 25 und den Wegweiser. In welches der drei Zimmer gehen Sie?
       <br>W&auml;hlen Sie Ihre L&ouml;sungen f&uuml;r die Aufgaben 21 bis 25 im Listenfeld. Vorsicht: Was Sie hier sehen, muss nicht die korrekte L&ouml;sung sein!
      </p>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>
     <div style="height: 82%">
      <!-- lesen0 question -->
      <div class="l1_left">
       <div class="lesen1_tit bg-1">
        <h4 class="color-red-dark">Beispiel</h4>

        <p class="lesen1_left">Sie m&ouml;chten, dass Ihr Kind im n&auml;chsten Jahr einen Platz im Kindergarten bekommt.</p>
        <select action="php/contact.php" id="ql1" class="lesen1_right">
         <option value="1"> 212</option>
         <option value="2"> 213</option>
         <option value="3"> anderes Zimmer</option>
        </select>
       </div >
       <form>
         
       
       <div class="clear"></div>
       <div class="decoration"></div>
       <!-- 21 question -->
       <div class="lesen1_cell remove_cell">
        <p class="lesen1_left"><b>21.&nbsp</b>Sie wollen heiraten. Wohin gehen Sie?</p>
        <select name="q21" id="q21" class="lesen1_right">
        <option>wählen</option>
         <option value="1"> 210</option>
         <option value="2"> 211</option>
         <option value="3"> anderes Zimmer</option>
        </select>
       </div>
       <div class="clear"></div>
       <div class="decoration"></div>
       <!-- 22 question -->
       <div class="lesen1_cell audio_add">
        <p class="lesen1_left"><b>22.&nbsp</b> Sie wollen sich beim Chef des B&uuml;rgerb&uuml;ros &uuml;ber etwas beschweren.</p>
        <select name="q22" id="q22" class="lesen1_right">
        <option>wählen</option>
         <option value="1"> 111</option>
         <option value="2"> 112</option>
         <option value="3"> anderes Zimmer</option>
        </select>
       </div>
       <div class="clear"></div>
       <div class="decoration"></div>
       <!-- 23 question -->
       <div class="lesen1_cell audio_add">
        <p class="lesen1_left"><b>23.&nbsp</b> Sie haben gestern Ihr Handy verloren und hoffen, dass es jemand abgegeben hat.</p>
        <select name="q23" id="q23" class="lesen1_right">
        <option>wählen</option>
         <option value="1"> 113</option>
         <option value="2"> 115</option>
         <option value="3"> anderes Zimmer</option>
        </select>
       </div>
       <div class="clear"></div>
       <div class="decoration"></div>
       <!-- 24 question -->
       <div class="lesen1_cell audio_add">
        <p class="lesen1_left"><b>24.&nbsp;</b>Sie sind umgezogen und m&ouml;chten Ihre neue Adresse melden.</p>
        <select name="q24" id="q24" class="lesen1_right">
        <option>wählen</option>
         <option value="1"> 111</option>
         <option value="2"> 115</option>
         <option value="3"> anderes Zimmer</option>
        </select>
       </div>
       <div class="clear"></div>
       <div class="decoration"></div>
       <!-- 25 question -->
       <div class="lesen1_cell audio_add">
        <p class="lesen1_left"><b>25.&nbsp</b> Sie m&ouml;chten einen Anwohnerparkausweis beantragen.
        </p>
        <select name="q25" id="q25" class="lesen1_right">
        <option>wählen</option>
         <option value="1"> 111</option>
         <option value="2"> 112</option>
         <option value="3"> anderes Zimmer</option>
        </select>
       </div>
       <div class="clear"></div>
       <div class="decoration"></div>
</form>
      </div>
      <div class="l1_right">
       <img src="../images/image1.png" alt="img" class="responsive-image">
      </div>
     </div>
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


if(isset($_POST['q21']))
{
  if($_POST['q21'] == 1){
    $_SESSION['q21']=1;
  }else{
    $_SESSION['q21']=0;
  }
}
if(isset($_POST['q22']))
{
  if($_POST['q22'] == 2){
    $_SESSION['q22']=1;
  }else{
    $_SESSION['q22']=0;
  }
}
if(isset($_POST['q23']))
{
  if($_POST['q23'] == 1){
    $_SESSION['q23']=1;
  }else{
    $_SESSION['q23']=0;
  }
}
if(isset($_POST['q24']))
{
  if($_POST['q24'] == 1){
    $_SESSION['q24']=1;
  }else{
    $_SESSION['q24']=0;
  }
}
if(isset($_POST['q25']))
{
  if($_POST['q25'] == 3){
    $_SESSION['q25']=1;
  }else{
    $_SESSION['q25']=0;
  }
}

?>
  <!--Footer Button-->
  <?php include("../partials/footer.php"); ?>