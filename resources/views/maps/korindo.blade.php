<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Map Korindo</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <script src="{{ asset('js/app.js') }}" defer ></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script  src="{{ asset('js/wms.js') }}"></script>

</head>
<body>
    <div class="h-screen w-full  ">

    <div id="map" class="w-full h-screen border border-white mb-2" style=" background-color: #22361c "></div>

  </div>
  <!-- <iframe width="600" height="450" src="https://datastudio.google.com/embed/reporting/d72b87aa-45b2-48c2-b9e2-315f98e5e41a/page/rTMvC" frameborder="0" style="border:0" allowfullscreen></iframe> -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
var map = L.map('map').setView([0.7893, 117.9213],4);
L.tileLayer.betterWms('http://129.150.48.143:8080/geoserver/wfs', {
  layers: 'ndpe:Prov_BIG',
  transparent: true,
  format: 'image/png',
  attribution: 'NDPE - Auriga'
}).addTo(map);

//Geoserver Web Feature Service
$.ajax('http://129.150.48.143:8080/geoserver/wfs',{
  type: 'GET',
  data: {
    service: 'WFS',
    version: '1.1.0',
    request: 'GetFeature',
    typename: 'ndpe:HAHTHGU',
    CQL_FILTER: "grup_usaha='Korindo'",
    srsname: 'EPSG:4326',
    outputFormat: 'text/javascript',
    },
  dataType: 'jsonp',
  jsonpCallback:'callback:handleJson',
  jsonp:'format_options'
 });

// the ajax callback function
function handleJson(data) {
    selectedArea = L.geoJson(data, {
      onEachFeature: function(feature, layer) {
        layer.bindPopup(`${feature.properties.nama_izin}`)
      }
    }).addTo(map);
}
</script>
</html>
