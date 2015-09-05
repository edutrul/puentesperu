(function($) {
  Drupal.behaviors.puentesperu = {
    attach: function (context, settings) {      
      // When clicking an item, relocates map.
      $('.production-result').click(function() {
        var point = $(this).data('point').replace(/[\(\)]/g, '').split(' ');
        console.log(point);
        Drupal.geolocationViews['geolocation-views-puentes-attachment-1'].map.setCenter({lat: parseFloat(point[1]), lng: parseFloat(point[2])});
        Drupal.geolocationViews['geolocation-views-puentes-attachment-1'].map.setZoom(15);
      });
    }
  };
})(jQuery);