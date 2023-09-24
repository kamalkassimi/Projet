<?php
$titre = 'Modifier un stagiaire';

include_once './views/masterPage.php'; ?>
<style>


input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
 input[type=submit] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
<br>
<br>
<br>
<p> modifition :</p>
<form action="index.php?action=modification" class="form-group mx-4" method="post" class="container">
    <div class="form-group" >
        <input type="hidden" class="form-control" id="id" name="id" value=' <?=$stagiaires->id ?>'>
    </div>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="<?=$stagiaire->nom ?>">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $stagiaire->prenom ?>">
    </div>
    <div class="form-group">
        <label for="telephone">telephone</label>
        <input type="number" class="form-control" id="telephone"  name="telephone"  value="<?= $stagiaire->telephone ?>">
    </div>
    <div class="form-group">
        <label for="mail">mail</label>
        <input type="text" class="form-control" id="mail" name="mail" value="<?= $stagiaire->mail ?>">
    </div>
    <div class="form-group">
        <label for="pass">Mot de passe</label>
        <input type="password" class="form-control" id="pass" name="pass" value="<?= $stagiaire->pass ?>">
    </div>
    <div class="form-group">
        <label for="filiere">filiere</label>
        <input type="text" class="form-control" id="filiere" name="filiere" value="<?= $stagiaire->filiere ?>">
    </div>
    <input type="submit" class="input" value="Modifier">
</form>
<?php include_once './views/masterPage.php'; ?>