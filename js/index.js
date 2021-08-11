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
