<?php
session_start();
include("../includes/db.php");

if(!isset($_SESSION['user'])){
    header("Location: ../login.php");
    exit();
} else{
    if(isset($_GET['id']))
    // recuperer l'id de l'eleve
     $student_id = $_GET['id'];

    $sql_delete = "DELETE FROM students_db WHERE id = $student_id";
    $resultat_delete = mysqli_query($connexion, $sql_delete);

    header("Location: students.php");
    exit();
}
   


