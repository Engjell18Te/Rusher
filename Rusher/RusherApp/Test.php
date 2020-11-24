<!DOCTYPE HTML>
<html>
<head>
<title>Rusher</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
	
	 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
	<style> 
		#mapid { height: 90vh; }
	</style>
</head>
<body>
 <div id="mapid"></div>	
	<script>
	var map = L.map('mapid').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([ 59.275236,15.213299]).addTo(map)
    .bindPopup('hej')
    .openPopup();
		
L.marker([59.273862,15.215648 ]).addTo(map)
    .bindPopup('Då')
    .openPopup();
		
L.marker([59.273862,15.21784 ]).addTo(map)
    .bindPopup('Re')
    .openPopup();
		
	</script>
</body>
</html>
