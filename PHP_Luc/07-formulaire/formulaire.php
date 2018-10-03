<?php
// -_-_-_-_-_-_-_-_-_-_--_--_-_-
// Validation de formulaire
// -_-_-_-__-_-__-_----__-_-_-_-_-

// Créer un formulaire qui permet d'enregistrer un new employé ds la BDD societe.

$message = ''; //Variable pour afficher les message d'erreur

// 2- Connexion à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=societe', 
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 
);

// 3- Traitement de $_POST :
if ($_POST){ // est équivalent à !empty($_POST)

    // print_r($_POST);

    // Contrôles du formulaire : 
        if (!isset($_POST['prenom']) || strlen($_POST['prenom']) < 3 || strlen($_POST['prenom'] > 20 ) ) $message .= '<p>Le prénom doit comporter entre 3 et 20 caractères.</p>'; //si n'existe pas l'indice "prenom", c'est que le name à été modifié.... on vérifie aussi la longueur du prenom

         if (!isset($_POST['nom']) || strlen($_POST['nom']) < 3 || strlen($_POST['nom'] > 20 ) ) $message .= '<p>Le nom doit comporter entre 3 et 20 caractères.</p>';

          if (!isset($_POST['service']) || strlen($_POST['service']) < 3 || strlen($_POST['service'] > 30 ) ) $message .= '<p>Le service doit comporter entre 3 et 30 caractères.</p>';

          if (!isset($_POST['sexe']) || ($_POST['sexe'] != 'm' && $_POST['sexe'] != 'f')) $message .= '<p>Le sexe n\'est pas valide.</p>';

          if (!isset($_POST['date_embauche']) || !strtotime($_POST['date_embauche'])  ) $message .= '<p>La date n\'est pas valide.</p>'; // strtoyime() renvoie false si le timestamp de la date fournie ne peut pas etre obtenu, autrement dit si la date n'est pas réputée valide.

          if (!isset($_POST['salaire']) ||  !is_numeric($_POST['salaire']) || $_POST['salaire'] <= 0  ) $message .= '<p>Le salaire doit être un nombre positif.</p>'; // is_numeric() verifie la variable est un nombre ou bien une chaine numérique (un nombre en string)

        //   -_-_-_-_-_-_--_
        // Si la variable $message est vide, c'est que le formulaire est valide : on peut enregistrer en BDD :
            if (empty($message)){

                // on échappe toutes les valeur de $_POST :
                foreach($_POST as $indice => $valeur){
                    $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES); // On prend la valeur que l'on traite avec htmlspecialchars() puis que l'on range dans son emplacement initial qui est $_POST[$indice]
                }

                // On reformate la date en yyyy-mm-dd
                $date = new DateTime($_POST['date_embauche']); // on crée un objet $date qui contient la date d'embauche à partir de la classe DateTime
                $date_embauche = $date->format('Y-m-d'); // on utilise la méthode format() pourt changer le format de la date
                var_dump($date_embauche);

                // La requête préparée :
                $resultat = $pdo->prepare("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) 
                                                         VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire) ");

                    $resultat->bindParam(':prenom', $_POST['prenom']);
                    $resultat->bindParam(':nom', $_POST['nom']);
                    $resultat->bindParam(':sexe', $_POST['sexe']);
                    $resultat->bindParam(':service', $_POST['service']);
                    $resultat->bindParam(':date_embauche', $date_embauche);
                    $resultat->bindParam(':salaire', $_POST['salaire']);

                    $req = $resultat->execute(); //$rec est un booléen : true en cas de succès de la requête, sinon false en cas d'échec

                    //Message de réussite ou d'échec de l'enregistrement :
                    if($req){
                        $message .= '<p style="background: green; color:white"> L\'employé a bien été ajouté.</p>';
                    }else{
                         $message .= '<p style="background: red; color:white"> Erreur lors de l\'enregidtrement.</p>';
                    }

            }//FIN DU if (empty($message))




}//FIN DU if ($_POST)


// 1- le formulaire HTML :
    echo $message;
    ?>
    <form action="" method="post">
        <label for="prenom">Prénom</label><br>
        <input type="text" id="prenom" name="prenom" value="<?php echo $_POST['prenom'] ?? ''; ?>"><br>

        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" value="<?php echo $_POST['nom'] ?? ''; ?>"><br>

        <label>Sexe</label><br>
        <input type="radio" name="sexe" value="m" checked>Homme
        <input type="radio" name="sexe" value="f" <?php if (isset($_POST['sexe']) && $_POST['sexe'] == 'f') echo 'checked';  ?> >Femme
        <br>

         <label for="service">Service</label><br>
        <input type="text" id="service" name="service" value="<?php echo $_POST['service'] ?? ''; ?>"><br>

         <label for="date_embauche">Date d'embauche</label><br>
        <input type="text" id="date_embauche" name="date_embauche" value="<?php echo $_POST['date_embauche'] ?? ''; ?>" placeholder="jj-mm-aaa"><br>

         <label for="salaire">Salaire</label><br>
        <input type="text" id="salaire" name="salaire" value="<?php echo $_POST['salaire'] ?? ''; ?>"><br>

        <input type="submit" values="Enregistrer">


    
    
    </form>


