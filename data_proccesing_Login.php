<?php 

	$Login = $_POST['Login'];
	$Password = $_POST['Password'];
	$Action = $_POST['Action'];


	if ($Action == 'mailer') 
	{
		$dblink = mysqli_connect('mysql-projetphp.alwaysdata.net', 'projetphp', 'OussamaPHP')

		or die('Erreur de connexion au serveur :' . mysqli_connect_error());

		mysqli_select_db($dblink, 'projetphp_projet')
		or die('Erreur dans la sélection de la base :' . mysqli_error($dblink));

		$message = 'Voici vos identifiants d\'incription :' . $Login . PHP_EOL;
		$message .= 'Voici votre mote de passe :' . $Password . PHP_EOL;

		echo $message;		
	}



	$query = 'SELECT Mot_de_passe, Login FROM User WHERE Mot_de_passe = $Password AND Login = $Login'



	if (!($dbResult = mysqli_query($dblink, $query)))
	{
		echo 'Erreur dans la requête';
		// Affiche le type d'erreur.
		echo 'Erreur :' . mysqli_error($dblink);
		// Affiche le SELECT Login, Email, Password, Date de la requête envoyée.
		echo 'Requête :' . $query;
		exit();
	}


?>




















