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
    <link rel="stylesheet" href="../../css/messages.css" />
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
         
                <?php
            /* if(isset($_GET["id_Admin"])){
                    $id_Admin=$_GET["id_Admin"];
              
                $req="SELECT * FROM Admin ";
                $res=mysqli_query($cnx,$req);
                while($ligne=mysqli_fetch_assoc($res)){ 
                    if($ligne['id_Admin']==$id_Admin){
                        ?>
                        <a href="profil_Admin.php?id_Admin=<?=$ligne['id_Admin']?>" >
                        <?php    
                    }
                }
         }*/
        ?>  
        <a href="profil_Admin.php" >
            <span class="material-symbols-sharp"> person_outline </span>
            <h3>Students</h3>
          </a>





            <?php
             /*if(isset($_GET["id_Admin"])){
                    $id_Admin=$_GET["id_Admin"];
              
                $req="SELECT * FROM Admin ";
                $res=mysqli_query($cnx,$req);
                while($ligne=mysqli_fetch_assoc($res)){ 
                    if($ligne['id_Admin']==$id_Admin){
                        ?>
                        <a href="list_profs.php?id_Admin=<?=$ligne['id_Admin']?>" >
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
          <a href="#" class="active">
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
          <h1>Liste des messages envoyés par les clients</h1>








          <table>
            <!--<thead>
              <tr>
                <th>id </th>
                <th>nom</th>
                <th>telephone</th>
                <th>email</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>-->
            
           <?php
            $req="SELECT * FROM ContactUs ";
                $res=mysqli_query($cnx,$req);
                while($ligne=mysqli_fetch_assoc($res)){ 
                    ?>
           <div>
           <ul>
                        <li>id: &nbsp;&nbsp;&nbsp;<?= $ligne['id_Cnt']?></li>
                        <li>nom:&nbsp;&nbsp;&nbsp;<?= $ligne['nom']?></li>
                        <li>prenom:&nbsp;&nbsp;&nbsp;<?= $ligne['prenom']?></li>
                        <li> phone:&nbsp;&nbsp;&nbsp;<a href="mailto:<?= $ligne['phone']?>"><?= $ligne['phone']?></a></li>
                        <li> email:&nbsp;&nbsp;&nbsp;<a href="mailto:<?= $ligne['email']?>"><?= $ligne['email']?></a> </li>
                        <li>message:&nbsp;&nbsp;&nbsp;<?= $ligne['message']?></li>
                    </ul>
                    <?php
                        //delete
                        if(isset($_GET['delete'])){
                            $delete=$_GET['delete'];
                            $req = "DELETE FROM ContactUs WHERE id_Cnt='$delete'"; 
                            mysqli_query($cnx, $req);
                         }
                     ?>
                  <a href="messages.php?delete=<?=$ligne['id_Cnt']?>" class="material-symbols-sharp">Delete </a>
                   

           </div>

         <?php
            }
        ?>  
          </table>
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
        <!-- <div class="item add_products">
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
