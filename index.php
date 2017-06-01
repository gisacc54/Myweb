<!DOCTYPE html>
<html>
<head>
	<title>my net</title>
	<script src="jquery.js"></script>
	<script src="nicescroll.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".btn").click(function(){
				$("#div").slideToggle(1000);
			});
		});
		
		$(document).ready(function(){
			$(".nav").click(function(){
				$(".my1").slideToggle(2000);
			});
		});
		$(document).ready(function(){
			$("button.bn1").click(function(){
				$("div.d1").slideToggle(1000);
				$("div.d2").hide(500);
				$("div.d3").hide(500);
				$("div.d4").hide(500);
				$("div.d5").hide(500);
			});
		});
		$(document).ready(function(){
			$("button.bn2").click(function(){
				$("div.d2").slideToggle(1000);
				$("div.d1").hide(500);
				$("div.d3").hide(500);
				$("div.d4").hide(500);
				$("div.d5").hide(500);
			});
		});
		$(document).ready(function(){
			$("button.bn3").click(function(){
				$("div.d3").slideToggle(1000);
				$("div.d1").hide(500);
				$("div.d2").hide(500);
				$("div.d4").hide(500);
				$("div.d5").hide(500);
			});
		});
		$(document).ready(function(){
			$("button.bn4").click(function(){
				$("div.d4").slideToggle(1000);
				$("div.d1").hide(500);
				$("div.d3").hide(500);
				$("div.d2").hide(500);
				$("div.d5").hide(500);
			});
		});
		$(document).ready(function(){
			$("button.bn5").click(function(){
				$("div.d5").slideToggle(1000);
				$("div.d1").hide(500);
				$("div.d3").hide(500);
				$("div.d4").hide(500);
				$("div.d2").hide(500);
			});
		});

	</script>
	<script type="text/javascript">
		(document).ready(function() {  
    $("div.d5").niceScroll();
});
	</script>
	<link rel="stylesheet" href="mobirise/style.css">
	 <link rel="stylesheet" href="animate.css">
	<style type="text/css">
		body{
			margin: 0;
			background-image:url(images/gos.png);
			background-repeat: no-repeat;
			 background-attachment: fixed;
			 /*background-color: rgba( 0, 0, 70,0.8);*/
		}
		.header{
	        margin-left: -10; 
	        width: 100%;
	        height: 60px;
	        background-color: #800080;
	        color: #fff;
	        font-family: tahoma;
	        font-size: 11pt;  
            }
              .icon{
	        width: 100px;
	        height: auto;
              }
		.mbri-responsive{
			width: 30px;
		}
		ul[name="icon"]{
			margin: 0;
			padding: 0;
			position: absolute;
			top: 40%;
			left: 30%;
		}
		ul[name="btn"]{
			margin: 0;
			padding: 0;
			position: absolute;
			top: 0.75%;
			right:0%;

		}
		ul[name="icon"] li{
			list-style: none;
			float: left;
			margin: 10px;
			width: 200px;
			height: 200px;
			line-height: 200px;
			text-align: center;
			background-color: white;
			border-radius: 50%;
			font-size: 100px;
			position: relative;
			transition: 1.0s ease-in-out;
			z-index: 1;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
			
		}
		ul[name="btn"] li{
			list-style: none;
		}
		ul[name="icon"] li:before{
			content: "";
			width: 100%;
			height: 100%;
			position: absolute;
			transform: scale(0);
			top: 0;
			left: 0;
			background-color: #b1c2be;
			border-radius: 50%;
			transition: 1.0s ease-in-out;
			z-index: -1;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
		}
		ul[name="icon"] li:hover:before{
			transform: scale(1);
		}
		ul[name="icon"] li:hover{
			color: white;
		}
		span {
			width: 330px;
		}
		button[name="btn"]{
			width: 120px;
			height: 50px;
			border-radius: 10px; 
			background-color: #359cab;
			margin-left: 80px;
			font-size: 18pt;
			font-family: tahoma;
			color: #ce1014;
		}
		button[name="btn"]:hover{
			background-color: #029b59;
		}
		div[name="g"]{
			top: 20%;
			left: 30%;
		}
		input{
			margin-right: 10px;
			margin-top: 10px;
		}
		input[type="text"],input[type="password"] {
			width: 150px;
			height: 25px;
			border-radius: 5px;
			font-family: tahoma;
			font-size: 16pt;
			padding: 2px;
			text-align: center;
		}
		input[type="submit"]{
			width: 80px;
			height: 40px;
			margin-left: 50px;
			border-radius: 5px;
			background-color: #029b59;
		}
		input[type="submit"]:hover{
			background-color: #359cab;
		}
		div[name="div"]{
			border-radius: 10px;
			margin-right: 10px;
			margin-top: 7px;
			padding: 10px;
			background-color: #014f59;
			display: none;
		}
		a{
			color: #b9f8f4;
			margin-left: 40px;
		}
		.wrapper{
			width: 400px;
			height: 100%;
			margin-left: 20%;
			margin-top: 43%;
		}
		.btn_group{
			width: 340px;
			height: 40px;
			padding: 10px 40px;
			line-height: 40px;
			position: relative;
			z-index: 1;
			
		}
		.btn_one{
			float: left;
			line-height: 40px;
			text-decoration: none;
			transition: 1.0s;

			
		}
		.btn_tow{
			float: right;
			line-height: 40px;
			text-decoration: none;
		}
		.btn_bg{
			background-color: #014f59;
			height: 60px;
			width: 180px;
			position: absolute;
			top: 0;
			margin-left: -200px;
			z-index: -1;
			transition: 1.0s;
			border-radius: 10px;
		}
		span:hover+.btn_bg{
			width: 252px;
			margin-left: -40px;
		}
		.nav div{
			margin: 2px;
			width: 30px;
			height: 8px;
			background-color:black;
			transition: .5s;
			border-radius: 10px;
		}
		.one{
			width: 30px;
		}
		div[class="two"]{
			width: 15px;
		}
		div[class="three"]{
			width: 25px;
		}
		.nav:hover div{
			width: 30px;
		}
		div[name="divnav"]{
			width: 40px;
		}
	    .div-1{
	 		margin-left: 10px;
			width: 250px;
			height: 400px;
			float: left;
			border-radius: 20px;
			background-color: #014f59;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
		}
		.div-2{
			width: 800px;
			height:400px;
			padding: 5px;
			margin-left: 350px;
			border-radius: 20px;
			background-color: #ff80ff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);

		}
		.div-3{
			width: 100%;
			height: 50px;
			padding: 5px;
			margin-top: 30px;
			margin-left: 30px;
			border-radius: 20px;
			background-color: #014f59;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
		}

		.my1{
			position: absolute;
			display: none;
		}
		ul li{
			list-style: none;
		}
		ul[name="bn"] li{
			padding-left: 0px;
			margin-left: 0px;
		}
		button[name="bn1"],button[name="bn3"],button[name="bn2"],button[name="bn4"],button[name="bn5"] {
			width: 150px;
			height:40px;
			background-color:#029b59;
			border-radius: 10px;

	       margin-top:20px;

		}
		.mbri-home{
			left: 0;
		}
		div[name="d1"]{
			width: 750px;
			height: 360px;
			padding: 5px;
			border-radius: 10px;
			position: relative;
			left: 375px;
			top: 20px;
			display: none;
			overflow-y: scroll;
			background-color: #ffb3ff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
		}
		div[name="d2"]{
			width: 750px;
			height: 360px;
			padding: 5px;
			border-radius: 10px;
			position: absolute;
			left: 375px;
			top: 20px;
			display: none;
			overflow-y: scroll;
			background-color: #ffb3ff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
		}
		div[name="d3"]{
			width: 750px;
			height: 360px;
			padding: 5px;
			border-radius: 10px;
			position: absolute;
			left: 375px;
			top: 20px;
			display: none;
			overflow-y: scroll;
			background-color: #ffb3ff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
		}
		div[name="d4"]{
			width: 750px;
			height: 360px;
			padding: 5px;
			border-radius: 10px;
			position: absolute;
			left: 375px;
			top: 20px;
			display: none;
			overflow-y: scroll;
			background-color: #ffb3ff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
		}
		div[name="d5"]{
			width: 750px;
			height: 360px;
			padding: 5px;
			border-radius: 10px;
			position: absolute;
			left: 375px;
			top: 20px;
			display: none;
			overflow-y: scroll;
			background-color: #ffb3ff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
		}
		div[name="d6"]{
			width: 750px;
			height: 360px;
			padding: 5px;
			border-radius: 10px;
			position: absolute;
			left: 375px;
			top: 20px;
			display: none;
			overflow-y: scroll;
			background-color: #ffb3ff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.9);

		}
		#ex3::-webkit-scrollbar{
            width:16px;
            background-color:#cccccc;
        }
        #ex3::-webkit-scrollbar-thumb{
