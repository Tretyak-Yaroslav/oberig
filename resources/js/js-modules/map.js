
const createMap = function() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: {lat: 50.455717, lng: 30.458263}
    });

    var image = '/img/icons/marker.svg';

    var customMarker = new google.maps.Marker({
        position: {lat: 50.457236, lng: 30.458334},
        map: map,
        icon: image
    });
}

export default createMap;