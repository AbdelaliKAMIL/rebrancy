<?php $title = 'Rebrancy - Sign up'; ?>

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
                        <form action="../php/register.php" method="post">
                            <div class="input_field"><span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" name="name" placeholder="Nom de la marque" />
                            </div>
                            <div class="row clearfix">
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" name="indsutry" placeholder="Industrie de la marque" />
                                    </div>
                                </div>
                                <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="number" name="turnover" placeholder="Turnover" />
                                    </div>
                                </div>
                            </div>
                            <div class="textarea_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                <textarea name="description" rows="4" style="width: 100%" placeholder="Décrire votre marque ici ..."></textarea>
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