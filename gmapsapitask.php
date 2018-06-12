<?php
/**
*Plugin Name: Google maps API task
**/
  $locations = $wpdb->get_results("SELECT * FROM locations LIMIT 2;");

  function gmaps_api_task()
  {
    global $locations;
    $content = '<div id="map" style="height: 400px; width: 100%;"></div>';
  ?>
  <script>
    <?php echo 'var locations_array = '.json_encode($locations).';';?>;   
    console.log(locations_array);
    function initMap() {
      var uluru = {lat: -25.363, lng: 31.044};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9HxwNfmUEyBe1F2NV72n2PJRxy81ss9Q&callback=initMap">
  </script>
  <?php
    return $content;
  }
  add_shortcode('gmapsapitask', 'gmaps_api_task');
?>
