<?php $test_part = 'Lesen Teil 5'; $time_text = 'Lesen insgesamt 45 Minuten'; ?>
<?php include('../partials/header.php'); ?>
<?php echo $_SESSION['q37'];echo $_SESSION['q38'];echo $_SESSION['q39']; ?>
      <div class="clear"></div>
      <div class="decoration"></div>
     <div class="explain_box head_title">
      <p> Lesen Sie den Text und f&uuml;llen Sie die L&uuml;cken.In den K&auml;stchen finden Sie immer drei M&ouml;glichkeiten.
       <br> W&auml;hlen Sie die passende L&ouml;sung.Vorsicht: Was Sie hier sehen, muss nicht die korrekte L&ouml;sung sein!
      </p>
     </div>
     <div class="clear"></div>
     <div class="decoration"></div>

     <!--Title question -->
     <div class="div1">
      <h4>GUTE KLEIDER &nbsp&nbsp Bahnstra&szlig;e 1 &nbsp&nbsp 06886 Lutherstadt Wittenberg</h4>
      <a>Frau</a>
      <a>Barbara Schnied</a>
      <a>Blumenstra&szlig;e 5</a>
      <a class="nor_left"> 06889 Reinsdorf</a>
      <a class="nor_right"> Reinsdorf Kundennummer 123456 </a>
     </div>
     <form>
     <div class="div2">
      <h4>Sonst bitten wir um Zusendung des Zahlungsbelegs. </h4>
      <p class="lesen5_p">
       <select id="ql1" action="php/contact.php">
        <option value="1">Sehr geehrte</option>
        <option value="2">Sehr geehrten</option>
        <option value="3">Sehr geehrter</option>
       </select>
       &nbsp&nbsp Frau Schnied,
      <p>bitte helfen Sie &nbsp&nbsp
       <select id="ql2" name="ql2">
       <option>wählen</option>
        <option value="1">euch</option>
        <option value="2">ihnen</option>
        <option value="3">uns</option>
       </select>
       &nbsp:&nbsp Unsere Buchhaltung hat den Betrag von 59,65 Euro vom &nbsp
       <br>10.03. noch nicht als Zahlungseingang feststellen
       <select id="ql3" name="ql3">
       <option>wählen</option>
        <option value="1">k&ouml;nnen</option>
        <option value="2">m&uuml;ssen</option>
        <option value="3">sollen</option>
       </select>.<br>

       <select id="ql4" name="ql4">
       <option>wählen</option>
        <option value="1">Haben</option>
        <option value="2">H&auml;tten</option>
        <option value="3">W&uuml;rden</option>
       </select>
       &nbsp Sie in der Hektik des Alltags vergessen, den Rechnungsbetrag zu &uuml;berweisen?<br>
       Wir bitten Sie in diesem Fall um Zahlung innerhalb der &nbsp
       <select id="ql5" name="ql5">
       <option>wählen</option>
        <option value="1">letzten</option>
        <option value="2">n&auml;chsten</option>
        <option value="3">vorigen</option>
       </select>
       &nbsp 14 Tage.<br>
       Oder haben Sie den Betrag &nbsp
       <select id="ql6" name="ql6">
       <option>wählen</option>
        <option value="1">erst</option>
        <option value="2">schon</option>
        <option value="3">wieder</option>
       </select>
       &nbsp bezahlt, und wir konnten das Geld nicht richtig zuordnen?<br>
       <select id="ql7" name="ql7">
       <option>wählen</option>
        <option value="1">Damit</option>
        <option value="2">Dann</option>
        <option value="3">Sonst</option>
       </select>
       &nbsp bitten wir um Zusendung des Zahlungsbelegs.
      </p>
     </div>
     <div class="div3">
      <p>Wir bedanken uns f&uuml;r Ihre Mithilfe.</p>
      <p>Mit freundlichem Gruß</p>
      <p>Maria Kleidermann</p>
     </div>
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


if(isset($_POST['ql2']))
{
  if($_POST['ql2'] == 3){
    $_SESSION['ql2']=1;
  }else{
    $_SESSION['ql2']=0;
  }
}
if(isset($_POST['ql3']))
{
  if($_POST['ql3'] == 1){
    $_SESSION['ql3']=1;
  }else{
    $_SESSION['ql3']=0;
  }
}
if(isset($_POST['ql4']))
{
  if($_POST['ql4'] == 1){
    $_SESSION['ql4']=1;
  }else{
    $_SESSION['ql4']=0;
  }
} 
if(isset($_POST['ql5']))
{
  if($_POST['ql5'] == 2){
    $_SESSION['ql5']=1;
  }else{
    $_SESSION['ql5']=0;
  }
}
if(isset($_POST['ql6']))
{
  if($_POST['ql6'] == 2){
    $_SESSION['ql6']=1;
  }else{
    $_SESSION['ql6']=0;
  }
}
if(isset($_POST['ql7']))
{
  if($_POST['ql7'] == 2){
    $_SESSION['ql7']=1;
  }else{
    $_SESSION['ql7']=0;
  }
}
?>
  <!--Footer Button-->
  <?php include('../partials/footer.php'); ?>