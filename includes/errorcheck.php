<?php $loadingurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(!isset($_GET['steamid'])){ 
die ("<h1>Something went wrong, read below to solve it</h1>It seems as if you have not correctly done the URL so the loading screen would work. Have you read the guide? I take it you have not! Please choose one of the following options<br><br>

     Either you can test the loading screen with my steamID. This will make sure that your loadings screen is configured correctly. <br>
	 But do note that <i>server name, server map</i> and <i>server gamemode</i> will not be shown as that is shown when the user is loading with javascript: <a href='$loadingurl?steamid=76561198051229287'>$loadingurl?steamid=76561198051229287</a><br><br>
	 
	 If you instead want to get the link to put in your server.cfg, then choose this link. The %s is the steamID of the connecting user and ?steamid is the function to fetch this steamID: <a href='$loadingurl?steamid=%s'>$loadingurl?steamid=%s</a><br><br>
	 
	 <i>If you got further problems, read the guide and if you still have problem please contact me on <a href='http://steamcommunity.com/id/floodify/'>Steam</a>.</i>");} ?>