<?php
include 'navigation.php';
$alle["De spartelkuikens"] = 25;
$alle["De waterbuffels"] = 32;
$alle["Plonsmdrerin"] = 11;
$alle["Bommetje"] = 23;

echo "<table border=1>";
        foreach ($alle as $label => $waarde){
            echo '<tr><td>'.$label.'</td><td>'.$waarde.'</td><td>';
            for($f=0;$f<$waarde;$f++){
                $waarde -= 5;
                 echo '<img src="https://www.woerden.nl/sites/default/files/styles/icon-onderwerp/public/Iconen/Grey/zwemmen_0_0.png?itok=y8CCCnDt">';
            
            }
        }
echo '</td></tr>';
echo "</table>";
?>