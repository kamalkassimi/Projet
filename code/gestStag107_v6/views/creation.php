<?php
$titre = 'Ajouter un stagiaire';
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
<br>
<p style="text-content: center;" >Ajouter un stagiaire :<p>
<form action="index.php?action=enregistrer" class="form-group mx-4" method="post">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom">
    </div>
    
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
    <div class="form-group">
        <label for="telephone">telephone</label>
        <input type="number" class="form-control" id="telephone" name="telephone">
    </div>
    <div class="form-group">
        <label for="mail">mail</label>
        <input type="text" class="form-control" id="mail" name="mail">
    </div>
    <div class="form-group">
        <label for="pass">Mot de passe</label>
        <input type="password" class="form-control" id="pass" name="pass">
    </div>
    <div class="form-group">
            <label for="filiere">filiere</label>
            <select class="form-select"  name="filiere">
            <option selected>le choisir</option>
            <option value="mobile">mobile</option>
            <option value="web">web</option>
            <option value="Securite de l'information">Securite de l'information</option>
            <option value="dada">dada</option>
        </select>
    </div>
    <input type="submit" class="btn btn-primary mt-4" value="Ajouter">
</form>
<?php include_once './views/masterPage.php'; ?>