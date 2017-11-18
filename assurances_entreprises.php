<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include 'includes/metas.php' ?>

	<title>Assurance Versmée & Hautcoeur Valenciennes</title>

	<?php include 'includes/styles.php' ?>

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
					<button class="menu-icon-style" type="button" data-open="offCanvas" aria-expanded="false"
							aria-controls="offCanvas">
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
                        <h1><span>Assurances Entreprises</span></h1>
                    </div>
                </div>

				<div class="row">

                    <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                            <a data-open="assurances-multirisques-entreprises" title="Assurance multirisques-entreprises">
                                <img class="thumbnail " src="images/entreprise/Multirisques%20Entreprises.jpg"/>
                                <p class="text-center">Assurance Multirisques Entreprises</p>
                            </a>

                            <!-- Modal / Reveal -->
                            <div class="reveal small" id=" Assurance Multirisques Entreprises" data-reveal>
                                <?php include 'partial/products/assurances_entreprises/Assurance_Multirisques_Entreprises.php' ?>
                            </div>
                     </div>
                    <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                            <a data-open="assurance-Responsabilité Civile Professionnelle" title="Assurance Responsabilité Civile Professionnelle">
                                <img class="thumbnail " src="images/entreprise/assurance_responsabilite_civile_professionnelle.jpg"/>
                                <p class="text-center">Assurance Responsabilité Civile Professionnelle</p>
                            </a>

                            <!-- Modal / Reveal -->
                            <div class="reveal small" id=" Assurance Responsabilité Civile Professionnelle" data-reveal>
                                <?php include 'partial/products/assurances_entreprises/Assurance_responsabilite_civile_professionnelle.php' ?>
                            </div>

                    </div>
                    <div class="small-12 medium-6 large-4 columns product" data-equalizer-watch>
                        <a data-open="assurance-Assurance Santé et Prévoyance Collective des salariés" title="Assurance Santé et Prévoyance Collective des salariés">
                            <img class="thumbnail " src="images/entreprise/Assurance Santé et Prévoyance Collective des salariés.jpg"/>
                            <p class="text-center">Assurance Santé et Prévoyance Collective des salariés</p>
                        </a>

                        <!-- Modal / Reveal -->
                        <div class="reveal small" id=" Assurance Santé et Prévoyance Collective des salariés" data-reveal>
                            <?php include 'partial/products/assurances_entreprises/Assurance Santé et Prévoyance Collective des salariés.php' ?>
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

