window.onload = function(){
  let init = '東京都千代田区';
  initMap(init);
  let btn = document.getElementById('btn')
  let address = document.getElementById('address');
  btn.onclick = function(){
    initMap(address.value);
};

const fileimage = document.querySelector('#inputGroupFile02');

fileimage.addEventListener('change', function() {
 
  previewImage(this);
});

}

function previewImage(obj)
{
	var fileReader = new FileReader();
	fileReader.onload = (function() {
		document.getElementById('preview').src = fileReader.result;
	});
	fileReader.readAsDataURL(obj.files[0]);
}

 let initMap =function (address) {
  const geocoder = new google.maps.Geocoder();
  geocoder.geocode( { address: address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      const latlng = {
        lat: results[0].geometry.location.lat(),
        lng: results[0].geometry.location.lng()
      }
      const opts = {
        zoom: 20,
        center: new google.maps.LatLng(latlng)
      }
      const map = new google.maps.Map(document.getElementById('map'), opts)
      new google.maps.Marker({
        position: latlng,
        map: map 
      })
    } else {
      window.alert('マップの検索結果が見つかりませんでした。')
    }
  })
}

