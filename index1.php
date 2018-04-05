<?php
 	 
 	include 'abstractData.php';
	include 'mrx.php';
	include 'player.php'; 
	$mrx = new Mrx("MrX", 4, 3, 5, 7);
	$d1 = new Player('Detective 1', 2, 3, 5); 

	 function mrX_Info($mrx)
     {
         echo "\r\n" . "========================= Identity Mr X ==========================" . "\r\n";
         echo 'Name: ' . $mrx->name . "\r\n";
         echo 'Position: ' . $mrx->getPosition() . "\r\n";
         echo 'Number of taxi tickets: ' . $mrx->taxi . "\r\n";
         echo 'Number of bus tickets: ' . $mrx->bus . "\r\n";
         echo 'Number of train tickets: ' . $mrx->train . "\r\n";
         echo 'Number of black tickes: ' . $mrx->blackTicket . "\r\n";
         echo 'Number of double tickes: ' . $mrx->double . "\r\n";
         $mrx->move(14, "taxi");
         $mrx->move(100, "train");
         echo 'Position after single move: ' . $mrx->getPosition() . "\r\n";
         $mrx->doubleMove(45, "blackTicket", 65, "bus");
         echo 'Position after double move move: ' . $mrx->getPosition();
         echo "\r\n" .'Number of taxi tickets after 3 moves: ' . $mrx->taxi . "\r\n";
         echo "Travel log:" . "\r\n";
         foreach ($mrx->getTravelLog() as $key => $value) {
             echo "Position: " . $key . "\r\n";
             echo "Vehicle: " . $value;
         }
     }
function playerOne_Info($mrx, $d1)
{
    echo "\r\n" . "========================= Identity Detective 1 =====================" . "\r\n";
    echo 'Name: ' . $d1->name . "\r\n";
    echo 'Position: ' . $d1->getPosition() . "\r\n";
    echo 'Number of taxi tickets: ' . $d1->taxi . "\r\n";
    echo 'Number of bus tickets: ' . $d1->bus  . "\r\n";
    echo 'Number of train tickets: ' . $d1->train . "\r\n";
    $d1->move(156, "bus");
    $mrx->bus++;
    echo 'Position after move: ' . $d1->getPosition() . "\r\n";
    echo 'Number of bus tickets Mr X: ' . $mrx->bus;
    foreach ($d1->getTravelLog() as $key => $value) {
        echo "Position: $key Vehicle: $value";
        echo "\r\n";
    }
}
?>

