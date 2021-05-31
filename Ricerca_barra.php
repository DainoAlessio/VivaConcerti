<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $cerca = mysqli_real_escape_string($con,$_POST['cerca']);


    if ($cerca != ""){
        $sql_query = "select count(*) FROM concerti WHERE '".$cerca."' IN (nomeConcerto,city,genere,nomeArtUte,tipo) ;";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
        while ($count_while <= $count) {
        }
    }

}
?>
