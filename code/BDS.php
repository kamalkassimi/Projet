<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page_php_BDS</title>
</head>
<body> 
    
    <?php 
                function valid_donnees($donnes){
                    $donnes=trim($donnes);
                    $donnes=stripslashes($donnes);
                    $donnes=htmlspecialchars($donnes);
                    // $donnes=FILTER_VALIDATE_EMAIL($donnes);
                    return $donnes;
                }
                $servore="localhost";
                $username="root";
                $pas="";
                $nom=valid_donnees($_POST["nom"]);
                $prenom=valid_donnees($_POST["Prenom"]);
                $telephone= valid_donnees($_POST["telephone"]);
                $email=valid_donnees($_POST["email"]) ;
                $pass=valid_donnees($_POST["password"]);
                $filiere=valid_donnees($_POST["filiere"]);
                $Admin=valid_donnees($_POST["Admin"]);
                echo "filiere :".$filiere."<br>";

// nom	prenom	telephone	mail	pass	filière 	Admin
  
            try {
                $connexion= new PDO("mysql:host=$servore;dbname=ntic_ofppt",$username,$pas);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $requete=$connexion->prepare("INSERT  INTO stagire1 (nom,prenom,telephone,mail,pass,filiere ,Admin)
                 VALUES (:nom,:prenom,:telephone,:mail,:pass,:filiere,:Admin);") ;
                $requete->bindParam(":nom",$nom);
                $requete->bindParam(":prenom",$prenom);
                $requete->bindParam(":telephone",$telephone);
                $requete->bindParam(":mail",$email); 
                $requete->bindParam(":pass",$pass); 
                $requete->bindParam(":filiere",$filiere); 
                $requete->bindParam(":Admin",$Admin); 
                $requete->execute(); 
                echo " Puis inscrivez-vous  avec succes";
                 header("Location:tuotPage.html");
            } 
            catch (PDOException $e ) {
                echo $e->getMessage();
            }
            finally{
                $connexion=NULL;         
               }
            
    
    ?>
</body>
</html>