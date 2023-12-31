function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: { lat: -24.345, lng: 134.46 }, // Australia.
  });
  const directionsService = new google.maps.DirectionsService();
  const directionsRenderer = new google.maps.DirectionsRenderer({
    draggable: false,
    map,
    panel: document.getElementById("panel"),
  });

  displayRoute(
    //起始點和終點的定位資料
    { lat: 22.73281734351028, lng: 120.28773293074639 }, 
    { lat: 22.594974538166664, lng: 120.3056897226093 },
    directionsService,
    directionsRenderer,
  );
}
// 參考資料 https://developers.google.com/maps/documentation/javascript/directions?hl=zh-tw#TravelModes
function displayRoute(origin, destination, service, display) {
  service
    .route({
      origin: origin,
      destination: destination,
      travelMode: google.maps.TravelMode.TRANSIT, //交通方式：DRIVING TWO_WHEELER TRANSIT WALKING
      avoidTolls: true,
    })
    .then((result) => {
      display.setDirections(result);
    })
    .catch((e) => {
      alert("Could not display directions due to: " + e);
    });
}

window.initMap = initMap;