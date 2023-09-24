
<?php  
require_once './controllers/stagiaireController.php';
liste_stagiaireAction();

if(isset($_GET['action'])){
    $action= $_GET['action'];
    switch($action){
        case 'liste':
            liste_stagiaireAction();
            break;
        case 'creation':
            creerAction();
            break;
        case 'destroy':
            destroyAction();
            break;
        case 'edition':
            editerAction();
            break;
        case 'enregistrer':
            entregistrerAction();
            break;
        case 'modification':
            modifierAction();
            break;
        case 'suppression':
            supprimerAction();
            break;
        default:
            liste_stagiaireAction();
            break;
        
    }
  
}

?>
