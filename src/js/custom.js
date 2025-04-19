
$(document).ready(function () {
  popular();
  animateAllSections();

})

function popular() {
  $("#popularproduct").owlCarousel({
    items: 5,
    autoplay: false,
    smartSpeed: 700,
    loop: false,
    autoplayHoverPause: true,
    nav: false,
    dots: false,
    navText: [

    ],
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
      1200: {
        items: 5,
      },
    },
  });
}

function animateAllSections() {
  // Hero Section Animation
  $(".hero-section").waypoint(
    function() {
      $(".hero-section h1").addClass("animate__animated animate__fadeInDown");
      $(".hero-section p").addClass("animate__animated animate__fadeIn animate__delay-1s");
      $(".hero-section button").addClass("animate__animated animate__fadeInUp animate__delay-1s");
      this.destroy();
    }, {
      offset: "80%"
    }
  );

  // Popular Items Section
  $("#popular").waypoint(
    function() {
      $("#popular h1").addClass("animate__animated animate__fadeInLeft");
      $("#popularproduct").addClass("animate__animated animate__fadeInRight");
      this.destroy();
    }, {
      offset: "80%"
    }
  );

  // Thai Cuisine (Finest) Section
  $("#finest").waypoint(
    function() {
      $(".finest-imagebox").addClass("animate__animated animate__slideInLeft");
      $(".finest-textbox").addClass("animate__animated animate__slideInRight animate__delay-1s");
      $(".finest-header").addClass("animate__animated animate__fadeInDown");
      $(".finest-textbox p").addClass("animate__animated animate__fadeIn animate__delay-1s");
      $(".finest-textbox button").addClass("animate__animated animate__fadeInUp animate__delay-2s");
      this.destroy();
    }, {
      offset: "70%"
    }
  );

  // Chefs Section
  $("#chefs").waypoint(
    function() {
      $("#chefs").parent().find("h1").addClass("animate__animated animate__fadeInDown");
      $("#chefs > div:nth-child(1)").addClass("animate__animated animate__fadeInLeft animate__delay-1s");
      $("#chefs > div:nth-child(2)").addClass("animate__animated animate__fadeInUp animate__delay-1s");
      $("#chefs > div:nth-child(3)").addClass("animate__animated animate__fadeInRight animate__delay-1s");
      this.destroy();
    }, {
      offset: "70%"
    }
  );

  // Footer Animation
  $("footer").waypoint(
    function() {
      $("footer").addClass("animate__animated animate__fadeIn");
      this.destroy();
    }, {
      offset: "100%"
    }
  );
}

