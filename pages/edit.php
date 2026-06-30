<?php
session_start();

// si aucun utilisateur connecté 
if(!isset($_SESSION['user'])){

    // rediriger à la page login et arreter le script
    header("Location: ../login.php");
    exit();
} else {
    // se connecter a la base de donnée 
    include("../includes/db.php");

        // sinon, recuperer l'id de l'éléve 
         $student_id = $_GET['id'];
        // selectionner l'eleve a modifier a partir de cet id
         $sql = "SELECT * FROM students_db WHERE id = '$student_id'";
         $resultat_sql = mysqli_query($connexion, $sql);

         $nbre_eleve = mysqli_num_rows($resultat_sql);

         if($nbre_eleve > 0){
            $afficher_eleve = mysqli_fetch_assoc($resultat_sql);
         } else{
            header("Location: students.php");
            exit();
         }
        // si  formulaire envoyé avec la methode POST
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            // recuperer les données saisies
            $name = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $classe = $_POST['classe'];

            // verifier les champs vides 
            if($name == "" || $prenom == "" || $classe == ""){
                echo "Veuillez remplir tous les champs.";
            } else{
                $sql_modification = "UPDATE "
            }
         }
         
    }
   

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduManage - Modifier</title>
</head>
<body>
    <h1>Modifier un élève</h1>
    <form action="#" method = "POST">
        <div class="input-box">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="<?php echo $afficher_eleve['nom']; ?>">
        </div>
         <div class="input-box">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo $afficher_eleve['prenom']; ?>">
        </div>
        <div class="input-box">
            <label for="classe">Classe</label>
            <input type="text" name="classe" id="classe" value="<?php echo $afficher_eleve['classe']; ?>">
        </div>
        <button type="submit" class="add-btn">Enregistrer les modifications</button>              
    </form>

</body>
</html>