<?php include "config.php"; ?>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="Main.css">
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="author" content="colorlib.com">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
		<link href="css/mainRicerca_page.css" rel="stylesheet" />


		<link rel="shortcut icon" href="favicon.ico">

		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	</head>
	<style type="text/css">
			 #scrolly{
					 width: 100%;
					 height: 400px;
					 overflow: auto;
					 overflow-y: hidden;
					 margin: 0 auto;
					 white-space: nowrap;
					 display: flex;
					 align-items: flex-end;


			 }

			 #img{
				 width: 200px;
				 height: 200px;
				 background: linear-gradient(178deg, #ffc5a8 14%,#f5e4ab 56%);
				 background: -moz-linear-gradient(178deg, #ffc5a8 14%,#f5e4ab 56%);
				 background: -webkit-linear-gradient(178deg, #ffc5a8 14%,#f5e4ab 56%);
				 border-radius: 74px 74px 74px 74px;
				 box-shadow: -6px 6px 30px #f1fff0;
		 }
		 #img_ct{
			 width: 300px;
			 height: 300px;
			 background: linear-gradient(178deg, #ffc5a8 14%,#f5e4ab 56%);
			 background: -moz-linear-gradient(178deg, #ffc5a8 14%,#f5e4ab 56%);
			 background: -webkit-linear-gradient(178deg, #ffc5a8 14%,#f5e4ab 56%);

			 box-shadow: -6px 6px 30px #f1fff0;
		}

		 ::-webkit-scrollbar {
height: 4px;              /* height of horizontal scrollbar ← You're missing this */
width: 4px;               /* width of vertical scrollbar */
border: 1px solid #2d2814;
}


.testo_centro{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
}
.artista_square{
			position: relative;
			text-align: center;
			color: white;
			opacity:1;

}
.artista_square:hover{
	opacity:0.8;
	-webkit-transform: scale(1.05);
	-ms-transform: scale(1.05);
	transform: scale(1.05);
}
.testo_artista{
	color: white;
	z-index: 100;
	text-align: center;
	text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;

  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */

}
.testo_categoria{
	color: white;
	z-index: 100;
	text-align: center;
	font-size: 50px;
	text-shadow: 2px 0 0 #001, -2px 0 0 #001, 0 2px 0 #001, 0 -2px 0 #000, 1px 1px #001, -1px -1px 0 #001, 1px -1px 0 #001, -1px 1px 0 #001;

  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */

}
.artista_square_ct{
			position: relative;
			text-align: center;
			color: white;
			opacity:1;
			width:300px;
			height:300px;


}
/*.artista_square_ct:hover{
	opacity:0.8;
	-webkit-transform: scale(1.05);
	-ms-transform: scale(1.05);
	transform: scale(1.05);
}*/
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #000;
}


.artista_square_ct:hover .overlay {
  opacity: 0.8;
}
.ticket:hover .overlay {
  opacity: 0.8;
}

	 </style>
	<body>


<nav class="nav affix" style="z-index: 100000;">
	<div class="container">
		<div class="logo">
			<a href="index.php">VivaConcerti</a>
		</div>
		<div id="mainListDiv" class="main_list">
			<ul class="navlinks">
        <li><div>
    			<form action="Utente_Artista_pagina.php" method="post">

    			<div class="inner-form">
    				<div class="input-field first-wrap">
    					<div class="icon-wrap">
    						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    							<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
    						</svg>
    					</div>
    					<input  id="search" type="text" placeholder="Ricerca" name="cerca" />
    				</div>




    				<div class="input-field fifth-wrap">
    					<button class="btn-search" type="submit" name="but_submit" id="but_submit">SEARCH</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </li>
				<?php


				// Check user login or not
				if(isset($_SESSION['uname'])){
					$acquistati="'acquistati'";
					echo '<li><a href="cancel.php">logout</a></li>
								<li><a href="Carrello.php">Carrello</a></li>
									<li><a style="cursor: pointer;" onclick="cerca('.$acquistati.')">ordini</a></li>';


				}
				else{
					echo '<li><a href="Login.php">login</a></li>';

				}


				?>



			</ul>
		</div>
		<span class="navTrigger">
			<i></i>
			<i></i>
			<i></i>
		</span>
	</div>
</nav>

<section class="home">
	<div class="s002">

  <h1 class="testo_centro" style="font-size: 400%;text-shadow: 1px 0 0 #fff, -1px 0 0 #fff, 0 1px 0 #fff, 0 -1px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;white-space: nowrap;">Risultati ricerca</h1>
  <?php

  if(isset($_POST['cerca'])){
		$cont=0;

      $cerca = mysqli_real_escape_string($con,$_POST['cerca']);


      if ($cerca != ""){

					if($cerca =="novita"){
						$sql_query = "select * FROM evento INNER JOIN users ON evento.artistaUtente_id=users.id ORDER BY UNIX_TIMESTAMP(evento.data_creazione) DESC;";
						$result = mysqli_query($con,$sql_query);
					}
					elseif($cerca =="piuvenduti"){
						$sql_query = "select * FROM evento INNER JOIN users ON evento.artistaUtente_id=users.id ORDER BY evento.biglietti_disponibili ASC;";
						$result = mysqli_query($con,$sql_query);
					}
					elseif($cerca =="citta"){
						$sql_query = "select * FROM evento INNER JOIN users ON evento.artistaUtente_id=users.id ORDER BY evento.city ASC;";
						$result = mysqli_query($con,$sql_query);
					}
					elseif($cerca =="preferiti"){
						$sql_query = "select id as utenteid from users where username='".$_SESSION['uname']."'";
						$result = mysqli_query($con,$sql_query);
						$row = mysqli_fetch_array($result);
						$idutente = $row['utenteid'];
						$sql_query = "select * FROM salvati INNER JOIN evento ON salvati.id_biglietto=evento.id_evento INNER JOIN users ON salvati.id_utente=users.id  WHERE salvati.id_utente='".$idutente."'";
						$result = mysqli_query($con,$sql_query);
					}
					elseif($cerca =="acquistati"){
						$sql_query = "select id as utenteid from users where username='".$_SESSION['uname']."'";
						$result = mysqli_query($con,$sql_query);
						$row = mysqli_fetch_array($result);
						$idutente = $row['utenteid'];
						$sql_query = "select * FROM ordini INNER JOIN evento ON ordini.id_biglietto=evento.id_evento INNER JOIN users ON ordini.id_utente=users.id  WHERE ordini.id_utente='".$idutente."'";
						$result = mysqli_query($con,$sql_query);
					}
					elseif($cerca =="genere"){
						$sql_query = "select * FROM evento INNER JOIN users ON evento.artistaUtente_id=users.id ORDER BY evento.genere ASC;";
						$result = mysqli_query($con,$sql_query);
					}
					else{
						$sql_query = "select * FROM evento INNER JOIN users ON evento.artistaUtente_id=users.id WHERE '".$cerca."' IN (evento.id_evento,evento.artistaUtente_id,evento.nomeEvento,evento.city,evento.genere,users.name,evento.tipo,users.UtenteArtista);";
          	$result = mysqli_query($con,$sql_query);
					}
					echo '<div style="height:auto;padding-bottom:10%; padding-top:10%;">';

          while($row = mysqli_fetch_array($result))
          {
								$giorno = substr($row['data'], -2);
								$mese = substr($row['data'], -5, 2);


								$mese = (int)$mese;
 								$nomemese = date('F', mktime(0, 0, 0, $mese, 10));
								$querynomeutente = "select name as utentename from users where id='".$row['artistaUtente_id']."'";
								$resultnomeutente = mysqli_query($con,$querynomeutente);
								$rownomeutente = mysqli_fetch_array($resultnomeutente);
								$nomeutente = $rownomeutente['utentename'];






								$cont++;
								echo '<div class="ticket ticket-'.$cont.'"';
								if($cerca =="acquistati"){
										echo 'onclick="biglietto('.$row['id_evento'].')"';
								}
								else if($row['biglietti_disponibili']!=0){
									echo 'onclick="biglietto('.$row['id_evento'].')"';
								}
								echo '>

  <div class="date">
    <span class="day">'.$giorno.'</span>
    <span class="month-and-time">'.$nomemese.'</br><span class="small"></span>'.$row['ora'].'</span>
  </div>

  <div class="artist">
    <span class="name">'.$nomeutente.'</span>
    </br>
<span class="live small">'.$row['genere'].'</span>
  </div>

  <div class="location">

    <span>'.$row['city'].'</span>
    </br>
    <span class="small"><span>'.$row['posto'].'</span><a style="opacity:0;-webkit-touch-callout: none; /* iOS Safari */
																						    -webkit-user-select: none; /* Safari */
																						     -khtml-user-select: none; /* Konqueror HTML */
																						       -moz-user-select: none; /* Old versions of Firefox */
																						        -ms-user-select: none; /* Internet Explorer/Edge */
																						            user-select: none; /* Non-prefixed version, currently
																						                                  supported by Chrome, Edge, Opera and Firefox */">sssssssssss</a>
  </div>

  <div class="rip">
  </div>


	<div class="overlay" style="border-radius: 15px;">
	<a class="testo_centro" style="font-size: 400%;text-shadow: 1px 0 0 #fff, -1px 0 0 #fff, 0 1px 0 #fff, 0 -1px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;white-space: nowrap;">';
if($cerca =="acquistati"){
	echo ''.$row['numero'].' biglietti acquistati il '.$row['data_acquisto'].'';
}
else if($row['biglietti_disponibili']==0){
	echo 'SOLD OUT';
}
else {
	echo ''.$row['costo'].'€';
}

	echo '</a>
	</div>

</div>

<style>.ticket-'.$cont.' {
		cursor: pointer;
   background-image: url(https://images.unsplash.com/photo-1483101974978-cf266fdf1139?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3289&q=80);
}</style>


';


          }

echo "</div>";
      }

  }
  ?>

<div >
</div>

	<script src="js/extention/choices.js"></script>
	<script src="js/extention/flatpickr.js"></script>
	<script>


function biglietto(id_biglietto) {

// The rest of this code assumes you are not using a library.
// It can be made less verbose if you use one.
const form = document.createElement('form');
form.method = 'POST';
form.action = "scelta_b.php";


const hiddenField = document.createElement('input');
hiddenField.type = 'hidden';
hiddenField.name = "id_biglietto";
hiddenField.value = id_biglietto;



form.appendChild(hiddenField);

document.body.appendChild(form);
form.submit();
}

function cerca(cerca) {

// The rest of this code assumes you are not using a library.
// It can be made less verbose if you use one.
const form = document.createElement('form');
form.method = 'POST';
form.action = "Utente_Artista_pagina.php";


const hiddenField = document.createElement('input');
hiddenField.type = 'hidden';
hiddenField.name = "cerca";
hiddenField.value = cerca;



form.appendChild(hiddenField);

document.body.appendChild(form);
form.submit();
}




		flatpickr(".datepicker",
		{});

	</script>
	<script>
		const choices = new Choices('[data-trigger]',
		{
			searchEnabled: false,
			itemSelectText: '',
		});

		$(document).ready(() => {
			$('footer').css({
				position: 'absolute',
				width: '100%',
				'margin-top': $('.s002').height() - $('footer').outerHeight() * 3
			});
		});
	</script>

</section>


<footer>
	<a style="color:#fff">

	VivaConcerti | Via maffucci,66 - 20158 Milano (MI) ITALIA | C.F. ABC000000000 | P.Iva 000000000 </a> <br>
	<a class="trans-color-text" href="#">VivaConcerti@gmail.com</a> | <span itemprop="telephone"><a href="#">+3914699640</a></span>
		<br><a target="_blank" href="#"> privacy</a> | <a target="_blank" href="#"> cookie policy</a>	<br><a target="_blank" href="#"> privacy</a> | <a target="_blank" href="#"> cookie policy</a>

	<div class="social-cont">
	<ul class="social-list">

	<li><a target="_blank" href="#"><img src="img/facebook-icon.png"  title="facebook" alt="Facebook icon"></a></li>
	<li><a target="_blank" href="#"><img src="img/instagram-icon.png" title="Instagram" alt="Instagram icon"></a></li>
	<li><a target="_blank" href="#"><img src="img/pinterest-icon.png" title="pinterest" alt="Instagram icon"></a></li>

	</ul>
		<div class="floatstop"></div>
	</div><!--/fine social cont-->



</footer>

</body>



<!-- Jquery needed -->
<script src="Main.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>


</script>

</html>
