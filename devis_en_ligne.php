<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include 'includes/metas.php' ?>

    <title>Assurance Versmée & Hautcoeur Valenciennes</title>

	<?php include 'includes/styles.php' ?>

    <link rel="stylesheet" href="styles/css/devis.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<?php $code_agence_valenciennes = "h98069" ;
	$Allianz_path_devis = "https://www.allianz.fr/monagence.html?codeAgence=".$code_agence_valenciennes."&urlRedirect=https://www.allianz.fr"; ?>
    <!--https://www.allianz.fr/monagence.html?codeAgence=h98069&urlRedirect=https://www.allianz.fr//devis-rapide-auto-->
</head>
<body>

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- OFF-CANVAS DISPLAY ON MOBILE -->

		<?php include 'partial/off-canvas.php' ?>

        <!-- CONTENT OF WEBPAGE -->
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-medium">
                <div class="title-bar-left">
                    <button class="menu-icon-style" type="button" data-open="offCanvas" aria-expanded="false" aria-controls="offCanvas">
                        <i class="fa fa-navicon title-bar__icon"></i>
                    </button>
                </div>
            </div>

			<?php include 'partial/header.php' ?>

			<?php include 'partial/contactInformations.php' ?>

            <!-- CONTENU PRINCIPAL -->
            <main>
                <div class="row"><?php include 'scripts-php/send_email.php' ?></div>

                <div class="row">
                    <div class="small-12 columns page-title">
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

                            <form method="post" action="devis_en_ligne.php" data-abide novalidate>
                                <div data-abide-error class="alert callout" style="display: none;">
                                    <p>
                                        <i class="fi-alert"></i>
                                        Le formulaire est incorrect. Verifiez que vous avez bien rempli les champs
                                        obligatoires (<span class="required-input">&#42;</span>).
                                    </p>
                                </div>

                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label>Nom <span class="required-input">&#42;</span>
                                            <div class="input-group">
                                                <input class="input-group-field" type="text" name="nom" aria-label="Nom" aria-describedby="HelpName"
                                                       placeholder="Veuillez saisir votre nom" pattern=".{2,}" title="Deux caractéres minimum" required>
                                                <span class="input-group-label"><i class="fa fa-user"></i></span>

                                                <span class="input-group-error">
                                                    <span class="input-group-cell"><span class="form-error">Le champs doit contenir au moins 2 caractères.</span></span>
                                                    <span class="input-group-cell"></span>
                                                </span>
                                            </div>
                                        </label>
                                        <p class="help-text hide" id="HelpName">Champs du formulaire dans lequel vous devez saisir votre nom</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label>Adresse email
                                            <div class="input-group">
                                                <input class="input-group-field" type="text" name="email" aria-label="Adresse Email" aria-describedby="HelpEmail"
                                                       placeholder="Veuillez saisir votre adresse email">
                                                <span class="input-group-label"><i class="fa fa-at"></i></span>
                                            </div>
                                        </label>
                                        <p class="help-text hide" id="HelpEmail">Champs du formulaire dans lequel vous devez saisir votre adresse email</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label>Numéro de téléphone <span class="required-input">&#42;</span>
                                            <div class="input-group">
                                                <input class="input-group-field" type="text" name="tel" aria-label="Numéro de téléphone" aria-describedby="HelpPhone"
                                                       placeholder="Veuillez saisir votre numéro de téléphone" title="Uniquement 10 chiffres de 0 à 9 sont admis."
                                                       pattern="number" required>
                                                <span class="input-group-label"><i class="fa fa-phone"></i></span>

                                                <span class="input-group-error">
                                                    <span class="input-group-cell"><span class="form-error">Le champs doit contenir un numéro de télèphone valide.</span></span>
                                                    <span class="input-group-cell"></span>
                                                </span>
                                            </div>
                                        </label>
                                        <p class="help-text hide" id="HelpEmail">Champs du formulaire dans lequel vous devez saisir votre numéro de télèphone</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label>Description
                                            <textarea name="message" aria-label="Description" aria-describedby="HelpDescription"
                                                      placeholder="Décrivez votre besoin" rows="5"></textarea>
                                        </label>
                                        <p class="help-text hide" id="HelpDescription">
                                            Champs du formulaire dans lequel vous devez pouvez expliquer ce pourquoi vous voulez être rappelé.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <div class="g-recaptcha" data-sitekey="6LeEQBoUAAAAALEmtZ0saUr11Wj5m1HfQuosOJx1"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns text-right">
                                        <button type="submit" class="button" aria-label="Demander à être rappelé">
                                            <i class="fa fa-send fa-padding"></i> Appelez moi
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </main>

			<?php include 'partial/footer.php' ?>
        </div>
    </div>
</div>


<!-- SCRIPTS -->
<?php include 'includes/scripts.php' ?>

<script src="scripts/devis.js"></script>

</body>
</html>