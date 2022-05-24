<?php
$brandController = new BrandController;
$brands = $brandController->getAllBrands();
?>
<?php $title = 'Rebrancy - Liste des marques'; ?>

<?php ob_start(); ?>
<?php require('./views/header.php'); ?>
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="section brands-intro">
    <div class="row">
        <div class="col span-2-of-2">
            <div class="hero-text-box">
                <h3 style="margin-bottom: 4rem; color: white">La plate-forme de Rebrancy aide les influenceurs à se connecter avec les marques pour des produits gratuits, des parrainages, des campagnes payantes, etc.</h3>
                <a class="btn btn-lg-secondary" href="#top-brands">Connectez-vous avec les marques</a>
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
                <img src="https://images.unsplash.com/photo-1621690260995-13b89b66bb3f?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGJyYW5kfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=600" alt="About Brands">
            </div>
        </div>
    </div>
</section>
<section id="top-brands" class="section top-brands">
    <div class="row">
        <div class="col span-2-of-2 text-center">
            <h2 class="text-secondary">Liste des marques</h2>
            <h5 class="section-subtitle text-white">Rebrancy's platform helps influencers connect with brands for free products, sponsorships, paid campaigns, and more.</p>
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
</section>

<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
<?php require('./views/footer.php'); ?>
<?php $footer = ob_get_clean(); ?>

<?php require('./views/template.php'); ?>