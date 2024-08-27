<?php
require("../../php/cnx.php");
session_start(); // Start the session here

if(isset($_POST["btn"])) { 
    // Escaping user inputs to prevent SQL Injection
    $email = mysqli_real_escape_string($cnx, $_POST["email"]);
    $password = mysqli_real_escape_string($cnx, $_POST["psw"]);

    // Prepare and execute the SQL statement
    $req = "SELECT * FROM Admin WHERE email = '$email' AND password = '$password'";
    $resultat = mysqli_query($cnx, $req);

    if(mysqli_num_rows($resultat) > 0) {
        $ligne = mysqli_fetch_assoc($resultat);
        if($email == $ligne["email"] && $password == $ligne["password"]) {
            $_SESSION["connect"] = true;
            header("Location: profil_admin.php?id_Admin=" . $ligne['id_Admin']);

            exit(); // Ensure to exit after the redirect
        }
    } else {
        // If no matching account is found, set an error message
        $error_message = "Check login details. No matching account found. Retry with correct information !!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bassma admin</title>
    <link rel="stylesheet" href="../../css/login_admin.css">
    <link rel="icon" type="png" href="../img/LOGO BASSMA (1) (1).jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
<form class="form" method="POST" action="">
    <p id="heading">Login</p>
    <div class="field">
        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
        </svg>
        <input autocomplete="off" placeholder="email" class="input-field" type="text" name="email" value="<?= (isset($_POST["email"]))? $_POST["email"] : "" ?>">
    </div>
    <div class="field">
        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
        </svg>
        <input placeholder="Password" class="input-field" type="password" name="psw">
    </div>
    <div class="btn">
        <input type="submit" class="button1" name="btn" value="Login">
    </div>
    <a href="#" style="color:white;" id="password" class="button3"><ins>Forgot Password!</ins></a>

</form>

<?php
if(isset($error_message)) {
    echo "<div style='color:red;font-size:1rem;margin-left:32%;margin-top:3%'>$error_message</div>";
}
?>




<!-- ************************************************************* verification *********************************/-->
<div class="reset">
<form  action="reset_password.php" method="post">
<h1 class="text-center mb-5">Verification </h1>
<?php
    if(isset($_GET['errore'])){
   ?>
   <div class="alert alert-danger">
     <?php echo $_GET['errore'];?>
   </div>
    <?php }
    ?>
        <span id="close">X</span>
        <label for="exampleInputPassword1" class="form-label">enter your Code PIN :</label>
         <input type="text" name="pin" class="form-control" id="exampleInputPassword1">
         <button class="btn btn-info">Confirm</button>
</form>
</div>

</body>
</html>
<script>
   var afficher=document.getElementById('password');
   var close=document.getElementById('close');
   var reset=document.querySelector('.reset');
     afficher.addEventListener('click',function(){
      reset.style.display='block'
     })
     close.addEventListener('click',function(){
       reset.style.display='none';
     })
</script>
