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
                                    <img class="orbit-image" src="https://placehold.it/2000x500&text=Image" alt="Space">
                                    <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
                                </li>
                                <li class="orbit-slide">
                                    <iframe width="100%" height="292" src="https://www.youtube.com/embed/V9gkYw35Vws" frameborder="0" allowfullscreen></iframe>
                                </li>
                                <li class="orbit-slide">
                                    <img class="orbit-image" src="https://placehold.it/2000x500&text=Image" alt="Space">
                                    <figcaption class="orbit-caption">Encapsulating</figcaption>
                                </li>
                                <li class="orbit-slide">
                                    <img class="orbit-image" src="https://placehold.it/2000x500&text=Image" alt="Space">
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
                            <div class="small-6 columns photo-presentation-partners">
                                <img src="https://placehold.it/2000x500&text=Photo" alt="" title=""/>
                            </div>
                        </div>
                        <h3>Frédéric VERSMEE</h3>
                        <p> Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus,
                            altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut
                            nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem
                            omnibusque armamentis instructam mari committat.

                            Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium, quae casu propinquabant,
                            nec
                            resistere planitie porrecta conati digressi sunt retroque concedentes omne iuventutis robur relictum in sedibus acciverunt.

                            Sed laeditur hic coetuum magnificus splendor levitate paucorum incondita, ubi nati sunt non reputantium, sed tamquam indulta
                            licentia
                            vitiis ad errores lapsorum ac lasciviam. ut enim Simonides lyricus docet, beate perfecta ratione vieturo ante alia patriam esse
                            convenit
                            gloriosam.</p>
                    </div>
                    <div class="small-6 columns">
                        <div class="row">
                            <div class="small-offset-3 small-6 columns photo-presentation-partners">
                                <img class="thumbnail" src="https://placehold.it/2000x500&text=Photo" alt="" title=""/>
                            </div>
                        </div>
                        <h3>Johan HAUTCOEUR</h3>
                        <p> Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus,
                            altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut
                            nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem
                            omnibusque armamentis instructam mari committat.

                            Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium, quae casu propinquabant,
                            nec
                            resistere planitie porrecta conati digressi sunt retroque concedentes omne iuventutis robur relictum in sedibus acciverunt.

                            Sed laeditur hic coetuum magnificus splendor levitate paucorum incondita, ubi nati sunt non reputantium, sed tamquam indulta
                            licentia
                            vitiis ad errores lapsorum ac lasciviam. ut enim Simonides lyricus docet, beate perfecta ratione vieturo ante alia patriam esse
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