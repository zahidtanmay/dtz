<?php include('../partials/header.php'); ?>
<?php echo $_SESSION['q18'];echo $_SESSION['q19'];echo $_SESSION['q20']; ?>
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
       <div class="clear"></div>
       <div class="decoration"></div>
       <!-- 21 question -->
       <div class="lesen1_cell remove_cell">
        <p class="lesen1_left"><b>21.&nbsp</b>Sie wollen heiraten. Wohin gehen Sie?</p>
        <select action="php/contact.php" id="q21" class="lesen1_right">
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
        <select action="php/contact.php" id="q22" class="lesen1_right">
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
        <select action="php/contact.php" id="q23" class="lesen1_right">
         <option value="1"> 113</option>
         <option value="2"> 113</option>
         <option value="3"> anderes Zimmer</option>
        </select>
       </div>
       <div class="clear"></div>
       <div class="decoration"></div>
       <!-- 24 question -->
       <div class="lesen1_cell audio_add">
        <p class="lesen1_left"><b>24.&nbsp;</b>Sie sind umgezogen und m&ouml;chten Ihre neue Adresse melden.</p>
        <select action="php/contact.php" id="q24" class="lesen1_right">
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
        <select action="php/contact.php" id="q25" class="lesen1_right">
         <option value="1"> 111</option>
         <option value="2"> 112</option>
         <option value="3"> anderes Zimmer</option>
        </select>
       </div>
       <div class="clear"></div>
       <div class="decoration"></div>

      </div>
      <div class="l1_right">
       <img src="../images/image1.png" alt="img" class="responsive-image">
      </div>
     </div>
    </div>
   </div>
  </div>
  <!--Footer Button-->
  <?php include('../partials/footer.php') ?>