<?php
$brandController = new BrandController;
$brandController->addBrand();
?>

<?php $title = "Rebrancy - S'inscrire"; ?>

<?php ob_start(); ?>
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="section section-sign-up">
    <div class="row">
        <div class="form_wrapper">
            <div class="form_container">
                <div class="title_container">
                    <h3>Inscription de la marque</h3>
                </div>
                <div class="row clearfix">
                    <div class="">
                        <form action="" method="post">
                            <div class="input_field"><span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" name="name" placeholder="Nom de la marque" required />
                            </div>
                            <div class="row clearfix">
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" name="industry" placeholder="Industrie de la marque" required />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="number" name="turnover" placeholder="Turnover" required />
                                    </div>
                                </div>
                            </div>
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                <textarea name="description" rows="4" style="width: 100%" placeholder="Décrire votre marque ici ..." required></textarea>
                            </div>
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                <input type="email" name="email" placeholder="Adresse email" required />
                            </div>
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                <input type="password" name="password" placeholder="Mot de passe" required />
                            </div>
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                <input type="password" name="confirmPassword" placeholder="Confirmer mot de passe" required />
                            </div>

                            <input class="button" type="submit" value="S'inscrire" />
                            <p class="credit">Vous avez déja un compte ? <a href="sign-in">Se connecter</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
<?php $footer = ob_get_clean(); ?>

<?php require('./views/template.php'); ?>