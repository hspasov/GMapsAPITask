<?php
/**
*Plugin Name: Google maps API task
**/

    function gmaps_api_task()
    {
        $content = '<div id="map" style="height: 400px; width: 100%;"></div>';
    ?>
    <script>
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtClkLrQakqs3VuJVRm_dxl66z6RLJsqo&callback=initMap">
    </script>
    <?php
        return $content;
    }
    add_shortcode('gmapsapitask', 'gmaps_api_task');


?>
