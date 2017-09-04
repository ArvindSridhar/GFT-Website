<?php

include_once('config.php');

header("content-type: application/x-javascript; charset=utf-8");
echo "<html>
<head>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.28.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.28.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
</head>

<body>
    <div id='map'></div>
    <script>
    mapboxgl.accessToken = $mapboxkey;
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v9', //stylesheet location
        center: [-74.50, 40], // starting position
        zoom: 9 // starting zoom
    });
    </script>
</body>
</html>";
?>