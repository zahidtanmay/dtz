<?php
for ($x = 0; $x <= 10; $x++) {
    echo "var q$x = \<\?php echo(json_encode($_POST\['q$x'\])); \?\>\;";

} 
?>
