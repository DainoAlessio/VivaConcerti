<?php
include "config.php";

if(isset($_SESSION['uname'])){
  $sql_query = "select id as utenteid from users where username='".$_SESSION['uname']."'";
  $result = mysqli_query($con,$sql_query);
  $row = mysqli_fetch_array($result);
  $idutente = $row['utenteid'];
        $sql_query = "select count(*) as cntCarrello from carrello where id_biglietto='".$_SESSION['id_biglietto']."' AND id_utente='".$idutente."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntCarrello'];
        if($count==0){
          echo $_POST['numero'];
        $sql_query = "insert into carrello (id_biglietto,numero,id_utente) values('".$_SESSION['id_biglietto']."','".$_POST['numero']."','".$idutente."')";
        mysqli_query($con,$sql_query);
    header('Location: Carrello.php');
        }

        else {
          $sql_query = "select numero from carrello where id_biglietto='".$_SESSION['id_biglietto']."' AND id_utente='".$idutente."'";
          $result = mysqli_query($con,$sql_query);
          $row = mysqli_fetch_array($result);
          $numero = $_POST['numero']+$row['numero'];
            echo $numero;
          $sql_query = "update carrello set numero='".$numero."' where id_utente='".$idutente."' AND id_biglietto='".$_SESSION['id_biglietto']."'";
          mysqli_query($con,$sql_query);
    header('Location: Carrello.php');




        }
}
else {
    header('Location: Login.php' );
}
