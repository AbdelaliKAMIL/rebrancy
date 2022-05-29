<?php
$influencerController = new InfluencerController;
$influencerController->addInfluencer();
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
                    <h3>Inscription de l'influenceur</h3>
                </div>
                <div class="row clearfix">
                    <div class="">
                        <form action="" method="post">
                            <div class="row clearfix">
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" name="firstname" placeholder="Prénom" required />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" name="lastname" placeholder="Nom" required />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" name="nickname" placeholder="Surnom" required />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="number" name="age" placeholder="Age" required />
                                    </div>
                                </div>
                            </div>
                            <div class="input_field"><span><i aria-hidden="true" class="fa fa-facebook"></i></span>
                                <input type="text" name="function" placeholder="Fonction" required />
                            </div>
                            <div class="row clearfix">
                                <div class="col_half">
                                    <div class="input_field"><span><i aria-hidden="true" class="fa fa-facebook"></i></span>
                                        <input type="text" name="facebook" placeholder="Facebook" required />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"><span><i aria-hidden="true" class="fa fa-instagram"></i></span>
                                        <input type="text" name="instagram" placeholder="Instagram" required />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"><span><i aria-hidden="true" class="fa fa-youtube"></i></span>
                                        <input type="text" name="youtube" placeholder="Youtube" required />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"><span><i aria-hidden="true" class="fa fa-snapchat"></i></span>
                                        <input type="text" name="snapchat" placeholder="Snapchat" required />
                                    </div>
                                </div>
                            </div>
                            <div class="input_field"><span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                <input type="email" name="email" placeholder="Adresse email" required />
                            </div>
                            <div class="input_field"><span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                <input type="password" name="password" placeholder="Mot de passe" required />
                            </div>
                            <div class="input_field"><span><i aria-hidden="true" class="fa fa-lock"></i></span>
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