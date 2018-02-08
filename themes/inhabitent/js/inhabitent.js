(function dogSleep($) {
  $("#search-toggle").on("click", function() {
    $("#search-field")
      .animate({ width: "toggle" }, 500)
      .focus();
  });

  $("#search-field").on("blur", function() {
    $("#search-field").animate({ width: "toggle" }, 500);
  });

  $("#search-field").animate({ width: "toggle" }, 0);
})(jQuery);

(function($) {
  $(window).scroll(function() {
    event.preventDefault();
    var y = $(window).scrollTop();
    if (y >= 700) {
      $(".sticky-header").addClass("sticky-display");
    } else {
      $(".sticky-header").removeClass("sticky-display");
    }
  });
})(jQuery);
