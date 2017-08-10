<?php include("../partials/header.php"); ?>



<div class="clear"></div>
<div class="decoration add_cell"></div>
<div class="explain_box cell_hoeren1">
 <p>Sie h&ouml;ren vier Ansagen. Zu jeder Ansage gibt es eine Aufgabe. Welche L&ouml;sung passt am besten?
  <br>W&auml;hlen Sie Ihre L&ouml;sungen f&uuml;r die Aufgaben 1 bis 4 im Listenfeld. Vorsicht: Was Sie hier sehen, muss nicht die korrekte L&ouml;sung sein! </p>
</div>
<div class="clear"></div>
<div class="decoration"></div>
<!--Audio Play 14%-->
<div class="title_cell">
 <button type="button" id="audio" class="audio_bt fa fa-play"></button>
 <audio id="myaudio">
  <source src="../audio/hv1.mp3" type="audio/mpeg">
  </audio>
  <a class="button_tit"><b> Abspielen </b></a>
  <!--Timer Counter-->
</div>
<div class="clear"></div>
<div class="decoration"></div>


<form id="a" action="" method="post">
  <div class="title_cell bg-1">
   <h4 class="color-red-dark title_header">Beispiel</h4>
   <p class="question_cell1">Was soll Frau Baumgart tun?</p>
   <select action="php/contact.php" id="qh1" class="select_cell1">
    <option value="1">&nbsp; Herrn Libertz anrufen.</option>
    <option value="2">&nbsp; Ihre Bewerbungsunterlagen abholen.</option>
    <option value="3">&nbsp; Zu einem Kennenlerntag kommen.</option>
  </select>
</div>
<div class="clear"></div>
<div class="decoration"></div>
<!--1 question -->


<div class="cell_hoeren1">
 <p class="question_cell1"><b>1.&nbsp;</b> &nbsp;Was soll Herr Matuschek machen?</p>
<select name="sweets" class="select_cell1">
   <option value="1" selected="selected">Den Stromz&auml;hler ablesen</option>
   <option value="2">Die Stromrechnung bezahlen.</option>
   <option value="3">Einen neuen Termin machen.</option>
</select>
</div>
<div class="clear"></div>
<div class="decoration"></div>

<!--2 question -->
<div class="cell_hoeren1">
 <p class="question_cell1"><b>2.&nbsp;</b> Wohin soll Frau B&ouml;hmer kommen?.</p>
 <select action="php/contact.php" id="q2" class="select_cell1">
  <option value="1" value="horen2a">In den Kindergarten.</option>
  <option value="2">Zur Agentur f&uuml;r Arbeit.</option>
  <option value="3">Zur Schule.</option>
</select>
</div>
<div class="clear"></div>
<div class="decoration"></div>
<!--3 question-->
<div class="cell_hoeren1">
 <p class="question_cell1"><b>3.&nbsp</b> Wohin soll Herr Holstein mit seinem Sohn gehen?</p>
 <select action="php/contact.php" id="q3" class="select_cell1">
  <option value="1">Ins Krankenhaus.</option>
  <option value="2">Zum Arzt.</option>
  <option value="3">Zum Gesundheitsamt.</option>
</select>
</div>
<div class="clear"></div>
<div class="decoration"></div>

<!--4 question-->
<div class="cell_hoeren1">
 <p class="question_cell1"><b>4.&nbsp</b> Wo soll Herr Lee sein Auto abholen?</p>
 <select action="php/contact.php" id="q4" class="select_cell1">
  <option value="1">Bei der Polizei.</option>
  <option value="2">Bei einem Autoh&auml;ndler.</option>
  <option value="3">In der Werkstatt.</option>
</select>
</div>
<div class="clear"></div>
<div class="decoration"></div>
</div>
</div>
</div>
</form>
<form id="test-form" action="" method="POST">
  <input type="hidden" name="test" id="test-input">
</form>
<!--Title Head-->
<script>
        $(function(){
          $("select[name='sweets']").change(function () {
          var str = "";
          $("select[name='sweets'] option:selected").each(function () {
                str += $(this).text() + " ";

              });

                jQuery.ajax({
                type: "POST",
                data:  $("form#a").serialize(),

                success: function(data){
                  console.log(str);
                }
                });  
                
        });
        });
        </script>


<?php
    if(isset($_POST['sweets']))
    {
      if($_POST['sweets'] == 3){
        $_SESSION['sweets']=1;
      }else{
        $_SESSION['sweets']=0;
      }
    }
?>

<!--Footer Button-->
<?php include("../partials/footer.php"); ?>