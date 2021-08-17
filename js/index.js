// sticky navbar
$(document).scroll(() => {
  var ht = document
    .querySelector(".navbar")
    .nextElementSibling.getBoundingClientRect().top;

  $(".navbar").next().addClass("position-relative");
  if (ht < 40) {
    $(".navbar").addClass("sticky-nav");
  } else {
    $(".navbar").removeClass("sticky-nav");
  }
});

// our service tab switch ajax

$(document).ready(() => {
  $(".tabs").click(function () {
    // tab bar active class
    $(".active-li").removeClass("active-li");
    $(this).addClass("active-li");
    let activeIndex = $(this).index();

    // check radio
    $("li input[type=radio]").removeAttr("checked");
    $(".active-li input").attr("checked", "checked");

    // load container when click
    $(".tab-container").addClass("d-none");
    $(".tab-container").eq(activeIndex).removeClass("d-none");
    console.log($(".tab-container").eq(activeIndex));
  });
});

// swiper blog slider

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

// swiper testimonial slider
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

// swiper testimonial slider
let swiperWhyChoose = new Swiper(".swiper-container-why-choose", {
  loop: true,
  centeredSlides: true,
  spaceBetween: 100,
  speed: 2000,
  grabCursor: true,
  slidesPerView: "auto",
  navigation: {
    nextEl: ".swiper-next-btn",
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
});
// scroll bar tab indicator

$(document).ready(() => {
  let count = $(".bar-item").length;

  for (let i = 0; i < count; i++) {
    let id = $(".scroll-section").eq(i).attr("id");
    $(".bar-item")
      .eq(i)
      .attr("href", "#" + id);
  }

  $(document).scroll(function () {
    let el = $(".scroll-section");

    // find active el
    el.each(function (index, val) {
      var offset = $(this).offset();
      var top = offset.top;
      let dist = top - $(window).scrollTop();

      // add active class
      if (dist < 200 && dist > 0) {
        $(".active-li").removeClass("active-li");
        $(".bar-list li").eq(index).addClass("active-li");
      }
    });
  });
});

// cards tilt Animation
$(document).ready(() => {
  // header icon cards
  $(".inner").tilt({
    maxTilt: 20,
    perspective: 1400,
    easing: "cubic-bezier(.03,.98,.52,.99)",
    speed: 1200,
    glare: true,
    maxGlare: 0.2,
    scale: 1.1,
  });

  // services cards
  $(".inner-card").tilt({
    maxTilt: 15,
    perspective: 1200,
    easing: "cubic-bezier(.03,.98,.52,.99)",
    speed: 1200,
    glare: true,
    maxGlare: 0.2,
    scale: 1,
  });
});

$(document).on("click mousemove", "body", function (e) {
  var x = e.clientX;
  var y = e.clientY;
  // alert(x);
  var newposX = x - 100;
  var newposY = y - 20;
  $(".circle").css(
    "transform",
    "translate3d(" + newposX + "px," + newposY + "px,0px)"
  );
});
