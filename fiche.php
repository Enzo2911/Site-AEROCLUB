<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Page Index pour les cours"
    />
    <meta name="author" content="Bart." />
    <title>Mes différent php</title>
    <link href="./css/style.css" rel="stylesheet" />

</head>
<body>
<body background="https://cdn.glitch.com/d10ee498-0355-4544-8283-4cd5d0a6e38c%2Fbg-masthead.jpg?v=1604913489247">


<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $tel=$_POST['phone'];
    $raison=$_POST['raison'];
    $ulm=$_POST['ulm'];
    $com=$_POST['msg'];
?>

<center>

<h1> Résumé de vos informations :</h1>
<br> <br> <br> <br>
<p> <?php echo 'Votre Nom : '. $nom ;?> </p>
<p> <?php echo 'Votre Prenom : '. $prenom ;?> </p>
<p> <?php echo 'Votre Email : '. $email ;?> </p>
<p> <?php echo 'Votre Numéro de téléphone : '. $tel ;?> </p>
<p> <?php echo 'Pour quelle raison nous contactez-vous : '. $raison ;?> </p>
<p> <?php echo "Quel Type d'ULM voulez-vous piloter : ". $ulm ;?> </p>
<p> <?php echo 'Commentaire : '. $com ;?> </p>

</center>
</body>
</html>