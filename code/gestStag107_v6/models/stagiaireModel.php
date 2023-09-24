<?php
function connect_base(){
    $serveur = 'localhost';
    $dbname = 'ntic_ofppt';
    $user = 'root';
    $pw = '';
    $con = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pw);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
}
    function liste_stagiaire(){
    $con=connect_base();  
    $requete = $con->prepare("SELECT * FROM stagire1");
    $requete->execute();
    $stagiaires = $requete->fetchAll(PDO::FETCH_OBJ);
    return $stagiaires;
    }
    /*id	nom	prenom	telephone mail pass	filiere	Admin */
    function creer(){
        $nom=$_POST['nom'];
        $prenom = $_POST['prenom'];
        $telephone = $_POST['telephone'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $filiere = $_POST['filiere'];
        $con=connect_base();
        $requete=$con->prepare("INSERT INTO stagire1 (nom,prenom,telephone, mail ,pass,	filiere	)
        VALUES (:nom,:prenom,:telephone ,:mail ,:pass,:filiere);");
        $requete->bindParam(':nom',$nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':telephone', $telephone);
        $requete->bindParam(':mail', $mail);
        $requete->bindParam(':pass', $pass);
        $requete->bindParam(':filiere', $filiere);
        $requete->execute();
        return $requete;
    }
    function supprimer($id){
        $con=connect_base();
        $requete=$con->prepare("DELETE FROM stagire1 WHERE id=:id");
        $requete->bindParam(':id',$id);
        $requete->execute();
        return $requete;
    }
    function editer($id){
        $con = connect_base();
        $requete = $con->prepare("SELECT * FROM stagire1 WHERE id=:id");
        $requete->bindParam(':id', $id);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_OBJ);
    }
    function modifier($id,$nom,$prenom,$telephone,$mail,$pass,$filiere){
        $con = connect_base();
        $requete=$con->prepare("UPDATE stagire1 
        SET nom=:nom,prenom=:prenom,telephone=:telephone,mail=:mail,pass=:pass, filiere=:filiere
        WHERE id=:id");
        $requete->bindParam(':nom',$nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':telephone', $telephone);
        $requete->bindParam(':mail', $mail);
        $requete->bindParam(':pass', $pass);
        $requete->bindParam(':filiere', $filiere);
        $requete->bindParam(':id', $id);
        $requete->execute();
        return $requete;
    }
    function editerv(){
        $con = connect_base();
        $requete = $con->prepare("SELECT COUNT(id) FROM stagire1 ");
        $requete->execute();
        return $requete;
    }
?>