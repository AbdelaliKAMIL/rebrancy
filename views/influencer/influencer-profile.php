<?php
$userID = $_SESSION['userID'];
$influencerController = new InfluencerController;
$influencer = $influencerController->getInfluencer($userID);
?>

<?php $title = 'Rebrancy - Soukaina Abouzine'; ?>

<?php ob_start(); ?>
<?php require('./views/header.php'); ?>
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="section influencer-profile-intro">
    <div class="row">
        <div class="col span-2-of-2">
            <div class="hero-text-box">
                <div class="influencer-profile">
                    <div class="influencer-profile-photo">
                        <img src="public/img/influencers/<?php echo $influencer->photo; ?>" alt="Influencer Photo">
                    </div>
                </div>
                <h5 class="text-white mt-5"><?php echo $influencer->firstname . ' ' . $influencer->lastname; ?><h5>
                        <h6 class="text-secondary"><?php echo $influencer->function; ?><h6>
                                <p class="influencer-profile-about">La plate-forme de Rebrancy aide les influenceurs à se connecter avec les marques pour des produits gratuits, des parrainages, des campagnes payantes, etc.</p>
                                <a class="btn btn-light mt-5" href="#top-brands">Edit Profile</a>
                                <a class="btn btn-secondary mt-5" href="#top-brands">Message</a>
            </div>
        </div>
    </div>
</section>
<section class="profile-section">
    <div class="">
        <div class="profile-body-container">
            <div class="profile-sidebar">
                <ul class="sidebar-list">
                    <li class="sidebar-item"><button class="sidebar-link" onclick="openTab('profile')">Mon profil</button></li>
                    <li class="sidebar-item"><button class="sidebar-link" onclick="openTab('messenger')">Messagerie</button></li>
                    <li class="sidebar-item"><button class="sidebar-link" onclick="openTab('partnership')">Partenariat</button></li>
                    <li class="sidebar-item"><button class="sidebar-link" onclick="openTab('dashboard')">Tableaux de bord</button></li>
                </ul>
            </div>
            <div id="profile" class="profile-content tab inactive">
                <form action="" method="post">
                    <div class="">
                        <h5 class="profile-title mb-20">Informations de base</h5>
                    </div>
                    <div class="form-group">
                        <div><label class="form-label">Prénom</label></div>
                        <div>
                            <input class="form-input" type="text" name="firstname" placeholder="Prénom" value="<?php echo $influencer->firstname; ?>" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div><label class="form-label">Nom</label></div>
                        <div>
                            <input class="form-input" type="text" name="lastname" placeholder="Nom" value="<?php echo $influencer->lastname; ?>" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div><label class="form-label">Surnom</label></div>
                        <div>
                            <input class="form-input" type="text" name="nickname" placeholder="Surnom" value="<?php echo $influencer->nickname; ?>" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div><label class="form-label">Age</label></div>
                        <div>
                            <input class="form-input" type="number" name="age" placeholder="Age" value="<?php echo $influencer->age; ?>" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div><label class="form-label">Fonction</label></div>
                        <div>
                            <input class="form-input" type="text" name="function" placeholder="Fonction" value="<?php echo $influencer->function; ?>" required />
                        </div>
                    </div>
                    <h5 class="profile-title mt-30 mb-20">Réseaux sociaux</h5>
                    <div class="form-group">
                        <div><label class="form-label">Facebook</label></div>
                        <div>
                            <input class="form-input" type="text" name="facebook" placeholder="Facebook" value="<?php echo $influencer->facebook; ?>" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div><label class="form-label">Instagram</label></div>
                        <div>
                            <input class="form-input" type="text" name="instagram" placeholder="Instagram" value="<?php echo $influencer->instagram; ?>" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div><label class="form-label">Youtube</label></div>
                        <div>
                            <input class="form-input" type="text" name="youtube" placeholder="Youtube" value="<?php echo $influencer->youtube; ?>" required />
                        </div>
                    </div>
                    <div class="form-group mb-30">
                        <div><label class="form-label">Snapchat</label></div>
                        <div>
                            <input class="form-input" type="text" name="snapchat" placeholder="Snapchat" value="<?php echo $influencer->snapchat; ?>" required />
                        </div>
                    </div>
                    <h5 class="profile-title mt-30 mb-20">Informations de connexion</h5>
                    <div class="form-group mb-30">
                        <div><label class="form-label">Email</label></div>
                        <div>
                            <input class="form-input" type="email" name="email" placeholder="Email" value="<?php echo $influencer->snapchat; ?>" required />
                        </div>
                    </div>
                    <div class="form-group mb-30">
                        <div><label class="form-label"></label></div>
                        <div>
                            <a class="change-password-link" href="change-password">Changer mot de passe ?</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-secondary mt-30 mb-20" type="submit" href="sign-up-influencer">Modifier</button>
                    </div>
                </form>
            </div>
            <div id="messenger" class="profile-content tab inactive">
                <div class="">
                    <div>
                        <h5 class="profile-title mb-20">Messagerie</h5>
                    </div>
                </div>
            </div>
            <div id="partnership" class="profile-content tab inactive">
                <div class="">
                    <div>
                        <h5 class="profile-title mb-20">Mes partenariats</h5>
                    </div>
                    <div class="profile-table">
                        <button>Ajouter un partenariat</button>
                        <table>
                            <tr>
                                <th>Code Partenariat</th>
                                <th>Marque</th>
                                <th>Termes de l'accord</th>
                                <th>Montant Versé (MAD)</th>
                                <th>Durée du contract (mois)</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Coca-Cola</td>
                                <td>Peter</td>
                                <td>400000</td>
                                <td>24</td>
                                <td>24</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div id="dashboard" class="profile-content tab">
                <div>
                    <h5 class="profile-title mb-20">Mes indicateurs</h5>
                </div>
                <div class="profile-indicators">
                    <div class="indicator-card">
                        <div class="indicator-content">
                            <h6 class="text-primary">Nombre Total de partenariats<h6>
                                    <p>3</p>
                        </div>
                    </div>
                    <div class=" indicator-card">CARD 2</div>
                    <div class="indicator-card">CARD 3</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
<?php require('./views/footer.php'); ?>
<script>
    var x = document.getElementsByClassName("inactive");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    function openTab(section) {
        var i;
        var x = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(section).style.display = "block";
    }
</script>
<?php $footer = ob_get_clean(); ?>

<?php require('./views/template.php'); ?>