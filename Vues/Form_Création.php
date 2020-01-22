</br>
</br>
</br>
</br>
<form action = "index.php?action=creer" method="post">
    <div>
        <label for="Nom">Nom :</label>
        <input type="text" id="Nom" name="Nom">
    </div>
    <div>
        <label for="Prenom">Prenom:</label>
        <input type="text" id="Prenom" name="Prenom">
    </div>
    <div>
        <label for="mail">Mail :</label>
        <textarea type = "email" id="mail" name="mail"></textarea>
    </div>
    <div>
        <label for="adresse">Adresse :</label>
        <textarea id="adresse" name="adresse"></textarea>
    </div>
    <div>
        <label for="tel">Telephone :</label>
        <textarea id="tel" name="tel"></textarea>
    </div>
    <div>
        <label for="date_naiss">Date de naissance :</label>
        <input type = 'date' id="date_naiss" name="date_naiss">
    </div>
    
    <div class="button">
        <button type="submit">Créer l'étudiant</button>
    </div>
</form>