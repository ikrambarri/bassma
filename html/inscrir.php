<?php
require("../php/cnx.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASSMA</title>
    <link rel="stylesheet" href="../css/inscrir.css">
    <link rel="icon" type="png" href="../img/LOGO BASSMA (1) (1).jpg">
    <link rel="stylesheet" href="../css/head.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="en-tete">Together to build a better future</div>
    </header>
    <nav>
        <div class="navbar">
            <div class="img-logo">
                <img src="../img/LOGO BASSMA (1) (1).jpg" class="logo" alt="">
                <div class="nom">
                    <div class="nom-fran">
                        <div class="nom-fran1">
                            <div id="let-c">C</div>
                            <div id="let-e">e</div>
                            <div id="let-c">n</div>
                            <div id="let-e">t</div>
                            <div id="let-c">r</div>
                            <div id="let-e">e</div>
                        </div>
                        <div class="nom-fran2">
                            <div id="let-c">B</div>
                            <div id="let-e">A</div>
                            <div id="let-c">S</div>
                            <div id="let-e">S</div>
                            <div id="let-c">M</div>
                            <div id="let-e">A</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-links">
                <ul>
                    <li class="active"><a href="../html/acceuil1.php">Acceuil</a></li>
                    <li><a href="../html/Apropos.html">A Propos</a></li>
                    <li><a href="../html/formation.html">nos formations</a></li>
                    <li><a href="#section-3">services</a></li>
                    <li><a href="../html/contact.php">Contact</a></li>
                    <li class="inscrir"><a href="../html/inscrir.php">inscrire</a></li>
                </ul>
            </div>
            <div class="background">
                <button class="menu__icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <script src="../js/nav.js"></script>
    </nav>

    <section class="section-1">
        <div class="prem-sec">
            <P class="p1">Inscription BASSMA</P>
            <div class="soustitle-apropos">
                <a href="acceuil1.php" id="lien-acceuill">Acceuil</a>
                <p id="sous-p">A propos</p>
            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="container-contact">
            <div class="forme">
                <h2 class="title-def" id="title-contact">Entrer vous donnée</h2>
                <div class="form-container">
                    <form id="validationForm" method="post" action="" name="contact-form">

                        <div class="form-group">
                            <label for="nom"><b>Nom : <span style="color: red;">*</span></b></label>
                            <input type="text" id="nom" name="nom" placeholder="Nom Complet" required>
                            <span class="error-message" id="nameError"></span>
                        </div>

                        <div class="form-group">
                            <label for="prenom"><b>Prénom : <span style="color: red;">*</span></b></label>
                            <input type="text" id="prenom" name="prenom" placeholder="Prénom Complet" required>
                            <span class="error-message" id="nameError"></span>
                        </div>

                        <div class="form-group">
                            <label for="birthday"><b>Votre anniversaire : <span style="color: red;">*</span></b></label>
                            <input type="date" id="birthday" name="birthday" placeholder="Date de naissance" required>
                            <span class="error-message" id="birthdayError"></span>
                        </div>

                        <div class="form-group">
                            <label for="phone"><b>Numéro de téléphone : <span style="color: red;">*</span></b></label>
                            <input type="tel" id="phone" name="phone" placeholder="06-**-**-**-**" required>
                            <span class="error-message" id="phoneError"></span>
                        </div>

                        <div class="form-group">
                            <label for="email"><b>Email : <span style="color: red;">*</span></b></label>
                            <input type="email" id="email" name="email" placeholder="email@gmail.com" required>
                            <span class="error-message" id="emailError"></span>
                        </div>

                        <div class="form-group">
                            <label for="Adresse"><b>Adresse :</b></label>
                            <input type="text" id="Adresse" name="Adresse" required>
                            <span class="error-message" id="AdresseError"></span>
                        </div>

                        <div class="form-group">
                            <label for="Niveau"><b>Niveau scolaire : <span style="color: red;">*</span></b></label>
                            <input type="text" id="Niveau" name="Niveau" required>
                            <span class="error-message" id="NiveauError"></span>
                        </div>

                        <div class="form-group" id="mati">
                            <div class="flex-matiere">
                                <label for="matiere"><b>Matière : <span style="color: red;">*</span></b></label>
                                <select id="matiere" name="matiere">
                                    <?php
                                    $req = "SELECT * FROM Matires";
                                    $resultat = mysqli_query($cnx, $req);
                                    while ($ligne = mysqli_fetch_assoc($resultat)) {
                                        echo "<option value=\"{$ligne['nom_M']}\">{$ligne['nom_M']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <span class="error-message" id="matiereError"></span>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="butn" value="Envoyer" name="btn">
                        </div>

                    </form>
                </div>
            </div>

            <?php
            if (isset($_POST["btn"])) {
                $ch = $_POST['email'];
                $phone = $_POST['phone'];
                $modele = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
                $modelephone = "/^(\+212|0)([5-7]\d{8})$/";

                if (preg_match($modele, $ch)) {
                    if (preg_match($modelephone, $phone)) {
                        $prenom = mysqli_real_escape_string($cnx, $_POST['prenom']);
                        $nom = mysqli_real_escape_string($cnx, $_POST['nom']);
                        $dateNaiss = mysqli_real_escape_string($cnx, $_POST['birthday']);
                        $email = mysqli_real_escape_string($cnx, $_POST['email']);
                        $tele = mysqli_real_escape_string($cnx, $_POST['phone']);
                        $adresse = mysqli_real_escape_string($cnx, $_POST['Adresse']);
                        $Niveau = mysqli_real_escape_string($cnx, $_POST['Niveau']);
                        $matiere = mysqli_real_escape_string($cnx, $_POST['matiere']);

                        // Vérifier que la connexion à la base de données existe
                        if (!$cnx) {
                            die("La connexion a échoué: " . mysqli_connect_error());
                        }

                        // Afficher les valeurs pour le débogage
                       // echo "Nom: $nom, Prénom: $prenom, Date de naissance: $dateNaiss, Téléphone: $tele, Email: $email, Adresse: $adresse, Niveau: $Niveau, Matière: $matiere";

                        // Requête d'insertion
                        $insert = "INSERT INTO Etudiant_C (nom, prenom, dateNaiss, telephone, email, adresse, NiveauScolaire, matiere)
                                    VALUES ('$nom', '$prenom', '$dateNaiss', '$tele','$email', '$adresse', '$Niveau', '$matiere')";

                        // Exécuter la requête d'insertion
                        if (mysqli_query($cnx, $insert)) {
                            echo "<script>alert('Query successfully submitted. Thank you')</script>";
                        } else {
                            echo "Erreur: " . $insert . "<br>" . mysqli_error($cnx);
                        }
                    } else {
                        echo "<script>alert('Error in phone format')</script>";
                    }
                } else {
                    echo "<script>alert('Error in email format')</script>";
                }
            }
            ?>
        </div>
    </section>

    <footer class="footer">
        <div class="social">
            <a href="https://www.instagram.com/centre.bassma" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100072496335796&mibextid=D4KYlr" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-tiktok"></i></a>
        </div>
        <ul class="list">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About</a></li>
            <li><a href="test.html">Contact</a></li>
            <li><a href="#">Inscrir</a></li>
        </ul>
        <p class="copyright">
            © Tout droit réservés par BASSMA center
        </p>
    </footer>
</body>
</html>
