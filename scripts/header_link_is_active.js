var tabs = ["index.php", "soin_visage.php", "soin_corps.php", "epilation.php", "beaute_mains_et_pieds.php",
    "maquillage.php", "offres.php" ];

var ids = ["header-link-index", "header-link-soinVisage", "header-link-soinCorps", "header-link-epilation",
    "header-link-beaute", "header-link-maquillage", "header-link-offres"];

var pathArray = window.location.pathname.split( '/' );

_.forEach(tabs, function (value, index) {
    if (pathArray[2] === tabs[index])
        $("#"+ids[index]).addClass("is-active");
});
