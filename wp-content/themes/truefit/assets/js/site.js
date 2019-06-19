//=require picturefill/dist/picturefill.min.js

//=require formstone/dist/js/core.js

// require formstone/dist/js/background.js
//=require includes/background.js

//=require formstone/dist/js/checkpoint.js
//=require formstone/dist/js/carousel.js
//=require formstone/dist/js/mediaquery.js
//=require formstone/dist/js/navigation.js
//=require formstone/dist/js/swap.js
//=require formstone/dist/js/transition.js
//=require formstone/dist/js/touch.js

document.createElement( "picture" );

(function($) {

  Formstone.Ready(function() {

    $(".js-background").background().on("ready.background loaded.background", function() {
      // console.log("ready");
      // $(".js-background").background("play");
    });
    $(".js-carousel").carousel();
    $(".js-checkpoint, [data-checkpoint-animation]").checkpoint({
      offset: 100,
      reverse: true
    });
    $(".js-navigation").navigation();
    // $(".js-swap").swap();
    //
    // $(".js-jump_select").on("change", function(e) {
    //   var $target = $(e.currentTarget);
    //   var url = $target.val();
    //
    //   if (url) {
    //     window.location.href = url;
    //   }
    // });

    $(window).on("scroll", function() {
      var scrolTop = $(window).scrollTop();

      if (scrolTop > 50) {
        $(".home_header").addClass("scrolled");
      } else {
        $(".home_header").removeClass("scrolled");
      }
    });

  });

})(jQuery);


// // Scroll To
//
// (function($) {
//
// 	var $ScrollItems;
//
//   $(document).ready(function() {
//     init();
//   });
//
// 	function init() {
// 		$ScrollItems  = $('.js-scroll_to, a[href*="#"]').on("click", onScrollTo);
// 	}
//
//   function onScrollTo(e) {
// 		var $target = $(e.delegateTarget),
// 			  id = $target[0].hash;
//
//     var $to = $(id);
//
// 		if ($to.length) {
//       e.preventDefault();
//       e.stopPropagation();
//
//       scrollToElement(id);
//
//       $(document).trigger("scroll_to");
//     }
// 	}
//
// 	function scrollToElement(id) {
// 		var $to = $(id);
//
// 		if ($to.length) {
// 			var offset = $to.offset();
//
// 			scrollToPosition(offset.top);
// 		}
// 	}
//
// 	function scrollToPosition(top) {
//     // var offset = ($(window).width() >= 980) ? 80 : 60;
//     // var offset = 65;
//
// 		$("html, body").animate({ scrollTop: top });
// 	}
//
// })(jQuery);
