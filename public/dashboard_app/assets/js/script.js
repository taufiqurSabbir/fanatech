// navbar toggler button js code here
$(document).ready(function () {
  $("#navbar ul li a").click(function () {
    $("#navbar .navbar-collapse").collapse("hide");
  });
});

// pop out chat box code here
const chatBoxToggle = () => {
  const chatElement = document.getElementById("chat-modal");
  chatElement.classList.toggle("show");
};

// portfolio filter js code here
$(document).ready(function () {
  $(".portfolios").filterData({
    aspectRatio: "8:5",
    nOfRow: 3,
    itemDistance: 0,
  });
  $(".portfolio-controllers button").on("click", function () {
    $(".portfolio-controllers button").removeClass("active-work");
    $(this).addClass("active-work");
  });
});

// veno box image pop up js code here
$(document).ready(function () {
  new VenoBox({
    selector: ".my-custom-links",
    numeration: false,
    infinigall: false,
    share: false,
    spinner: "wave",
  });
});

// counter js code here
$(document).ready(function () {
  let counter_item = document.querySelectorAll("#about-section .counter-item");
  let counter_arr = Array.from(counter_item);

  counter_arr.map((item) => {
    let counter_start = 0;
    let counter_end = item.dataset.num;
    let counter_speed = item.dataset.speed;

    function counterjs() {
      item.innerHTML = counter_start;
      if (counter_start == counter_end) {
        clearInterval(counter_stop);
      }
    }

    let counter_stop = setInterval(() => {
      counterjs();
      counter_start++;
    }, counter_speed);
  });
});

/* quality Swiper js slider */
$(document).ready(function () {
  const swiper = new Swiper(".quality-swiper", {
    // Default parameter
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      waitForTransition: true,
    },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 1,
        spaceBetween: 80,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
});

/* project swiper js slider */
$(document).ready(function () {
  const swiper = new Swiper(".project-swiper", {
    // Default parameter
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      waitForTransition: true,
    },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 1,
        spaceBetween: 80,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
});

/* clients swiper js slider */
$(document).ready(function () {
  const swiper = new Swiper(".clients-swiper", {
    // Default parameter
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      waitForTransition: true,
    },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 1,
        spaceBetween: 80,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });
});

/* team swiper js slider */
$(document).ready(function () {
  const swiper = new Swiper(".team-swiper", {
    // Default parameter
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      waitForTransition: true,
    },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 1,
        spaceBetween: 80,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
});

/* testimonial swiper js slider */
$(document).ready(function () {
  const swiper = new Swiper(".testi-swiper", {
    // Default parameter
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      waitForTransition: true,
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 1,
        spaceBetween: 80,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
    },
  });
});

/* service deliver swiper js slider */
$(document).ready(function () {
  const swiper = new Swiper(".deliver-swiper", {
    // Default parameter
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      waitForTransition: true,
    },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 1,
        spaceBetween: 80,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
});

/* about slider swiper js slider */
$(document).ready(function () {
  const swiper = new Swiper(".about-swiper", {
    // Default parameter
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true,
    effect: "fade",
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      waitForTransition: true,
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 1,
        spaceBetween: 80,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
    },
  });
});

/* progress bar js code here */
jQuery(document).ready(function () {
  jQuery(".progress-bar").each(function () {
    jQuery(this)
      .find(".progress-content")
      .animate(
        {
          width: jQuery(this).attr("data-percentage"),
        },
        2000
      );

    jQuery(this)
      .find(".progress-number-mark")
      .animate(
        { left: jQuery(this).attr("data-percentage") },
        {
          duration: 2000,
          step: function (now, fx) {
            var data = Math.round(now);
            jQuery(this)
              .find(".percent")
              .html(data + "%");
          },
        }
      );
  });
});
