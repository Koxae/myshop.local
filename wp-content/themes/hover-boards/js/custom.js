// Testimonial Section
jQuery(document).ready(function() {
  jQuery('.testimonial-section .owl-carousel').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    navText: ["<span class='left-btn p-3'></span>", "<span class='right-btn p-3'></span>"], 
    dots: false,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    768: { 
      items: 2 
    },
    992: { 
      items: 2 
    },
    1200: { 
      items: 3 
    }
  },
  autoplay: true,
  });
});

// News Section
jQuery(document).ready(function() {
  jQuery('.news-section .owl-carousel').owlCarousel({
    loop: true,
    margin: 15,
    nav: false, 
    dots: false,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    768: { 
      items: 2 
    },
    992: { 
      items: 2 
    },
    1200: { 
      items: 3 
    }
  },
  autoplay: true,
  });
});

// Scroll to Top
window.onscroll = function() {
  const hover_boards_button = document.querySelector('.scroll-top-box');
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    hover_boards_button.style.display = "block";
  } else {
    hover_boards_button.style.display = "none";
  }
};

document.querySelector('.scroll-top-box a').onclick = function(event) {
  event.preventDefault();
  window.scrollTo({top: 0, behavior: 'smooth'});
};

// Category slider
jQuery(document).ready(function($) {
  // Add Owl Carousel class to WooCommerce category list
    $('.wc-block-product-categories-list').addClass('owl-carousel');

    // Initialize Owl Carousel
    $('.product-category-section .owl-carousel').owlCarousel({
    loop: true,
    margin: 50,
    nav: false,
    navText: ["<span class='left-btn p-3'></span>", "<span class='right-btn p-3'></span>"], 
    dots: false,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    500: { 
      items: 2 
    },
    992: { 
      items: 3 
    },
    1200: { 
      items: 4 
    }
  },
  autoplay: true,
  });
});

// Product slider
jQuery(document).ready(function() {
  jQuery('.product-section .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ["<span class='left-btn p-3'></span>", "<span class='right-btn p-3'></span>"], 
    dots: false,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    768: { 
      items: 2 
    },
    992: { 
      items: 2 
    },
    1200: { 
      items: 4 
    }
  },
  autoplay: true,
  });
});

// products tabs
document.addEventListener("DOMContentLoaded", () => {
  const hover_boards_tabTitles = [...document.querySelectorAll(".tab-title")];
  const hover_boards_tabContents = [...document.querySelectorAll(".tab-content")];

  if (!hover_boards_tabTitles.length) return;

  // Default: activate first tab
  hover_boards_tabTitles.forEach((tab, index) => {
    tab.classList.toggle("active", index === 0);
    tab.setAttribute("tabindex", "0"); // make focusable by keyboard
  });
  hover_boards_tabContents.forEach((content, index) => {
    content.classList.toggle("active", index === 0);
  });

  // Mouse click handling (FIXED)
  document.addEventListener("click", (e) => {
    const hover_boards_clickedTab = e.target.closest(".tab-title");
    if (hover_boards_clickedTab) {
      const hover_boards_clickedIndex = hover_boards_tabTitles.indexOf(hover_boards_clickedTab);
      if (hover_boards_clickedIndex !== -1) {
        hover_boards_setActive(hover_boards_clickedIndex);
      }
    }
  });

  // Keyboard navigation
  document.addEventListener("keydown", (e) => {
    const hover_boards_activeIndex = hover_boards_tabTitles.findIndex(tab => tab.classList.contains("active"));
    let hover_boards_newIndex = hover_boards_activeIndex;

    if (e.key === "ArrowRight") {
      hover_boards_newIndex = (hover_boards_activeIndex + 1) % hover_boards_tabTitles.length;
      hover_boards_tabTitles[hover_boards_newIndex].focus();
      hover_boards_setActive(hover_boards_newIndex);
    } else if (e.key === "ArrowLeft") {
      hover_boards_newIndex = (hover_boards_activeIndex - 1 + hover_boards_tabTitles.length) % hover_boards_tabTitles.length;
      hover_boards_tabTitles[hover_boards_newIndex].focus();
      hover_boards_setActive(hover_boards_newIndex);
    } else if (e.key === "Enter" || e.key === " ") {
      const focusedIndex = hover_boards_tabTitles.indexOf(document.activeElement);
      if (focusedIndex !== -1) hover_boards_setActive(focusedIndex);
    }
  });

  function hover_boards_setActive(index) {
    hover_boards_tabTitles.forEach((tab, i) => tab.classList.toggle("active", i === index));
    hover_boards_tabContents.forEach((content, i) => content.classList.toggle("active", i === index));
  }
});