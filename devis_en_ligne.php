<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include 'includes/metas.php' ?>

    <title>Assurance Versmée & Hautcoeur Valenciennes</title>

	<?php include 'includes/styles.php' ?>

    <link rel="stylesheet" href="styles/css/devis.css">
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
                        <div class="large-6 columns">
                            <div class="row">
                                <div class="large-6 columns devis-image-block">
                                    <a href="#">
                                        <img class="thumbnail" src="images/famille.jpg"/>
                                        <div class="devis-text-block text-center">
                                            <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="large-6 columns devis-image-block">
                                    <a href="#">
                                        <img class="thumbnail" src="https://placehold.it/2000x2000&text=Image"/>
                                        <div class="devis-text-block text-center">
                                            <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-6 columns devis-image-block">
                                    <a href="#">
                                        <img class="thumbnail" src="https://placehold.it/2000x2000&text=Image"/>
                                        <div class="devis-text-block text-center">
                                            <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="large-6 columns devis-image-block">
                                    <a href="#">
                                        <img class="thumbnail" src="https://placehold.it/2000x2000&text=Image"/>
                                        <div class="devis-text-block text-center">
                                            <p>utem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLONNE DE DROITE -->
                        <div class="large-6 columns">

                            <h3 class="text-center">Demande d'informations</h3><br/>



                            <form method="post" action="devis_en_ligne.php">
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label for="nom">Nom</label>
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" name="nom" id="nom" aria-label="Nom"
                                                   placeholder="Veuillez saisir votre nom" pattern=".{2,}" title="Deux caractéres minimum">
                                            <span class="input-group-label"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label for="email">Adresse email</label>
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" name="email" id="email" aria-label="Adresse Email"
                                                   placeholder="Veuillez saisir votre adresse email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                                   title="example@gmail.com">
                                            <span class="input-group-label"><i class="fa fa-at"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-offset-1 medium-10 columns">
                                        <label for="tel">Numéro de téléphone</label>
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" name="tel" id="tel" aria-label="Numéro de téléphone"
                                                   placeholder="Veuillez saisir votre numéro de téléphone"
                                                   title="Uniquement les chiffres de 0 à 9 sont admits." pattern="[0-9]">
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