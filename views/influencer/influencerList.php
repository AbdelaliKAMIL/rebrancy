<!-- On appelle la fonction ob_start() qui "mémorise" toute la sortie HTML qui suit,
puis, à la fin, on récupère le contenu généré avec ob_get_clean(),
et on met le tout dans $content -->

<?php $title = 'Liste des influencers'; ?>

<?php ob_start(); ?>
<?php require('../header.php'); ?>
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<section>
    <div>
        <h1>List of influencers</h1>
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
<?php require('../footer.php'); ?>
<?php $footer = ob_get_clean(); ?>


<?php require('../template.php'); ?>