<?php
    session_start();
    include 'Connexion.php';
    include 'Classes/Etudiants.php';
    include 'Classes/Directeur.php';

    if(isset($_POST['MDP']))
    {
        $data['nom'] = $_POST['Nom'];
        $data['MDP'] = $_POST['MDP'];
        $_SESSION['connect'] = Directeur::Verif_Connnexion($data, $pdo);
    }

    if($_SESSION['connect'] != null):
?>

<h1>Bienvenue sur le site d'acceuil de gestion de l'ENSUP</h1>

<a href="index.php?action=creation">Créer un étudiant</a></br>
<a href="#">Associer un cours à un étudiant</a></br>
<a href="#">Lire les informations d'un étudiant</a></br>
<a href="#">Modifier un étudiant</a></br>
<a href="#">Supprimer un étudiant</a></br>
<a href="index.php?action=liste">Lister les étudiants</a></br>

<?php

if(isset($_GET['action']))
{
    $action = $_GET['action'];
    if($action == 'liste')
    {
         include 'Vues/Liste_Etu.php';
    }
    elseif($action == "detail")
    {
        include 'Vues/Detail_Etu.php';
    }
    elseif($action == "suppr")
    {
        include 'Vues/Suppr_etu.php';
    }
    elseif($action == "creation")
    {
        include 'Vues/Form_Création.php';
    }
    elseif($action == "creer")
    {
        include 'Vues/Result_creation.php';
    }
}
?>

<?php
    else:
        include 'Vues/Form_connexion.php';
    endif;
?>
