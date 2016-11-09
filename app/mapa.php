<!DOCTYPE html>
<html lang="es">
<head>
    <?php require("includes/head.html");?>
    <title>Un viaje por nuestras raíces &#124; Mapa</title>
    <meta property="og:title" content="Un viaje por nuestras raíces &#124; Mapa"/>
</head>
<body> 
    <?php require("includes/header.html");?>
    <div id="map"></div>
    <?php require("includes/footer.html");?> 
    <?php require("includes/scripts.html");?>




  <!-- scripts -->
  <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 5,
    center: {lat: 22.404509, lng: -101.936365}
  });

  var ACAPULCO = 'images/pins/ACAPULCO.png';
  var CAMPECHE = 'images/pins/CAMPECHE.png';
  var CANCUN = 'images/pins/CANCUN.png';
  var CDMX = 'images/pins/CDMX.png';
  var CHIHUAHUA = 'images/pins/CHIHUAHUA.png';
  var DURANGO = 'images/pins/DURANGO.png';
  var GUADALAJARA = 'images/pins/GUADALAJARA.png';
  var LEON = 'images/pins/LEON.png';
  var LOS_CABOS = 'images/pins/LOS_CABOS.png';
  var LOS_MOCHIS = 'images/pins/LOS_MOCHIS.png';
  var MAZATLAN = 'images/pins/MAZATLAN.png';
  var MERIDA = 'images/pins/MERIDA.png';
  var MEXICO = 'images/pins/MEXICO.png';
  var MONTERREY = 'images/pins/MONTERREY.png';
  var MORELIA = 'images/pins/MORELIA.png';
  var PUEBLA = 'images/pins/PUEBLA.png';
  var SAN_LUIS = 'images/pins/SAN_LUIS.png';
  var TIJUANA = 'images/pins/TIJUANA.png';
  var TUXTLA_GUTIERREZ = 'images/pins/TUXTLA_GUTIERREZ.png';
  var VERACRUZ = 'images/pins/VERACRUZ.png';
  var VILLA_HERMOSA = 'images/pins/VILLA_HERMOSA.png';

  var acapulcoAeropuerto = new google.maps.Marker({
    position: {lat: 16.764687, lng: -99.759069},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: ACAPULCO
  });
  var campecheAeropuerto = new google.maps.Marker({
    position: {lat: 19.814268, lng: -90.503794},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: CAMPECHE
  });
  var cancunAeropuerto = new google.maps.Marker({
    position: {lat: 21.041012, lng: -86.874154},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: CANCUN
  });
   var cdmxAeropuerto = new google.maps.Marker({
    position: {lat: 19.452999, lng: -99.021544},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: CDMX
  });
   var chihuahuaAeropuerto = new google.maps.Marker({
    position: {lat: 28.704901, lng: -105.969039},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: CHIHUAHUA
  });
    var durangoAeropuerto = new google.maps.Marker({
    position: {lat: 24.127100, lng: -104.533270},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: DURANGO
  });
   var guadalajaraAeropuerto = new google.maps.Marker({
    position: {lat: 20.526326, lng: -103.303504},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: GUADALAJARA
  });
    var leonAeropuerto = new google.maps.Marker({
    position: {lat: 20.993817, lng: -101.480591},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: LEON
  });
    var cabosAeropuerto = new google.maps.Marker({
    position: {lat: 23.145861, lng: -109.717955},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: LOS_CABOS
  });
      var mochisAeropuerto = new google.maps.Marker({
    position: {lat: 25.689939, lng: -109.084408},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: LOS_MOCHIS
  });
      var mazatlanAeropuerto = new google.maps.Marker({
    position: {lat: 23.171571, lng: -106.268224},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: MAZATLAN
  });
        var tuxtlaAeropuerto = new google.maps.Marker({
    position: {lat: 16.561282, lng: -93.019307},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: TUXTLA_GUTIERREZ
  });

    var veracruzAeropuerto = new google.maps.Marker({
    position: {lat: 19.142511, lng: -96.183203},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: VERACRUZ
  });

    var villaAeropuerto = new google.maps.Marker({
    position: {lat: 17.994668, lng: -92.819122},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: VILLA_HERMOSA
  });
     var meridaAeropuerto = new google.maps.Marker({
    position: {lat: 20.934011, lng: -89.663552},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: MERIDA
  });
    var mexicoAeropuerto = new google.maps.Marker({
    position: {lat: 19.421402, lng: -99.077218},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: MEXICO
  });
    var monterreyAeropuerto = new google.maps.Marker({
    position: {lat: 25.778350, lng: -100.107277},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: MONTERREY
  });
    var moreliaAeropuerto = new google.maps.Marker({
    position: {lat: 19.846787, lng: -101.028169},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: MORELIA
  });
    var pueblaAeropuerto = new google.maps.Marker({
    position: {lat: 19.160836, lng: -98.371872},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: PUEBLA
  });
    var sanluisAeropuerto = new google.maps.Marker({
    position: {lat: 22.256639, lng: -100.934111},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: SAN_LUIS
  });

    var tijuanaAeropuerto = new google.maps.Marker({
    position: {lat: 32.546062, lng: -116.974989},
    animation: google.maps.Animation.DROP,
    map: map,
    icon: TIJUANA
  });
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

    </script>
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaWP3IHYsLq2TrMGJfLqDo4dSRFEbC4G8&signed_in=true&callback=initMap"></script>

</body>
</html>