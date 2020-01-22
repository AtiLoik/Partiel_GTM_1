<?php
    $liste = Etudiant::Liste_Etudiant($pdo);
    
?>
</br>
</br>
</br>
</br>
<table>
    <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>MAIL</th>
        <th>ADRESSE</th>
        <th>TELEPHONE</th>
        <th>DATE DE NAISSANCE</th>
    </tr>
<?php
    foreach($liste as $etu){
        echo "
        <tr>
            <td>".$etu['Id']."</td>
            <td>".$etu['Nom']."</td>
            <td>".$etu['Prenom']."</td>
            <td>".$etu['Mail']."</td>
            <td>".$etu['Adresse']."</td>
            <td>".$etu['Telephone']."</td>
            <td>".$etu['Date_Naissance']."</td>
        </tr>
        ";
    }
?>
</table>