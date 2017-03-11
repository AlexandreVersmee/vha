// GOOGLE API KEY : AIzaSyBUa7nbQoszbkns9Zle_s1iHSXcbAVj5JY

// VA : 50.357635, 3.514772
// Lille : 50.629429, 3.057460

function initAutocomplete() {

    var cfg = {
        center: {lat: 50.357635, lng: 3.514772},
        km: 20000,
        zoom: 10
    };

    var map = new google.maps.Map(document.getElementById('map'), {
        center: cfg.center,
        zoom: cfg.zoom,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // [START region_getplaces]
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
    // [END region_getplaces]


    new google.maps.Circle({
        strokeColor: '#0fd562',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#0fd562',
        fillOpacity: 0.25,
        map: map,
        center: cfg.center,
        radius: cfg.km
    });
}
