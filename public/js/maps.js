var mapkorindo = L.map('mapkorindo').setView([0.7893, 117.9213],5);

// var mapkorindo =  L.map('mapkorindo', { zoomControl: false, scrollWheelZoom: false }).setView([0.6, 118], 5);
L.tileLayer.wms('http://129.150.48.143:8080/geoserver/wms', {
  layers: 'ndpe:Prov_BIG',
  transparent: true,
  format: 'image/png'
}).addTo(mapkorindo);
