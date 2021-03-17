<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!--head de la page-->
<head>
    <!--encodage de la page-->
    <meta charset="utf-8" />
    <!--titre de la page-->
    <title>XML avec DOM</title>
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
        <!--lien vers la page de création de XML avec tableau-->
        <a href="CreationXMLFromArray.php" class="navLink" >XML avec tableau</a><br/>
        <!--lien vers la page de création de XML avec XML writer-->
        <a href="CreationXMLWriter.php" class="navLink" >XML avec writer</a>
    </nav>
    
    <!--titre de la page-->
    <h1>Création d'un fichier XML avec le DOM :</h1>

    <!--contenu principale-->
    <div id="MainContent">
        <textarea id="recupFichier" rows="50" cols="70"></textarea><br/>
        <input type="button" id="btnRecupFichier" onclick="recupererFichier();" value="récupérer le fichier"/>
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
            xhttp.open("GET", "Etudiants_DOM.xml", true);
            //envoi de la requète
            xhttp.send();
        }
    </script>

    <!--php-->
    <?php
        //création du tableau d'étudiants
        $tabEtudiant=array(array("Nom" => "Yuki", "Prenom" => "Makoto", "Mail" => "m.yuki@mail.com", "Ecole" => "Gekkoukan High School"),
                          array("Nom" => "Sanada", "Prenom" => "Akihiko", "Mail" => "a.sanada@mail.com", "Ecole" => "Gekkoukan High School"),
                          array("Nom" => "Takeba", "Prenom" => "Yukari", "Mail" => "y.takeba@mail.com", "Ecole" => "Gekkoukan High School"),
                          array("Nom" => "Yamagishi", "Prenom" => "Fuuka", "Mail" => "f.yamagishi@mail.com", "Ecole" => "Gekkoukan High School"),
                          array("Nom" => "Aragaki", "Prenom" => "Shinjiro", "Mail" => "s.aragaki@mail.com", "Ecole" => "Gekkoukan High School"),
                          array("Nom" => "Iori", "Prenom" => "Junpei", "Mail" => "j.iori@mail.com", "Ecole" => "Gekkoukan High School"),
                          array("Nom" => "Amada", "Prenom" => "Ken", "Mail" => "k.amada@mail.com", "Ecole" => "Gekkoukan High School"),
                          array("Nom" => "Kirijo", "Prenom" => "Mitsuru", "Mail" => "m.kirijo@mail.com", "Ecole" => "Gekkoukan High School"),
                          array("Nom" => "Kirijo", "Prenom" => "Aigis", "Mail" => "a.kirijo@mail.com", "Ecole" => "Gekkoukan High School"),
                          array("Nom" => "Satonaka", "Prenom" => "Chie", "Mail" => "c.satonaka@mail.com", "Ecole" => "Yasogami High School"),
                          array("Nom" => "Amagi", "Prenom" => "Yukiko", "Mail" => "y.amagi@mail.com", "Ecole" => "Yasogami High School"),
                          array("Nom" => "Hanamura", "Prenom" => "Yosuke", "Mail" => "y.hanamura@mail.com", "Ecole" => "Yasogami High School"),
                          array("Nom" => "Kujikawa", "Prenom" => "Rise", "Mail" => "r.kujikawa@mail.com", "Ecole" => "Yasogami High School"),
                          array("Nom" => "Shirogane", "Prenom" => "Naoto", "Mail" => "n.shirogane@mail.com", "Ecole" => "Yasogami High School"),
                          array("Nom" => "Magnificent", "Prenom" => "Teddie", "Mail" => "t.magnificent@mail.com", "Ecole" => "Yasogami High School"),
                          array("Nom" => "Tatsumi", "Prenom" => "Kanji", "Mail" => "k.tatsumi@mail.com", "Ecole" => "Yasogami High School"),
                          array("Nom" => "Narukami", "Prenom" => "Yu", "Mail" => "y.narumaki@mail.com", "Ecole" => "Yasogami High School"),
                          array("Nom" => "Amamiya", "Prenom" => "Ren", "Mail" => "r.amamiya@mail.com", "Ecole" => "Shujin Academy"),
                          array("Nom" => "Sakanoto", "Prenom" => "Ryuji", "Mail" => "r.sakamoto@mail.com", "Ecole" => "Shujin Academy"),
                          array("Nom" => "Sakura", "Prenom" => "Futaba", "Mail" => "f.sakura@mail.com", "Ecole" => "Aucune"),
                          array("Nom" => "Okumura", "Prenom" => "Haru", "Mail" => "h.okumura@mail.com", "Ecole" => "Shujin Academy"),
                          array("Nom" => "Kitagawa", "Prenom" => "Yusuke", "Mail" => "y.kitagawa@mail.com", "Ecole" => "Kosei High School"),
                          array("Nom" => "Takamaki", "Prenom" => "Ann", "Mail" => "a.takamaki@mail.com", "Ecole" => "Shujin Academy"),
                          array("Nom" => "Nijima", "Prenom" => "Makoto", "Mail" => "m.nijima@mail.com", "Ecole" => "Shujin Academy"),
                          array("Nom" => "Goro", "Prenom" => "Akechi", "Mail" => "a.goro@mail.com", "Ecole" => "Aucune"),
                          array("Nom" => "Yoshizawa", "Prenom" => "Kasumi", "Mail" => "k.yoshizawa@mail.com", "Ecole" => "Shujin Academy"));
        //création du nouveau document
        $document = new DomDocument();
        //set up du document
        $document->preserveWhiteSpace=false;
        $document->formatOutput=true;
        //création de la racine
        $lesEtudiants = $document->createElement("Etudiants");
        //ajout de la racine au document
        $document->appendChild($lesEtudiants);
        //pour chaque étudiant du tableau
        foreach($tabEtudiant as $num => $etud){
            //création d'un élément étudiant
            $etudiant = $document->createElement("Etudiant");
            //ajout d'un attribut id à l'étudiant
            $etudiant->setAttribute("id",$num);
            //pour chaque élément de cet étudiants
            foreach($etud as $key => $val){
                //ajout de l'élément à l'étudiant
                $newElement = $document->createElement($key);
                $newElement->nodeValue=htmlspecialchars($val);
                $etudiant->appendChild($newElement);
            }
            //ajout de l'étudiant au document
            $lesEtudiants->appendChild($etudiant);
        }
        //save du fichier
        $document->save("Etudiants_DOM.xml");
    ?>
    
    <!--footer-->
    <footer>
        <!--paragraphe de footer-->
        <p>Anthony LAMOUR étudiant en Master 2 à Ludus Académie</p>
    </footer>

</body>

</html>