<?php 
error_reporting(0); //loading has been converted by hacker for fivem

$APIKey = "AEFB59C423EFCD6AF811FDD0E686AD66"; //  //loading has been converted by hackergeo for fivem

include ('includes/errorcheck.php'); //To see whether or not you have the right extension in your URL

$steamid64 = $_GET["steamid"];  //loading has been converted by hacker for fivem
 //loading has been converted by hacker for fivem
//This basically gets us the information needed to output information about the user.
$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $APIKey . "&steamids=" . $steamid64;
$json = file_get_contents($url); //loading has been converted by hacker for fivem
$table2 = json_decode($json, true); //loading has been converted by hacker for fivem
$table = $table2["response"]["players"][0]; //loading has been converted by hacker for fivem

//This converts the 62bit ID to a 32bit ID - a commonly used ID. //loading has been converted by hacker for fivem
$authserver = bcsub($steamid64, '76561197960265728') & 1; //loading has been converted by hacker for fivem
$authid = (bcsub($steamid64, '76561197960265728')-$authserver)/2; //loading has been converted by hacker for fivem
$steamid32 = "STEAM_0:$authserver:$authid"; //loading has been converted by hacker for fivem

//This selects the music in the music folder and plays it out in random order, just put your OGG files in the music folder and it'll pop up here!	 //loading has been converted by hacker for fivem
$dir = "music/"; //loading has been converted by hacker for fivem
$scan = scandir($dir); //loading has been converted by hacker for fivem
$random = rand(2, sizeof($scan)-1); //loading has been converted by hacker for fivem
 //loading has been converted by hacker for fivem
 //loading has been converted by hacker for fivem
?>

	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<head>
 <title>HACKER Loading</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="includes/jquery.js"></script>
<script type="text/javascript" src="includes/slider.js"></script>

 <script type="text/javascript">
	//Our cycle script so we can make the pictures fade between each other. //loading has been converted by hacker for fivem
	$('#background').cycle({  //loading has been converted by hacker for fivem
			fx: 'fade', // You can change the FX way the pictures changes with, an example scrollDown. Check out http://jquery.malsup.com/cycle/ for more about that matter
			speed: 2000,  //loading has been converted by hacker for fivem
			timeout: 4000  //loading has been converted by hacker for fivem
		}); //loading has been converted by hacker for fivem
	 //loading has been converted by hacker for fivem
 //loading has been converted by hacker for fivem
    </script>
	
</head>


