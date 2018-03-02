<div id="conteneur">
	<div id="menu">		
		<a href="index.php">Home</a>
		<a href="apropos.php">A Propos</a>
		<a href="blog.php">Blog</a>
		<?php
		if(!empty($_SESSION['pseudo'])){
			echo '<a href="evenement.php">Evenement</a>';
		}else{
			echo '<a href="login.php">Evenement</a>';
		}
		?></a>
		<a href="contact.php">Contact</a>

		<?php
				if (!isset($_SESSION["pseudo"])){ // isset défini
				?>

					<a href="login.php">Login</a>
				<?php } ?>


		<?php 
			if (!isset($_SESSION["pseudo"])) { // !isset pas défini
				echo "<a href='inscription.php'>Inscription</a> ";
			} ?>


		<?php
			if (isset($_SESSION["pseudo"])){ // isset défini
				echo "Bonjour : " . $_SESSION["pseudo"]; ?>

				<a href="deconnexion.php">Déconnexion</a>

			<?php } ?>
	</div>
</div>

