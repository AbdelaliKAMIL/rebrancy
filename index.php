<?php

require_once './autoload.php';
require_once './controllers/HomeController.php';

$homeController = new HomeController();
$brandController = new BrandController();
$influencerController = new InfluencerController();

$homePages = ['index', 'sign-up-brand', 'sign-up-influencer', 'sign-in'];
$brandPages = ['brands'];
$influencerPages = ['influencers'];

if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $homePages)) {
        $page = $_GET['page'];
        $homeController->router($page);
    } elseif (in_array($_GET['page'], $brandPages)) {
        $page = $_GET['page'];
        $brandController->router($page);
    } elseif (in_array($_GET['page'], $influencerPages)) {
        $page = $_GET['page'];
        $influencerController->router($page);
    }
} else {
    $homeController->router('index');
}
