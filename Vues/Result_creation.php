</br>
</br>
</br>
</br>
<?php
    $data['nom'] = $_POST['Nom'];
    $data['prenom'] = $_POST['Prenom'];
    $data['mail'] = $_POST['mail'];
    $data['adresse'] = $_POST['adresse'];
    $data['tel'] = $_POST['tel'];
    $data['date_naiss'] = $_POST['date_naiss'];
    $message = Etudiant::Créer_Etudiant($data, $pdo);
    echo $message;
var_dump($data);
?>