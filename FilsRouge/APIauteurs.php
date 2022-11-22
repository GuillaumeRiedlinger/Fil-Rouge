<?php
//première API 


include('IdentifiantDB.php');


$db = new PDO("mysql:host=$hote; dbname=$nomdb;charset=utf8", $user, $password);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$array = $db->query('SELECT * FROM Auteur');
$genre = $db->prepare('SELECT * FROM Genre INNER JOIN Auteur_Genre ON Auteur_Genre.id_Genre = Genre.id_genre INNER JOIN Auteur ON id_Auteur = Auteur.id WHERE Auteur.id = :id');
$auteurs = $array->fetchAll();

echo '<div class="tous">

        <div class="menu">
            <h2>Liste des Auteurs</h2>
            <nav class="menu2">
                <ul classe="menu2">';

foreach ($auteurs as $auteur) {
    echo '<li><a href="#A' . $auteur['id'] . '">' . $auteur['nom'] . ' ' . $auteur['prenom'] . '</a></li>';
}
echo '   
                </ul>
            </nav>
        </div> ';
echo '<article><h1>Les Auteurs</h1>';

foreach ($auteurs as $auteur) {
    echo '<section>';
    echo '<h2 id="A' . strip_tags($auteur['id']) . '">' . strip_tags($auteur['nom']) . '</h1>';
    echo '<figure class="photo">
            <img src="' . strip_tags($auteur['photo']) . '" alt="Honoré de Balzac" />
                </figure>';
    echo '<p>Nom: ' . strip_tags($auteur['nom']) . '<br/><br/>';
    echo 'Prenom: ' . strip_tags($auteur['prenom']) . '<br/><br/>';
    echo 'Date de Naissance: ' . strip_tags($auteur['naissance']) . '<br/><br/>';
    echo 'Date de Mort: ' . strip_tags($auteur['mort']) . '<br/><br/>Biographie ';
    echo '<aside class="bio">' . strip_tags($auteur['biographie']) . '</aside>';

    
    echo '<aside>Genre:</Aside><ul>';
   
    $genre->execute([
        'id' => $auteur['id']
    ]);


    foreach ($genre as $genres) {
        echo '<li>' . strip_tags($genres['genre']) . '</li>';
    }

    echo '</ul>';

    echo '<div id="hidden' . strip_tags($auteur['id']) . '" class="hidden"><p>Pas de livre de cette auteur disponible dans notre boutique.</p></div>';


    echo '<button id="btn' . strip_tags($auteur['id']) . '" onclick=visibleDiv(' . $auteur['id'] . ') >Livre de l\'auteur</button>';
    echo '</section>';
}

echo '</article></div>';
