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
  });
})(jQuery);
