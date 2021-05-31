<?php
include "config.php";



	$sql_query = "select id as id FROM users where username='".$_SESSION['uname']."';";
  $result = mysqli_query($con,$sql_query);
  $row = mysqli_fetch_array($result);
  $idutente=$row['id'];
  $sql_query = "select * FROM carrello INNER JOIN evento ON carrello.id_biglietto=evento.id_evento WHERE carrello.id_utente='".$row['id']."';";
  $result = mysqli_query($con,$sql_query);

   while($row = mysqli_fetch_array($result))
{
	$sql_queryy = "select * from carrello where id_biglietto='".$row['id_biglietto']."' AND id_utente='".$idutente."'";
  $resultt = mysqli_query($con,$sql_queryy);
  $roww = mysqli_fetch_array($resultt);
  $bigliettiU=$roww['numero'];
  $sql_queryy = "select * from evento where id_evento='".$row['id_biglietto']."'";
  $resultt = mysqli_query($con,$sql_queryy);
  $roww = mysqli_fetch_array($resultt);

  $bigliettiD=$roww['biglietti_disponibili']-$bigliettiU;




          $sql_queryy = "update evento set biglietti_disponibili='".$bigliettiD."'  where id_evento='".$row['id_biglietto']."';";
          mysqli_query($con,$sql_queryy);
  $sql_query = "insert into ordini (id_biglietto, id_utente, numero, data_acquisto) values ('".$row['id_biglietto']."', '".$idutente."', '".$row['numero']."','". date("Y/m/d") ."')";
  mysqli_query($con,$sql_query);
  $sql_query = "delete from carrello where id_biglietto='".$row['id_biglietto']."' AND id_utente='".$idutente."'";
  mysqli_query($con,$sql_query);

    }
    $sql_query = "update informazioni set indirizzo='".$_POST['address']."', citta='".$_POST['city']."', stato='".$_POST['state']."', codice_postale='".$_POST['zip']."' where id_utente='".$idutente."'";
    mysqli_query($con,$sql_query);

 header('Location: index.php');
     ?>
