document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 16,
    // loop: true,
    navigation: {
      nextEl: ".button-nextSlide",
      prevEl: ".button-prevSlide",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  //team-cards
  const swiper = new Swiper(".team-employee", {
    slidesPerView: 2,
    spaceBetween: 16,
    loop: true,

    navigation: {
      nextEl: ".button-nextEmployee",
      prevEl: ".button-prevEmployee",
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".feedback-content-swiper", {
    slidesPerView: 3,
    spaceBetween: 0,
    loop: false,

    navigation: {
      nextEl: ".button-nextFeedback",
      prevEl: ".button-prevFeedback",
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".articles-swiper", {
    slidesPerView: 3,
    spaceBetween: 24,
    loop: false,

    navigation: {
      nextEl: ".button-nextArticle",
      prevEl: ".button-prevArticle",
    },
  });
});

const menuButton = document.querySelector(".nav_leftGroup_menuBut");
const dropList = document.querySelector(".dropdown-content");
let isPressed = false;

menuButton.addEventListener("click", () => {
  if (!isPressed) {
    dropList.classList.remove("hidden");
    setTimeout(() => (dropList.style.cssText = `opacity: 1;`), 200);
  } else {
    dropList.style.cssText = `opacity: 0;`;
    setTimeout(() => dropList.classList.add("hidden"), 300);
  }
  isPressed = !isPressed;
});
