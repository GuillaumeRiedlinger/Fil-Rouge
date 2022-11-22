<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Livres</title>
    <link rel="stylesheet" href="Auteurs.css"/>
</head>

<body>
    <?php session_start();
    include('<header>.php');?>

    <main>

    <?php include('APIlivres.php') ?>
        
    <a id="remonter" href="#top"><img src="Photo/top.png" alt="Flèche vers le haut"></a>

    </main>

    <?php include('<footer>.php'); ?>

</body>