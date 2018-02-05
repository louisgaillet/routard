

google.maps.event.addDomListener(window, 'load', function() {
    initializeAutocomplete('user_input_autocomplete_address');
});

function initializeAutocomplete(id) {
    var element = document.getElementById(id);
    if (element) {
        var autocomplete = new google.maps.places.Autocomplete(element, { types: ['geocode'] });
        google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
    }
}

function onPlaceChanged() {
    var place = this.getPlace();

    console.log(place);  // Uncomment this line to view the full object returned by Google API.
    var lat = document.getElementById('latitude');
    var lng = document.getElementById('longitude');
    lat.value = place.geometry.location.lat();
    lng.value = place.geometry.location.lng();

    for (var i in place.address_components) {
        var component = place.address_components[i];
        for (var j in component.types) {  // Some types are ["country", "political"]
            var type_element = document.getElementById(component.types[j]);
            if (type_element) {
                type_element.value = component.long_name;
            }
        }
    }
}

tinymce.init({ selector:'textarea' });