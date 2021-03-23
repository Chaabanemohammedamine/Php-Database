<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
$t = "0";

if ($t == "1") {
  echo "I love greenchip 1";
} elseif ($t == "2") {
  echo "I love greenchip 2 ";
} else {
  echo "I love greenchip :p <br>";
}
for ($x = 0; $x <= 10; $x++) {
	echo " $x <br>";
  }

$Nom = 5;

  switch ($Nom) {
	case "24":
	  echo "hi issam";
	  break;
	case "20":
	  echo "hi Kmicha";
	  break;
	case "21":
	  echo "hi Sli3fana";
	  break;
	case "18":
	  echo "hi amine";
	  break;
	case "30":
	  echo "Salut les indibikhich";
	  break;
  
	default:
	  echo "Erreur";
  }
/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>