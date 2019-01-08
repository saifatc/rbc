<script>
  jQuery(function ($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyCYeIvOd_Nl3-94qwectqYbTI9hRf6og8A&sensor=false&callback=initialize";
    document.body.appendChild(script);

  });

  function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var styles = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#c0e4f3"
            },
            {
                "visibility": "on"
            }
        ]
    }
];
    var mapOptions = {
      mapTypeId: 'roadmap',
      styles: styles,
      scrollwheel: false,
    };

    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);

    // Multiple Markers
    var markers = [
      ['Sydney', -33.8189845, 151.0210934, 12]
    ];




    // Loop through our array of markers & place each one on the map  
    for (i = 0; i < markers.length; i++) {
      var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
      bounds.extend(position);
      marker = new google.maps.Marker({
        position: position,
        map: map,
        title: markers[i][0],
        icon: '<?php bloginfo('template_url'); ?>/assets/images/map-icon.png'
      });

      // Automatically center the map fitting all markers on the screen
      map.fitBounds(bounds);
    }

    var zoomLevel = 15;
    var windoww = $(window).width();
//        if (windoww > 1024) {
//            zoomLevel = 15;
//        } else if (windoww > 640) {
//            zoomLevel = 6;
//        }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
      this.setZoom(zoomLevel);
      google.maps.event.removeListener(boundsListener);
    });

  }
</script>