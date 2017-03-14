<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include 'includes/metas.php' ?>

	<title>Assurance Versmée & Hautcoeur Valenciennes</title>

	<?php include 'includes/styles.php' ?>

    <link rel="stylesheet" href="styles/css/agences.css">
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
					<button class="menu-icon-style" type="button" data-open="offCanvas" aria-expanded="false"
							aria-controls="offCanvas">
						<i class="fa fa-navicon title-bar__icon"></i>
					</button>
				</div>
			</div>

			<?php include 'includes/header.php' ?>

			<?php include 'includes/contactInformations.php' ?>

			<!-- CONTENU PRINCIPAL -->
			<main>
				<div class="row">
					<div class="small-12 columns">
						<h1 class="text-center main-title">Nos agences</h1>
					</div>
				</div>
                <div class="row">
                    <div class="small-12 columns content">
                        <div class="small-12 medium-6 columns">
                            <h3>
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-square fa-stack-2x"></i>
                                  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                </span>
                                Valenciennes
                            </h3>
                            <div class="informations">
                                <address>
                                    <p>44 Avenue de Saint Amand<br/>
                                    59300 - Valenciennes</p>
                                </address>
                                <p>Tél. : 03 27 46 42 04</p>
                            </div>
                            <hr>

                            <h3>
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-square fa-stack-2x"></i>
                                  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                </span>
                                Douchy-Les-Mines
                            </h3>
                            <div class="informations">
                                <address>
                                    <p>142 Avenue de la République<br/>
                                       59282 - Douchy-les-Mines </p>
                                </address>
                                <p>Tél. : 03 27 46 42 04</p>
                            </div>
                            <hr>

                            <h4>
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-square fa-stack-2x"></i>
                                  <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                                </span>
                                Horaires de nos agences
                            </h4>
                            <div class="informations">
                                <p>Lundi 13h45 - 18h00<br/>
                                Mardi au Vendredi<br/>
                                9h - 12h15 et 13h45 - 18h<br/>
                                Samedi 9h - 12h<br/>
                                Sur rendez-vous si vous le souhaitez.</p>
                            </div>
                        </div>
                        <div class="small-12 medium-6 columns">
                            <div id="map"></div>
                        </div>
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
<script src="scripts/google_map_agences.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUa7nbQoszbkns9Zle_s1iHSXcbAVj5JY&libraries=places&callback=initAutocomplete"></script>

</body>
</html>