
/*function initMap() {
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(10.381888, 124.011415), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}*/
function initMap(){
  var location = {lat: 10.381888, lng: 124.011415};
  var map = new google.maps.Map(document.getElementById("map"),{
    zoom:15,
    center: location
  });
   var marker = new google.maps.Marker({
    position: location,
    map: map
   });
}