<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 
	echo(abs(20) . "<br>");
	echo(abs(-10) . "<br>");
	echo(abs(-4) . "<br>");
	echo(abs(3) . "<br>");


	$slach = addcslashes("Hy friends :","f");
	echo($slach) . "<br>";
	
	$cars=array("manger","dormir","sortir");
    echo "J'aime bien  " . $cars[0] . "et " . $cars[1] . " et aussi " . $cars[2] . "." ;




/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>