
<?php
require_once './vendor/autoload.php';
include("app/classes/AutoCreateDB.php");
use App\classes\HomeController;
use App\classes\BlogController;

$home = new HomeController();
$home->index();

