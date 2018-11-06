<?php
// Include the configuration file
require __DIR__ . "/config.php";
// Include essential functions
require __DIR__ . "/src/functions.php";
// Set common variables, these are exposed to the view template files
$title = "Min me-sida" . $baseTitle;
// Include the page header through the view template file
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/me.php";
require __DIR__ . "/view/footer.php";
