<?php $page_session = 8; $page = 'lesen_4'; $test_part = 'Lesen Teil 4'; $time_text = 'Lesen insgesamt 45 Minuten'; ?>
<?php include('../partials/header.php'); ?>
     <div class="clear"></div>
     <div class="decoration"></div>
     <div class="explain_box head_title">
      <p> Lesen Sie den Text. Entscheiden Sie, ob die Aussagen 37 bis 39 richtig oder falsch sind.
       <br>Markieren Sie Ihre L&ouml;sungen f&uuml;r die Aufgaben 37 bis 39.
      </p>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>

     <!--Title question -->
     <div class="lesen4_he">
      <div class="lesen4_left">
       <img src="../images/image8.png" alt="no image8" class="l4_image">
      </div>
      <form>
      <div class="lesen4_right">
       <div class="head_title"></div>
       <!-- 37 question -->
       <div class="lesen4_rb">
        <p><b>37.&nbsp</b> Die Ware wird immer innerhalb von f&uuml;nf Werktagen geliefert.</p>
        <nav class="segmented segment_btn">
         <input type="radio" name="q37" value="1" id="37a">
         <label for="37a" class="segment_4">Richtig</label>
         <input type="radio" name="q37" value="2" id="37b">
         <label for="37b" class="segment_4">Falsch</label>
        </nav>
       </div>
       <div class="clear cell"></div>
       <div class="decoration"></div>
       <!-- 38 question -->
       <div class="lesen4_rb">
        <p><b>38.&nbsp</b> Die Ware wird an Kunden in der ganzen Welt verschickt.</p>

        <nav class="segmented segment_btn">
         <input type="radio" name="q38" value="1" id="38a">
         <label for="38a" class="segment_4">Richtig</label>
         <input type="radio" name="q38" value="2" id="38b">
         <label for="38b" class="segment_4">Falsch</label>
        </nav>
       </div>
       <div class="clear cell"></div>
       <div class="decoration"></div>

       <!-- 39 question -->
       <div class="lesen4_rb">
        <p><b>39.&nbsp</b>Bei R&uuml;cksendung der Ware muss der Kunde in bestimmten F&auml;llen das Porto selbst bezahlen.</p>

        <nav class="segmented segment_btn">
         <input type="radio" name="q39" value="1" id="39a">
         <label for="39a" class="segment_4">Richtig</label>
         <input type="radio" name="q39" value="2" id="39b">
         <label for="39b" class="segment_4">Falsch</label>
        </nav>
       </div>
       <div class="clear cell"></div>
       <div class="decoration"></div>
      </div>
      </form>
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


if(isset($_POST['q37']))
{
  if($_POST['q37'] == 2){
    $_SESSION['q37']=1;
  }else{
    $_SESSION['q37']=0;
  }
}
if(isset($_POST['q38']))
{
  if($_POST['q38'] == 2){
    $_SESSION['q38']=1;
  }else{
    $_SESSION['q38']=0;
  }
}
if(isset($_POST['q39']))
{
  if($_POST['q39'] == 1){
    $_SESSION['q39']=1;
  }else{
    $_SESSION['q39']=0;
  }
} ?>

  <!--Footer Button-->
  <?php include('../partials/footer.php'); ?>