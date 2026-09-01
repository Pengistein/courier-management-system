<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<style>
    #map {
        height: 100vh;
        width: 100%;
    }

    .leaflet-routing-collapse-btn {
        display: none !important;
    }
    .leaflet-routing-container, .leaflet-bar, .leaflet-routing-container-hide, .leaflet-control {
        display: none !important;
    }
</style>

<body>
    <div id="map" class="container-fluid"></div>



    <script>
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    const nearestBranch = {
                        latitude: 24.840131, // To be made dynamic through database
                        longitude: 67.142911 // To be made dynamic through database
                    };

                    let map = L.map('map', {
                        zoomControl: false,
                    }).setView([51.505, -0.09], 13);

                    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
                    L.Routing.control({
                        waypoints: [
                            L.latLng(nearestBranch.latitude, nearestBranch.longitude),
                            L.latLng(latitude, longitude)
                        ],
                        addWaypoints: false,
                        show: false,
                        lineOptions: {
                            styles: [{
                                color: '#4E5340',
                                opacity: 1,
                                weight: 9
                            }, {
                                color: '#FF4242',
                                opacity: 0.85,
                                weight: 8
                            }]
                        },

                        createMarker: function(i, waypoint, n) {
                            const marker = L.marker(waypoint.latLng, {
                                draggable: false,
                                bounceOnAdd: false,
                                bounceOnAddOptions: {
                                    duration: 1000,
                                    height: 800,
                                    function() {
                                        (bindPopup(myPopup).openOn(map))
                                    }
                                },
                                icon: L.icon({
                                    iconUrl: "{{ asset('storage/uploads/icon-delivery.png') }}",
                                    iconSize: [100, 100],
                                    iconAnchor: [70, 70],
                                    popupAnchor: [-3, -76],
                                })
                            });
                            return marker;
                        }
                    }).addTo(map);

                    let customIcon = L.icon({
                        iconUrl: "{{ asset('storage/uploads/icon-delivery.png') }}",
                        iconSize: [50, 50],
                        iconAnchor: [25, 50]
                    });

                    L.marker([51.505, -0.09], {
                            icon: customIcon
                        })
                        .addTo(map);

                },
                (error) => {
                    console.error("Error getting location: ", error.message);
                    alert("Please allow location access to calculate the route.");
                }, {
                    enableHighAccuracy: true,
                    timeout: 5000,
                    maximumAge: 0
                }
            );

        } else {
            console.log('Geolocation is not supported by this browser.');
        }
    </script>
</body>

</html>