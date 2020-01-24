<?php 
	require('functions.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Chinese New Year</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="Page">

		<?php 
		echo createSvgElement('lanterne');
		echo createSvgElement('lanterne','laterne-2');
		?>

		<div class="container">
			
			<svg id="firstCircle">
				<circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
			</svg> 
			<svg id="secondCircle">
				<circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
			</svg> 

			<?php 
			echo createSvgElement('motif-central');
			echo createSvgElement('rat');
			
			echo createMultipleSvgElements(3,'petit-nuage');
			echo createMultipleSvgElements(5,'grosse-fleur');
			
			echo createMultipleSvgElements(3,'gros-nuage');
			
			echo createMultipleSvgElements(5,'petite-fleur');
			
			?>


			
		</div>
		<div id="Text">
			<h1>
				Bonne année !
			</h1>
			<a href="https://chris-carton.com">Chris Carton</a>
		</div>
		
	</div>

	<div id="Lines">

		<?php 
		echo createSvgElement('line-5');
		?>
	</div>
		

		
	
	
	<?php 
	/*
	<div id="bottomLines">
		<?php 
		for($a=0;$a<3;$a++):
		?>
		<div class="bottom-line number-<?=$a ?>">
			<?php
			for($i=0;$i<35;$i++){
				echo createSvgElement('bottom');
			}
			?>
		</div>
		<?php 
		endfor;
		?>
	</div>
	<?php 
	*/ 
	?>



</body>
</html>