background-color:#B03C3F;
border-radius:10px;
}
#ex3::-webkit-scrollbar-thumb:hover{
background-color:#BF4649;
border:1px solid #333333;
}
#ex3::-webkit-scrollbar-thumb:active{
background-color:#A6393D;
border:1px solid #333333;
}  
img{
	width: 400px;
	height: 300px;
	border-radius: 50px;
}
	</style>

 <div name="g">
	<form class="header">
			<tr>
				<td class="top_i"><img src="icons/logo.png" class="icon"></td>
				
				</td>
			</tr>
	</form>
</div>

<div class="divn pulse animated" name="divnav" >
	<a href="#" class="nav bounce animated">
		<div class="one"></div>
		<div class="two"></div>
		<div class="three"></div>
	</a>
</div>

<div id="g">
<ul name="btn"><li>
	<button name="btn" class="btn pulse animated">SIGN IN</button> 
	<div name="div" id="div" >
		<table class="table bounce animated">
			<td>
				<tr>
					<input type="text" name="username" placeholder="username" required="required"><br>
					<input type="password" name="pword" placeholder="password" required="required"><br>
					<input type="submit" name="btn" value="LOGIN"><br>
				</tr>
				<a href="#">forget password</a>
			</td>
		</table>
	</div>
</li></ul>
</div>
<div class="my">
<div>
	<ul name="icon" class="icons pulse bounce animated" class="me pulse animated">
		<li><span class="mbri-responsive"></span></li>
		<li><span class="mbri-rocket"></span></li>
		<li><span class="mbri-shopping-bag"></span></li>
		<div class="wrapper pulse animated">
	<div class="btn_group">
		<a href="#" class="btn_tow" name="btn"><span>CONTINUE SHOPPING</span><div class="btn_bg"></div></a><a href="Example.php" class="btn_one" name="btn">CHECKOUT</a>

	</div>

