<?php
// connecter la base au formulaire 
include("includes/db.php");

// // Si le formulaire est envoyé au serveur avec la method="POST"
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // recuperer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom']; 
    $email = $_POST['email'];
    $password = $_POST['password'];

    // verification des données recuperees
    // verification 1 : les champs de saisie vides
    if($nom == "" || $prenom == "" || $email == "" || $password =="") {
        echo "Veuillez remplir tous les champs.";
    }
    else{
         // verification 2: si l'email existe deja dans la base
    // else {
        // etablie une requete sql 
        $sqlrequete = "SELECT * FROM users WHERE email = '$email'";

        // boite contenant le resultat de la requete 
        $resultat = mysqli_query($connexion, $sqlrequete);

        // si l'email exitse dans la table deja
        if(mysqli_num_rows($resultat) > 0){
            echo "Cet email existe déjà."; 
         }
         else{
            echo "Inscription reussie!";
            die();
         }
    }

}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>EduManage - Inscription</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body class="register">
        <!-- En-tête de la page -->
        <header>
            <!-- logo -->
            <div class="logo"><span>E</span>duManage</div>

            <!-- barre de navigation/lien  -->
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="login.php">Se connecter</a></li>
                </ul>
            </nav>
        </header>

        <!-- Menu principal -->
        <main>
            <section class="register-container">
                <div class="register-content">
                    <div>
                        <h1>Créer un compte</h1>
                        <p>Inscrivez-vous pour avoir votre espace de travail sur EduManage</p>
                    </div>
                    <div>
                        <form action="#" method="POST" novalidate>
                            <div class="input-box">
                                <label for="nom">Nom : </label>
                                <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required>
                            </div>
                            <div class="input-box">
                                <label for="prenom">Prénom(s) : </label>
                                <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" required>
                            </div>
                            <div class="input-box">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Entrez votre adresse mail" required>
                            </div>
                            <div class="input-box">
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                            </div>
                            <button type="submit" class="register-btn">Envoyez</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <!-- Pieds de page -->
        <footer>
            <p>&copy; 2026 EduManage - Tous droits reservés. </p>
        </footer>
        
    </body>
</html>