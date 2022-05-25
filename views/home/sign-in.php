<?php
$userController = new UserController;
$userController->login();
?>

<?php $title = 'Rebrancy - Se connecter'; ?>

<?php ob_start(); ?>
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="section section-sign-in">
    <div class="row">
        <div class="form_wrapper">
            <div class="form_container">
                <div class="title_container">
                    <h3>Connexion</h3>
                </div>
                <div class="row clearfix">
                    <div class="">
                        <form action="" method="post">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                <input type="email" name="email" placeholder="Adresse email" />
                            </div>
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                <input type="password" name="password" placeholder="Mot de passe" />
                            </div>
                            <input class="button" type="submit" value="Se connecter" />
                            <p class="credit">Vous n'avez pas un compte ?</p>
                            <p class="credit"><a href="sign-up-brand">S'inscrire en tant qu'une marque</a> ou <a href="sign-up-influencer">S'inscrire en tant qu'un influenceur</a></p>
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