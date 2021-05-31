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
		<link href="css/mainRicerca.css" rel="stylesheet" />
		<link rel="shortcut icon" href="favicon.ico">

		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

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
			top: 59%;
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

	 </style>
	<body>


<nav class="nav" style="z-index: 100000;">
	<div class="container">
		<div class="logo">
			<a href="#">VivaConcerti</a>
		</div>
		<div id="mainListDiv" class="main_list">
			<ul class="navlinks">
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
	<div class="s002" style="padding-top:10%;">
		<div>
			<form action="Utente_Artista_pagina.php" method="post">
			<fieldset>
				<legend>CERCA EVENTO</legend>
			</fieldset>
			<div class="inner-form">
				<div class="input-field first-wrap">
					<div class="icon-wrap">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
						</svg>
					</div>
					<input  id="search" type="text" placeholder="Ricerca" name="cerca" required/>
				</div>




				<div class="input-field fifth-wrap">
					<button class="btn-search" type="submit" name="but_submit" id="but_submit">SEARCH</button>
				</div>
			</div>
		</form>
	</div>

	<h1 class="testo_centro" style="font-size: 400%;text-shadow: 1px 0 0 #fff, -1px 0 0 #fff, 0 1px 0 #fff, 0 -1px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;white-space: nowrap;">Artisti in evidenza ❯</h1>

		<div id='scrolly'>
			 	<div class="artista_square" onclick="cerca('Venerus')">
							<img src='images/venerus.jpg' id="img" class="fade">
							<div class="testo_centro">
									<h1 class="testo_artista">Venerus</h1>
							</div>
				</div>
				<div class="artista_square" onclick="cerca('psicologi')">
							<img src='images/psicologi.jpg' id="img" class="fade">
							<div class="testo_centro">
									<h1 class="testo_artista">Psicologi</h1>
							</div>
				</div>
				<div class="artista_square" onclick="cerca('ariete')">
							<img src='images/ariete.jpg' id="img" class="fade">
							<div class="testo_centro">
									<h1 class="testo_artista">Ariete</h1>
							</div>
				</div>
				<div class="artista_square"onclick="cerca('franco126')">
							<img src='images/franco126.jpg' id="img" class="fade">
							<div class="testo_centro">
									<h1 class="testo_artista">Franco126</h1>
							</div>
				</div>
				<div class="artista_square"onclick="cerca('mecna')">
							<img src='images/mecna.jpg' id="img" class="fade">
							<div class="testo_centro">
									<h1 class="testo_artista">Mecna</h1>
							</div>
				</div>
				<div class="artista_square"onclick="cerca('calcutta')">
							<img src='images/calcutta.jpg' id="img" class="fade">
							<div class="testo_centro">
									<h1 class="testo_artista">Calcutta</h1>
							</div>
				</div>
				<div class="artista_square"onclick="cerca('ptn')">
							<img src='images/ptn.jpg' id="img" class="fade">
							<div class="testo_centro">
									<h1 class="testo_artista">Ptn</h1>
							</div>
				</div>
				<div class="artista_square"onclick="cerca('ernia')">
							<img src='images/ernia.jpg' id="img" class="fade">
							<div class="testo_centro">
									<h1 class="testo_artista">Ernia</h1>
							</div>
				</div>
				<div class="artista_square"onclick="cerca('frah quintale')">
							<img src='images/frah.jpg' id="img" class="fade">
							<div class="testo_centro">
									<h1 class="testo_artista">Frah Quintale</h1>
							</div>
				</div>
				<div class="artista_square"onclick="cerca('fedez')">
							<img src='images/fedez.jpg' id="img" class="fade">
							<div class="testo_centro">
									<h1 class="testo_artista">Fedez</h1>
							</div>
				</div>
	 </div>
	</div>
	<script src="js/extention/choices.js"></script>
	<script src="js/extention/flatpickr.js"></script>
	<script>


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

	</script>
</section>
<div style="height: auto;padding-bottom:10%; padding-top:15%;">
	<!-- just to make scrolling effect possible -->

	<h2 class="myH2">Categorie Eventi</h2>
<div class="wrapper" >
	<div class="artista_square_ct"  onclick="cerca('piuvenduti')">

				<img src='images/piuvendutiCat.jpg' id="img_ct" class="fade">
				<div class="overlay">
				</div>
				<div class="testo_centro">
						<h1 class="testo_categoria">Più venduti</h1>
				</div>

	</div>
	<div class="artista_square_ct"  onclick="cerca('citta')">
				<img src='images/cittaCat.jpg' id="img_ct" class="fade">
				<div class="overlay">
				</div>
				<div class="testo_centro">
						<h1 class="testo_categoria">Città</h1>
				</div>


	</div>
	<div class="artista_square_ct" onclick="cerca('novita')">
				<img src='images/novit__Cat.jpg' id="img_ct" class="fade">
				<div class="overlay">
				</div>
				<div class="testo_centro">
						<h1 class="testo_categoria">Novità</h1>
				</div>

	</div>
	<div class="artista_square_ct" onclick="cerca('genere')">
				<img src='images/pergenereCat.jpg' id="img_ct" class="fade">
				<div class="overlay">
				</div>

				<div class="testo_centro">
						<h1 class="testo_categoria">Genere</h1>
				</div>

	</div>
	<div class="artista_square_ct" onclick="cerca('utente')">
				<img src='images/creatidautentiCat.jpg' id="img_ct" class="fade">
				<div class="overlay">
				</div>
				<div class="testo_centro">
						<h1 class="testo_categoria">Creati da utenti</h1>
				</div>

	</div>
	<div class="artista_square_ct" onclick="cerca('concerto')">
				<img src='images/concertoCat.jpg' id="img_ct" class="fade">
				<div class="overlay">
				</div>
				<div class="testo_centro">
						<h1 class="testo_categoria">Concerti</h1>
				</div>

	</div>
	<div class="artista_square_ct" onclick="cerca('teatrale')">
				<img src='images/teatroCat.jpg' id="img_ct" class="fade">
				<div class="overlay">
				</div>
				<div class="testo_centro">
						<h1 class="testo_categoria">Spettacoli teatrali</h1>
				</div>

	</div>
	<div class="artista_square_ct" onclick="cerca('tour mondiale')">
				<img src='images/tourmondialiCat.jpg' id="img_ct" class="fade">
				<div class="overlay">
				</div>
				<div class="testo_centro">
						<h1 class="testo_categoria">Tour mondiali</h1>
				</div>

	</div>
	<?php


	// Check user login or not
	if(isset($_SESSION['uname'])){
			$preferiti="'preferiti'";
			echo '<div class="artista_square_ct"onclick="cerca('.$preferiti.')">
					<img src="images/salvati.jpg" id="img_ct" class="fade">
					<div class="overlay">
					</div>
					<div class="testo_centro">
							<h1 class="testo_categoria">Preferiti</h1>
					</div>

		</div>';


	}
	else{
		echo '';

	}


	?>
</div>


</div>

<footer>
	<a style="color:#fff">

	VivaConcerti | Via maffucci,66 - 20158 Milano (MI) ITALIA | C.F. ABC000000000 | P.Iva 000000000 </a> <br>
	<a class="trans-color-text" href="#">VivaConcerti@gmail.com</a> | <span itemprop="telephone"><a href="#">+3914699640</a></span>
		<br><a target="_blank" href="#"> privacy</a> | <a target="_blank" href="#"> cookie policy</a>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="Main.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>

	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
			$('.nav').addClass('affix');
			console.log("OK");
		} else {
			$('.nav').removeClass('affix');
		}
	});
</script>

</html>
