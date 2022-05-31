<?php
$userController = new UserController;
$userID = $_SESSION['userID'];
$userRole = $userController->getUserRole($userID);
?>
<header class="header">
    <nav class="nav">
        <div class="row">
            <div class="logo">
                <a href="index"><img src="/rebrancy/public/img/RebrancyYellow.png" alt="Rebrancy Logo"></a>
            </div>
            <ul class="main-nav">
                <li><a class="nav-link" href="brands">Marques</a></li>
                <li><a class="nav-link" href="influencers">Influenceurs</a></li>
                <li><a class="nav-link" href="partnerships">Partenariat</a></li>
                <?php if (!isset($_SESSION['userID'])) : ?>
                    <li class="nav-item sign-in"><a class="nav-link" href="sign-in">Se connecter</a></li>
                    <li class="nav-item sign-up"><a class="nav-link" href="#">S'inscrire</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['userID']) && $userRole == 'BRAND') : ?>
                    <li><a class="nav-link" href="brand-profile">Mon Profil</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['userID']) && $userRole == 'INFLUENCER') : ?>
                    <li><a class="nav-link" href="influencer-profile">Mon Profil</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['userID'])) : ?>
                    <li class="nav-item sign-in ml-30"><a class="nav-link" href="logout">Déconnecter</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>