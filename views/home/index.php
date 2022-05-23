<?php
require_once '../../controllers/BrandController.php';
$brandController = new BrandController;
$brands = $brandController->getFewBrands();
?>

<?php $title = 'Rebrancy Home'; ?>

<?php ob_start(); ?>
<?php require('../header.php'); ?>
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="section intro">
    <div class="row">
        <div class="col span-2-of-2">
            <div class="hero-text-box">
                <h1 style="margin-bottom: 4rem; color: white">Un écosystème où les marques et les influenceurs se rencontrent</h1>
                <a class="btn btn-lg-light" href="#">Je suis une marque</a>
                <a class="btn btn-lg-secondary ml-5" href="#">Je suis un influenceur</a>
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
                    <a class="btn btn-lg-secondary" href="#">Commencer maintenant</a>
                </div>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870" alt="About Image">
            </div>
        </div>
    </div>
</section>
<section class="section top-brands">
    <div class="row">
        <div class="col span-2-of-2 text-center">
            <h2 class="text-secondary">Connect with brands</h2>
            <h5 class="section-subtitle text-white">Rebrancy's platform helps influencers connect with brands for free products, sponsorships, paid campaigns, and more.</p>
        </div>
    </div>
    <div class="row">
        <div class="col span-2-of-2">
            <ul class="cards">
                <?php foreach ($brands as $brand) : ?>
                    <li>
                        <a href="" class="card">
                            <img src="<?php echo $brand['image']; ?>" class="card__image" alt="" />
                            <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                        <path />
                                    </svg>
                                    <img class="card__thumb" src="<?php echo $brand['logo']; ?>" alt="" />
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
            <a class="btn btn-light" href="../brand/brandList.php?action=showBrands">Voir plus</a>
        </div>
    </div>
</section>
<section class="section top-influencers">
    <div class="row">
        <div class="col span-2-of-2 text-center">
            <h2 class="text-primary">Connect with influencers</h2>
            <h5 class="section-subtitle">Outreach influencers to develop credibility and raise awareness for your brand or product</p>
        </div>
    </div>
    <div class="row">
        <div class="col span-2-of-2">
            <div class="box-influencers">
                <div class="card-influencer">
                    <div class="influencer-photo">
                        <img src="https://images.unsplash.com/photo-1532123675048-773bd75df1b4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
                    </div>
                    <div class="influencer-details">
                        <h5 class="text-primary">SomeOne Famous<br><span>Digital Marketing Creator</span></h5>
                    </div>
                </div>
                <div class="card-influencer">
                    <div class="influencer-photo">
                        <img src="https://images.unsplash.com/photo-1549417229-aa67d3263c09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
                    </div>
                    <div class="influencer-details">
                        <h2>SomeOne Famous<br><span>Producer</span></h2>
                    </div>
                </div>
                <div class="card-influencer">
                    <div class="influencer-photo">
                        <img src="https://images.unsplash.com/photo-1548094878-84ced0f6896d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
                    </div>
                    <div class="influencer-details">
                        <h2>SomeOne Famous<br><span>Actor</span></h2>
                    </div>
                </div>
                <div class="card-influencer">
                    <div class="influencer-photo">
                        <img src="https://images.unsplash.com/photo-1532123675048-773bd75df1b4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
                    </div>
                    <div class="influencer-details">
                        <h2>SomeOne Famous<br><span>Director</span></h2>
                    </div>
                </div>
                <div class="card-influencer">
                    <div class="influencer-photo">
                        <img src="https://images.unsplash.com/photo-1549417229-aa67d3263c09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
                    </div>
                    <div class="influencer-details">
                        <h2>SomeOne Famous<br><span>Producer</span></h2>
                    </div>
                </div>
                <div class="card-influencer">
                    <div class="influencer-photo">
                        <img src="https://images.unsplash.com/photo-1548094878-84ced0f6896d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
                    </div>
                    <div class="influencer-details">
                        <h2>SomeOne Famous<br><span>Actor</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col span-2-of-2 text-center">
                <a class="btn btn-secondary" href="../brand/brandList.php?action=showInfluencers">Voir plus</a>
            </div>
        </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
<?php require('../footer.php'); ?>
<?php $footer = ob_get_clean(); ?>


<?php require('../template.php'); ?>