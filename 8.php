<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  
	$text = "salut, je m'appele mohammed amine chaabane ";
	$age = 18;
	$email = "mohamedaminechaabane9@gmail.com";
	
	echo $text;
	echo "<br>";
	echo $age;
	echo "<br>";
	echo $email ;
	echo "<br>";

   crypt($text,'mohammed amine') ;
   crypt($age,'1234') ;
   crypt($email,'mohammed') ;


   $c = crypt($text,'mohammed amine');
   $a = crypt($age,'1234');
   $p = crypt($email,'mohammed');
 
   echo $c;
   echo "<br>";
   echo $a;
   echo "<br>";
   echo $p;
	/*  
	Étape 1 - Créer une variable avec du texte comme valeur

	Étape 2 - Utilisez la fonction crypt() pour le crypter

	Étape 3 - Attribuez le résultat de cryptage à une variable

	Étape 4 - Échoyez de la variable 
	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>