<?php

// Document root is dependent on the environment
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "thrones_mvc/");
define('BASE_URL', "/thrones_mvc");




header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Expires: 0"); // Proxies.
