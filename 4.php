<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  
		function carre() {
			$numberA = 29;
			$numberB = 26;
			$somme = $numberA + $numberB;
			return $somme;
		  }
		 echo "la somme est ". carre()."<br>";
		 
		 function addNumbers($a,$b) {
			return $a + $b;
		  }
		 echo  addNumbers(10,20)."<br>";

/*  
	Étape 1: Définir une fonction et qui renvoie un calcul de 2 nombres

	Étape 2: Créez une fonction qui transmet des paramètres et appelez-la à l'aide de valeurs de paramètres

 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>