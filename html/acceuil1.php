<?php
require("../php/cnx.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASSMA</title>
    
   <link rel="stylesheet" href="../css/acceuil.css">
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
                     <li class="active"><a href="#">Acceuil</a></li>
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
    </nav>
   <script src="../js/nav.js"></script>
   <main>
      <section class="section-1">
          <div class="text-intro">
            <p id="title-arb">من اجل مستقبلكم و مستقبل ابنائكم التحقوا بنا</p>
            <p id="title-fran">Nous sommes fiers d'offrir une éducation de qualité qui prépare nos élèves à réussir dans un monde en constante évolution.</p>
            
            <button class="btn-inscr">
              <span><a href="inscrir.php" style="text-decoration:none;color:black;">Inscrivez-vous</a></span>
              <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
                  <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
              </svg>
            </button>
          </div>
          <!-- 
            <div class="animation-cercle"></div>
            <div class="icon-section1"></div>
          -->
       
        
          <div class="circle-anim">
            <div class="lang" id="franc">francais</div>
            <div class="lang" id="ang">anglais</div>
          </div>
          <!--
          <div class="circle-anima">
            <div class="circl"></div>
          </div>
          -->
        <div >
          <img src="../img/SCENE1.png" class="bg-icon" alt="">
        </div>
        <div class="continaire-border">
          <div class="border-1"></div>
          <div class="border-1" id="border-1"></div> 
          <div class="border-2"></div>
          <div class="border-2" id="border-2"></div>
          <div class="border-2" id="border-3"></div>
          <div class="border-2" id="border-4"></div>
        </div>
      </section>

      <section class="section-2">
        <div class="container-section2">
              
            <div class="sec-titles">
                <span class="title">Centre BASSMA</span>
                <h2 id="sec-h2">Nos statistique</h2>
            </div>
            <div class="statistique">
            

                <div class="Prem-sta">
                    <span class="cercle1-sta"><img id="icon-1" src="../img/icon-1.jpg" alt=""></span>
                    <div>
                      <?php
                        $req="SELECT COUNT(*) AS nombre_etudiants FROM Etudiant_C";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                      <h2 class="H2"><?= $ligne['nombre_etudiants']?></h2>
                      <h3 class="H4">Etudiants</h3>
                      <?php } ?>
                    </div>
                </div>

                 <div class="deux-sta">
                    <span class="cercle2-sta"><img id="icon-2" src="../img/icon-2.jpg" alt=""></span>
                    <div>
                    <?php
                        $req="SELECT COUNT(*) AS nombre_formation FROM Formation";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                        <h2 class="H2"><?= $ligne['nombre_formation']?></h2>
                        <h3 class="H4">formations</h3>
                        <?php } ?>
                    </div>
                </div>
                <div class="troix-sta">
                    <span class="cercle3-sta"><img id="icon-3" src="../img/icon-4.jpg" alt=""></span>
                    <div>
                      <?php
                        $req="SELECT COUNT(*) AS nombre_services FROM services";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                        <h2 class="H2"><?= $ligne['nombre_services']?></h2>
                        <h3 class="H4">Services</h3>
                        <?php } ?>
                    </div>
                </div>
                <div class="quatr-sta">
                    <span class="cercle4-sta"><img id="icon-4" src="../img/icon-3.PNG" alt=""></span>
                    <div>
                    <?php
                        $req="SELECT COUNT(*) AS nombre_centre FROM Centre";
                        $resultat=mysqli_query($cnx,$req);
                        while($ligne=mysqli_fetch_assoc($resultat)){ 
                      ?>
                        <h2 class="H2"><?= $ligne['nombre_centre']?></h2>
                        <h3 class="H4">Centres</h3>
                        <?php } ?>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    <section class="section-3" id="section-3">

      <div class="card">
        <div class="card-details">
          <img src="../img/LOGO BASSMA BLACK (2).png" class="logos" alt="">
          <p class="text-title">Cours Soutient</p>
          <p class="text-body">Aideront votre enfant à mieux comprendre les leçons.</p>
        </div>
        <button class="card-button"><a href="../html/Apropos.html">More info</a></button>
      </div>

      <div class="card" id="card-2">
        <div class="card-details">
          <img src="../img/LOGO BASSMA BLACK (2).png" class="logos" alt="">
          <p class="text-title">Sport</p>
          <p class="text-body">c'est la passion en action.</p>
        </div>
        <button class="card-button"><a href="sport.php">More info</a></button>
      </div>

      <div class="card">
        <div class="card-details">
          <img src="../img/LOGO BASSMA BLACK (2).png" class="logos" alt="">
          <p class="text-title">Informatique</p>
          <p class="text-body">Where Code Meets Creativity</p>
        </div>
        <button class="card-button"><a href="">More info</a></button>
      </div>
    </section>

    <section class="section-4">
      
        <div class="box-email">
          <p class="text-sc4">Abonnez-vous</p>
          <div class="InputContainer">
            <input placeholder="Inserer votre adresse email" id="input" class="input" name="text" type="text">
          </div>
          <a style="--clr: #7808d0" class="button" href="#">
            <span class="button__icon-wrapper">
                <svg width="10" class="button__icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15">
                    <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                </svg>
                
                <svg class="button__icon-svg  button__icon-svg--copy" xmlns="http://www.w3.org/2000/svg" width="10" fill="none" viewBox="0 0 14 15">
                    <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                </svg>
            </span>
            Envoyer
           </a>
        </div>
    </section>
  </main>
  <footer class="footer">
   <div class="social">
    <a href="https://www.instagram.com/centre.bassma" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://www.facebook.com/profile.php?id=100072496335796&mibextid=D4KYlr" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href=""><i class="fab fa-tiktok"></i></a>
   </div>
   <ul class="list">
    <li>
      <a href="#">Home</a>
    </li>
    <li>
      <a href="#">Services</a>
    </li>
    <li>
      <a href="#">About</a>
    </li>
    <li>
      <a href="test.html">Contact</a>
    </li>
    <li>
      <a href="#">Inscrir</a>
    </li>
   </ul>
       <p class="copyright">
        © Tout droit réservès par BASSMA center
       </p>
  </footer>

</body>
</html>