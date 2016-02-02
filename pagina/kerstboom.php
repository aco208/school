<?php
echo '<div style="text-align:center;"';
include 'navigation.php';
    for ($i = 1; $i <= 9; $i++) {
        for ($l = 1; $l <= $i; $l++){
            echo " * ";
        }
    echo "<br/>";
    }
?>
</div>