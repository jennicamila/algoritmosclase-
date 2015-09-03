<?php
		if (!empty($_POST['dias'])) {
			$nDias = $_POST['dias'];
			$kmpordia = 8765812 *24;
			$total = $nDias * $kmpordia;
			header("Location:ejercicio1.php?velocidad=".$total);
			# code...
		}



?>