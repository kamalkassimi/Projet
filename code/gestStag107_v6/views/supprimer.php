<?php
$titre = "Supprimer un stagiaire";
include_once './views/masterPage.php';
?>
<style> 
input[type=button] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.l{
    text-decoration: none;
}

</style>
<p class="mx-4">Voulez-vous vraiment supprimer ce stagiaire ?</p>
<a href="index.php?action=destroy&id=<?php echo $id ?>" class="btn btn-danger mx-4" ><input  type="button" style='background-color:red;text-decoration: none;' value="Oui"></a>
<a href="index.php?action=liste" class="btn btn-success mx-4" type='button'><input type="button"  value="Nom"></a>
<?php include_once './views/masterPage.php'; ?>