<?php
$influencerController = new InfluencerController;
$influencers = $influencerController->getAllInfluencers();
?>

<?php $title = 'Rebrancy - Liste des influenceurs'; ?>

<?php ob_start(); ?>
<?php require('./views/header.php'); ?>
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="section influencers-intro">
    <div class="row">
        <div class="col span-2-of-2">
            <div class="hero-text-box">
                <h3 style="margin-bottom: 4rem; color: white">Communiquez avec des influenceurs pour développer votre crédibilité et faire connaître votre marque ou votre produit</h3>
                <a class="btn btn-lg-secondary" href="#top-influencers">Connectez-vous avec les influenceurs</a>
            </div>
        </div>
    </div>
</section>
<section class="section about-influencers">
    <div class="row">
        <div class="about-container">
            <div class="about-text">
                <h2 class="text-primary">Collaborez avec les meilleures influenceurs</h2>
                <p>Rebrancy aide les influenceurs Instagram et YouTube à s'associer avec des marques leaders pour recevoir des produits gratuits en échange d'un contenu authentique.</p>
                <div class="about-btn">
                    <a class="btn btn-lg-secondary" href="#top-influencers">Commencer maintenant</a>
                </div>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774" alt="About Influencers">
            </div>
        </div>
    </div>
</section>
<section class="section top-influencers">
    <div class="row">
        <div class="col span-2-of-2 text-center">
            <h2 class="text-primary">Liste des influenceurs</h2>
            <h5 class="section-subtitle">Outreach influencers to develop credibility and raise awareness for your brand or product</p>
        </div>
    </div>
    <div class="row">
        <div class="col span-2-of-2">
            <div class="box-influencers">
                <?php foreach ($influencers as $influencer) : ?>
                    <a href="influencer-profile?id=<?php echo $influencer['id'];?>">
                        <div class="card-influencer">
                            <div class="influencer-photo">
                                <img src="public/img/influencers/<?php echo $influencer['photo']; ?>" alt="Influencer Photo">
                            </div>
                            <div class="influencer-details">
                                <h5 class="text-primary"><?php echo $influencer['firstname'] . ' ' . $influencer['lastname']; ?><br><span><?php echo $influencer['function']; ?></span></h5>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
<?php require('./views/footer.php'); ?>
<?php $footer = ob_get_clean(); ?>

<?php require('./views/template.php'); ?>