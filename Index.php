<?php
    include 'Connexion.php';
    include 'Classes/Etudiants.php';
?>

<h1>Bienvenue sur le site d'acceuil de gestion de l'ENSUP</h1>

<a href="#">Créer un étudiant</a></br>
<a href="#">Associer un cours à un étudiant</a></br>
<a href="#">Lire les informations d'un étudiant</a></br>
<a href="#">Modifier un étudiant</a></br>
<a href="#">Supprimer un étudiant</a></br>
<a href="index.php?action=liste">Lister les étudiants</a></br>

<?php
    if((isset ($_GET['action']))=="liste")
    {
        include 'Vues/Liste_Etu.php';
    }
?>
