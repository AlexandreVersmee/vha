var tabs = ["index.php", "nos_agences.php", "notre_expertise.php", "notre_equipe.php", "devis_en_ligne.php" ];

var ids = ["header-link-index","header-link-agences","header-link-expertise","header-link-equipe","header-link-devis"];

var pathArray = window.location.pathname.split( '/' );

_.forEach(tabs, function (value, index) {
    if (pathArray[2] === tabs[index])
        $("#"+ids[index]).addClass("is-active");
});
