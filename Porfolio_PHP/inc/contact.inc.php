<?php 

    // var_dump($_POST);
// ma class Contact
require('Contact.class.php');


  
if(!empty($_POST)){
    extract($_POST);

     foreach($_POST as $indice => $valeur) {
                $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES); //pour eviter les injections CSS ET JS
            }

            // var_dump($_POST);

    $valid = (empty($nom) || (strlen($nom) < 3 || strlen($nom) > 30) || (empty($prenom) || (strlen($prenom) < 3 || strlen($prenom) > 30 )) || (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) || empty($message)) ? false : true; // écriture ternaire pour if / else

    $erreurnom = (empty($nom) || (strlen($nom) < 3 || strlen($nom) > 30)) ? 'Indiquez votre nom entre 3 et 30 caractères.' : null;

    $erreurprenom = (empty($prenom) || (strlen($prenom) < 3 || strlen($prenom) > 30)) ? 'Indiquez votre prènom entre 3 et 30 caractères.' : null;

    $erreuremail = (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'Entrez un email valide.' : null;

    // $erreursujet = (empty($sujet)) ? 'Renseignez votre sujet.' : null;
    $erreurmessage = (empty($message) || strlen($message) < 10) ? 'Indiquez votre message.' : null;
    



     // si tous les champs sont correctement renseignés
    if ($valid) {
        // on crée un nouvel objet (ou une instance) de la classe Contact.class.php
        $contact = new Contact();
// on utilise la méthode insertContact de la classe Contact.class.php
        $contact->insertContact($nom, $prenom, $email, $message);
    }



}//FIN if(!empty($_POST)){










?>


<body id="bodyContact">

<nav class="navbar mt-3 contact effet">
  <a class="btn navbar-brand ml-5  border-success  rounded-circle effetB" href="index.php"><i class="fas fa-home home"></i></a>
  <a class="btn border-warning mr-5" href="?lien=formations">Formations</a>
  <a class="btn border-danger mr-5" href="?lien=competences">Compétences</a>
  <a class="btn border-info mr-5" href="?lien=creations">Réalisations</a>
  <a class="btn border-primary mr-5" href="?lien=luc">A Propos</a>
  <a class="btn border-success bg-success mr-5" href="?lien=contact">Contacts</a>
</nav>

<div class="container mx-auto stylef effetA contacts mt-5">

<div class="row">
    <div class="col-12 mt-4">
        <h1 class="text-white text-center">ME CONTACTER</h1>
    </div>

</div>

 <div class="row mt-3">
     <div class="col-6">
         <form action="" method="POST" id="form">

                <div class="col-12  text-danger text-center rounded" id="messageError"><?php if (isset($erreurnom)) echo $erreurnom ; ?></div>
                    <div class="form-group p-3">
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">
                    </div>

                        <div class="col-12 text-danger text-center rounded" id="messageError"><?php if (isset($erreurprenom)) echo $erreurprenom ; ?></div>

                    <div class="form-group p-3">
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom">
                    </div>


                        <div class="col-12 text-danger text-center rounded" id="messageError"><?php if (isset($erreuremail)) echo $erreuremail ; ?></div>
                    <div class="form-group p-3">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                    </div>

                    <!-- <div class="form-group p-3">
                        <input type="phone" name="telephone" id="telephone" class="form-control" placeholder="Télephone">
                    </div> -->
                <div class="col-12 text-danger text-center rounded" id="messageError"><?php if (isset($erreurmessage)) echo $erreurmessage; ?></div>

                    <div class="form-group p-3">
                        <textarea type="text" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                    </div>

                                           
                    <div class="form-group p-3">
                        <button type="submit" id="submit" name="submit" class="form-control btn btn-success">Envoyer</button>
                    </div>
                </form>
            </div>



            <div class="col-5 offset-1 text-white text-center contact mt-5 mb-5 ml-1">
              <h3 class="mt-5">Vous pouvez me contacter</h3>

                <p class="p-3"><i class="fas fa-mobile-alt "></i> : (+33) 7 53 41 25 53</p>
                <p class="p-2"><i class="fas fa-envelope "></i> : lucmerlentzjoinvil@gmail.com</p>
                <p class="p-2"> <a href="www.linkedin.com/in/luc-merlentz-joinvil"><i class="fab fa-linkedin "></i> : Luc Merlentz Joinvil</a> </p>
            </div>
        </div>


  <?php  ?>  
</div>
    
</body>

