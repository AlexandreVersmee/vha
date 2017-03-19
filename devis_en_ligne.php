<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include 'includes/metas.php' ?>

    <title>Assurance Versmée & Hautcoeur Valenciennes</title>

	<?php include 'includes/styles.php' ?>

    <link rel="stylesheet" href="styles/css/devis.css">
	$Code_agence_Valenciennes = "h98069" ;
	$Allianz_path_devis = "https://www.allianz.fr/monagence.html?codeAgence="&$code_agenc_Valenciennes&"&urlRedirect=" ;
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



                <div class="row">
                    <div class="large-12 columns text-center">
                        <h1>Devis en Ligne</h1>
                    </div>
                </div>
                <div class="row">
                    <!-- COLONNE DE GAUCHE -->
                    <div class="large-6 columns content">
                        <div class="row">
                            <div class="large-6 columns thumbnail devis-image-block">
                                <a href="$Allianz_path_devis"&"devis-assurance.allianz.fr/devis-rapide-auto/">
                                    <img src="https://placehold.it/2000x2000&text=Image"/>
                                    <div class="devis-text-block text-center">
                                        <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                    </div>
                                </a>
                            </div>
                            <div class="large-6 columns thumbnail devis-image-block">
                                <a href="$Allianz_path_devis"&"https://devis-assurance.allianz.fr/tarif-express-habitation/">
                                    <img src="https://placehold.it/2000x2000&text=Image"/>
                                    <div class="devis-text-block text-center">
                                        <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns thumbnail devis-image-block">
                                    <img src="https://placehold.it/2000x2000&text=Image"/>
                                    <div class="devis-text-block text-center">
                                        <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                    </div>
                                </a>
                            </div>
                            <div class="large-6 columns thumbnail devis-image-block">
                                    <img src="https://placehold.it/2000x2000&text=Image"/>
                                    <div class="devis-text-block text-center">
                                        <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- COLONNE DE DROITE -->
                    <div class="large-6 columns content">
						<?php include 'includes/send_email.php' ?>

                        <form method="post" action="devis_en_ligne.php">
                            <div class="row">
                                <div class="small-12 columns">
                                    <label for="nom">Nom</label>
                                    <div class="input-group">
                                        <input class="input-group-field" type="text" name="nom" id="nom" aria-label="Nom"
                                               placeholder="Veulliez saisir votre nom">
                                        <span class="input-group-label"><i class="fa fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <label for="email">Adresse email</label>
                                    <div class="input-group">
                                        <input class="input-group-field" type="text" name="email" id="email" aria-label="Adresse Email"
                                               placeholder="Veulliez saisir votre adresse email">
                                        <span class="input-group-label"><i class="fa fa-at"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <label for="tel">Numéro de téléphone</label>
                                    <div class="input-group">
                                        <input class="input-group-field" type="text" name="tel" id="tel" aria-label="Numéro de téléphone"
                                               placeholder="Veulliez saisir votre numéro de téléphone">
                                        <span class="input-group-label"><i class="fa fa-phone"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <label>Type d'assurance
                                        <select name="typeAssurance">
                                            <option value="aucun">Choisissez le type contrat</option>
                                            <option value="Auto">Assurance Auto</option>
                                            <option value="Habitation">Assurance Habitation</option>
                                            <option value="Santé">Assurance Santé</option>
                                            <option value="Emprunteur">Assurance Emprunteur</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <label>Description
                                        <textarea name="message" placeholder="Décrivez votre besoin"></textarea>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns text-right">
                                    <input type="submit" class="button" value="Envoyer">
                                </div>
                            </div>
                        </form>
                    </div>
            </main>

			<?php include 'includes/footer.php' ?>
        </div>
    </div>
</div>
<script></script>

<!-- SCRIPTS -->
<?php include 'includes/scripts.php' ?>
<script>setTimeout(function(){ $('.callout').trigger('close').fadeOut(4500); }, 7000);</script>
</body>
</html>