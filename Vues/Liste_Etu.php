<?php
    $liste = Etudiant::Liste_Etudiant($pdo);
    
?>
</br>
</br>
</br>
</br>
<h2>Cliquez sur l'ID d'un étudiant pour avoir ses détails</h2>
<table>
    <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th></th>
    </tr>
<?php
    foreach($liste as $etu){
        echo "
        <tr>
            <td><a href='index.php?action=detail&id=".$etu['Id']."'>".$etu['Id']."</a></td>
            <td>".$etu['Nom']."</td>
            <td>".$etu['Prenom']."</td>
            <td><a href = 'index.php?action=suppr&id=".$etu['Id']."'>Supprimer</a>   <a href='#'>Modifer</a></td>
        </tr>
        ";
    }
?>
</table>