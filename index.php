<?php

require_once './autoload.php';
require_once './controllers/HomeController.php';

$homeController = new HomeController();
$pages = ['index', 'sign-up-brand', 'sign-up-influencer'];

if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {
        $page = $_GET['page'];
        $homeController->index($page);
    }
} else {
    $homeController->index('index');
}
