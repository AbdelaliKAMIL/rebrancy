<?php
// Chargement des classes
require_once('../models/InfluencerManager.php');

function influencerList()
{
    $influencerManager = new InfluencerManager(); // Création d'un objet
    $influencers = $influencerManager->getInfluencers(); // Appel d'une fonction de cet objet

    require('influencer/influencerList.php');
}

function influencerTopList()
{
    $influencerManager = new InfluencerManager();
    $influencers = $influencerManager->getTopInfluencers();

    require('home/index.php');
}

function influencer()
{
    $influencerManager = new InfluencerManager();
    $influencer = $influencerManager->getInfluencerById($_GET['id']);

    require('influencer/influencerDetail.php');
}
