<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
$password = sha1(md5(sha1($password)));

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
          $_SESSION['uname'] = $uname;
          $_SESSION['errore'] = "ok";
          if (isset($_SESSION['id_biglietto'])) {
            header('Location: scelta_b.php');
          }
          else {
            header('Location: index.php');
          }


        }
        else{
           $_SESSION['errore'] = "errore";
            header('Location: Login.php');
        }

    }

}
