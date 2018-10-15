Pour héberger un site chez un hébergeur :
1- s'inscrire et confirmer son inscription.

2- Création de la BDD : 
        Lors de la création de la BDD, l'hébergeur vous communique les infos suivants :
                                                                                        - hôte de la BDD : souvent localhost, mais être autre chose
                                                                                        - du nom de la BDD
                                                                                        - nom de l'utilisateur
        En revanche le mot de passe de la BDD est indiqué par vous même lors de la création.

        Puis importer votre BDD locale que vous aurez préalablement exportée de votre PhPMyAdmin de Xampp.

3- préparer le fichier index.php : 
        Y mettre les parametres de connexion à la BDD décrits ci-dessus

4- Uploader les fichiers sources du site avec un client FTP type filezilla.
Attention à bien mettre ces fichiers ds le dossier prévu à cet effet : html_public, public, www, etc...

5- Si vous etiez sur Wordpress : on modifierait les URLs dans la table "option" ds les enregistrement indice 1 et 2.

6- Vérifie la bonne mise en ligne du site.