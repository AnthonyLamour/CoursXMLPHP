<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!--head de la page-->
<head>
	<!--encodage de la page-->
    <meta charset="utf-8" />
    <!--titre de la page-->
	<title>Acceuil cours PHP XML</title>
	<!--lien vers le CSS de la page-->
    <link rel="stylesheet" href="CSS/Style.css" />
    <!--icone de la page-->
    <link rel="icon" href="Images/icone.png">
</head>

<!--contenu de la page-->
<body>

	<!--menu de navigation entre les pages-->
    <nav id="MainNav">
        <!--titre du menu de navigation-->
        <h1>Sélectionner une partie du cours :</h1>
		<!--lien vers la page de création d'XML avec un tableau-->
		<a href="CreationXMLFromArray.php" class="navLink" >Création d'XML avec un tableau</a><br/>
		<!--lien vers la page de création d'XML avec un tableau-->
		<a href="CreationXMLWriter.php" class="navLink" >Création d'XML avec XML writer</a><br/>
		<!--lien vers la page de création de XML avec le DOM-->
        <a href="CreationXMLDOM.php" class="navLink" >Création d'un XML avec le DOM</a><br/>
		<!--lien vers la page de récupération d'un fichier XML-->
        <a href="RecuperationFichierXML.php" class="navLink" >Récupération d'un XML en PHP</a>
    </nav>

	<!--footer-->
    <footer>
        <!--paragraphe de footer-->
        <p>Anthony LAMOUR étudiant en Master 2 à Ludus Académie</p>
    </footer>

</body>

</html>