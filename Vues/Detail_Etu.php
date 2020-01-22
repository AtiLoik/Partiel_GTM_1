<?php
    $liste = Etudiant::Info_Etudiant($_GET['id'], $pdo);
    
?>
</br>
</br>
</br>
</br>
<h2>Détail de l'étudiant</h2>
<table>
    <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>Adresse</th>
        <th>Mail</th>
        <th>Telephone</th>
        <th>Date de naissance</th>
    </tr>
<?php
    foreach($liste as $etu){
        echo "
        <tr>
            <td>".$etu['Id']."</td>
            <td>".$etu['Nom']."</td>
            <td>".$etu['Prenom']."</td>
            <td>".$etu['Adresse']."</td>
            <td>".$etu['Mail']."</td>
            <td>".$etu['Telephone']."</td>
            <td>".$etu['Date_Naissance']."</td>
        </tr>
        ";
    }
?>
</table>