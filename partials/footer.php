<!--Footer Button-->
 <div class="footer_bordor">
  <div class="heading-style-5">

    <a href="../hoeren/hoeren1.php" class="button button-green button-round">H&ouml;ren 1
    <span id="s1" class="bubble" style="display: none">0</span></a>
    <a href="../hoeren/hoeren2.php" class="button button-green button-round">H&ouml;ren 2
    <span id="s2" class="bubble" style="display: none">0</span></a>
    <a href="../hoeren/hoeren3.php" class="button button-green button-round">H&ouml;ren 3
    <span id="s3" class="bubble" style="display: none">0</span></a>
    <a href="../hoeren/hoeren4.php" class="button button-green button-round">H&ouml;ren 4
    <span id="s4" class="bubble" style="display: none">0</span></a>
    <a href="../lesen/lesen1.php" class="button button-teal button-round hoeren_btn">Lesen 1
    <span id="s5" class="bubble" style="display: none">0</span></a>
    <a href="../lesen/lesen2.php" class="button button-teal button-round">Lesen 2
    <span id="s6" class="bubble" style="display: none">0</span></a>
    <a href="../lesen/lesen3.php" class="button button-teal button-round">Lesen 3
    <span id="s7" class="bubble" style="display: none">0</span></a>
    <a href="../lesen/lesen4.php" class="button button-teal button-round">Lesen 4
    <span id="s8" class="bubble" style="display: none">0</span></a>
    <a href="../lesen/lesen5.php" class="button button-teal button-round">Lesen 5
    <span id="s9" class="bubble" style="display: none">0</span></a>
    <a href="../schreiben/schreiben.php" class="button button-blue button-round">Schreiben
    <span id="s10" class="bubble" style="display: none">0</span></a>
    <a href="#" id="result" class="button button-blue button-round">Bewerten</a>
    <a href="<?php 

    if($page == 'horen_1'){
        echo "../hoeren/hoeren2.php";
    }else if($page == 'horen_2'){
        echo "../hoeren/hoeren3.php";
    }else if($page == 'horen_3'){
        echo "../hoeren/hoeren4.php";
    }else if($page == 'horen_4'){
        echo "../lesen/lesen1.php";
    }else if($page == 'lesen_1'){
        echo "../lesen/lesen2.php";
    }else if($page == 'lesen_2'){
        echo "../lesen/lesen3.php";
    }else if($page == 'lesen_3'){
        echo "../lesen/lesen4.php";
    }else if($page == 'lesen_4'){
        echo "../lesen/lesen5.php";
    }else if($page == 'lesen_5'){
        echo "../schreiben/schreiben.php";
    }else if($page == 'schreiben'){
        echo "../end.php";
    }else {
        echo "#";
    }
     ?>" class="button button-red button-round hoeren_btn">Weiter</a>
    <a href="../end.php" class="button button-red button-round">Ende</a>

  </div>
 </div>
 <!-- Button-->
</div>
</div>

</div>


</body>
<!-- <script type="text/javascript" src="scripts/hoeren3.js"></script> -->
</html>