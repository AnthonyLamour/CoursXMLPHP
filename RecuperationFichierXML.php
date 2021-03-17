<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!--head de la page-->
<head>
    <!--encodage de la page-->
    <meta charset="utf-8" />
    <!--titre de la page-->
    <title>Récupération d'un fichier XML</title>
    <!--lien vers le CSS de la page-->
    <link rel="stylesheet" href="CSS/Style.css" />
    <!--icone de la page-->
    <link rel="icon" href="Images/icone.png">
</head>

<!--contenu de la page-->
<body>

    <!--menu de navigation entre les pages-->
    <nav>
        <!--titre du menu de navigation-->
        <h3>Menu de navigation :</h3>
        <!--lien vers la page d'accauil-->
        <a href="index.php" class="navLink" >Acceuil</a><br/>
        <!--lien vers la page de création de XML avec XML writer-->
        <a href="CreationXMLWriter.php" class="navLink" >XML avec writer</a><br/>
        <!--lien vers la page de création de XML avec DOM-->
        <a href="CreationXMLDOM.php" class="navLink" >XML avec DOM</a>
    </nav>
    
    <!--titre de la page-->
    <h1>Récupération des infos d'un XML :</h1>

    <!--contenu principale-->
    <div id="MainContent">
        
    </div>

    <!--script js-->    
    <script>
        //variable de type XMLHttpRequest
        var xhttp = new XMLHttpRequest;

        //création de sa fonction onreadystatechange
        xhttp.onreadystatechange = function () {
            document.getElementById("recupFichier").innerHTML=this.responseText;
        }
        
        function recupererFichier(){
            //ouverture du fichier XML
            xhttp.open("GET", "Etudiants_txt.xml", true);
            //envoi de la requète
            xhttp.send();
        }
    </script>

    <!--php-->
    <?php
        $lesEtudiants=simplexml_load_file("Etudiant.xml");
        echo"<div id=\"MonDiv\">";
        echo"<table>";
        foreach($lesEtudiants as $etud){
            echo "<tr>";
            echo "<td class=\"ProfilPictureCadre\"><img class=\"ProfilPicture\" src=\"".$etud->ProfilPicture."\"></td>";
            echo "<td class=\"TextCadre\">".$etud->Nom."</td>";
            echo "<td class=\"TextCadre\">".$etud->Prenom."</td>";
            echo "<td class=\"TextCadre\">".$etud->Mail."</td>";
            echo "<td class=\"TextCadre\">".$etud->Ecole."</td>";
            echo "</tr>";
        }
        echo"</table>";
        echo"</div>";
    ?>
    
    <!--footer-->
    <footer>
        <!--paragraphe de footer-->
        <p>Anthony LAMOUR étudiant en Master 2 à Ludus Académie</p>
    </footer>

</body>

</html>