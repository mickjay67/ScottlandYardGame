<?php
	
	include_once 'abstractData.php';
	include_once 'mrx.php';
	include_once 'player.php'; 

	//session_start();

	if (isset($_POST['taxi']) OR isset($_POST['bus']) OR isset($_POST['train'])) {
		
		$_SESSION['stationD5'] = $_SESSION['station']; 
		$_SESSION['linesD5'] = $_SESSION['lines'];
		$_SESSION['nodesD5'] = $_SESSION['nodes'];
		$_SESSION['d5']->setPosition($_SESSION['stationD5']);  

		if (isset($_POST['taxi'])){
			$_SESSION['d5']->taxi --; 
			$_SESSION['d5']->move($_SESSION['stationD5'], "taxi");
		}
		
		elseif (isset($_POST['bus'])){
			$_SESSION['d5']->bus --; 
			$_SESSION['d5']->move($_SESSION['stationD5'], "bus");
		}
				
		elseif (isset($_POST['train'])){
			$_SESSION['mrx']->train --;
			$_SESSION['mrx']->move($_SESSION['stationD5'], "train");
		}
		
		$_SESSION['d5Turn'] = false;
		$_SESSION['d6Turn'] = true;
		
		echo"<script>
				window.parent.opener.location.reload();
				window.close();
			</script>";
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Move</title>
	</head>

	<body style="text-align: center;">
		<h1 style="color: red;">Detective 5</h1>
		<h2>Choose a ticket to move at the station <?php echo $_SESSION['station']; ?></h2>

		<?php 

			$stationD5 = $_SESSION['stationD5'];    
			$nodesNewStation = explode("-", $_SESSION['nodes']);
			$taxi = false;
			$bus = false;
			$train = false; 

			for ($i=0; $i < sizeof($nodesNewStation) ; $i++) {  
				if($nodesNewStation[$i] == ($stationD5.'t'))
					$taxi = true;
				if($nodesNewStation[$i] == ($stationD5.'b'))
					$bus = true;
				if($nodesNewStation[$i] == ($stationD5.'s'))
					$train = true;
			}		
			
			if(($_SESSION['d5']->taxi > 0) AND $taxi) {
		?>
			<form method="POST" action="popD5.php">
				<input type="hidden" name="taxi" value="taxi">
				<input type="submit" value="Taxi">
			</form><br>
		<?php } 
			  if(($_SESSION['d5']->bus > 0) AND $bus) {
		?>
			 <form method="POST" action="popD5.php">
				<input type="hidden" name="bus" value="bus">
				<input type="submit" value="Bus">
			</form><br>
		<?php } 
			  if(($_SESSION['d5']->train > 0) AND $train) {
		?>
			<form method="POST" action="popD5.php">
				<input type="hidden" name="train" value="train">
				<input type="submit" value="Train">
			</form><br> 
		<?php }  
		?>

	</body>
</html>