<?php
$brandController = new BrandController;
$brand = $brandController->getBrand(1);
?>

<?php $title = 'Rebrancy - Soukaina Abouzine'; ?>

<?php ob_start(); ?>
<?php require('./views/header.php'); ?>
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="section brand-profile-intro">
    <div class="row">
        <div class="col span-2-of-2">
            <div class="hero-text-box">
                <h3 style="margin-bottom: 4rem; color: white">La plate-forme de Rebrancy aide les influenceurs à se connecter avec les marques pour des produits gratuits, des parrainages, des campagnes payantes, etc.</h3>
                <a class="btn btn-lg-secondary" href="#top-brands">Connectez-vous avec les marques</a>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
<?php require('./views/footer.php'); ?>
<?php $footer = ob_get_clean(); ?>

<?php require('./views/template.php'); ?>