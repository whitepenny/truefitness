<?php
  $address = get_field( 'address', 'option' );
  $api_key = get_field( 'maps_api_key', 'option' );
?>

<div class="location_image js-checkpoint" data-checkpoint-animation="fade-up">
  <div class="map_wrapper location_detail_map">
    <iframe width="100%" height="440" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=<?php echo $api_key; ?>&q=<?php echo urlencode( strip_tags( $address ) ); ?>" allowfullscreen></iframe>
  </div>
</div>
