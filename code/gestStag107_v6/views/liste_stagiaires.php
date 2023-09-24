<?php
$titre = 'liste des stagiaires';
include_once './views/masterPage.php' ?>
<link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
<style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<p> list de stagire j'ai ete inscrit dans cette ecole , le nombre d'eleves et d'etudiants pour une periode  d'environ:  :<a href="index.php?action=creation" class="btn btn-primary mx-4">Ajouter</a></p>
<table id="customers">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>telephone</th>
        <th>mail</th>
        <th>filiere</th>
        <th>supprimer et Modifier<th>
    </tr>
    <?php foreach ($stagiaires as $stag) : ?>
        <tr>
            <td><?= $stag->id;?></td>
            <td><?= $stag->nom;?></td>
            <td><?= $stag->prenom; ?></td>
            <td><?= $stag->telephone; ?></td>
            <td><?= $stag->mail; ?></td>
            <td><?= $stag->filiere; ?></td>
            <!-- = remplace php echo-->
            <td>
                <a href="index.php?action=suppression&id=<?php echo $stag->id; ?>" class="btn btn-danger btn-sm">Spprimer</a>
                <a href="index.php?action=edition&id=<?php echo $stag->id; ?>" class="btn btn-warning btn-sm">Modifier</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include_once './views/masterPage.php' ?>