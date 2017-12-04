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
                                    <div class="slide-text-background" >
                                        <h4>Actualité</h4>
                                        <p>
                                            Nouveauté en matière d'assurance emprûnteur....<br>
                                            Vous pouvez désormais résilier vos assurances emprunteur tous les ans... et faire des économies.
                                            Souscrire peut se faire de façon moderne et rapide ! Déclaration d'état de santé sur votre tablette ou votre ordinateur.
                                            Examens médicaux si besoin en centre médical multi-spécialisé : un seul rendez vous !
                                        </p>
                                    </div>
                                </li>
                                <li class="orbit-slide">
                                    <iframe width="100%" height="400" img class="orbit-image" src="images/carte%20grise%20et%20verte.jpg" alt="Space"></iframe>
                                    <span class="orbit-overlay"><p> Le savez vous ? Nous pouvons établir votre carte grise rapidement et facilement. Repartez avec tous les papiers nécessaires pour votre véhicule. Simplifiez vous la vie...
</p></span>
                                </li>
                                <li class="orbit-slide">
                                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/VAoGOKuxAE8" frameborder="0" allowfullscreen></iframe>
                                    <figcaption class="orbit-caption">Encapsulating</figcaption>
                                </li>
                            </ul>
                            <nav class="orbit-bullets">
                                <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                                <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                                <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Presentation Associé -->
                <div class="row">
                    <div class="small-6 columns">
                        <div class="row">
                            <div class=" small-6 columns photo-presentation-partners">
                                <img class="thumbnail" src="images/FV2016-06-10%2013.34.13_pp.jpg" alt="" title=""  />
                            </div>
                        </div>
                        <h3>Frédéric VERSMEE</h3>
                        <p> Petit fils du fondateur, Raymond Versmée, formé à l'école de son père Pierre Versmée. Depuis 1983 ans dans l'Assurance. Diplomé de l'A.E.A.<br>
                            A repris le cabinet en 2004, puis l'agence de Douchy-les-Mines en 2016 en vue de l'association avec Johan Hautcoeur.
                           <br>"L'assurance avait une tellement mauvaise image quand j'étais jeune, que j'ai décidé de m'y consacrer uniquement
                            pour défendre l'intérêt des clients qui sont toujours démunis face à la puissance des compagnies... J'ai souhaité m'associer avec Johan HAUTCŒUR du fait de son engagement dans l'exercice de notre métier sans concession sur l'exigence de précision et de sérieux, dont il fait preuve."</p>
                        <a target="_blank" href="../Brochures/Com-Plaisance.pdf">Brochure</a>
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

			<?php include 'partial/footer.php' ?>
        </div>
    </div>
</div>


<!-- SCRIPTS -->
<?php include 'includes/scripts.php' ?>

</body>
</html>