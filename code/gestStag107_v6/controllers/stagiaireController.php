<?php
require_once './models/stagiaireModel.php';
function liste_stagiaireAction(){
    $stagiaires=liste_stagiaire();
    require_once './views/liste_stagiaires.php';
}
function creerAction(){
    require_once './views/creation.php';
}
function entregistrerAction(){
    creer();
    header("Location:index.php?action=liste");
}
function supprimerAction(){
    $id=$_GET['id'];
    require_once './views/supprimer.php';
}
function destroyAction(){
    $id = $_GET['id'];
    supprimer($id);
    header("Location:index.php?action=liste");
}
function editerAction(){
    $id=$_GET['id'];
    $stagiaire=editer($id);
    require_once './views/editer.php';
}
function modifierAction(){
    $id=$_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $filiere = $_POST['filiere'];
    modifier($id,$nom,$prenom,$telephone,$mail,$pass,$filiere);
    header("Location:index.php?action=liste");
}

?>