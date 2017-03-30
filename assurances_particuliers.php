<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include 'includes/metas.php' ?>

    <title>Assurance Versmée & Hautcoeur Valenciennes</title>

	<?php include 'includes/styles.php' ?>

    <link rel="stylesheet" href="styles/css/products.css">
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
                <div class="row">
                    <div class="small-12 columns page-title">
                        <h1><span>Assurances Particuliers</span></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns content">

                        <!-- TEASER -->
                        <div class="row cards-row">
                            <div class="small-12 columns">
                                <h3 class="cards-title">
                                    <span class="fa-stack fa-lg particulier">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-user fa-stack-1x"></i>
                                    </span>
                                    A chaque âge ses solutions ... </h3>
                            </div>

                            <div class="small-12 medium-6 large-4 columns">
                                <div class="card">
                                    <div class="container">
                                        <div class="front">
                                            <img class="thumbnail" src="images/particulier/fotolia_114634643%20400x250.jpg"/>
                                        </div>

                                        <div class="back">
                                            <h5>Assurer votre premier logement</h5>
                                            <p> ou votre assurance voiture ?
                                                Une solution pour votre logement étudiant, meublé ou pas avec les garanties essentielles et vos objets
                                                connectés.
                                                Pour votre voiture des conditions très avantageuses sont réservées si vos parents sont chez Allianz...
                                                Pour la santé vous pouvez continuer à bénéficier du contrat de vos parents tant que vous restez étudiant.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 columns">
                                <div class="card">
                                    <div class="container">
                                        <div class="front">
                                            <img class="thumbnail" src="images/particulier/fotolia_93198603-400x250.jpg"/>
                                        </div>

                                        <div class="back">
                                            <h5>This is a card.</h5>
                                            <p>This card shows some content on the front and some on the back, and can be flipped by hovering on a desktop, or
                                               by
                                               swiping across on a touch device. swiping across on a touch device. swiping across on a touch device.
                                               swiping across on a touch device. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="small-12 medium-offset-3 medium-6 large-offset-0 large-4 end columns last-card">
                                <div class="card">
                                    <div class="container">
                                        <div class="front">
                                            <img class="thumbnail" src="images/particulier/voiture-senior400x250.jpg"/>
                                        </div>

                                        <div class="back">
                                            <h5>This is a card.</h5>
                                            <p>This card shows some content on the front and some on the back, and can be flipped by hovering on a desktop, or
                                               by
                                               swiping across on a touch device. swiping across on a touch device. swiping across on a touch device.
                                               swiping across on a touch device. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- PRODUCTS -->
                        <div class="row" data-equalizer>
                            <div class="small-12 columns">
                                <h3 class="products-title">
                                    <span class="fa-stack fa-lg particulier">
                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                        <i class="fa fa-user fa-stack-1x"></i>
                                    </span>
                                    Les solutions </h3>
                            </div>

                            <!-- First Line -->
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-auto" title="Assurance Auto">
                                    <img class="thumbnail " src="images/particulier/assurance-auto400x250.jpg"/>
                                    <p class="text-center">Assurance Auto</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-auto" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/automobile.php' ?>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-deux-roues" title="Assurance 2 Roues">
                                    <img class="thumbnail" src="images/particulier/assurance-moto400x250.jpg"/>
                                    <p class="text-center">Assurance 2 Roues</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-deux-roues" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/deux-roues.php' ?>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-habitation" title="Assurance Habitation">
                                    <img class="thumbnail" src="images/particulier/habitation%20COM16258-V0916-400x250.jpg"/>
                                    <p class="text-center">Assurance Habitation</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-habitation" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/deux-roues.php' ?>
                                </div>
                            </div>

                            <!-- Second Line -->
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-resiliation" title="Assurance Résilié, Malus, Alcoolémie">
                                    <img class="thumbnail" src="images/particulier/assurance-auto-resiliee400x250.jpg"/>
                                    <p class="text-center">Assurance Résilié, Malus, Alcoolémie</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-resiliation" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/resilie-malus-alcoolemie.php' ?>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-emprunteur" title="Assurance Emprunteur">
                                    <img class="thumbnail" src="images/particulier/Assurance-emprunteur400x250.jpg"/>
                                    <p class="text-center">Assurance Emprunteur</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-emprunteur" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/emprunteur.php' ?>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-garantie" title="Assurance Garantie des Accidents de la vie">
                                    <img class="thumbnail" src="images/particulier/fotolia_7436718%20400x250.jpg"/>
                                    <p class="text-center">Assurance Garantie des Accidents de la vie</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-garantie" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/garanties-des-accidents-de-la-vie.php' ?>
                                </div>
                            </div>

                            <!-- Third Line -->
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-sante" title="Assurance Santé">
                                    <img class="thumbnail" src="images/particulier/fotolia_107798537%20400x250.jpg"/>
                                    <p class="text-center">Assurance Santé</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-sante" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/sante.php' ?>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-prevoyance" title="Assurance Prévoyance, Obsèques, Dépendance">
                                    <img class="thumbnail" src="https://placehold.it/2000x1000&text=Image7"/>
                                    <p class="text-center">Assurance Prévoyance, Obsèques, Dépendance</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-prevoyance" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/prevoyance-obseques-dependances.php' ?>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-retraite" title="Assurance Retraite">
                                    <img class="thumbnail" src="images/particulier/fotolia_85504735%20400x250.jpg""/>
                                    <p class="text-center">Assurance Retraite</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-retraite" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/retraite.php' ?>
                                </div>
                            </div>

                            <!-- Fourth Line -->
                            <div class="small-12 medium-6 large-4 end columns product" data-equalizer-watch>
                                <a data-open="assurance-protection" title="Assurance Protection Juridique">
                                    <img class="thumbnail" src="images/particulier/allianz-protection-juridique-particuliers%20400x250.jpg"/>
                                    <p class="text-center">Assurance Protection Juridique</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-protection" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/protection-juridique.php' ?>
                               </div>
                            </div>
                            <div class="small-12 medium-6 large-4 end columns product" data-equalizer-watch>
                                <a data-open="assurance-bateau" title="Assurance Bateau">
                                    <img class="thumbnail" src="https://placehold.it/2000x1000&text=Image11"/>
                                    <p class="text-center">Assurance Bateau</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-bateau" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/bateau.php' ?>

                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 end columns product" data-equalizer-watch>
                                <a data-open="assurance-chiens" title="Assurance Chiens et Chats">
                                    <img class="thumbnail" src="images/particulier/Chiens%20et%20chats%20400x250.jpg"/>
                                    <p class="text-center">Assurance Chiens et Chats</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-chiens" data-reveal>
									<?php include 'partial/products/Assurances-Particuliers/chiens-et-chats.php' ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </main>

			<?php include 'partial/footer.php' ?>
        </div>
    </div>
</div>


<!-- SCRIPTS -->
<?php include 'includes/scripts.php' ?>

</body>
</html>