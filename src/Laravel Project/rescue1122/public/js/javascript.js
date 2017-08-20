var map;

      // Create a new blank array for all the listing markers.
      var markers = [];

      function myMap() {
        // Constructor creates a new map - only center and zoom are required.
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 33.5384, lng: 73.0441},
          zoom: 9
        });

        // These are the real estate listings that will be shown to the user.
        // Normally we'd have these in a database instead.
        var locations = [
          {title: 'Islamabad', location: {lat: 33.7294, lng: 73.0931}},
          {title: 'Rawalpindi', location: {lat: 33.5984, lng: 73.0441}},
          {title: 'Taxila', location: {lat: 33.7370, lng: 72.7994}},
          {title: 'Kallar Syedan', location: {lat: 33.4137, lng: 73.3768}},
          {title: 'Muree', location: {lat: 33.9078, lng: 73.3915}},
          {title: 'Kotli Sattian', location: {lat: 33.8070, lng: 73.5270}},
          {title: 'Gujjar Khan', location: {lat: 33.2513, lng: 73.3060}},
          {title: 'Kahuta', location: {lat: 33.5896, lng: 73.3886}}
        ];
    	var seconds = new Date().getTime() / 1000;
        var bounds = new google.maps.LatLngBounds();

        // The following group uses the location array to create an array of markers on initialize.
        for (var i = 0; i < locations.length; i++) {
          // Get the position from the location array.
          var position = locations[i].location;
          var title = locations[i].title;
          // Create a marker per location, and put into markers array.
          var marker = new google.maps.Marker({
            map: map,
            position: position,
            title: title,
            id: i
          });
          // Push the marker to our array of markers.
          markers.push(marker);
          // Create an onclick event to open an infowindow at each marker.
           marker.addListener('click', function(event) {
            map.setZoom(15);
            map.panTo(event.latLng)
          });
        }

        map.addListener('click', function(event) {
          // 3 seconds after the center of the map has changed, pan back to the
          // marker.
            $('#lat').val(event.latLng.lat());
            $('#lng').val(event.latLng.lng());
        });

          map.addListener('click', function(e) {
          placeMarkerAndPanTo(e.latLng, map);
        });

          function placeMarkerAndPanTo(latLng, map) {
          var marker = new google.maps.Marker({
            position: latLng,
            map: map
          });
          map.panTo(latLng);
        }
}


