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
 .row {
   display: -ms-flexbox; /* IE10 */
   display: flex;
   -ms-flex-wrap: wrap; /* IE10 */
   flex-wrap: wrap;
   margin: 0 -16px;
 }

 .col-25 {
   -ms-flex: 25%; /* IE10 */
   flex: 25%;
 }

 .col-50 {
   -ms-flex: 50%; /* IE10 */
   flex: 50%;
 }

 .col-75 {
   -ms-flex: 75%; /* IE10 */
   flex: 75%;
 }

 .col-25,
 .col-50,
 .col-75 {
   padding: 0 16px;
 }

 .container11 {
   background-color: #f2f2f2;
   padding: 5px 20px 15px 20px;
   border: 1px solid lightgrey;
   border-radius: 3px;
 }

 .input {
   width: 100%;
   margin-bottom: 20px;
   padding: 12px;
   border: 1px solid #ccc;
   border-radius: 3px;
 }

 label {
   margin-bottom: 10px;
   display: block;
 }

 .icon-container {
   margin-bottom: 20px;
   padding: 7px 0;
   font-size: 24px;
 }

 .btn {
   background-color: #04AA6D;
   color: white;
   padding: 12px;
   margin: 10px 0;
   border: none;
   width: 100%;
   border-radius: 3px;
   cursor: pointer;
   font-size: 17px;
 }

 .btn:hover {
   background-color: #45a049;
 }

 span.price {
   float: right;
   color: grey;
 }

 /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
 @media (max-width: 800px) {
   .row {
     flex-direction: column-reverse;
   }
   .col-25 {
     margin-bottom: 20px;
   }
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
					echo '<li><a href="Login.html">login</a></li>';

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
		<div class="row">
	  <div class="col-75">
	    <div class="container11">
	      <form name="checkout"  method="POST">
<?php
//$sql_query = "select * FROM users INNER JOIN carrello ON users.id=carrello.id_utente WHERE name='".$_SESSION['uname']."' ;";
if(isset($_SESSION['uname'])){
$sql_query = "select * FROM users INNER JOIN informazioni ON users.id=informazioni.id_utente WHERE username='".$_SESSION['uname']."'; ";
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);
echo $row['indirizzo'];

}
 ?>
	        <div class="row">
	          <div class="col-50">
	            <h3>Billing Address</h3>
	            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
	            <input required type="text" class="input" id="fname" name="firstname" placeholder="John M. Doe" value="<?php if(isset($_SESSION['uname'])){echo $row['name'];} ?>">
	            <label for="email"><i class="fa fa-envelope"></i> Email</label>
	            <input required type="text" class="input" id="email" name="email" placeholder="john@example.com" value="<?php if(isset($_SESSION['uname'])){echo $row['email'];}?>">
	            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
	            <input required type="text" class="input" id="adr" name="address" placeholder="542 W. 15th Street" value="<?php if(isset($_SESSION['uname'])){
																																																									if($row['indirizzo']!=""){
																																																										echo $row['indirizzo'];
																																																									}
																																																								}?>">
	            <label for="city"><i class="fa fa-institution"></i> City</label>
	            <input required type="text" class="input" id="city" name="city" placeholder="New York" value="<?php if(isset($_SESSION['uname'])){
																																																									if($row['citta']!=""){
																																																										echo $row['citta'];
																																																									}
																																																								}?>">

	            <div class="row">
	              <div class="col-50">
	                <label for="state">State</label>
	                <input required type="text" class="input" id="state" name="state" placeholder="NY" value="<?php if(isset($_SESSION['uname'])){
																																																											if($row['stato']!=""){
																																																												echo $row['stato'];
																																																											}
																																																										}?>">
	              </div>
	              <div class="col-50">
	                <label for="zip">Zip</label>
	                <input required type="text" class="input" id="zip" name="zip" placeholder="10001" value="<?php if(isset($_SESSION['uname'])){
																																																											if($row['codice_postale']!=""){
																																																												echo $row['codice_postale'];
																																																											}
																																																										}?>">
	              </div>
	            </div>
	          </div>

	          <div class="col-50">
	            <h3>Payment</h3>
	            <label for="fname">Accepted Cards</label>
	            <div class="icon-container">
	              <i class="fa fa-cc-visa" style="color:navy;"></i>
	              <i class="fa fa-cc-amex" style="color:blue;"></i>
	              <i class="fa fa-cc-mastercard" style="color:red;"></i>
	              <i class="fa fa-cc-discover" style="color:orange;"></i>
	            </div>
	            <label for="cname">Name on Card</label>
	            <input required type="text" class="input" id="cname" name="cardname" placeholder="John More Doe">
	            <label for="ccnum">Credit card number</label>
	            <input required type="text" class="input" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
	            <label for="expmonth">Exp Month</label>
	            <input required type="text" class="input" id="expmonth" name="expmonth" placeholder="September">
	            <div class="row">
	              <div class="col-50">
	                <label for="expyear">Exp Year</label>
	                <input required type="text" class="input" id="expyear" name="expyear" placeholder="2018">
	              </div>
	              <div class="col-50">
	                <label for="cvv">CVV</label>
	                <input required type="text" class="input" id="cvv" name="cvv" placeholder="352">
	              </div>
	            </div>
	          </div>

	        </div>
	        <label>
	          <input required type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
	        </label>
	        <input required type="submit" onclick="Modulo()"value="Continue to checkout" class="btn">
	      </form>
	    </div>
	  </div>
	  <div class="col-25">
	    <div class="container">

	      <h4>Carrello <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
				<?php
				if(isset($_SESSION['uname'])){
						$cont=0;
						$totale=0;


									$sql_query = "select id as id FROM users where username='".$_SESSION['uname']."';";
			          	$result = mysqli_query($con,$sql_query);
									$row = mysqli_fetch_array($result);
									$sql_query = "select * FROM carrello INNER JOIN evento ON carrello.id_biglietto=evento.id_evento WHERE carrello.id_utente='".$row['id']."';";
			          	$result = mysqli_query($con,$sql_query);

			             while($row = mysqli_fetch_array($result))
			          {
											$querynomeutente = "select name as utentename from users where id='".$row['artistaUtente_id']."'";
											$resultnomeutente = mysqli_query($con,$querynomeutente);
											$rownomeutente = mysqli_fetch_array($resultnomeutente);
											$nomeutente = $rownomeutente['utentename'];
											$cont++;
											echo '
											<p><a  onclick="bigliettot('.$row['id_biglietto'].')" class="togli" style="font-size:18px;">- </a><a  onclick="biglietto('.$row['id_biglietto'].')" class="linkbiglietto">'.$nomeutente.'</a> <span class="price" style="font-size:14px;"><b>'.$row['numero'].'</b></span> <span class="price">'.$row['costo']. '€__</span> <span class="price">______'.$row['data'].' ____</span></p>
											<br>';
											$totale=$row['costo']*$row['numero']+$totale;
										}
									}
										?>
										<style>.linkbiglietto{
											color: green;
											cursor: pointer;

										}
										.togli:hover{
											color: #ffa1ac;
										}
										.togli{
											color: red;
											cursor: pointer;

										}
										.linkbiglietto:hover{
											color: blue;}
										</style>
	      <hr>
	      <p>Totale <span class="price" style="color:black"><b><?php echo $totale; ?>€</b></span></p>
	    </div>
	  </div>
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

