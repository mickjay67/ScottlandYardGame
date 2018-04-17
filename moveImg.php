<?php
//include 'mrx.php';
include_once 'index.php';
//include 'abstractData.php';
//include 'map.php';

if (true){
	movePiece();
	}
function movePiece(){
$doc1 = new DOMDocument();
$doc1->loadHTMLFile('map.php');

$areas = $doc1->getElementsByTagName('area');

if(!isset($_SESSION['mrx'])){
	$_SESSION['mrx'] = new Mrx("MrX",4,3,5,7);
}

foreach ($areas as $area){
	if($area->hasAttribute('coords')){
		$coords = $area ->getAttribute('coords');
		$coordsArr= explode(",", $coords);
		//Document.GetElementByID("xLoc").value=coords[0];
		//Document.GetElementByID("yLoc").value=coords[1];

	}

}
}
//type="hidden"
?>


<html>
<style type="text/css">

#green_piece{
    /* Change location values too node variable */
   position: absolute;
   top: 197px;
    left: 89px;
    width: 35px;
    height: 35px;
}
</style>
</head>
<body>
<script>
    // I think we can just use CSS. But this is probably another way.
    // var imageContainers = ['nodelocation1', 'nodelocation2', 'nodelocation3'];
    // DOM_img.src = "ScottlandYardGame-master/images/greenpiece.png";
    // var container = imagesContainers['whatever node is chosen?'];
    window.onload=function() {
        var elem = document.createElement("img");
        // Change File location
        elem.setAttribute("src", "greenpiece.png");
        elem.setAttribute("height", Document.GetElementByID("xLoc").value);
        elem.setAttribute("width", Document.GetElementByID("yLoc").value);
        elem.setAttribute("alt", "greenpiece");
        document.getElementById("green_piece").appendChild(elem);
    }
</script>
<!-- Separate div for each piece? -->
<div id="green_piece">
 <!-- Div is placed on-top of image -->
</div>
<div id="mr_X">
    <!-- Div is placed on-top of image -->
</div>
<div id="batman">
    <!-- Div is placed on-top of image -->
</div>
<div id="blue_piece">
    <!-- Div is placed on-top of image -->
</div>
</body>
</html>
