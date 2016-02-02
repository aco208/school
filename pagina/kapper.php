<?php
include 'navigation.php';
$kappersagenda["9.15"] = "Mevr. Pietersen";
$kappersagenda["9.30"] = "Mevr. Willems";
$kappersagenda["9.45"] = "";
$kappersagenda["10.00"] = "Paul van den Broek";
$kappersagenda["10.15"] = "Karel de Meeuw";
$kappersagenda["10.30"] = "";

echo "<table border=1><tr>";

foreach($kappersagenda as $tijd => $afspraak) {
    echo "<td>".$tijd."</td>"."<td>".$afspraak."</td></tr>";
}
echo "</table>";
echo "De volgende momenten zijn nog beschikbaar:<ul>";
foreach($kappersagenda as $tijd => $afspraak) {
    if($afspraak == ""){ 
        echo"<li>".$tijd."</li>";
    }
}
print("</ul>");
?>