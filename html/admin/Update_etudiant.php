<?php
 require("../../php/cnx.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashbord</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <link rel="stylesheet" href="../../css/profil_admin.css" />
  </head>
  <body>
    <div class="container">
      <!-- aside section start -->
      <aside>
        <!-- start top -->
        <div class="top">
          <div class="logo">
            <h2 class="nom-centre">BASSMA</h2>
          </div>
          <div class="close">
            <span class="material-symbols-sharp"> close </span>
          </div>
        </div>
        <!-- end top -->
        <div class="sidebar">
          <a href="#">
            <span class="material-symbols-sharp"> grid_view </span>
            <h3>Dashbord</h3>
          </a>
          <a href="#" class="active">
            <span class="material-symbols-sharp"> person_outline </span>
            <h3>Students</h3>
          </a>
          <?php
            /* if(isset($_GET["id_Admin"])){
                    $id_Admin=$_GET["id_Admin"];
              
                $req="SELECT * FROM Admin ";
                $res=mysqli_query($cnx,$req);
                while($ligne=mysqli_fetch_assoc($res)){ 
                    if($ligne['id_Admin']==$id_Admin){
                        ?>
                        
                        <?php    
                    }
                }
         }*/
        ?>  
            <a href="list_profs.php" >
            <span class="material-symbols-sharp"> person_outline </span>
            <h3>profs</h3>
          </a>
          <a href="#">
            <span class="material-symbols-sharp"> insights </span>
            <h3>Analytics</h3>
          </a>
          <?php
            /* if(isset($_GET["id_Admin"])){
                    $id_Admin=$_GET["id_Admin"];
              
                $req="SELECT * FROM Admin ";
                $res=mysqli_query($cnx,$req);
                while($ligne=mysqli_fetch_assoc($res)){ 
                    if($ligne['id_Admin']==$id_Admin){
                        ?>
                        
                        <?php    
                    }
                }
         }*/
        ?>  
        <a href="messages.php" >
            <span class="material-symbols-sharp"> mail_outline </span>
            <h3>Messages</h3>
            <?php
                        $req="SELECT COUNT(*) AS nombre_messageFROM FROM contactUs";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
            <span class="msg_count"><?= $ligne['nombre_messageFROM']?></span>
            <?php } ?>
          </a>
          
          <!--<a href="#">
            <span class="material-symbols-sharp"> report_gmailerrorred </span>
            <h3>Reports</h3>
          </a>
          <a href="#">
            <span class="material-symbols-sharp"> settings </span>
            <h3>Setting</h3>
          </a>-->
          <a href="Ajouter_matiere.php">
            <span class="material-symbols-sharp"> add </span>
            <h3>Add Matiere</h3>
          </a>
          <a href="log_out.php">
            <span class="material-symbols-sharp"> logout </span>
            <h3>Logout</h3>
          </a>
        </div>
      </aside>
      <!-- aside section end -->
      <!-- main section start -->
      <main>
      <?php
             if(isset($_GET["id_Admin"])){
                    $id_Admin=$_GET["id_Admin"];
              
                $req="SELECT * FROM Admin ";
                $res=mysqli_query($cnx,$req);
                while($ligne=mysqli_fetch_assoc($res)){ 
                    if($ligne['id_Admin']==$id_Admin){
                        ?>
                        <h1>Bonjour <?= $ligne['user_name']?></h1>
                        <?php    
                    }
                }
         }
        ?>  
        <div class="date">
          <?php
                echo date('d/m/Y');
          ?>
        </div>
        <div class="insights">
          <!-- start selling -->
          <div class="sales">
            <span class="material-symbols-sharp">Groups</span>
            <div class="middle">
              <div class="left">
                <h3>Total students</h3>
                <h1>students</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle r="30" cy="40" cx="40"></circle>
                </svg>
                <?php
                        $req="SELECT COUNT(*) AS nombre_etudiants FROM Etudiant_C";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                <div class="number"><?= $ligne['nombre_etudiants']?></div>
                <?php } ?>
              </div>
            </div>
            <small><?=  date('m/Y'); ?></small>
          </div>
          <!-- end salling -->

          <!-- start expensive -->
          <div class="expenses">
            <span class="material-symbols-sharp">Group</span>
            <div class="middle">
              <div class="left">
                <h3>Total profs</h3>
                <h1>profs</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle r="30" cy="40" cx="40"></circle>
                </svg>
                <?php
                        $req="SELECT COUNT(*) AS nombre_profs FROM Profs";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                <div class="number"><?= $ligne['nombre_profs']?></div>
                <?php } ?>
              </div>
            </div>
            <small><?=  date('m/Y'); ?></small>
          </div>
          <!-- end salling -->

          <!-- start income -->
          <div class="income">
            <span class="material-symbols-sharp">Support</span>
            <div class="middle">
              <div class="left">
                <h3>Total Services</h3>
                <h1>Services</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle r="30" cy="40" cx="40"></circle>
                </svg>
                <?php
                        $req="SELECT COUNT(*) AS nombre_service FROM services";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                <div class="number"><?= $ligne['nombre_service']?></div>
                <?php } ?>
              </div>
            </div>
            <small><?=  date('m/Y'); ?></small>
          </div>
          <!-- end salling -->
        </div>
        <!-- end insights -->

        <!-- start recent order -->
        <div class="recent_order">
         
          
          <?php
          if (isset($_POST['btn'])) {
            // update 
            $req = "UPDATE Etudiant_C SET
                    id_E = '{$_POST['id_E']}',
                    nom = '{$_POST['nom']}',
                    prenom = '{$_POST['prenom']}',
                    dateNaiss = '{$_POST['dateNaiss']}',
                    telephone = '{$_POST['telephone']}',
                    email = '{$_POST['email']}',
                    adresse = '{$_POST['adresse']}',
                    NiveauScolaire = '{$_POST['NiveauScolaire']}',
                    matiere = '{$_POST['matiere']}'
                    WHERE id_E = '{$_GET['id_E']}'"; // Correction ici : la virgule a été supprimée
            if (mysqli_query($cnx, $req)) {
                echo "<div style='color:red;font-size:20px;'>Mise à jour réussie.</div>";
            } else {
                echo "Erreur lors de la mise à jour : " . mysqli_error($cnx);
            }
        }
          if(isset($_GET['id_E'])){
            $req ="SELECT * FROM Etudiant_C WHERE id_E='{$_GET['id_E']}'";
            // echo $req;
            $resultat=mysqli_query($cnx,$req);
            $ligne=mysqli_fetch_assoc($resultat);

                    ?>    
           <div>
           <h1>Modifier etudiant :<?= $ligne['prenom']?>-<?= $ligne['nom']?></h1>
           <table>
            <form action="" method="POST">
            <tr>
              <th>id:</th>
             <th><input type="text" value="<?= $ligne['id_E']?>" name="id_E"></th> 
            </tr>
            <tr>
              <th>nom:</th>
              <th><input type="text" value="<?= $ligne['nom']?>"name="nom"></th>
            </tr>
            <tr>
              <th>prenom:</th>
              <th> <input type="text" value="<?= $ligne['prenom']?>"name="prenom"></th>
            </tr>
            <tr>
              <th>date naissance:</th>
              <th><input type="text" value="<?= $ligne['dateNaiss']?>"name="dateNaiss"></th>
            </tr>
            <tr>
              <th>telephone:</th>
              <th><input type="text" value="<?= $ligne['telephone']?>"name="telephone"></th>
            </tr>
            <tr>
              <th>email:</th>
              <th><input type="text" value="<?= $ligne['email']?>"name="email"></th>
            </tr>
            <tr>
              <th>adresse:</th>
              <th><input type="text" value="<?= $ligne['adresse']?>"name="adresse"></th>
            </tr>
            <tr>
              <th>niveau scolaire:</th>
              <th><input type="text" value="<?= $ligne['NiveauScolaire']?>"name="NiveauScolaire"></th>
            </tr>
            <tr>
              <th>matiere:</th>
              <th><input type="text" value="<?= $ligne['matiere']?>"name="matiere"></th>
            </tr>
            <tr>
              <th><input type="submit" value="Modifier" id="bottone5"name="btn"> </th>
            </tr>

            </form>
            </table>
        
           </div>

         <?php
            }
        ?>  
             
         

        </div>

        <!-- end recent order -->
      </main>
      <!-- main section end -->
      <!-- right section start -->
      <div class="right">
        <div class="top">
          <button id="menu_bar">
            <span class="material-symbols-sharp">menu</span>
          </button>
          
          <div class="profile">
                <div class="info">
            <?php
             if(isset($_GET["id_Admin"])){
                    $id_Admin=$_GET["id_Admin"];
              
                $req="SELECT * FROM Admin ";
                $res=mysqli_query($cnx,$req);
                while($ligne=mysqli_fetch_assoc($res)){ 
                    if($ligne['id_Admin']==$id_Admin){
                        ?>
                        <p><b><?= $ligne['user_name']?></b></p>
                        <p>Admin</p>
                        <small class="text-muted"></small>
                        </div>
                        <div class="profile-photo">
                            <img src="../../img/<?= $ligne['image']?>" alt="" />
                        </div>
                        <?php    
                    }
                }
         }
        ?>         
                
          </div>
        </div>
        <!-- end top -->
        <!-- start update -->
        
        <!-- end update -->
        <!-- start sale analytic -->
        <div class="sales_analytics">
          <h2>services Analytics</h2>

          <div class="item potato">
            <div class="icon">
              <span class="material-symbols-sharp">School</span>
            </div>
            <div class="right_text">
              <div class="info">
                <h3>Cours soutiens</h3>
                <?php
                        $req="SELECT COUNT(*) AS nombre_matieres FROM Matires";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                 <small class="text_muted"><?= $ligne['nombre_matieres']?>   Matieres</small>
                <?php } ?>
               
              </div>
              <h5 class="danger"> <?= date('d/m/Y') ?></h5>
              <?php
                        $req="SELECT COUNT(*) AS nombre_etudiant FROM Etudiant_C";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                      <h3><?= $ligne['nombre_etudiant']?></h3>
                <?php } ?>
              
            </div>
          </div>
          <div class="item potato">
            <div class="icon">
              <span class="material-symbols-sharp">Sports</span>
            </div>
            <div class="right_text">
              <div class="info">
                <h3>Sport / Futsal</h3>
                <small class="text_muted">Futsal</small>
              </div>
              <h5 class="danger"><?= date('d/m/Y') ?></h5>
              <?php
                        $req="SELECT COUNT(*) AS nombre_etudiant FROM Etudiant_C";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                      <h3><?= $ligne['nombre_etudiant']?></h3>
                <?php } ?>
            </div>
          </div>
          <div class="item potato">
            <div class="icon">
              <span class="material-symbols-sharp">Devices</span>
            </div>
            <div class="right_text">
              <div class="info">
                <h3>Informatique</h3>
                <small class="text_muted">Design & developpement web</small>
              </div>
              <h5 class="danger"><?= date('d/m/Y') ?></h5>
              <?php
                        $req="SELECT COUNT(*) AS nombre_etudiant FROM Etudiant_C";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                      <h3><?= $ligne['nombre_etudiant']?></h3>
                <?php } ?>
            </div>
          </div>
        </div>
        <!-- end sale analytic -->
       <!--  <div class="item add_products">
          <div>
            <span class="material-symbols-sharp">+</span>
          </div>
        </div>-->
      </div>
      <!-- right section end -->
    </div>
    <script src="index.js"></script>
  </body>
</html>