</div>

	</ul>

</div>
</div>
</div>
<div class="my1">
<div class="div-1">
	<ul name="bn">
        <li><button name="bn5" class="bn5">News</button></li>
		<li><button name="bn1" class="bn1">About GOS</button></li>
		<li><button name="bn2" class="bn2"> GOS</button> </li>
		<li><button name="bn3" class="bn3"> Gisacc</button></li>
		<li><button name="bn4" class="bn4">PROFILE</button></li>
		
	</ul>
</div>
<div class="div-2">
	<div name="d1" id="d0"></div>
	<div name="d2" class="d1" id="ex3">
	<h1>HTML Examples</h1>
	<img src="images/g (11).jpg" >
	<h2>UTANGULIZI</h2>
		<p>Mradi wa pamoja tuwalee ulianza mwaka 2013 kwa lengo la kuwasaidia watoto wanaoishi katika mazingira hatarishi. Mradi huu ulikuwa unaendeshwa na kutekelezwa na shirika la PADI chini ya ufadhili wa PACT. Lengo la mradi wa PAMOJA TUWALEE lilikuwa ni kuwahamasisha walenzi kujiunga na vikundi vya kiujasiriamali ambavyo vitawawenzesha kuweka akiba na kukopa ili kuweza kuwalea watoto wanaoishi katika mazingira hatarishi. Kikao cha kamati ya maendeleo ya kata (KAMAKA) kilifanyika kila kata kwa tarehe tofauti ambapo Mkongo tare 13/02/2017, Luegu 14/02/2017, Mgombasi 15/2/2017, Msindo 16/02/2017 na Mchomoro 21/2/2017. Shirika la PADI walieleza serekari kata kuwa mradi wa kuwasaidia watoto waishio mazingira hatarishi kupitia vikundi vya kila kijiji sasa umeisha, hivyo serekari ya kata itakuwa na jukumu la kuwapa mahitaji ya msingi watoto hao wanaoishi mazingira hatarishi na kila serekari ya kata walikubali kuwapokea Walezi na Watoto wanaoishi katika mazingira hatarishi na kuwasaidia mahitaji ya msingi.</p>
		<h2>HITIMISHO</h2>
		<p>Serekari pamoja na wanajamii walishukuru jitihada zilizofanywa na shirika la padi katika kuwasaidia watoto wanoishi katika mazingira hatarishi na pia Shirika la PADI liliwashukuru wanajamii na Serekari ya kila kijiji na Kata kwa kutoa ushirikiano chanya katika kuwasaidia watoto wanaoishi mazingira hatarishi tangu mradi ulipoanza hadi unapoisha</p></div>
	<div name="d3" class="d2" id="ex3"><h1>HTML Quiz Test</h1><img src="images/g (10).jpg" ><h2>UTANGULIZI</h2>
		<p>Mradi wa pamoja tuwalee ulianza mwaka 2013 kwa lengo la kuwasaidia watoto wanaoishi katika mazingira hatarishi. Mradi huu ulikuwa unaendeshwa na kutekelezwa na shirika la PADI chini ya ufadhili wa PACT. Lengo la mradi wa PAMOJA TUWALEE lilikuwa ni kuwahamasisha walenzi kujiunga na vikundi vya kiujasiriamali ambavyo vitawawenzesha kuweka akiba na kukopa ili kuweza kuwalea watoto wanaoishi katika mazingira hatarishi. Kikao cha kamati ya maendeleo ya kata (KAMAKA) kilifanyika kila kata kwa tarehe tofauti ambapo Mkongo tare 13/02/2017, Luegu 14/02/2017, Mgombasi 15/2/2017, Msindo 16/02/2017 na Mchomoro 21/2/2017. Shirika la PADI walieleza serekari kata kuwa mradi wa kuwasaidia watoto waishio mazingira hatarishi kupitia vikundi vya kila kijiji sasa umeisha, hivyo serekari ya kata itakuwa na jukumu la kuwapa mahitaji ya msingi watoto hao wanaoishi mazingira hatarishi na kila serekari ya kata walikubali kuwapokea Walezi na Watoto wanaoishi katika mazingira hatarishi na kuwasaidia mahitaji ya msingi.</p>
		<h2>HITIMISHO</h2>
		<p>Serekari pamoja na wanajamii walishukuru jitihada zilizofanywa na shirika la padi katika kuwasaidia watoto wanoishi katika mazingira hatarishi na pia Shirika la PADI liliwashukuru wanajamii na Serekari ya kila kijiji na Kata kwa kutoa ushirikiano chanya katika kuwasaidia watoto wanaoishi mazingira hatarishi tangu mradi ulipoanza hadi unapoisha</p></div>
	<div name="d4" class="d3" id="ex3"><h1>HTML References</h1><img src="images/g (9).jpg" ><h2>UTANGULIZI</h2>
		<p>Mradi wa pamoja tuwalee ulianza mwaka 2013 kwa lengo la kuwasaidia watoto wanaoishi katika mazingira hatarishi. Mradi huu ulikuwa unaendeshwa na kutekelezwa na shirika la PADI chini ya ufadhili wa PACT. Lengo la mradi wa PAMOJA TUWALEE lilikuwa ni kuwahamasisha walenzi kujiunga na vikundi vya kiujasiriamali ambavyo vitawawenzesha kuweka akiba na kukopa ili kuweza kuwalea watoto wanaoishi katika mazingira hatarishi. Kikao cha kamati ya maendeleo ya kata (KAMAKA) kilifanyika kila kata kwa tarehe tofauti ambapo Mkongo tare 13/02/2017, Luegu 14/02/2017, Mgombasi 15/2/2017, Msindo 16/02/2017 na Mchomoro 21/2/2017. Shirika la PADI walieleza serekari kata kuwa mradi wa kuwasaidia watoto waishio mazingira hatarishi kupitia vikundi vya kila kijiji sasa umeisha, hivyo serekari ya kata itakuwa na jukumu la kuwapa mahitaji ya msingi watoto hao wanaoishi mazingira hatarishi na kila serekari ya kata walikubali kuwapokea Walezi na Watoto wanaoishi katika mazingira hatarishi na kuwasaidia mahitaji ya msingi.</p>
		<h2>HITIMISHO</h2>
		<p>Serekari pamoja na wanajamii walishukuru jitihada zilizofanywa na shirika la padi katika kuwasaidia watoto wanoishi katika mazingira hatarishi na pia Shirika la PADI liliwashukuru wanajamii na Serekari ya kila kijiji na Kata kwa kutoa ushirikiano chanya katika kuwasaidia watoto wanaoishi mazingira hatarishi tangu mradi ulipoanza hadi unapoisha</p></div>
	<div name="d5" class="d4" id="ex3"><h1>HTML Exam - Get Your Diploma!</h1> <img src="images/g (6).jpg" ><h2>UTANGULIZI</h2>
		<p>Mradi wa pamoja tuwalee ulianza mwaka 2013 kwa lengo la kuwasaidia watoto wanaoishi katika mazingira hatarishi. Mradi huu ulikuwa unaendeshwa na kutekelezwa na shirika la PADI chini ya ufadhili wa PACT. Lengo la mradi wa PAMOJA TUWALEE lilikuwa ni kuwahamasisha walenzi kujiunga na vikundi vya kiujasiriamali ambavyo vitawawenzesha kuweka akiba na kukopa ili kuweza kuwalea watoto wanaoishi katika mazingira hatarishi. Kikao cha kamati ya maendeleo ya kata (KAMAKA) kilifanyika kila kata kwa tarehe tofauti ambapo Mkongo tare 13/02/2017, Luegu 14/02/2017, Mgombasi 15/2/2017, Msindo 16/02/2017 na Mchomoro 21/2/2017. Shirika la PADI walieleza serekari kata kuwa mradi wa kuwasaidia watoto waishio mazingira hatarishi kupitia vikundi vya kila kijiji sasa umeisha, hivyo serekari ya kata i takuwa na jukumu la kuwapa mahitaji ya msingi watoto hao wanaoishi mazingira hatarishi na kila serekari ya kata walikubali kuwapokea Walezi na Watoto wanaoishi katika mazingira hatarishi na kuwasaidia mahitaji ya msingi.</p>
		<h2>HITIMISHO</h2>
		<p>Serekari pamoja na wanajamii walishukuru jitihada zilizofanywa na shirika la padi katika kuwasaidia watoto wanoishi katika mazingira hatarishi na pia Shirika la PADI liliwashukuru wanajamii na Serekari ya kila kijiji na Kata kwa kutoa ushirikiano chanya katika kuwasaidia watoto wanaoishi mazingira hatarishi tangu mradi ulipoanza hadi unapoisha</p></div>
	<div name="d6" class="d5" id="ex3">
		<h1>REPORT YA ZIARA</h1>
		<img src="images/g2.jpg" >
		<h2>UTANGULIZI</h2>
		<p>Mradi wa pamoja tuwalee ulianza mwaka 2013 kwa lengo la kuwasaidia watoto wanaoishi katika mazingira hatarishi. Mradi huu ulikuwa unaendeshwa na kutekelezwa na shirika la PADI chini ya ufadhili wa PACT. Lengo la mradi wa PAMOJA TUWALEE lilikuwa ni kuwahamasisha walenzi kujiunga na vikundi vya kiujasiriamali ambavyo vitawawenzesha kuweka akiba na kukopa ili kuweza kuwalea watoto wanaoishi katika mazingira hatarishi. Kikao cha kamati ya maendeleo ya kata (KAMAKA) kilifanyika kila kata kwa tarehe tofauti ambapo Mkongo tare 13/02/2017, Luegu 14/02/2017, Mgombasi 15/2/2017, Msindo 16/02/2017 na Mchomoro 21/2/2017. Shirika la PADI walieleza serekari kata kuwa mradi wa kuwasaidia watoto waishio mazingira hatarishi kupitia vikundi vya kila kijiji sasa umeisha, hivyo serekari ya kata itakuwa na jukumu la kuwapa mahitaji ya msingi watoto hao wanaoishi mazingira hatarishi na kila serekari ya kata walikubali kuwapokea Walezi na Watoto wanaoishi katika mazingira hatarishi na kuwasaidia mahitaji ya msingi.</p>
		<h2>HITIMISHO</h2>
		<p>Serekari pamoja na wanajamii walishukuru jitihada zilizofanywa na shirika la padi katika kuwasaidia watoto wanoishi katika mazingira hatarishi na pia Shirika la PADI liliwashukuru wanajamii na Serekari ya kila kijiji na Kata kwa kutoa ushirikiano chanya katika kuwasaidia watoto wanaoishi mazingira hatarishi tangu mradi ulipoanza hadi unapoisha</p>
		<h2>MAAZIMIO</h2>
		<p>Serekari ya kata iliwapokea walezi na watoto wanaoishi mazingira hatarishi na kuahidi kuwa itato itahakikisha kila kijiji kinatengeneza mkakati wa kuwahudumia watoto wanaoishimazingir hatarishi ili kuwasaidia watoto hao kupata huduma za msingi, pia serekari ya kata na vijiji iliahidi kuwapa vipaumbele watoto hao pale inapotokea misaada kutoka taasisi mbalimbali, Pia shirika la PADI liliahidi kutoa ushirikiano pale patakapohita jika na patapo wezekana.</p>
	</div>
</div>
<div class="div-3"> div 3</div>
<div id="g"></div>
</body>
</html>