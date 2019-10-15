<!DOCTYPE html>
<html>
    <head>
        <title><h1>APROPOS</h1></title>
    </head>
    <body>
        <h1>APROPOS</h1>
        <p><?php echo $this->Html->link('Retour au véhicules ', ['controller' => 'vehicules']); ?></p>
        <p>
            Loïc Voyer <br>
            Applications Internet (4205B7MO - Automne 2019) <br>
            Automne 2018, Collège Montmorency. <br> <br>

            <strong>BD avec hasMany (1-n) et belongsToMany (n-n): </strong><br>
            defectuosites_vehicules, <br>
            files_vehicules <br> <br>

            <strong>cake bake pour 5 tables + validations: </strong><br>
            vehicules, <br>
            defectuosites <br>
            files, <br>
            users, <br>
            i18n <br> <br>

            <strong>Actions en menu pour trois types d'utilisateurs:</strong> <br>
            Admin: peut modifier, ajouter, et supprimer les informations (defectuosites, vehicules, etc.) <br>
            Utilisateur: Ne peut pas ajouter, supprimer, les informations (defectuosites, vehicules,etc.)<br> 
            <br>


            <strong>Élément Menu avec infos sur l'utilisateur / terminer:</strong>
            FONCTIONNEL <br>
            Dans la barre de menu horizontal, appuyer sur login pour vous connecter. Pour vous deconnecter, appuyer sur logout (votre nom d'utilisateur)<br> <br>


            <strong>Traduction i18n en français et 3ième langue:</strong><br>
            francais, <br>
            anglais,
            espagnol (NON FONCTIONNEL) <br>
            Dans la barre de menu horizontal, appuyer sur la langue de votre choix<br> <br>


            <strong>Gestion multilingue du contenu de la BD</strong> <br>
            NON-FONCTIONNEL <br>
            Le contenu de la BD n'est pas traduite<br> <br>

            <strong>Téléversement et affichage d'images liées</strong> <br>
            Table files est fonctionnel. Cependant, la liaison avec la table files_vehicules est non fonctionnel. <br>
            La source du probleme (de la liaison) est inconnu; les liaisons belongstomany sont bien faite.
            Appuyer sur files/fichiers dans la liste à gauche. Ensuite, on peut ajouter, supprimer, modifier un fichier. En faisant view/voir on peut voir le fichier lié à un vehicule. <br>
            <br><br>


            <strong>Envoi d'un courriel de confirmation avec UUID</strong> <br>
            FONCTIONNEL <br>
            Il faut activer DAVMAIL <strong>AVANT </strong> d'enregistrer un nouvel utilisateur<br> <br>


            <strong>Utlisation de Migrations et de SQLite</strong> <br>
            FONCTIONNEL
            La BD se trouve dans app/sqlite/default.sqlite <br> <br> <br>






            <strong>
                Utilisateur: admin@admin.com <br>  
                Mot de passe : admin
            </strong> <br> <br>
            
            
            <img src="img/Capture.jpg" alt="VUE D'ENSEMBLE DE LA BASE DE DONNÉE"><br> <br>
            
            <p>Lien du <a href="http://www.databaseanswers.org/data_models/vehicle_maintenance/index.htm">diagramme</a> original</p>
            
            

        </p>

        


        <p><?php echo $this->Html->link('Retour au véhicules ', ['controller' => 'vehicules']); ?><br> <br> <br>
        <br> <br> <br>
        <br> <br> <br></p>
    </body>
</html>
