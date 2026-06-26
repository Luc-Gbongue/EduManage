<?php
// Demarrer la session 
session_start();

// si aucun utilisateur n'esy connecté 
if(!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

// connexion à la db 
include("../includes/db.php");

// si formulaire ajouter  avec methode POST 
if($_SERVER["REQUEST_METHOD"] == "POST") {

    // recupérer les données u formulaire 
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduMenage - Elèves</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="students">
    <header>
         <!-- logo -->
        <div class="logo"><span>E</span>duManage</div>

         <!-- barre de navigation/lien  -->
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="grades.php">Notes</a></li>
                <li><a href="../logout.php">Déconnexion</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <main>
        <!-- section reservée à l'enregistrement de l'élève  -->
        <section class="add-student">
            <div class="addform-container">
                <h1>Ajouter un élève</h1>
                <form action="#" method="POST" novalidate>
                    <div class="input-box">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Entrez le nom" required>
                    </div>
                    <div class="input-box">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Entrez le prénom" required>
                    </div>
                    <div class="input-box">
                        <label for="classe">Classe</label>
                        <input type="text" name="classe" id="classe" placeholder="Ex : 6ème 1" required>
                    </div>
                    <button class="add-btn">Ajouter la note</button>
                </form>
            </div>
        </section>
        <section class="table-section">
            <div class="table-container">
                <h2>Listes des élèves</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Classe</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="6">Aucun élève enregiistré pour le moment</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <footer>
         <p>&copy; 2026 EduManage - Tous droits reservés. </p>
    </footer>
</body>
</html>