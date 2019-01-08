var $window = $(window),
        flexslider = {vars: {}};

function getGridSize() {

  return (window.innerWidth < 690) ? 1 :
          (window.innerWidth < 1025) ? 2 : 3;
}

$window.load(function () {

  $('.carousel').each(function (index) {
    var $carouselContainer = $(this);
    var $flexslider = $carouselContainer.find('.flexslider');

    $flexslider.flexslider({
      animation: "slide",
      animationSpeed: 400,
      animationLoop: true,
      itemWidth: 210,
      itemMargin: 0,
      directionNav: true,
      controlsContainer: $carouselContainer.find(".custom-controls-container"),
      customDirectionNav: $carouselContainer.find(".custom-navigation a"),
      minItems: getGridSize(),
      maxItems: getGridSize(),
      start: function (slider) {
        flexslider = slider;
      }
    });
  });

});

$window.resize(function () {
  var gridSize = getGridSize();

  $('.carousel .flexslider').each(function () {
    var slider = $(this).data('flexslider');
    slider.vars.minItems = gridSize;
    slider.vars.maxItems = gridSize;
  });
//  flexslider.vars.minItems = gridSize;
//  flexslider.vars.maxItems = gridSize;

});

$(window).load(function () {
  $('.home-slider .flexslider').flexslider({
    animation: "fade",
    controlNav: false,
    directionNav: true,
    animationLoop: true,
    slideshow: false,
    touch: false,
    animationSpeed: 1000,
    controlsContainer: $(".custom-controls-container"),
    customDirectionNav: $(".custom-navigation a"),
    start: function (slider) {
      $('.home-slider').addClass('loaded-slider');
    }
  });
});