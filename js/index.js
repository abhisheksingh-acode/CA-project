// sticky navbar
$(document).scroll(() => {
  var ht = document
    .querySelector(".navbar")
    .nextElementSibling.getBoundingClientRect().top;

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

    // load container when click
    let activeIndex = $(this).index();
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
