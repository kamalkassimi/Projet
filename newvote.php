<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

if (isset($_POST['OK'] )) {
                function valid_donnees($donnes){
                    $donnes=trim($donnes);
                    $donnes=stripslashes($donnes);
                    $donnes=htmlspecialchars($donnes);
                    return $donnes;
                }
                $servore="localhost";
                $username="root";
                $pas="";
                $vote=valid_donnees($_POST["vote"]);
            try {
                $connexion= new PDO("mysql:host=$servore;dbname=ntic_ofppt",$username,$pas);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $requete=$connexion->prepare("INSERT  INTO vote_ (vote)
                 VALUES (:vote);" ) ;
                $requete->bindParam(":vote",$vote); 
                $requete->execute(); 
                echo " vote";
                 header("Location:tuotPage.html");
            } 
            catch (PDOException $e ) {
                echo $e->getMessage();
            }
            finally{
                $connexion=NULL;         
               }
            
            }
    ?>
</body>
</html>