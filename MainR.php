<?php
include "config.php";

if(isset($_POST['but_submitR'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
    $nome = mysqli_real_escape_string($con,$_POST['txt_nome']);
    $email = mysqli_real_escape_string($con,$_POST['txt_email']);
    $password = sha1(md5(sha1($password)));



    if ($uname != "" && $password != ""){
          $sql_query = "select count(*) as cntUser from users where username='".$uname."'";
          $result = mysqli_query($con,$sql_query);
          $row = mysqli_fetch_array($result);
          $count = $row['cntUser'];
      if($count == 0){

        $sql_query = "INSERT INTO users (username,name,password,email) VALUES('".$uname."','".$nome."','".$password."','".$email."')";
        mysqli_query($con,$sql_query);
        $sql_query = "select id as utenteid from users where username='".$uname."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $idutente = $row['utenteid'];
        $sql_query = "INSERT INTO `informazioni` (`indirizzo`, `citta`, `stato`, `codice_postale`, `id_utente`) VALUES (NULL, NULL, NULL, NULL, '".$idutente."')";
        mysqli_query($con,$sql_query);

        $_SESSION['uname'] = $uname;
        $_SESSION['errore']= "ok";
        if (isset($_SESSION['id_biglietto'])) {
          header('Location: scelta_b.php');
        }
        else {
          header('Location: index.php');
        }
        }

    else{
        $_SESSION['errore']= "errore";
        header('Location: Register.php');

        }
      }
      else{
          $_SESSION['errore']= "errore";
          header('Location: Register.php');
          }

    }
