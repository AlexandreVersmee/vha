<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include 'includes/metas.php' ?>

    <title>Assurance Versmée & Hautcoeur Valenciennes</title>

	<?php include 'includes/styles.php' ?>

    <link rel="stylesheet" href="styles/css/index.css">
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

            <!-- MAIN -->
            <main>
                <!-- SLIDER -->
                <div class="row">
                    <div class="small-12 columns slider-row">
                        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                            <ul class="orbit-container">
                                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                                <li class="is-active orbit-slide">
                                    <div> Actualité
                                    Nouveauté en matière d'assurance emprunteur....

                                    Vous pouvez désormais résilier vos assurances emprunteur tous les ans....</div>

                                    <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
                                </li>
                                <li class="orbit-slide">
                                    <iframe width="100%" height="292" src="https://www.youtube.com/embed/V9gkYw35Vws" frameborder="0" allowfullscreen></iframe>
                                </li>
                                <li class="orbit-slide">
                                    <iframe width="100%" height="292" src="https://www.youtube.com/embed/VAoGOKuxAE8" frameborder="0" allowfullscreen></iframe>
                                    <figcaption class="orbit-caption">Encapsulating</figcaption>
                                </li>
                                <li class="orbit-slide">
                                    <img class="orbit-image" src="images/auto-petit-rouleur-280x165%20400x250.jpg" alt="Space">
                                    <figcaption class="orbit-caption">Outta This World</figcaption>
                                </li>
                            </ul>
                            <nav class="orbit-bullets">
                                <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span>
                                </button>
                                <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                                <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                                <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Presentation Associé -->
                <div class="row">
                    <div class="small-6 columns">
                        <div class="row">
                            <div class=" small-6 columns photo-presentation-partners">
                                <img class="thumbnail" src="images/FV2016-06-10%2013.34.13_pp.jpg" alt="" title=""/>
                            </div>
                        </div>
                        <h3>Frédéric VERSMEE</h3>
                        <p> Tombé dans le métier de l'assurance dès son plus jeune "âge", petit fils du fondateur, Raymond Versmée, formé à l'école de son père
                            Pierre Versmée.
                            <br>Plus de 33 ans d'expérience dans l'Assurance.
                            Diplomé de l'A.E.A.<br>
                            A repris le cabinet en 2004, puis l'agence de Douchy-les-Mines en 2016 en vue de l'association avec Johan Hautcoeur.
                           .</p>
                    </div>
                    <div class="small-6 columns">
                        <div class="row">
                            <div class="small-offset-5 small-6 columns photo-presentation-partners">
                                <img class="thumbnail" src="images/JH2016-06-10%2013.34.13_pp.jpg" alt="" title=""/>
                            </div>
                        </div>
                        <h3>Johan HAUTCOEUR</h3>
                        <p> Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus,
                            altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut
                            nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem
                            omnibusque armamentis instructam mari committat.

                            lapsorum ac lasciviam. ut enim Simonides lyricus docet, beate perfecta ratione vieturo ante alia patriam esse
                            convenit
                            gloriosam.</p>
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

</body>
</html>