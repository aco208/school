    <h3>Bereken de prijs</h3>	
	
	<form method="POST">
		Leeftijd: <input type="number" name="leeftijd">
		<input type="submit" name="verzend" value="Bereken">
	</form>
<?php
    $prijsString = "";
	if(isset( $_POST['verzend'] ) ){
		$leeftijd = $_POST['leeftijd'];
        if (!empty($leeftijd)) {
		
            if($leeftijd < 3){
                $prijsString = "Uw kaartje is gratis";
            }
            else if($leeftijd > 65 || $leeftijd <=12){
                $prijsString = "De kaartje kost u 5 euro";
            }
            else{
                $prijsString = "Dit kost u 10 euro";
            }
        }
        else{
            $prijsString = "Voer een waarde in";
        }
	}
    ?>
    <h4><?php echo $prijsString ?></h4>





