
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  
	Étape 1: Créez un formulaire qui soumet une seule valeur à POST (super global)
 */
	
 
?>
<form  method = "POST">
UserName :  <input type = "text" name = "username" /> <br>
PassWord :  <input type = "password" name = "password" /> <br>
<input type = "submit" value = "login" />
</form>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>