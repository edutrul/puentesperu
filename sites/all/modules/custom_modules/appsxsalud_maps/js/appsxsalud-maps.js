(function($) {
  Drupal.behaviors.appsxsalud = {
    attach: function (context, settings) {      
      // When clicking an item, relocates map.
      $('.campania-result').click(function() {
        var point = $(this).data('point').replace(/[\(\)]/g, '').split(' ');
        Drupal.geolocationViews['geolocation-views-mapa-campanias-attachment-1'].map.setCenter({lat: parseFloat(point[1]), lng: parseFloat(point[2])});
        Drupal.geolocationViews['geolocation-views-mapa-campanias-attachment-1'].map.setZoom(15);
      });
    }
  };
})(jQuery);