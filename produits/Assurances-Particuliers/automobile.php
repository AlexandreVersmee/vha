<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include '../../includes/metas.php' ?>

    <title>Assurance Versmée & Hautcoeur Valenciennes</title>

	<?php include '../../includes/styles.php' ?>
</head>
<body>

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- OFF-CANVAS DISPLAY ON MOBILE -->

		<?php include '../../includes/off-canvas.php' ?>

        <!-- CONTENT OF WEBPAGE -->
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-medium">
                <div class="title-bar-left">
                    <button class="menu-icon-style" type="button" data-open="offCanvas" aria-expanded="false" aria-controls="offCanvas">
                        <i class="fa fa-navicon title-bar__icon"></i>
                    </button>
                </div>
            </div>

			<?php include '../../includes/header.php' ?>

			<?php include '../../includes/contactInformations.php' ?>

            <!-- CONTENU PRINCIPAL -->
            <main>

                <div class="row">
                    <div class="small-12 columns page-title">
                        <h1><span>Assurances Automobile</span></h1>
                    </div>
                </div>

                <div class="row">

                    <div class="content">




                       <!--<ul class="tabs" data-deep-link="true" data-tabs id="deeplinked-tabs">
                            <li class="tabs-title is-active"><a href="#panel1d" aria-selected="true">Tab 1</a></li>
                            <li class="tabs-title"><a href="#panel2d">Tab 2</a></li>
                            <li class="tabs-title"><a href="#panel3d">Tab 3</a></li>
                            <li class="tabs-title"><a href="#panel4d">Tab 4</a></li>
                        </ul>-->



                        <!--<div class="tabs-content" data-tabs-content="deeplinked-tabs">

                                <div class="tabs-panel is-active" id="panel1d">
                                    <ul class="tabs" data-deep-link="true" data-tabs id="deeplinked-tabs">
                                        <li class="tabs-title is-active" id="test" style="display: none"><a href="#panel1d" aria-selected="true">Tab 12324</a></li>
                                        <li class="tabs-title"><a href="#panel2d">Tab 2</a></li>
                                        <li class="tabs-title"><a href="#panel3d">Tab 3</a></li>
                                        <li class="tabs-title"><a href="#panel4d">Tab 4</a></li>
                                    </ul>
                               </div>

                                <div class="tabs-panel" id="panel2d">
                                    <li class="tabs-title"><a id="goback" href="#panel1d" aria-selected="true">Tab 1</a></li>
                                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
                                </div>

                        </div>-->



                        <div class="tabs-content" data-tabs-content="deeplinked-tabs">

                            <!-- CONTENU 1 / TAB1 -->
                            <div class="tabs-panel is-active" id="panel1">
                                <!-- MENU DES TABS -->
                                <div class="tabs" data-deep-link="true" data-tabs id="deeplinked-tabs">
                                    <div class="tabs-title is-active" style="display: none" id="test">
                                        <a href="#panel1">panel1</a>
                                    </div>
                                    <div class="tabs-title">
                                        <a href="#panel2">panel2</a>
                                    </div>
                                </div>

                            </div>

                            <!-- LES DIFFERENTS CONTENUS DES PRODUITS -->
                            <div class="tabs-panel" id="panel2">
                                <a id="goback" >Go BACK</a>

                                <h1>Description</h1>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="callout">
                                            <p>En France, assurer son véhicule est obligatoire. L’assurance auto couvre les dommages que vous causez aux autres.</p>

                                            <p>Wery- Caulliez Assurances vous propose aussi bien les contrats pour l’assurance obligatoire Responsabilité Civile
                                               circulation,
                                               que pour les dommages subis par vous-même avec la garantie du conducteur, et par votre véhicule. Un accompagnement
                                               personnalisé pour choisir la formule qui vous correspond.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="small-12 columns">
                                        <h4>Les +</h4>
                                        <p>> Une solution sur-mesure avec 5 formules d’assurance et des options à la carte, allant de la garantie Responsabilité Civile
                                           seule jusqu’à l’assurance Tous Risques avec dépannage 0 km et véhicule de remplacement,</p>

                                        <p>> Un tarif attractif et adapté à vos besoins pour réaliser de vraies économies avec la possibilité de bénéficier de
                                           l’assurance aux kilomètres avec des forfaits de 4000, 7000 ou 9000 kms.</p>

                                        <p>> Bénéficier d’Allianz conduite connectée à 1 €/mois, service innovant et sécurisant avec la technologie TOMTOM</p>

                                        <p>> Une aide à la gestion des sinistres dédiée et gérée par des professionnels</p>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </main>

			<?php include '../../includes/footer.php' ?>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<?php include '../../includes/scripts.php' ?>
<script>
    $("#goback").on("click", function(){
        $("#test").trigger("click");
        console.log('click');
    });
</script>
</body>
</html>