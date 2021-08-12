/////// sticky navbar ////////
$(document).scroll(() => {
  var ht = document.querySelector("header").getBoundingClientRect().top;
  ht < 40
    ? $(".navbar").addClass("sticky-nav")
    : $(".navbar").removeClass("sticky-nav");
});

/////// typed animation ////////
var options = {
  strings: ["income tax", "gst service", "marketing service"],
  typeSpeed: 60,
  loop: true,
  loopCount: Infinity,
  showCursor: true,
  cursorChar: "|",
};
var typed = new Typed("input", options);

///////// tabs switch ajax //////////

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

/////// swiper blog slider//////////

let swiperBlog = new Swiper(".swiper-container-blog", {
  slidesPerView: "auto",
  spaceBetween: 30,
  // autoplay: {
  //   delay: 2300,
  //   disableOnInteraction: false,
  // },
  breakpoints: {
    1180: {
      slidesPerView: "auto",
      spaceBetween: 30,
    },
    920: {
      slidesPerView: "auto",
      spaceBetween: 30,
    },
    576: {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
    },
  },
  navigation: {
    nextEl: ".swiper-next-btn",
    prevEl: ".swiper-prev-btn",
  },
});

/////// swiper testimonial slider//////////
let swiperTestimonial = new Swiper(".swiper-container-testimonial", {
  effect: "coverflow",
  loop: true,
  centeredSlides: true,
  spaceBetween: 60,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 50,
    modifier: 2,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
});
