<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduMenage - Elèves</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="grades">
    <header>
         <!-- logo -->
        <div class="logo"><span>E</span>duManage</div>

         <!-- barre de navigation/lien  -->
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="students.php">Elèves</a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <main>
        <div class="grade-container">
            <h1>Ajouter une note</h1>
            <form action="#" method="POST">
                <div class="input-box">
                    <label for="eleve">Elève</label>
                    <select name="eleve" id="eleve">
                        <option value="">-- Choisir un élève --</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="matiere">Matière</label>
                    <select name="matiere" id="matiere">
                        <option value="matiere">-- Choisir une matière --</option>
                        <option value="Histoire-geographie">Histoire-géographie</option>
                        <option value="Mathematiques">Mathématiques</option>
                        <option value="Anglais">Anglais</option>
                        <option value="svt">Francais</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="note">Note</label>
                    <input type="number" id="note" name="note" placeholder="Ex : 15">
                </div>
                <button class="add-btn">Ajouter la note</button>
            </form>
        </div>
        <div class="table">
            <h2>Tableau de notes</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Elève</th>
                        <th>Matière</th>
                        <th>Note</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6">Aucune note enregistrée pour le moment</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </main>
    <footer>
         <p>&copy; 2026 EduManage - Tous droits reservés. </p>
    </footer>
</body>
</html>