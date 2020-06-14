var map;
var geocoder;
function loadMap()
{
    var kathog={lat:31.8778,lng:76.2733};
     map=new google.maps.Map(document.getElementById('map'),
    {
        zoom:10,
        center:kathog

    });
    var marker= new google.maps.Marker(
        {
          position:kathog,
          map:map,
        }
    );
    var cdata=JSON.parse(document.getElementById('data').innerHTML);
    geocoder=new google.maps.Geocoder();
    codeAddress(cdata);

    var alldata=JSON.parse(document.getElementById('alldata').innerHTML);
    showallcolleges(alldata);
    
}
function showallcolleges(alldata)
{   
    var infowind=new google.maps.InfoWindow; 
      Array.prototype.forEach.call(alldata,function(data)
    {
       var content =document.createElement('div');
       var strong =document.createElement('strong');
       strong.textContent=data.message;
       content.appendChild(strong);
        var marker= new google.maps.Marker(
            {
              position:new google.maps.LatLng(data.lat,data.lng),
              map:map,
            }
        );
        marker.addListener('click',function()
        {
            infowind.setContent(content);
            infowind.open(map,marker);
        })

    })

}

function codeAddress(cdata)
{       Array.prototype.forEach.call(cdata,function(data)
    {
        var address=data.address;
    
    geocoder.geocode({'address':address},function(results,status)
    {
        if(status== 'OK')
        {
            map.setCenter(results[0].geometry.location);
            alert(results[0].geometry.location);
            
        }
     /*   else{
            alert('Geocode was not successful for the following reason:'+status);
        }*/
        var points={};
        points.id=data.id;
        points.lat=map.getCenter().lat();
        points.long=map.getCenter().lng();
        updatelatlong(points);

    });
});
}
function updatelatlong(points)
{
     $.ajax({
        url:"action.php",
        method:"post",
        data:points,
        success:function(res)
        {
            console.log(res);
        }
    })

}

