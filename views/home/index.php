<?php
$brandController = new BrandController;
$influencerController = new InfluencerController;
$brands = $brandController->getFewBrands();
$influencers = $influencerController->getFewInfluencers();
?>

<?php $title = 'Rebrancy Home'; ?>

<?php ob_start(); ?>
<?php require('./views/header.php'); ?>
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="section intro">
    <div class="row">
        <div class="col span-2-of-2">
            <div class="hero-text-box">
                <h1 style="margin-bottom: 4rem; color: white">Un écosystème où les marques et les influenceurs se rencontrent</h1>
                <a class="btn btn-lg-light" href="sign-up-brand">Je suis une marque</a>
                <a class="btn btn-lg-secondary ml-5" href="sign-up-influencer">Je suis un influenceur</a>
            </div>
        </div>
    </div>
</section>
<section class="section about">
    <div class="row">
        <div class="about-container">
            <div class="about-text">
                <h2 class="text-primary">Collaborez avec les meilleures marques</h2>
                <p>Rebrancy aide les influenceurs Instagram et YouTube à s'associer avec des marques leaders pour recevoir des produits gratuits en échange d'un contenu authentique.</p>
                <div class="about-btn">
                    <a class="btn btn-lg-secondary" href="#top-brands">Commencer maintenant</a>
                </div>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870" alt="About Image">
            </div>
        </div>
    </div>
</section>
<section id="top-brands" class="section top-brands">
    <div class="row">
        <div class="col span-2-of-2 text-center">
            <h2 class="text-secondary">Connectez-vous aves les marques</h2>
            <h5 class="section-subtitle text-white">La plate-forme de Rebrancy aide les influenceurs à se connecter avec les marques pour des produits gratuits, des parrainages, des campagnes payantes, etc.</p>
        </div>
    </div>
    <div class="row">
        <div class="col span-2-of-2">
            <ul class="cards">
                <?php foreach ($brands as $brand) : ?>
                    <li>
                        <a href="" class="card">
                            <img src="public/img/brands/<?php echo $brand['image']; ?>" class="card__image" alt="" />
                            <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                        <path />
                                    </svg>
                                    <img class="card__thumb" src="public/img/brands/<?php echo $brand['logo']; ?>" alt="" />
                                    <div class="card__header-text">
                                        <h5 class="card__title"><?php echo $brand['name']; ?></h5>
                                        <span class="card__status"><?php echo $brand['industry']; ?></span>
                                    </div>
                                </div>
                                <p class="card__description"><?php echo $brand['description']; ?></p>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col span-2-of-2 text-center">
            <a class="btn btn-light" href="brands">Voir plus</a>
        </div>
    </div>
</section>
<section class="section top-influencers">
    <div class="row">
        <div class="col span-2-of-2 text-center">
            <h2 class="text-primary">Connectez-vous avec les influenceurs</h2>
            <h5 class="section-subtitle">Communiquez avec des influenceurs pour développer votre crédibilité et faire connaître votre marque ou votre produit</p>
        </div>
    </div>
    <div class="row">
        <div class="col span-2-of-2">
            <div class="box-influencers">
                <?php foreach ($influencers as $influencer) : ?>
                    <div class="card-influencer">
                        <div class="influencer-photo">
                            <img src="public/img/influencers/<?php echo $influencer['photo']; ?>" alt="Influencer Photo">
                        </div>
                        <div class="influencer-details">
                            <h5 class="text-primary"><?php echo $influencer['firstname'] . ' ' . $influencer['lastname']; ?><br><span><?php echo $influencer['function']; ?></span></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <div class="col span-2-of-2 text-center">
                <a class="btn btn-secondary" href="<?php echo 'http://localhost/rebrancy/'; ?>influencers">Voir plus</a>
            </div>
        </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
<?php require('./views/footer.php'); ?>
<?php $footer = ob_get_clean(); ?>


<?php require('./views/template.php'); ?>