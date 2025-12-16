jQuery(document).ready(function () {
  // startOwlSlider();
  setHamburgerActiveToggle();
});
jQuery(window).scroll(function () {
  // hideOnScroll();
});
jQuery(window).resize(function () {});

function setHamburgerActiveToggle() {
  // Toggle mobile menu
  jQuery(".hamburger-menu").on("click", function () {
    jQuery(this).toggleClass("active");
    jQuery(".mobile-menu-overlay").toggleClass("active");
    jQuery(".mobile-menu-backdrop").toggleClass("active");
    jQuery("body, html").toggleClass("stop-scrolling");
  });

  // Close menu when clicking backdrop
  jQuery(".mobile-menu-backdrop").on("click", function () {
    jQuery(".hamburger-menu").removeClass("active");
    jQuery(".mobile-menu-overlay").removeClass("active");
    jQuery(this).removeClass("active");
    jQuery("body, html").removeClass("stop-scrolling");
  });

  // Close menu when clicking a menu link
  jQuery(".mobile-nav-menu a").on("click", function () {
    jQuery(".hamburger-menu").removeClass("active");
    jQuery(".mobile-menu-overlay").removeClass("active");
    jQuery(".mobile-menu-backdrop").removeClass("active");
    jQuery("body, html").removeClass("stop-scrolling");
  });
}

function hideOnScroll() {
  //needs work
  var currentScrollTop = jQuery(window).scrollTop();
  if (togglePosition < currentScrollTop && togglePosition > 180 && !isMobile) {
    mainHeader.addClass("hide");
  } else {
    mainHeader.removeClass("hide");
  }
  togglePosition = currentScrollTop;
}

function startOwlSlider() {
  jQuery(".owl-carousel").owlCarousel({
    dots: false,
    nav: true,
    margin: 12,
    navText: [
      '<img class="checkmark" src="/wp-content/themes/valkentij-theme/images/check.svg" alt="checkmark icon">',
      '<img class="checkmark" src="/wp-content/themes/valkentij-theme/images/check.svg" alt="checkmark icon">',
    ],
    responsive: {
      0: {
        items: 1,
        stagePadding: 32,
      },
      768: {
        items: 2,
      },
      1199: {
        items: 3,
      },
    },
  });
}

// AJAX FILTERS
function postcodeAutofill() {
  console.log("main.js loaded");
  jQuery("#input_3_7").on("change", function () {
    console.log("input jquery hi!");

    // Get the value from the input field
    var postcodeValue = jQuery("#input_3_3").val();
    var houseNumberValue = jQuery(this).val();

    jQuery.ajax({
      // Use the input value in the URL
      url:
        "https://postcode.tech/api/v1/postcode?postcode=" +
        encodeURIComponent(postcodeValue) +
        "&number=" +
        encodeURIComponent(houseNumberValue),
      headers: {
        Authorization: "Bearer 28d9bd81-3f4d-4cec-a05d-4ec732e9f578",
      },
      method: "GET",

      success: function (data) {
        jQuery("#input_3_5").val(data.city);
        // Handle the successful response
        console.log(data);
        // Populate Gravity Forms fields with the received data
        // populateGravityFormsFields(data);
      },
      error: function (error) {
        // Handle errors
        console.error("Error fetching KVK data:", error);
      },
    });
  });
}
function setOnBtnAjaxFilter() {
  jQuery(".filter-change").on("change", function () {
    jQuery("#all-projects").addClass("fade-out");
    jQuery("#loader").show();

    jQuery.ajax({
      //object from functions.php
      url: ajax_object.ajax_url,
      type: "POST",
      data: {
        action: "filter_projects",
        filters: {
          budget: {
            budgetFrom: jQuery("input[name='budget-from']").val(),
            budgetTo: jQuery("input[name='budget-to']").val(),
            field: "budget",
          },
          stays: {
            staysAmount: jQuery("#filter-stays").val(),
            field: "aantal_nachten",
          },
          people: {
            peopleAmount: jQuery("#filter-people").val(),
            field: "max_aantal_bruiloftsgasten",
          },
        },
      },
      success: function (response) {
        var responseData = JSON.parse(response);
        var htmlContent = responseData.html;
        var postCount = responseData.postCount;

        jQuery("#loader").hide();
        jQuery("#all-projects").html(htmlContent);
        jQuery("#all-projects").css("opcacity", 1);
        jQuery("#all-projects").removeClass("fade-out");
        jQuery("#filter-results").text(postCount);
      },
    });
  });
}

jQuery(document).ready(function ($) {
  $(".slider-gallery-carousel").owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    items: 1,
  });
});

jQuery(document).ready(function ($) {
  $(".afsluiter-carousel").owlCarousel({
    loop: false,
    margin: 15,
    nav: false,
    dots: false,
    autoplay: false,
    autoplayTimeout: 3000,
    responsive: {
      1000: {
        items: 4,
      },
      0: {
        items: 1,
        loop: true,
        autoplay: true,
      },
    },
  });
});

jQuery(document).ready(function ($) {
  function initCarousel() {
    if ($(window).width() < 1400) {
      if (!$(".mobile-carousel").hasClass("owl-loaded")) {
        $(".mobile-carousel").owlCarousel({
          items: 1,
          loop: true,
          autoplay: true,
          autoplayTimeout: 5000,
          autoplayHoverPause: true,
          nav: true,
          dots: true,
          navText: [
            '<i class="fa fa-chevron-left"></i>',
            '<i class="fa fa-chevron-right"></i>',
          ],
          responsive: {
            0: {
              items: 1,
              nav: false,
            },
            768: {
              items: 1,
              nav: true,
            },
          },
        });
      }
    } else {
      if ($(".mobile-carousel").hasClass("owl-loaded")) {
        $(".mobile-carousel")
          .trigger("destroy.owl.carousel")
          .removeClass("owl-loaded");
      }
    }
  }

  // Initialize on page load
  initCarousel();

  // Reinitialize on window resize
  $(window).resize(function () {
    initCarousel();
  });
});

inView(".hero").on("enter", (el) => {
  el.classList.add("in-view");
});

inView(".contact-form").on("enter", (el) => {
  el.classList.add("in-view");
});

inView(".text-block").on("enter", (el) => {
  el.classList.add("in-view");
});
inView(".slider").on("enter", (el) => {
  el.classList.add("in-view");
});

inView(".afsluiter").on("enter", (el) => {
  el.classList.add("in-view");
});
