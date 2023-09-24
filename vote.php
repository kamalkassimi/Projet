<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valid log in </title>
</head>
<body>
    <?php 
    $servore="localhost";
    $username="root";
    $pas="";   
            
                $oui= $_POST['oui'];
                $no= $_POST['no'];
        try {
            $connexion= new PDO("mysql:host=$servore;dbname=ntic_ofppt",$username,$pas);
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $var=$connexion->prepare("INSERT INTO vote (oui no) VALUES (:oui ,:no); ");
            $requete->bindParam(":oui",$oui);
            $requete->bindParam(":no",$no);
            $var->execute();
        } catch (PDOException $e ) {
            echo $e->getMessage();
        }
        finally{
            $connexion=NULL;
        }
    ?>
</body>
</html>