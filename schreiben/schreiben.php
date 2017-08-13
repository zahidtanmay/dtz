<?php $page_session = 10; $page = 'schreiben'; $test_part = 'Schreiben'; $time_text = '25 Minuten'; ?>
<?php include('../partials/header.php'); ?>
     <div class="clear"></div>
     <div class="decoration"></div>
    <div class="explain_box write_head">
     <p>
      Sie haben vor einem halben Jahr bei der Firma Neumann eine Waschmaschine gekauft. Jetzt ist sie kaputt.
      <br>Sie erreichen bei der Firma telefonisch niemanden. Deshalb schreiben Sie eine E-Mail.<br>
      Schreiben Sie Ihren Text. Zeigen Sie, was Sie k&ouml;nnen. Schreiben Sie m&ouml;glichst viel.
      <br> Schreiben Sie etwas &uuml;ber die hier genannten Punkte. Vergessen Sie nicht die Anrede und den Gru&szlig;.
     </p>
    </div>
    <div class="clear"></div>
    <div class="decoration"></div>
    <div class="write_middle">
     <div class="write_left">

     <p > Schreiben Sie zu jedem Punkt: <br>&nbsp</p>

     <ul>
      <li>Grund des Schreibens</li>
      <li>Garantie</li>

      <li>Reparatur oder neue Waschmaschine</li>
      <li>wie Sie erreichbar sind</li>
     </ul>
     </div>
     <div class="write_right">
      <div class="formFieldWrap">
       <label class="field-title contactNameField sch_font" for="contactNameField"><b>Anrede:</b></label>
       <input type="text" name="contactNameField" value="" class="contactField requiredField"/>
      </div>
      <div class="formTextareaWrap">
       <textarea name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
      </div>
      <div class="formFieldWrap">
       <label class="field-title contactNameField sch_font" for="contactNameField"><b>Gru&szlig;:</b></label>
       <input type="text" name="contactNameField" value="" class="contactField requiredField"/>
      </div>
      <div class="formFieldWrap">
       <label class="field-title contactNameField sch_font" for="contactNameField"><b>Unterschrift:</b></label>
       <input type="text" name="contactNameField" value="" class="contactField requiredField"/>
      </div>

     </div>

    </div>
   </div>
  </div>
 </div>
 <!--Footer Button-->
 <?php include('../partials/footer.php'); ?>