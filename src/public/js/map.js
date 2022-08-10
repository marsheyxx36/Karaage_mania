window.onload = function(){
  let init = '東京都千代田区';
  initMap(init);
  let btn = document.getElementById('btn')
  let address = document.getElementById('address');
  btn.onclick = function(){
    initMap(address.value);
};
}
 let initMap =function (address) {
  const geocoder = new google.maps.Geocoder();
  // ここでaddressのvalueに住所のテキストを指定する
  geocoder.geocode( { address: address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      const latlng = {
        lat: results[0].geometry.location.lat(),
        lng: results[0].geometry.location.lng()
      }
      const opts = {
        zoom: 15,
        center: new google.maps.LatLng(latlng)
      }
      const map = new google.maps.Map(document.getElementById('map'), opts)
      new google.maps.Marker({
        position: latlng,
        map: map 
      })
    } else {
      console.error('Geocode was not successful for the following reason: ' + status)
      window.alert('マップの検索結果が見つかりませんでした。')
    }
  })
}