function Modulo(){
	var email = document.checkout.email.value;
	var zip = document.checkout.zip.value;
	var eyear = document.checkout.expyear.value;
	var cnumber = document.checkout.cardnumber.value;
	var cvv = document.checkout.cardnumber.value;
	var indirizzo = document.checkout.address.value;
	var city = document.checkout.city.value;
	var stato = document.checkout.state.value;
	var nomecarta = document.checkout.cardname.value;
	var emese = document.checkout.expmonth.value;


	var email_reg_exp = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-]{2,})+.)+([a-zA-Z0-9]{2,})+$/;
	if (!email_reg_exp.test(email)) {
		alert("Inserire un indirizzo email corretto.");
return false;
}
else if (isNaN(zip)) {
	alert("Inserire un codice postale corretto");
return false;
}

else if (isNaN(cnumber)) {
	alert("Inserire un numero di carta corretto");
return false;
}
else if (cnumber.length<13 && cnumber.length>16) {
	alert("Inserire un numero di carta corretto");
return false;
}
else if (isNaN(eyear)) {
	alert("Inserire anno di scadenza corretto");
return false;
}
else if (isNaN(cvv)) {
	alert("Inserire anno di scadenza corretto");
return false;
}
else if ((email=="") ||
(zip=="")||
(eyear=="")||
(cnumber=="")||
(cvv=="")||
(indirizzo=="")||
(city=="")||
(stato=="")||
(nomecarta=="")||
(emese=="")) {

}

else {
document.checkout.action = "checkout.php";
document.checkout.submit();
}
}



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
	function bigliettot(id_biglietto) {

	// The rest of this code assumes you are not using a library.
	// It can be made less verbose if you use one.
	const form = document.createElement('form');
	form.method = 'POST';
	form.action = "toglicarrello.php";


	const hiddenField = document.createElement('input');
	hiddenField.type = 'hidden';
	hiddenField.name = "id_biglietto";
	hiddenField.value = id_biglietto;



	form.appendChild(hiddenField);

	document.body.appendChild(form);

	form.submit();

	}





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
