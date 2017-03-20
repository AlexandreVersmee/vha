<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include 'includes/metas.php' ?>

    <title>Assurance Versmée & Hautcoeur Valenciennes</title>

	<?php include 'includes/styles.php' ?>

    <link rel="stylesheet" href="styles/css/devis.css">
	<?php $code_agence_valenciennes = "h98069" ;
	$Allianz_path_devis = "https://www.allianz.fr/monagence.html?codeAgence=".$code_agence_valenciennes."&urlRedirect=https://www.allianz.fr"; ?>
</head>
<body>

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- OFF-CANVAS DISPLAY ON MOBILE -->

		<?php include 'includes/off-canvas.php' ?>

        <!-- CONTENT OF WEBPAGE -->
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-medium">
                <div class="title-bar-left">
                    <button class="menu-icon-style" type="button" data-open="offCanvas" aria-expanded="false" aria-controls="offCanvas">
                        <i class="fa fa-navicon title-bar__icon"></i>
                    </button>
                </div>
            </div>

			<?php include 'includes/header.php' ?>

			<?php include 'includes/contactInformations.php' ?>

            <!-- CONTENU PRINCIPAL -->
            <main>
                <div class="row"><div class="small-12 columns"><?php include 'includes/send_email.php' ?></div></div>

                <div class="row">
                    <div class="large-12 columns page-title">
                        <h1><span>Devis en ligne</span></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns content">
                        <!-- COLONNE DE GAUCHE -->
                        <div class="small-12 large-6 columns">
                            <div class="row">
                                <div class="small-12 medium-6 columns devis-image-block">
										<a href="<?php echo $Allianz_path_devis.'/devis-rapide-auto' ?>" target="_blank">
                                        <img class="thumbnail" src="images/famille.jpg"/>
                                        <div class="devis-text-block text-center">
                                            <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="small-12 medium-6 columns devis-image-block">
										<a href="<?php echo $Allianz_path_devis.'/tarif-express-habitation' ?>" target="_blank">
                                        <img class="thumbnail" src="https://placehold.it/2000x2000&text=Image"/>
                                        <div class="devis-text-block text-center">
                                            <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 medium-6 columns devis-image-block">
                                    	<a href="<?php echo $Allianz_path_devis.'/redirect/tarif-sante.html' ?>" target="_blank">
                                        <img class="thumbnail" src="https://placehold.it/2000x2000&text=Image"/>
                                        <div class="devis-text-block text-center">
                                            <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="small-12 medium-6 columns devis-image-block">
                                    <a href="<?php echo $Allianz_path_devis.'/simulateurs/simulateur-aae//' ?>" target="_blank">
                                        <img class="thumbnail" src="https://placehold.it/2000x2000&text=Image"/>
                                        <div class="devis-text-block text-center">
                                            <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- COLONNE DE DROITE -->
                        <div class="small-12 large-6 columns">

                            <div class="small-offset-2 small-8 hide-for-large"><hr></div>

                            <h3 class="text-center">Demande d'informations</h3><br/>

                            <form method="post" action="devis_en_ligne.php">
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label for="nom">Nom <span class="required-input">&#42;</span></label>
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" name="nom" id="nom" aria-label="Nom"
                                                   placeholder="Veuillez saisir votre nom" pattern=".{2,}" title="Deux caractéres minimum" required>
                                            <span class="input-group-label"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label for="email">Adresse email</label>
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" name="email" id="email" aria-label="Adresse Email"
                                                   placeholder="Veuillez saisir votre adresse email">
                                            <span class="input-group-label"><i class="fa fa-at"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label for="tel">Numéro de téléphone <span class="required-input">&#42;</span></label>
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" name="tel" id="tel" aria-label="Numéro de téléphone"
                                                   placeholder="Veuillez saisir votre numéro de téléphone"
                                                   title="Uniquement 10 chiffres de 0 à 9 sont admis." pattern="[0-9]{10}" required>
                                            <span class="input-group-label"><i class="fa fa-phone"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label>Description
                                            <textarea name="message" placeholder="Décrivez votre besoin" rows="5"></textarea>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns text-right">
                                        <button type="submit" class="button">
                                            <i class="fa fa-send fa-padding"></i> Rappelez moi
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </main>

			<?php include 'includes/footer.php' ?>
        </div>
    </div>
</div>
<script></script>

<!-- SCRIPTS -->
<?php include 'includes/scripts.php' ?>
<script src="scripts/devis.js"></script>

</body>
</html>