<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Auteurs</title>
    <link rel="stylesheet" href="Auteurs.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
 
<?php  session_start();
include('<header>.php');?>

<main>
    
    <?php include('APIauteurs.php');?>
    <a id="remonter" href="#top"><img src="Photo/top.png" alt="Flèche vers le haut"></a>

</main>

<?php include('<footer>.php'); ?>

<script src=Auteur.js></script>
</body>

