<?php
// Chargement des classes
require_once('../models/BrandManager.php');

function showBrands()
{
    $brandManager = new BrandManager(); // Création d'un objet
    $brands = $brandManager->getBrands(); // Appel d'une fonction de cet objet

    require('brand/brandList.php');
}

function brandTopList()
{
    $brandManager = new BrandManager();
    $brands = $brandManager->getTopBrands();

    require('home/index.php');
}

function brand()
{
    $brandManager = new BrandManager();
    $brand = $brandManager->getBrandById($_GET['id']);

    require('brand/brandDetail.php');
}
