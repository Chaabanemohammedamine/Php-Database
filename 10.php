<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php 
class chien{
            public $yeux_color;
            public $nez_color;
            public $fourrure;
            function set_name($yeux_color, $nez_color,$fourrure_color)
            {
                $this->name1 = $yeux_color;
                $this->name2 = $nez_color;
                $this->name3 = $fourrure_color;
            }
            function get_name()
                {
                    echo $this->name1 . "<br>";
                    echo $this->name2 . "<br>";
                    echo $this->name3 ;
                }
            }
                $pitbull = new chien();
                $pitbull->set_name('gris', 'noir','maron');
    echo $pitbull->get_name();
	/*  
	Étape 1: Créez une classe appelée Chien

	Étape 2: Définissez certaines propriétés pour le Chien, l'exemple, la couleur des yeux, le nez ou la couleur de la fourrure

	Étape 4: Créez une méthode nommée AfficherTout qui fait écho à toutes les propriétés

	Étape 5: Instanciez la classe / créez l'objet et appelez-le pitbull

	Étape 6: Appelez la méthode AfficherTout
	
	*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>