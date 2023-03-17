<?php
    // Database Informationm NEEDS to be set.
    $dbHost = "CHANGEME";
    $dbUser = "CHANGEME";
    $dbPass = "CHANGEME";
    $dbName = "CHANGEME";
	
	// General settings
	$anonName = "Anonymous";
	
	// DO NOT TOUCH ANY OF THIS
	$db = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
	
	if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
      } 
?>