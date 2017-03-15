var indexURL = 2;

var tabs = ["index.php", "nos_agences.php", "notre_expertise.php", "notre_equipe.php",
    "devis_en_ligne.php" ];

var ids = ["header-link-index","header-link-agences","header-link-expertise",
    "header-link-equipe","header-link-devis"];

var subHeader = ["assurances_entreprises", "assurances_professionnels.php",
    "assurances_particuliers.php", "assurances_patrimoine.php"];

var subHeader_ids = ["header-link-entreprises","header-link-professionnels","header-link-entreprises",
    "header-link-patrimoine"];


var pathArray = window.location.pathname.split( '/' );

_.forEach(tabs, function (value, index) {
    if (pathArray[indexURL] === tabs[index])
        $("#" + ids[index]).addClass("is-active");
});

_.forEach(subHeader, function (value, index) {
    if (pathArray[indexURL] === tabs[index])
        $("#" + subHeader_ids[index]).addClass("is-active");
});