<?php
require("../php/cnx.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASSMA</title>
    <link rel="stylesheet" href="../css/contact.css">
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
            <P class="p1">Contact BASSMA</P>
            <div class="soustitle-apropos">
                <a href="../html/acceuil1.php" id="lien-acceuill">Acceuil</a>
                <p id="sous-p">A propos</p>
            </div>
        </div>
   </section>

   <section class="section-2">
    <div class="contactUs">
        <div class="title_contact">
            <h2> Get in touch</h2>
        </div>
        <div class="box">
            <!-- form-->
            <div class="contact form">
                <h3>Send us a Message</h3>
                <form action="" method="post">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name </span>
                                <input type="text" placeholder="Your Name" name="prenom" require>
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" placeholder="Your Name" name="nom" require>
                            </div>
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span><b>Email<span style="color: red;">*</span></b></span>
                                <input type="text" placeholder="email@gmail.com" name="email" require>
                            </div>
                            <div class="inputBox">
                                <span><b>Mobile <span style="color: red;">*</span></b></span>
                                <input type="text" placeholder="+212 6 -- -- -- --" name="tele" require>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea name="msg" placeholder=" Write Your Message Here... " cols="30" rows="10" require></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send" name="btn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
                <?php
                    if(isset($_POST["btn"])){
                        $ch=$_POST['email'];
                        $phone=$_POST['tele'];
                        $modele ="/^[a-zA-Z1-9]+@[a-zA-Z]+.[a-zA-Z]{2,3}$/";
                        $modelephone="/^(\+212|0)([5-7]\d{8})$/";
                        if (preg_match($modele,$ch)){
                            if(preg_match($modelephone,$phone)){
                                $prenom=$_POST['prenom'];
                                $nom=$_POST['nom'];
                                $email=$_POST['email'];
                                $tele=$_POST['tele'];
                                $message=$_POST['msg'];
                                $insert="INSERT INTO  contactUs(prenom, nom, email, phone, message)
                                                        VALUES('$prenom','$nom','$email','$tele','$message')";
                                mysqli_query($cnx, $insert);    
                                echo "<script>alert('Query successfully Submitted.Thank you')</script>";    
                                
                            }else {
                                echo "<script>alert('Error in phone Form')</script>";
                            }
            
                        }else {
                                echo "<script>alert('Error in email Form')</script>";
                            }
                        




                    }
                ?>

            <!-- info box -->
            <div class="contact info">
                <h3>contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>Chichaoua , Elmassira , Appart 2 Immeuble 1(café EVEREST)</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto:younesselba@gmail.com">younesselba@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="tel:+212 6 03 18 01 33">+212 6 03 18 01 33</a>
                    </div>
                </div>
                <!-- social media links -->
                <ul class="sci">
                    <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-tiktok"></ion-icon></a></li>

                </ul>
            </div>

            <!-- map-->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.3118053777307!2d-8.7667798!3d31.543056399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdae3d4942d103ff%3A0x69fc5288044fb3e9!2sEverest%20Caf%C3%A9%20Restaurant!5e0!3m2!1sfr!2sma!4v1690112660789!5m2!1sfr!2sma"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

        </div>

    </div>
   </section>
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

   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>