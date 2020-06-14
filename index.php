<!DOCTYPE html>
<html>
    <head>

        <script type="text/javascript" src="../googlemap.js"></script>
        <title>Locations</title>
    
    <style>
        .container
        {
            height:450px;
        }
        #map
        {
            width:100%;
            height:100%;
            border:1px solid blue;
        }
        #data ,#alldata
        {
          display:none;
        }
        a 
       {    margin-left:90%;

            font-size:20px;
       }
    </style>
    </head>
    <body>
    <a href="../project15.php" >Logout</a>
        <div class="container">
            <center><h1>Access Google Maps</h1></center>
            <?php
            require 'education.php';
            $edu=new education;
             $coll= $edu->getblanklatlong();
            $coll= json_encode($coll,true);
             echo '<div id="data">'.$coll.'</div>';

             $alldata= $edu->getallcolleges();
             $alldata= json_encode($alldata,true);
              echo '<div id="alldata">'.$alldata.'</div>';
            ?>
            <div id="map"></div>
        </div>
    </body>
    <script async defer 
           src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3MBT0DQ3T70XL5foJxqAQI2Eg39RhZPM&callback=loadMap">

    </script>
</html>