<?php
// Site Settings.
$settings['site'] = array
(
	"title" => "",
	"url" => ""
);

// PureEdit Settings.
$settings['pureedit'] = array
(
	"sessionKey" => "PureEditCMS1234567890",
	"rss" => "http://feeds.feedburner.com/M1k3/MichaelDick", // RSS feed to display on dashboard.	    
	"tablePrefix" => "",
    "database" => "",
	"theme" => "default", // Choose your theme.
	"lang" => "en", // Choose your language.	        
	"showId" => true, // Show id in Entryview pages.
	"centers" => array("sectors" => true, "help" => true, "accounts" => true) // List of centers to display in top right.	
);

// Columns to show on overview page. If not defined then default is to show all.
$settings['columns'] = array
(
	// "TableName"	=> "columns, to, show, but, leave, out, id"
);

// Uploads Center Settings.
$settings['uploads'] = array
(
	"directory" => "uploads/",
	"folders" => array("Images" => "images", "Miscellaneous" => "misc") // "Category Title" => "FolderName"
);

// Database settings.
$settings['database'] = array
(
	"databaseHost" => "",
	"databaseUsername" => "",
	"databasePassword" => "",
	"databaseName" => ""
);
?>