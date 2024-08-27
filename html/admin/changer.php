<?php 

require("../../php/cnx.php");
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    if(empty($pass)){
         header("location:reset_password.php?error=pass required !");
    }
    else if(empty($cpass)){
        header("location:reset_password.php?error=confiRmer pass required !");
    }
    else if($cpass!=$pass){
        header("location:reset_password.php?error=must confimer egale password !");
    }
    else{
        $req="UPDATE `admin` SET `password`='$pass'" ;
         mysqli_query($cnx,$req);
        echo"<script>alert('password has changed !');</script>";
        include "reset_password.php";
    }
    
?>