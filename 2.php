<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php
		
		 $number1="10";
		 $number2="20";
		 $s=$number1+$number2;
		 echo ($s)."<br>";
		 $tablaux = array("mohammed Amine","issam","oumayma","hiba");
		 $tablaux = array("mohammed Amine"=>"18","issam"=>"24","oumayma"=>"20","hiba"=>"20");
		 
		 define ("NOM","4");
		 echo NOM;
		 

		/* 
		Étape 1: Créez 2 variables appelées number1 et number2 et affecté au number1 la valeur 10 et le deuxième la valeur 20

		Étape 2: Ajoutez les deux variables et affichez la somme avec écho:

		Étape 3: Créez 2 tableaux avec les mêmes valeurs, l'un régulier et l'autre associatif

		Étape 4: Créez une constante et définissez-la sur la valeur de PHP. et utilisez un écho pour l'afficher


			

			 */

		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>