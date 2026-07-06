<?php

// Demarrer une session de connexion utilisteur
session_start();
// connexion a la base de données
include("includes/db.php");

// si formulaire de connexion envoyé avec la methode "POST"
if($_SERVER["REQUEST_METHOD"] == "POST"){

// recuprer les données envoyées 
$email = $_POST['email'];
$password = $_POST['password'];

// verification 1: les champs vides 
if($email == "" || $password == ""){
    echo "Veuillez remplir les champs vides.";
}
else{
    // si non, trouver l'utilisateur corresondant à cet email 
    $sql_requete = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
    $resultat_requete = mysqli_query($connexion, $sql_requete);

    // si le resultat donne une seule ligne de mail 
    if (mysqli_num_rows($resultat_requete) == 1){
        // ouvrir la session de connexion basée sur l'email de l'utilisateur 
        $_SESSION['user'] = $email;

        // et le rediriger vers dashboard 
        header("Location: dashboard.php");
        exit();
    }
    else{
        echo "Email ou mot de passe incorrect";
    }
}
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EduManage - Connexion</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body class="login">
        <!-- En-tête de la page -->
        <header>
            <!-- logo -->
            <div class="logo"><span>E</span>duManage</div>

            <!-- barre de navigation/lien  -->
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="register.php">Inscription</a></li>
                </ul>
            </nav>
        </header>

        <!-- Menu principal -->
        <main>
            <section class="login-container">
                <div class="login-box">
                    <div>
                    <h1>Connexion</h1>
                    <p>Connectez-vous pour accéder à votre espace de travail</p>
                    </div>
                <!-- Formulaire de connexion  -->
                    <div>
                    <form id="login-form" action="#" method="POST" novalidate>
                        <div class="input-box">
                            <label for="email">Email : </label>
                             <input type="email" name="email" id="email" placeholder="Entrez votre adresse mail" required>
                        </div>
                        <div class="input-box">
                            <label for="password">Mot de passe : </label>
                             <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                             <button type="button" class="password-btn"><i class="fa-solid fa-eye"></i></button>
                        </div>
                        <button type="submit" class="login-btn">Se connecter</button>
                    </form>
                    </div>
                </div>
            </section>
            
        </main>

        <!-- Pieds de page -->
        <footer>
            <p>&copy; 2026 EduManage - Tous droits reservés. </p>
        </footer>
        <script src="js/app.js"></script>
    </body>
</html>