</br>
</br>
</br>
</br>
<?php
    $message = Etudiant::Supprimer_Etudiant($_GET['id'], $pdo);
    echo $message;
?>