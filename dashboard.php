<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduManage - Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="dashboard">
    <header>
        <!-- logo -->
        <div class="logo"><span>E</span>duManage</div>

         <!-- barre de navigation/lien  -->
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="students.php">Elèves</a></li>
                <li><a href="grades.php">Notes</a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="dashboard-content">
            <section class="dashboard-hero">
                <h1>Bienvenue dans votre espace EduManage!</h1>
                <p>Gérez simplement vos statistiques élèves</p>
            </section>
            <section class="dashboard-card">
                <div class="dashboard-box">
                    <h2>Gestion des élèves</h2>
                    <img src="images/Gestion_élèves.png" alt="eleves">
                    <a href="students.php" class="action-btn">Ajouter un élève</a>
                </div>
                <div class="dashboard-box">
                    <h2>Gestion des notes</h2>
                    <img src="images/Gestion_notes.jpg" alt="notes">
                    <a href="grades.php" class="action-btn">Ajouter une note</a>
                </div>
            </section>
        </section>

    </main>
    <footer>
        <p>&copy; 2026 EduManage - Tous droits reservés. </p>
    </footer>
</body>
</html>