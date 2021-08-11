/////// sticky navbar ////////
$(document).scroll(() => {
  var ht = document.querySelector("header").getBoundingClientRect().top;
  ht < 40
    ? $(".navbar").addClass("sticky-nav")
    : $(".navbar").removeClass("sticky-nav");
});

var options = {
  strings: ["income tax", "gst service", "marketing service"],
  typeSpeed: 60,
  loop: true,
  loopCount: Infinity,
  showCursor: true,
  cursorChar: "|",
};
var typed = new Typed("input", options);

// tabs switch ajax
$(document).ready(() => {
  $(".tabs").click(function () {
    // tab bar active class
    $(".active-li").removeClass("active-li");
    $(this).addClass("active-li");

    // load container when click
    let activeIndex = $(this).index();
    $(".tab-container").addClass("d-none");
    $(".tab-container").eq(activeIndex).removeClass("d-none");
    console.log($(".tab-container").eq(activeIndex));
  });
});
