<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Accueil</title>
    <link rel="stylesheet" href="../Auteurs.css" />
</head>

<body>
    <?php session_start();?>
    <header>

        <figure> <img src="../Photo/livre.webp" alt="logo" /></figure>

        <div class="header">
        <h1>Livre pas cher</h1>
        <nav class="menu1">
            <ul>
                <li><a href="./../Accueil.php">Accueil</a></li>
                <li><a href="../Auteurs.php">Auteurs</a></li>
                <li><a href="../Livres.php">Livres</a></li>
                <li><a href="../Panier.php">Panier</a></li>
            </ul>

        </nav>
        </div>
        <section class="headersection">
        <?php 
                if (!empty($_SESSION['user']['pseudo'])) {
                    echo "Bonjour: {$_SESSION['user']['pseudo']} ";
                    echo'<p><a href="ConnexionClient.php">Se déconnecter.<a></p> ';
                }else{
                    echo"Vous n'êtes pas connecté.";
                    echo'<p><a href="ConnexionClient.php">Se connecter.<a></p> ';
                    echo'<p><a href="Inscription.php">S\'inscrire.<a></p>';
                }
            ?>

        </section>

    </header>

    <main>
       

        <section>

            <h1> Connexion </h1>
            <form method="post" action="ConnexionTraitement.php">

                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo"> </br>

                <label for="password">Mot de Passe</label>
                <input type="password" name="password"> </br>

                <button type="submit">Me connecter</button>


            </form>

        </section>
        <main>
            <?php include('../<footer>.php'); ?>

</body>