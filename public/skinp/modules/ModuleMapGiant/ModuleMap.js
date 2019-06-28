if (typeof window.qqMap == 'undefined') window.qqMap = {}
function initMap(moduleid, layout, option) {
    var module = $('#module_' + moduleid);
    var map,
        marker,
        infoWin = null;
  function moduleMap(latitude, longitude, title) {
      var center = new qq.maps.LatLng(latitude, longitude),
          geocoder = new qq.maps.Geocoder();
      var map = new qq.maps.Map(
          document.getElementById('mapContainer' + moduleid),
          {
              center: center,
              zoom: 13
          }
      );
      infoWin = window.qqMap[moduleid] = new qq.maps.InfoWindow({
          map: map
      });
      infoWin.open();
      //setContent()设置信息窗口显示区的内容
      //设置服务请求成功的回调函数
      if (title == null) {
        //对指定经纬度进行解析
          geocoder.getAddress(center);
          geocoder.setComplete(function (result) {
              infoWin.setContent(result.detail.address)
          });
      } else {
          infoWin.setContent(title);
      }
      infoWin.setPosition(map.getCenter());
      marker = new qq.maps.Marker({
          position: center,
          draggable: true,
          map: map
      });
  }
  moduleMap(option.Latitude, option.Longitude, option.ItemTitle)
  window['initMapFunc' + moduleid] = function() {
    window.qqMap[moduleid].setContent(option.ItemTitle)
  }
}
