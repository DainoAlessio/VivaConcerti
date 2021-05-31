<?php
include "config.php";

if(isset($_SESSION['uname'])){
  $sql_query = "select id as utenteid from users where username='".$_SESSION['uname']."'";
  $result = mysqli_query($con,$sql_query);
  $row = mysqli_fetch_array($result);
  $idutente = $row['utenteid'];
        $sql_query = "select count(*) as cntSalva from salvati where id_biglietto='".$_POST['id_biglietto']."' AND id_utente='".$idutente."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntSalva'];
        if($count==0){

        $sql_query = "insert into salvati (id_biglietto,id_utente) values('".$_POST['id_biglietto']."','".$idutente."')";
        $_SESSION['id_biglietto']=$_POST['id_biglietto'];
        mysqli_query($con,$sql_query);
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
        }
        else {
          header('Location: ' . $_SERVER["HTTP_REFERER"] );
  exit;
        }
}
else {
        $_SESSION['id_biglietto']=$_POST['id_biglietto'];
          header('Location: login.php' );

}
