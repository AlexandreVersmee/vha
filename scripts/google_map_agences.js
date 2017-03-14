// GOOGLE API KEY : AIzaSyBUa7nbQoszbkns9Zle_s1iHSXcbAVj5JY

// Douchy : {lat:50.302068, lng: 3.386730}
// Valenciennes : {lat:50.366515, lng: 3.512481}

function initAutocomplete() {
    console.log("w: "+window.innerWidth +" - h :"+window.innerHeight);

    var cfg = {};
    if (window.innerWidth > 1600){
        cfg = {
            center: {lat: 50.338573, lng: 3.458409},
            zoom: 12
        };
    }else {
        cfg = {
            center: {lat: 50.338573, lng: 3.458409},
            zoom: 11
        };
    }


    var map = new google.maps.Map(document.getElementById('map'), {
        center: cfg.center,
        zoom: cfg.zoom,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var marker = new google.maps.Marker({
        position: {lat:50.366515, lng: 3.512481},
        map: map
    });
    var marker2 = new google.maps.Marker({
        position:{lat:50.302068, lng: 3.386730},
        map: map
    });

}
