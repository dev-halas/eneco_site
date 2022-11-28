let map; 

function initMap() {
    const pinMap = { lat: 51.9922061469776, lng: 17.381121538533545 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: pinMap,
      disableDefaultUI: true,
      styles: [
        {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#FFFAF0"
                }
            ]
        },
        {
            "featureType": "water",
            "stylers": [
                {
                    "color": "#d9edf7"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry",
            "stylers": [
                {
                    "lightness": 40
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
                {
                    "visibility": "on",
                    "color": "#c5dac6"
                }
            ]
        },
        {
            "featureType": "landscape.natural.terrain",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#CCAA88"
                },
                {
                    "lightness": 40
                }
            ]
        },
        {
            "featureType": "landscape.man_made",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#EEEEEE"
                }
            ]
        },
        {
            "featureType": "road",
            "stylers": [
                {
                    "visibility": "simplified"
                },
                {
                    "color": "#FF0000"
                },
                {
                    "gamma": 9
                }
            ]
        },
        {
            "featureType": "road.highway",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#FF0000"
                },
                {
                    "gamma": 8
                }
            ]
        },
        {
            "featureType": "road.highway.controlled_access",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#FF0000"
                },
                {
                    "gamma": 4
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi.government",
            "elementType": "geometry",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#DDDDDD"
                }
            ]
        },
        {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#CCCCCC"
                }
            ]
        },
        {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#AAAAAA"
                },
                {
                    "gamma": 4
                }
            ]
        }
    ]
    
    });
    const contentString =
      '<div id="mapContent">' +
      'MIKRON - hartujemy.pl' + '<br>' +
      'Zalesie 16,' + '<br>' +
      'Jaraczewo 63-233, ' +
      "</div>";
  
    const infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 300,
    });

    const icon = {
        path: "M89.529,0A25.558,25.558,0,0,0,64,25.529c0,18.834,23.554,41.219,24.557,42.164a1.42,1.42,0,0,0,1.945,0c1-.945,24.557-23.33,24.557-42.164A25.558,25.558,0,0,0,89.529,0Zm0,39.712a14.183,14.183,0,1,1,14.183-14.183A14.2,14.2,0,0,1,89.529,39.712Z",
        fillColor: '#d7221f',
        strokeWeight: 0,
        fillOpacity: 1, 
        anchor: new google.maps.Point(90, 72),
    };
  
    const marker = new google.maps.Marker({
      position: pinMap,
      map,
      icon: icon,
      title: "ENECO",
    });
  
    marker.addListener("click", () => {
      infowindow.open({
        anchor: marker,
        map,
        shouldFocus: false,
      });
    });
}
  