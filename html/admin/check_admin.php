<?php
    session_start();
   require("../../php/cnx.php");
     if(isset($_POST['email']) && isset($_POST['psw'])){
        $email=$_POST['email'];
        $pass=$_POST['psw'];
        if(empty($email) && empty($pass)){
            header("location:login_admin.php?error=You must fill in all the fields !");
        }
        else if(empty($email)){
            header("location:login_admin.php?error=Email required !");
        }
        else if(filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE){
            header("location:login_admin.php?error=email not  valid !");
        }
        else if(empty($pass)){
            header("location:login_admin.php?error=Password required !");
        }
        else{
            $req=$db->query("select * from admin where email='$email' AND password='$pass'") or die($db->error);
            if($req->num_rows){
                $row=$req->fetch_array();
                if($row['password']==$pass && $row['email']==$email){
                    $_SESSION['id']=$row['id_Admin'];
                    $_SESSION['password']=$row['password'];
                    $_SESSION['nom']=$row['user_name'];
                    $_SESSION['email']=$row['email'];
                    header("location:profil_admin.php");
                }
            }
            else{
                header("location:login_admin.php?error=Incorrect username or password!");
            }
        }
     }else{
            header("location:login_admin.php");
     }
?>