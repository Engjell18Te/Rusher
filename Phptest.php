
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>hej</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
              integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
              crossorigin="" />

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin=""></script>
        <style>
            #mapid {
                height: 90vh;
            }
        </style>
    </head>

    <body>
        <div id="mapid"></div>
        <script type="text/javascript">
            var map = L.map('mapid').locate({ setView: true, maxZoom: 17 }); //hittar din position


            //följande rader är frivilliga- den markerar nuvarande plats
            function onLocationFound(e) {
                var radius = e.accuracy / 2;

                L.marker(e.latlng).addTo(map)
                    .bindPopup("Du är inom " + radius + " meter från denna punkten.").openPopup();

                L.circle(e.latlng, radius).addTo(map);
                alert(e.latlng);
            }

            map.on('locationfound', onLocationFound);

            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                attribution: 'Data hämtas från <a href="http://data.karta.orebro.se/">Örebro kommun</a>',
                maxZoom: 18
            }).addTo(map);</script>
       

   <?php
   header('Content-type: text/html charset=utf-8');
$servername = "my138b.sqlserver.se";
$username = "198526_os49911";
$password = "engjellhasani";
$dbname = "198526-engjell";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Idlocation, Cordinates FROM person";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()){
echo " " . $row["Idlocation"].  "cordinates: " . $row["Cordinates"]. "<br>";
    }
  } else {
echo"0 results";
}
$conn->close();   
 
?>
    </body>
</html>

