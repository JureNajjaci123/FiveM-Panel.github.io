<?php
	// PLEASE READ ALL COMMENTS AFTER PARAMETERS
	// PLEASE READ ALL COMMENTS AFTER PARAMETERS
	// PLEASE READ ALL COMMENTS AFTER PARAMETERS


	// DATABASE SETTINGS
	$GLOBALS['mysql_host'] = "game.vibegames.com/";										// MySQL Host
	$GLOBALS['mysql_user'] = "u55907_5OdIvODEPS";										// MySQL User
	$GLOBALS['mysql_pass'] = "B3Uf4NMtBs46u0g6Xq3zWEMe";										// MySQL Password
	$GLOBALS['mysql_db'] = "s55907_fivem";											// MySQL Database

	// CRON SETTINGS
	$GLOBALS['phpbin'] = "/opt/cpanel/ea-php72/root/usr/bin/lsphp"; 	// Used for Multithreading (Set to EXE Location for Windows) (Find Linux Bin via cPanel Info) (Defaulted to ELHostingServices)

	// SITE SETTINGS
	$GLOBALS['domainname'] = "https://FiveM-Panel.github.io/";				// URL (and folder if used) with protocol and trailing slash. Example: https://arthurmitchell.xyz/beta/
	$GLOBALS['subfolder'] = ""; 								// If accessing via a sub folder type the sub folder name out like the following: /foldername Example: /staff otherwise leave blank
	$GLOBALS['apikey'] = "";								 			// SteamCommunity API Key https://steamcommunity.com/dev/apikey
	date_default_timezone_set('America/New_York');						// Timezone (http://php.net/manual/en/timezones.php)

?>
