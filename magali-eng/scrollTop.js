$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 40) {
      $("#ScrollTop").fadeIn();
    } else {
      $("#ScrollTop").fadeOut();
    }
  });

  $("#ScrollTop").click(function() {
    $(".mainbag").css("transform", "translate3d(0, 0, 0)");
  });
});
