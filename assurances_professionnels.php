<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include 'includes/metas.php' ?>

	<title>Assurance Versmée & Hautcoeur Valenciennes</title>

	<?php include 'includes/styles.php' ?>

</head>
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
                        <h1><span>Assurances pour les Professionnels</span></h1>
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
                                    A chaque métier ses spécificités ... </h3>
                            </div>

                            <div class="small-12 medium-6 large-4 columns">
                                <div class="card">
                                    <div class="container">
                                        <div class="front">
                                            <img class="thumbnail" src="images/professionnel/Profil-pro_Esthécienne400x250.jpg"/>
                                        </div>

                                        <div class="back">
                                            <img class="thumbnail" src="images/professionnel/Profil-pro_Peintre.jpg"/>
                                            <p>Peindre une façade nécessite <br>également un pinceau.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 columns">
                                <div class="card">
                                    <div class="container">
                                        <div class="front">
                                            <img class="thumbnail" src="images/professionnel/Profil-pro_commercant.jpg"/>
                                        </div>

                                        <div class="back">
                                            <img class="thumbnail" src="images/professionnel/bt-commerce.jpg"
                                                 width="280" height="160"/>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="small-12 medium-offset-3 medium-6 large-offset-0 large-4 end columns last-card">
                                <div class="card">
                                    <div class="container">
                                        <div class="front">
                                            <img class="thumbnail" src="images/professionnel/professionnel-automobile.jpg"/>
                                        </div>

                                        <div class="back">
                                            <img class="thumbnail" src="images/professionnel/artisan-chocolatier.jpg"/>
                                            <p>Se salir les mains ne signifie pas qu'on fait le même métier.</p>

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
                                <a data-open="assurance-rc_decennale" title="Assurance professionnels du Batiment">
                                    <img class="thumbnail" src="images/professionnel/Artisan_batiment_fotolia_111624158.jpg"/>
                                    <p class="text-center">Assurance professionnels du Batiment</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-rc_decennale" data-reveal>
                                    <?php include 'partial/products/assurances_professionnels/RC_decennale.php' ?>
                                </div>
                            </div>

                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-profilpro" title="Assurance Artisans">
                                    <img class="thumbnail " src="images/professionnel/artisan_fotolia_91487684.jpg"/>
                                    <p class="text-center">Assurance Artisans</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-profilpro" data-reveal>
                                    <?php include 'partial/products/assurances_professionnels/Profilpro.php' ?>
                                </div>
                            </div>

                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-profilpro" title="Assurance Commerçants">
                                    <img class="thumbnail" src="images/professionnel/commercant_fotolia_117455077.jpg"/>
                                    <p class="text-center">Assurance Commerçants</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-habitation" data-reveal>
                                    <?php include 'partial/products/Assurances-Particuliers/habitation.php' ?>
                                </div>
                            </div>

                            <!-- Second Line -->
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-garage" title="Assurance Professionnels de l'autombile">
                                    <img class="thumbnail" src="images/professionnel/garagiste_fotolia_106760351.jpg"/>
                                    <p class="text-center">Assurance Professionnels de l'autombile</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-garage" data-reveal>
                                    <?php include 'partial/products/assurances_professionnels/professionnel_automobille.php' ?>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-professionnel-sante" title="ASSURANCE PROFESSIONNELS DE SANTÉ">
                                    <img class="thumbnail" src="images/professionnel/professionnel_sante_fotolia_175895764.jpg"/>
                                    <p class="text-center">Assurance Professionnels de santé</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-professionnel-sante" data-reveal>
                                    <?php include 'partial/products/assurances_professionnels/professionnel_sante.php' ?>
                                </div>
                            </div>

                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-association" title="Assurance Associations">
                                    <img class="thumbnail" src="images/professionnel/association_fotolia_59254044.jpg"/>
                                    <p class="text-center">Assurance Association</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-association" data-reveal>
                                    <?php include 'partial/products/assurances_professionnels/association.php' ?>
                                </div>
                            </div>

                            <!-- Third Line -->
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-protection-juridique" title="Assurance Protection Juridique">
                                    <img class="thumbnail" src="images/professionnel/protection_juridique_fotolia_179197915.jpg"/>
                                    <p class="text-center">Assurance Protection Juridique</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-protection-juridique" data-reveal>
                                    <?php include 'partial/products/assurances_professionnels/protection-juridique.php' ?>
                                </div>
                            </div>

                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-prevoyance" title="Assurance Santé, Prévoyance,T.N.S, gérant, Madelin">
                                    <img class="thumbnail" src="images/professionnel/prevoyance_fotolia_134844994.jpg"/>
                                    <p class="text-center">Assurance Santé, Prévoyance,T.N.S, gérant, Madelin</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-prevoyance" data-reveal>
                                    <?php include 'partial/products/Assurances-Particuliers/prevoyance-obseques-dependances.php' ?>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                                <a data-open="assurance-retraite" title="Assurance Retraite">
                                    <img class="thumbnail" src="images/professionnel/retraite_fotolia_78878559.jpg""/>
                                    <p class="text-center">Assurance Retraite</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-retraite" data-reveal>
                                    <?php include 'partial/products/Assurances-Particuliers/retraite.php' ?>
                                </div>
                            </div>

                            <!-- Fourth Line -->
                            <div class="small-12 medium-6 large-4 end columns product" data-equalizer-watch>
                                <a data-open="assurance-protection" title="Assurance Santé Collective">
                                    <img class="thumbnail" src="images/professionnel/sante_collective_fotolia_152335809.jpg"/>
                                    <p class="text-center">Assurance Santé Collective des salariés</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-protection" data-reveal>
                                    <?php include 'partial/products/Assurances-Particuliers/protection-juridique.php' ?>
                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 end columns product" data-equalizer-watch>
                                <a data-open="assurance-bateau" title="Assurance Immeuble">
                                    <img class="thumbnail" src="images/professionnel/immeuble_fotolia_102114644.jpg"/>
                                    <p class="text-center">Assurance Immeuble</p>
                                </a>

                                <!-- Modal / Reveal -->
                                <div class="reveal small" id="assurance-bateau" data-reveal>
                                    <?php include 'partial/products/Assurances-Particuliers/bateau.php' ?>

                                </div>
                            </div>
                            <div class="small-12 medium-6 large-4 end columns product" data-equalizer-watch>
                                <a data-open="assurance-chiens" title="Assurance des établissements d'enseignement">
                                    <img class="thumbnail" src="images/professionnel/enseignement_fotolia_61912613.jpg"/>
                                    <p class="text-center">Assurance des établissements d'enseignement</p>
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