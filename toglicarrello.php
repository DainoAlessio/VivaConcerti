<?php
include "config.php";

if(isset($_POST['id_biglietto'])){
  $sql_query = "select id as utenteid from users where username='".$_SESSION['uname']."'";
  $result = mysqli_query($con,$sql_query);
  $row = mysqli_fetch_array($result);
  $idutente = $row['utenteid'];

          $sql_query = "delete from carrello where id_biglietto='".$_POST['id_biglietto']."' AND id_utente='".$idutente."'";
          $_SESSION['id_biglietto']=$_POST['id_biglietto'];
          mysqli_query($con,$sql_query);
          header('Location: ' . $_SERVER["HTTP_REFERER"] );
 exit;

}
