<?php
ob_start();
session_start();
defined("DS")? null:define("DS", DIRECTORY_SEPARATOR);
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT",__DIR__.DS."templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK",__DIR__.DS."templates/back");

defined("DB_HOST")? null:define("DB_HOST", "localhost");
defined("DB_USER")? null:define("DB_USER", "root");
defined("DB_PASSWORD")? null:define("DB_PASSWORD", "");
defined("DB_NAME")? null:define("DB_NAME", "student");
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
require("function.php");
?>