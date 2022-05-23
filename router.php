<?php
require_once './autoload.php';
require_once './controllers/HomeController.php';

$homeController = new HomeController;

if (isset($_GET['action'])) {
    true;
} else {
    $homeController->homepage();
}
