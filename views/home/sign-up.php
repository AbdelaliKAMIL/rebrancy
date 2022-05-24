<?php $title = 'Rebrancy - Sign up'; ?>

<?php ob_start(); ?>
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="section section-sign-up">
    <div class="row">
        <div class="form_wrapper">
            <div class="form_container">
                <div class="title_container">
                    <h3>Inscription d'influenceur</h3>
                </div>
                <div class="row clearfix">
                    <div class="">
                        <form action="../php/register.php" method="post">
                            <div class="row clearfix">
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" name="firstname" placeholder="Prénom" />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" name="lastname" placeholder="Nom" />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" name="nickname" placeholder="Nickname" />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="number" name="age" placeholder="Age" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-facebook"></i></span>
                                        <input type="text" name="facebook" placeholder="Votre Facebook" />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-instagram"></i></span>
                                        <input type="text" name="instagram" placeholder="Votre Instagram" />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-youtube"></i></span>
                                        <input type="text" name="youtube" placeholder="Votre Youtube" />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-snapchat"></i></span>
                                        <input type="text" name="snapchat" placeholder="Votre Snapchat" />
                                    </div>
                                </div>
                            </div>
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                <input type="email" name="email" placeholder="Adresse email" />
                            </div>
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                <input type="password" name="password" placeholder="Mot de passe" />
                            </div>
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                <input type="password" name="confirmPassword" placeholder="Confirmer mot de passe" />
                            </div>

                            <input class="button" type="submit" value="S'inscrire" />
                            <p class="credit">Vous avez déja un compte ? <a href="#" target="_blank">Se connecter</a></p>
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