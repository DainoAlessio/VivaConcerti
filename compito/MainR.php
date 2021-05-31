<?php
include "config.php";

if(isset($_POST['but_submitR'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
    $nome = mysqli_real_escape_string($con,$_POST['txt_nome']);

    if ($uname != "" && $password != ""){

        $sql_query = "insert into users (username,name,password) values('".$uname."','".$password."','".$nome."')";
        mysqli_query($con,$sql_query);

        $_SESSION['uname'] = $uname;
        header('Location: index.php');
        }
        else{
            echo "Invalid username and password";
        }

    }