<body>
		<div id="background"><!--The pictures are located here, if you want to add more you need to add another div and change its name to +1 of whatever the first one was and go to the stylesheet and add duplicate another style div and do the same thing as with the div in this document -->
			<div id="bg1"> </div>
			<div id="bg2"> </div>
			<div id="bg3"> </div>
			<div id="bg4"> </div>
		</div>
		
	<div class="content"> <!--Opens up our content for editing-->
		<div class="top-box">
			<img src="images/logo.png" class="logo" style="margin-top: 10px; margin-left: -90px;"> 
		</div>
		
			<!--Where the first picture is put in to display -->
				<div class="left-side">
					<div class="top-left-box"></div>
					
					<!--Where the second picture with text is. If you do not want the text to change and want a static text, please delete the script that is marked of the bottom of the HTML code-->
					
					<div class="middle-left-box">
						<!--Want more quotes? Just copy paste the p. div and it will appear in the order it is shown in this document-->
						<p class="middle-left-box-text">
						Bun venit pe acest server. Suntem aici la acest server cu nerăbdare să vă rolepam și să vă ajutăm dacă este necesar. Pentru a apela un administrator, folosiți @Call Admin din telefon si va ajunge în curând.
						</p>
						
						<p class="middle-left-box-text">
						Pentru a vă dezvolta un caracter complet, vă rugăm să vă îndrumați la discord.io/stayfrosty și veți vedea toate secțiunile de pe server.
						</p>
						
						<p class="middle-left-box-text">
						Serverul a fost infiintat in anul 2018 si de atunci a fost administrat de proprietarul original. Cu un management distinctiv și plural, el a construit 3 servere și a recrutat aproape 30 de administratori.
						</p>
						
					</div>
					
					<!--Where the third picture is put in to display -->
					<div class="bottom-left-box"></div>
				</div>
			
				<!--The rule list is here. Edit it as you wish! -->
				<div class="middle-box">
					<p class="box-title">Regulament</p>
					<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">1.</div>
						</td>
						<td style="width:85%">
							Folositi arma decat daca este necesar.
						</td>
					</table>
					<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">2.</div>
						</td>
						<td style="width:85%">
							Fail RolePlay-ul este interzis. BAN permanent!
						</td>
					</table>
					<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">3.</div>
						</td>
						<td style="width:85%">
							Folosirea HACK-urilor este interzisa. BAN permanent!
						</td>
					</table>
						<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">4.</div>
						</td>
						<td style="width:85%">
							Nu creati CLAN-uri intre playeri.
						</td>
					</table>
						<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">5.</div>
						</td>
						<td style="width:85%">
							DeathMach-ul este interzis. BAN permanent!
						</td>
					</table>
						<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">6.</div>
						</td>
						<td style="width:85%">
					     	Daca o arma este indreptata spre tine, creeaza-ti un RolePlay frumos.
						</td>
					</table>
						<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">7.</div>
						</td>
						<td style="width:85%">
							Creeaza-ti o identitate pentru a putea intra in oras.
						</td>
					</table>
					
				</div>
				
				<!--Information about the server and the connecting user is displayed here. I advise you not to touch any of the codes here as it may cause faults -->
				<div class="right-side">
					<!--The connecting users information is displayed here -->
					<div class="top-right-box">
						<div class="avatar">
						<img class='avatar-img' src="images/logo1.png"/>
						</div>
						<p class="box-title"> STAYFROSTY COMMUNITY</p>						
					</div>
					<!--The servers information such as gamemode, map and server name is displayed here-->
					<div class="bottom-right-box">
						<p class="box-title">Informatii Server</p>
						<hr class="blue-line">
						<table class="server-info-table1" style="width:100%">
							<td style="width:25%">
								<div class="server-info-icon1"><i class="fa fa-inbox"></i></div>
							</td>
							<td style="width:85%">
							<div id="server">StayFrosty Romania</div>
							</td>
						</table>
						<hr class="blue-line">
						<table class="server-info-table1" style="width:100%">
							<td style="width:25%">
								<div class="server-info-icon1"><i class="fa fa-gamepad"></i></div>
							</td>
							<td style="width:85%">
							<div id="gamemode">RolePlay Hard</div>
							</td>
						</table>
						<hr class="blue-line">
						<table class="server-info-table1" style="width:100%">
							<td style="width:25%">
								<div class="server-info-icon1"><i class="fa fa-map-marker"></i></div>
							</td>
							<td style="width:85%">
							<div id="map">Los Santos</div>
							</td>
						</table>
					</div>
				</div>
			

	</div> 
	<!--Closes our content div-->
	
	<!--We put scripts at the bottom to load the HTML faster -->
	<script type="text/javascript" src="includes/progress-bar.js"></script> <!--The script so we can have a progress bar! -->
	<script type="text/javascript" charset="utf-8"> //loading has been converted by hacker for fivem
	// Fetch information about the server, do not touch this or modify this as it tends to break otherwise //loading has been converted by hacker for fivem
	function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {  //loading has been converted by hacker for fivem
	document.getElementById("gamemode").innerHTML = gamemode; //loading has been converted by hacker for fivem
	document.getElementById("server").innerHTML = servername; //loading has been converted by hacker for fivem
	document.getElementById("map").innerHTML = mapname; //loading has been converted by hacker for fivem
	} //loading has been converted by hacker for fivem
	
	//Delete this function if you do not want the text to change and delete the p.divs (except one) and remove the "display: none;" in the middle-left-box-text style line in css/styles.css
	(function() { //loading has been converted by hacker for fivem
 //loading has been converted by hacker for fivem
    var quotes = $(".middle-left-box-text"); //loading has been converted by hacker for fivem
    var quoteIndex = -1; //loading has been converted by hacker for fivem
     //loading has been converted by hacker for fivem
    function showNextQuote() { //loading has been converted by hacker for fivem
        ++quoteIndex; //loading has been converted by hacker for fivem
        quotes.eq(quoteIndex % quotes.length) //loading has been converted by hacker for fivem
            .fadeIn(1000)//How long it will take to fade the message in //loading has been converted by hacker for fivem
            .delay(5000) //For how long the message will show //loading has been converted by hacker for fivem
            .fadeOut(1000, showNextQuote); //How long it will take for the message to fade out and then the next quote showing. //loading has been converted by hacker for fivem
    } //loading has been converted by hacker for fivem
     //loading has been converted by hacker for fivem
    showNextQuote(); //loading has been converted by hacker for fivem
     //loading has been converted by hacker for fivem
})(); //loading has been converted by hacker for fivem
 //loading has been converted by hacker for fivem
	 //loading has been converted by hacker for fivem
	</script>
</body>
