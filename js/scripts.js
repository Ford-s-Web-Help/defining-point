(function ($) {
  $(document).ready(function () {
    // Slideshow Active Class
    $(".slideshow .carousel-item:first-child").addClass("active");

    const el = document.getElementById("slideWrap");

    $("#slideWrap").on("mousemove", function (event) {
      $("#slideOverlay").css("right", el.offsetWidth - event.clientX);
    });

    // Enable Text Animation
    $(".tlt").textillate({
      // the default selector to use when detecting multiple texts to animate
      selector: ".texts",

      // enable looping
      loop: true,

      // sets the minimum display time for each text before it is replaced
      minDisplayTime: 4000,

      // sets the initial delay before starting the animation
      // (note that depending on the in effect you may need to manually apply
      // visibility: hidden to the element before running this plugin)
      initialDelay: 0,

      // set whether or not to automatically start animating
      autoStart: true,

      // custom set of 'in' effects. This effects whether or not the
      // character is shown/hidden before or after an animation
      inEffects: [],

      // custom set of 'out' effects
      outEffects: ["fadeOut"],

      // in animation settings
      in: {
        // set the effect name
        effect: "fadeIn",

        // set the delay factor applied to each consecutive character
        delayScale: 1.5,

        // set the delay between each character
        delay: 40,

        // set to true to animate all the characters at the same time
        sync: false,

        // randomize the character sequence
        // (note that shuffle doesn't make sense with sync = true)
        shuffle: true,

        // reverse the character sequence
        // (note that reverse doesn't make sense with sync = true)
        reverse: false,

        // callback that executes once the animation has finished
        callback: function () {},
      },

      // out animation settings.
      out: {
        effect: "fadeOut",
        delayScale: 1.5,
        delay: 40,
        sync: false,
        shuffle: true,
        reverse: true,
        callback: function () {},
      },

      // set the type of token to animate (available types: 'char' and 'word')
      type: "char",
    });

    // Work Page Masonry
    $(".grid .grid-item:nth-child(odd)").addClass("grid-item--width2");

   var $grid = $(".grid").isotope({
      itemSelector: ".grid-item",
      layoutMode: "fitRows",
    });

// bind filter button click
    $('.filters-list-group').on( 'click', 'button', function() {
      var $filterValue = $( this ).attr('data-filter');
      // use filterFn if matches value
      $grid.isotope({ filter: $filterValue });
    });
// change is-checked class on buttons
    $('.list-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'button', function() {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
      });
    });


    /************
      Live Icons
    ************/

    // Globe
    $("#some_id_or_.some_class").addLiviconEvo({
      name: "globe.svg",
      style: "lines",
      size: "120px",
      strokeStyle: "original",
      strokeWidth: "original",
      tryToSharpen: true,
      rotate: "none",
      flipHorizontal: false,
      flipVertical: false,
      strokeColor: "#a6cc59",
      strokeColorAction: "#b3421b",
      strokeColorAlt: "#F9B32F",
      strokeColorAltAction: "#ab69c6",
      fillColor: "#00549b",
      fillColorAction: "#ff926b",
      solidColor: "#00549b",
      solidColorAction: "#4C5A69",
      solidColorBg: "#ffffff",
      solidColorBgAction: "#ffffff",
      colorsOnHover: "none",
      colorsHoverTime: 0.3,
      colorsWhenMorph: "none",
      brightness: 0.1,
      saturation: 0.07,
      morphState: "start",
      morphImage: "none",
      allowMorphImageTransform: false,
      strokeWidthFactorOnHover: "none",
      strokeWidthOnHoverTime: 0.3,
      keepStrokeWidthOnResize: false,
      animated: true,
      eventType: "hover",
      eventOn: "self",
      autoPlay: false,
      delay: 0,
      duration: "default",
      repeat: "default",
      repeatDelay: "default",
      drawOnViewport: false,
      viewportShift: "oneHalf",
      drawDelay: 0,
      drawTime: 1,
      drawStagger: 0.1,
      drawStartPoint: "middle",
      drawColor: "same",
      drawColorTime: 1,
      drawReversed: false,
      drawEase: "Power1.easeOut",
      eraseDelay: 0,
      eraseTime: 1,
      eraseStagger: 0.1,
      eraseStartPoint: "middle",
      eraseReversed: true,
      eraseEase: "Power1.easeOut",
      touchEvents: false
    });

    // Blub
    $("#some_id_or_.some_class").addLiviconEvo({
      name: "bulb.svg",
      style: "lines",
      size: "120px",
      strokeStyle: "original",
      strokeWidth: "original",
      tryToSharpen: true,
      rotate: "none",
      flipHorizontal: false,
      flipVertical: false,
      strokeColor: "#00549b",
      strokeColorAction: "#b3421b",
      strokeColorAlt: "#F9B32F",
      strokeColorAltAction: "#ab69c6",
      fillColor: "#00549b",
      fillColorAction: "#ff926b",
      solidColor: "#00549b",
      solidColorAction: "#4C5A69",
      solidColorBg: "#ffffff",
      solidColorBgAction: "#ffffff",
      colorsOnHover: "none",
      colorsHoverTime: 0.3,
      colorsWhenMorph: "none",
      brightness: 0.1,
      saturation: 0.07,
      morphState: "start",
      morphImage: "none",
      allowMorphImageTransform: false,
      strokeWidthFactorOnHover: "none",
      strokeWidthOnHoverTime: 0.3,
      keepStrokeWidthOnResize: false,
      animated: true,
      eventType: "hover",
      eventOn: "self",
      autoPlay: false,
      delay: 0,
      duration: "default",
      repeat: "default",
      repeatDelay: "default",
      drawOnViewport: false,
      viewportShift: "oneHalf",
      drawDelay: 0,
      drawTime: 1,
      drawStagger: 0.1,
      drawStartPoint: "middle",
      drawColor: "same",
      drawColorTime: 1,
      drawReversed: false,
      drawEase: "Power1.easeOut",
      eraseDelay: 0,
      eraseTime: 1,
      eraseStagger: 0.1,
      eraseStartPoint: "middle",
      eraseReversed: true,
      eraseEase: "Power1.easeOut",
      touchEvents: false
    });

    // Tablet
    $("#some_id_or_.some_class").addLiviconEvo({
      name: "responsive.svg",
      style: "lines",
      size: "120px",
      strokeStyle: "original",
      strokeWidth: "original",
      tryToSharpen: true,
      rotate: "none",
      flipHorizontal: false,
      flipVertical: false,
      strokeColor: "#ed3e18",
      strokeColorAction: "#b3421b",
      strokeColorAlt: "#F9B32F",
      strokeColorAltAction: "#ab69c6",
      fillColor: "#00549b",
      fillColorAction: "#ff926b",
      solidColor: "#00549b",
      solidColorAction: "#4C5A69",
      solidColorBg: "#ffffff",
      solidColorBgAction: "#ffffff",
      colorsOnHover: "none",
      colorsHoverTime: 0.3,
      colorsWhenMorph: "none",
      brightness: 0.1,
      saturation: 0.07,
      morphState: "start",
      morphImage: "none",
      allowMorphImageTransform: false,
      strokeWidthFactorOnHover: "none",
      strokeWidthOnHoverTime: 0.3,
      keepStrokeWidthOnResize: false,
      animated: true,
      eventType: "hover",
      eventOn: "self",
      autoPlay: false,
      delay: 0,
      duration: "default",
      repeat: "default",
      repeatDelay: "default",
      drawOnViewport: false,
      viewportShift: "oneHalf",
      drawDelay: 0,
      drawTime: 1,
      drawStagger: 0.1,
      drawStartPoint: "middle",
      drawColor: "same",
      drawColorTime: 1,
      drawReversed: false,
      drawEase: "Power1.easeOut",
      eraseDelay: 0,
      eraseTime: 1,
      eraseStagger: 0.1,
      eraseStartPoint: "middle",
      eraseReversed: true,
      eraseEase: "Power1.easeOut",
      touchEvents: false
    });

    // Camera
    $("#some_id_or_.some_class").addLiviconEvo({
      name: "camcoder.svg",
      style: "lines",
      size: "120px",
      strokeStyle: "original",
      strokeWidth: "original",
      tryToSharpen: true,
      rotate: "none",
      flipHorizontal: true,
      flipVertical: false,
      strokeColor: "#ecb355",
      strokeColorAction: "#b3421b",
      strokeColorAlt: "#F9B32F",
      strokeColorAltAction: "#ab69c6",
      fillColor: "#00549b",
      fillColorAction: "#ff926b",
      solidColor: "#00549b",
      solidColorAction: "#4C5A69",
      solidColorBg: "#ffffff",
      solidColorBgAction: "#ffffff",
      colorsOnHover: "none",
      colorsHoverTime: 0.3,
      colorsWhenMorph: "none",
      brightness: 0.1,
      saturation: 0.07,
      morphState: "start",
      morphImage: "none",
      allowMorphImageTransform: false,
      strokeWidthFactorOnHover: "none",
      strokeWidthOnHoverTime: 0.3,
      keepStrokeWidthOnResize: false,
      animated: true,
      eventType: "hover",
      eventOn: "self",
      autoPlay: false,
      delay: 0,
      duration: "default",
      repeat: "default",
      repeatDelay: "default",
      drawOnViewport: false,
      viewportShift: "oneHalf",
      drawDelay: 0,
      drawTime: 1,
      drawStagger: 0.1,
      drawStartPoint: "middle",
      drawColor: "same",
      drawColorTime: 1,
      drawReversed: false,
      drawEase: "Power1.easeOut",
      eraseDelay: 0,
      eraseTime: 1,
      eraseStagger: 0.1,
      eraseStartPoint: "middle",
      eraseReversed: true,
      eraseEase: "Power1.easeOut",
      touchEvents: false
    });
  });
})(jQuery);
