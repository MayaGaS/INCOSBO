window.onload = function() {
    initMap();
};

function initMap() {
    var mapOptions = {
        center: { lat: 20.6489759, lng: -100.4641589 },
        zoom: 13
    };

    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var marker = new google.maps.Marker({
        position: { lat: 20.6489759, lng: -100.4641589 },
        map: map,
        title: 'INCOSBO'
    });
}