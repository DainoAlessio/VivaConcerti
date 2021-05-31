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

.blur {
  background-size: cover;
  overflow: hidden;
  filter: blur(5px);
  position: absolute;
  height: 700px;
  top: -50px;
  left: -50px;
  right: -50px;
  bottom: -50px;
}

.widget {
  border-top: 2px solid rgba(255, 255, 255, .5);
  border-bottom: 2px solid rgba(255, 255, 255, .5);
  height: 700px;
  width: 100%;
  overflow: hidden;
}

.center {
  position: absolute;
  margin: auto;
  top:20%;
  left: 0;
  right: 0;
}
.center1 {   margin: auto;   width: 60%;   border: 1px solid #aaaaaa;   padding: 10px; }






/*  NOT REQUIRED  */

.text {
  height: 200px;
  width: 340px;
}

.text h1 {
  text-align: center;
  text-shadow: 1px 1px rgba(0, 0, 0, .1);

  margin-top: 57px;
  font-family: 'Lora', serif;
  font-weight: 700;
  font-size: 38px;
	color: transparent;
	color: rgba(202, 181, 160, 0.83);

    text-shadow: rgb(0, 0, 0) 2px 2px 2px;
	}

.text p {
  text-align: center;
  color: #ffffff;
  text-shadow: 1px 1px rgba(0, 0, 0, .1);
  margin-top: 0px;
  font-family: 'Lato', serif;
  font-weight: 400;
  font-size: 22px;
}
.quantity {
 display: inline-block; }

.quantity .input-text.qty {
 width: 35px;
 height: 39px;
 padding: 0 5px;
 text-align: center;
 background-color: transparent;
 border: 1px solid #efefef;
}

.quantity.buttons_added {
 text-align: left;
 position: relative;
 white-space: nowrap;
 vertical-align: top; }

.quantity.buttons_added input {
 display: inline-block;
 margin: 0;
 vertical-align: top;
 box-shadow: none;
}

.quantity.buttons_added .minus,
.quantity.buttons_added .plus {
 padding: 7px 10px 8px;
 height: 41px;
 background-color: #ffffff;
 border: 1px solid #efefef;
 cursor:pointer;}

.quantity.buttons_added .minus {
 border-right: 0; }

.quantity.buttons_added .plus {
 border-left: 0; }

.quantity.buttons_added .minus:hover,
.quantity.buttons_added .plus:hover {
 background: #eeeeee; }

.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
 -webkit-appearance: none;
 -moz-appearance: none;
 margin: 0; }

 .quantity.buttons_added .minus:focus,
.quantity.buttons_added .plus:focus {
 outline: none; }

 .myButton {
 	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
 	background-color:#44c767;
 	border-radius:28px;
 	border:1px solid #18ab29;
 	display:inline-block;
 	cursor:pointer;
 	color:#ffffff;
 	font-family:Arial;
 	font-size:18px;
 	padding:18px 31px;
 	text-decoration:none;
 	text-shadow:0px 1px 0px #2f6627;
	margin-bottom:30px;
 }
 .myButton:hover {
 	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
 	background-color:#5cbf2a;
 }
 .myButton:active {
 	position:relative;
 	top:1px;
 }
 .myButton1 {
 	background:linear-gradient(to bottom, red 5%, red 100%);
 	background-color:red;
 	border-radius:28px;
 	border:1px solid red;
 	display:inline-block;
 	cursor:pointer;
 	color:#ffffff;
 	font-family:Arial;
 	font-size:18px;
 	padding:18px 31px;
 	text-decoration:none;
 	text-shadow:0px 1px 0px #2f6627;
	margin-bottom:30px;
 }
 .myButton1:hover {
 	background:linear-gradient(to bottom, red 5%, #a62c03 100%);
 	background-color:#5cbf2a;
 }
 .myButton1:active {
 	position:relative;
 	top:1px;
 }


 .carrello {
 	background-color:#7892c2;
 	border:3px solid #4e6096;
 	display:inline-block;
 	cursor:pointer;
 	color:#ffffff;
 	font-family:Arial;
 	font-size:17px;
 	padding:16px 31px;
 	text-decoration:none;
 	text-shadow:0px 1px 0px #283966;
	margin-top: 20px;
 }
 .carrello:hover {
 	background-color:#476e9e;
 }
 .carrello:active {
 	position:relative;
 	top:1px;
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

				<li><a href="#">Contact</a></li>
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
		<div class="widget center">

		  <div class="blur"></div>

			<?php

			if(isset($_POST['id_biglietto'])){
				$_SESSION['id_biglietto']=$_POST['id_biglietto'];

			}
				$sql_query = "select * FROM evento INNER JOIN users ON evento.artistaUtente_id=users.id WHERE id_evento='".$_SESSION['id_biglietto']."' ;";
				$result = mysqli_query($con,$sql_query);
				$row = mysqli_fetch_array($result);


				?>



		  <div class="text center">

		    <h1 style="font-size:50px;">
					<?php
					echo $row['name'];
					echo "<br>";
					echo $row['data'];
					$_SESSION['nB']=$row['biglietti_disponibili'];

					echo "<style>
					.blur{
						background: url('".$row['p_foto']."') no-repeat center center ;
					}
					</style>";


					?>
				</h1>
				<div style="text-align: center;">
					<?php  if(isset($_SESSION['uname'])){
						$queryidutente= "select id as utenteid from users where username='".$_SESSION['uname']."'";
					  $idutente_result= mysqli_query($con,$queryidutente);
					  $rowidutente= mysqli_fetch_array($idutente_result);
					  $idutente = $rowidutente['utenteid'];
						$query = "select count(*) as cntSalva from salvati where id_biglietto='".$_SESSION['id_biglietto']."'AND id_utente='".$idutente."'";
						$controllo = mysqli_query($con,$query);
						$riga = mysqli_fetch_array($controllo);
						$count = $riga['cntSalva'];
						if($count==0){
						echo '<a onclick="salva('.$row['id_evento'].')" class="myButton" >Salva nei preferiti</a>';
					}
					else{
						echo '<a onclick="cancella('.$row['id_evento'].')" class="myButton1" >Togli dai preferiti</a>';
					}
}
					?>


				<h2 style="color:white;">Numero biglietti da acquistare</h2>
				<div class="quantity buttons_added" style="background: white;" >
					<?php $meno="'meno'"; if($_SESSION['nB']!=0){ echo '<input type="button" value="-" class="minus" onclick="aggiorna('.$meno.')" >';} ?>
					<input id="numerob" type="number" step="1" min="0" max="<?php if($_SESSION['nB']==0){ echo "0";} else{ echo $_SESSION['nB'];}  ?>" name="quantity" value="<?php if($_SESSION['nB']==0){ echo "0";} else{ echo "1";} ?>" title="Qty" class="input-text qty text aggiorna" size="4" pattern="" inputmode="">
					<?php $piu="'piu'"; if($_SESSION['nB']!=0){ echo '<input type="button" value="+"  class="plus" onclick="aggiorna('.$piu.')" >';} ?>

				</div>
				<h2 id="costo" style="color:white;" value="20"><?php
				if($_SESSION['nB']==0){
					echo "0";}
					 else{
						 echo $row['costo'];}


				?>€</h2>
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

				function aggiorna(agg){


					if(agg=="piu"){
					console.log("OK");
          var a=0;
					if(document.getElementById('numerob').value < <?php echo $_SESSION['nB'];?>)

						document.getElementById('costo').innerHTML = <?php echo $row['costo']; ?>+ parseInt(document.getElementById('costo').innerHTML)+"€";
					}
					else {
						if(document.getElementById('numerob').value!=0)
						document.getElementById('costo').innerHTML = -<?php echo $row['costo']; ?>+ parseInt(document.getElementById('costo').innerHTML)+"€";
					}
				}

				function salva(id_biglietto){
					const form = document.createElement('form');
					form.method = 'POST';
					form.action = "salva.php";


					const hiddenField = document.createElement('input');
					hiddenField.type = 'hidden';
					hiddenField.name = "id_biglietto";
					hiddenField.value = id_biglietto;



					form.appendChild(hiddenField);

					document.body.appendChild(form);
					form.submit();
					}
					function cancella(id_biglietto){
						const form = document.createElement('form');
						form.method = 'POST';
						form.action = "cancella_salva.php";


						const hiddenField = document.createElement('input');
						hiddenField.type = 'hidden';
						hiddenField.name = "id_biglietto";
						hiddenField.value = id_biglietto;



						form.appendChild(hiddenField);

						document.body.appendChild(form);
						form.submit();
						}


				</script>






				<a onclick="carrello(<?php echo $_SESSION['id_biglietto']; ?>)" class="carrello" >Aggiungi al carrello</a>
				<script>
				function carrello(id_biglietto){
					var a = document.getElementById('numerob').value
					const form = document.createElement('form');
					form.method = 'POST';
					form.action = "carrelloF.php";


					const hiddenField = document.createElement('input');

					hiddenField.type = 'hidden';
					hiddenField.name = "numero";
					hiddenField.value = a;
					form.appendChild(hiddenField);

					document.body.appendChild(form);
					form.submit();
					}
				</script>
				</div>






		  </div>

		</div>








<div >
</div>

	<script src="js/extention/choices.js"></script>
	<script src="js/extention/flatpickr.js"></script>
	<script>
		flatpickr(".datepicker",
		{});

	</script>
	<script>
	function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});



		const choices = new Choices('[data-trigger]',
		{
			searchEnabled: false,
			itemSelectText: '',
		});

		$(document).ready(() => {
			$('footer').css({
				position: 'absolute',
				width: '100%',
				'margin-top': $('.widget').height() - $('footer').outerHeight() *2
			});

		});
	</script>

</section>


<footer>
	<a style="color:#fff">

	Your Company Name | Via Roma, 24 - 55045 Pietrasana (Lucca) ITALIA | C.F. ABC000000000 | P.Iva 000000000 </a> <br>
	<a class="trans-color-text" href="#">esempio@esempio.it</a> | <span itemprop="telephone"><a href="#">+39 347 58 30 387</a></span>
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
<script src="Main.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>


</script>

</html>
