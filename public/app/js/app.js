/**
 * Dark Light Mode
 * Header Connect
 * Loadmore Item
 * headerFixed
 * retinaLogo
 * ajaxContactForm
 * mobileNav
 * ajaxSubscribe
 * alertBox
 * loadmore
 */

(function ($) {
  "use strict";

  //Scroll back to top
  function handlePreloader() {
    if ($(".preloader").length) {
      $("body").addClass("page-loaded");
      $(".preloader").delay(400).fadeOut(0);
    }
  }

  var themesflatTheme = {
    // Main init function
    init: function () {
      this.config();
      this.events();
    },

    // Define vars for caching
    config: function () {
      this.config = {
        $window: $(window),
        $document: $(document),
      };
    },

    // Events
    events: function () {
      var self = this;

      // Run on document ready
      self.config.$document.on("ready", function () {
        // Retina Logos
        self.retinaLogo();
      });

      // Run on Window Load
      self.config.$window.on("load", function () { });
    },

    // Retina Logos
    retinaLogo: function () {
      var retina = window.devicePixelRatio > 1 ? true : false;
      var $logo = $("#site-logo img");
      var $logo2 = $("#logo-footer img");
      var $logo_retina = $logo.data("retina");

      if (retina && $logo_retina) {
        $logo.attr({
          src: $logo.data("retina"),
          width: $logo.data("width"),
          height: $logo.data("height"),
        });
      }
      if (retina && $logo_retina) {
        $logo2.attr({
          src: $logo.data("retina"),
          width: $logo.data("width"),
          height: $logo.data("height"),
        });
      }
    },
  }; // end themesflatTheme

  // Start things up
  themesflatTheme.init();

  // Header Fixed
  var headerFixed = function () {
    if ($("body").hasClass("header-fixed")) {
      var nav = $("#header_main");
      if (nav.length) {
        var offsetTop = nav.offset().top,
          headerHeight = nav.height(),
          injectSpace = $("<div />", {
            height: headerHeight,
          }).insertAfter(nav);
        $(window).on("load scroll", function () {
          if ($(window).scrollTop() > 200) {
            nav.addClass("is-fixed");
            injectSpace.show();
          } else {
            nav.removeClass("is-fixed");
            injectSpace.hide();
          }

          if ($(window).scrollTop() > 400) {
            nav.addClass("is-small");
          } else {
            nav.removeClass("is-small");
          }
        });
      }
    }
  };
  var goTop = function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 800) {
        $("#scroll-top").addClass("show");
      } else {
        $("#scroll-top").removeClass("show");
      }
    });

    $("#scroll-top").on("click", function () {
      $("html, body").animate({ scrollTop: 0 }, 200, "easeInOutExpo");
      return false;
    });
  };

  //   // Dark Light Mode
  //   $(".sun").on('click', function (e) {
  //     e.preventDefault();
  //     $(".body").addClass("is_dark")

  //     document.getElementById("site-logo").src = "assets/images/logo/logo-dark.png";

  // });

  // $(".moon").on('click', function (e) {
  //     e.preventDefault();
  //     $(".body").removeClass("is_dark")

  //     document.getElementById("site-logo").src = "assets/images/logo/logo.png";

  // });

  // Mobile Navigation
  var mobileNav = function () {
    var mobile = window.matchMedia("(max-width: 1024px)");
    var wrapMenu = $(".left__main");
    var navExtw = $(".nav-extend.active");
    var navExt = $(".nav-extend.active").children();

    responsivemenu(mobile);

    mobile.addListener(responsivemenu);

    function responsivemenu(mobile) {
      if (mobile.matches) {
        $("#main-nav")
          .attr("id", "main-nav-mobi")
          .appendTo("#header_main")
          .hide()
          .children(".menu")
          .append(navExt)
          .find("li:has(ul)")
          .children("ul")
          .removeAttr("style")
          .hide()
          .before('<span class="arrow"></span>');
      } else {
        $("#main-nav-mobi")
          .attr("id", "main-nav")
          .removeAttr("style")
          .prependTo(wrapMenu)
          .find(".ext")
          .appendTo(navExtw)
          .parent()
          .siblings("#main-nav")
          .find(".sub-menu")
          .removeAttr("style")
          .prev()
          .remove();

        $(".mobile-button").removeClass("active");
        $(".mobile-button-style2").removeClass("active");
        $(".sub-menu").css({ display: "block" });
      }
    }
    $(document).on("click", ".mobile-button", function () {
      $(this).toggleClass("active");
      $("#main-nav-mobi").slideToggle();
    });
    $(document).on("click", ".mobile-button-style2", function () {
      $(this).toggleClass("active");
      $("#main-nav-mobi").slideToggle();
    });
    $(document).on("click", "#main-nav-mobi .arrow", function () {
      $(this).toggleClass("active").next().slideToggle();
    });
  };

  var alertBox = function () {
    $(document).on("click", ".close", function (e) {
      $(this).closest(".flat-alert").remove();
      e.preventDefault();
    });
  };

  var flatAccordion = function () {
    var args = { duration: 600 };
    $(".flat-toggle .toggle-title.active").siblings(".toggle-content").show();

    $(".flat-toggle.enable .toggle-title").on("click", function () {
      $(this).closest(".flat-toggle").find(".toggle-content").slideToggle(args);
      $(this).toggleClass("active");
    }); // toggle

    $(".flat-accordion .toggle-title").on("click", function () {
      $(".flat-accordion .flat-toggle").removeClass("active");
      $(this).closest(".flat-toggle").toggleClass("active");

      if (!$(this).is(".active")) {
        $(this)
          .closest(".flat-accordion")
          .find(".toggle-title.active")
          .toggleClass("active")
          .next()
          .slideToggle(args);
        $(this).toggleClass("active");
        $(this).next().slideToggle(args);
      } else {
        $(this).toggleClass("active");
        $(this).next().slideToggle(args);
        $(".flat-accordion .flat-toggle").removeClass("active");
      }
    }); // accordion
  };

  var flatCounter = function () {
    if ($(document.body).hasClass("counter-scroll")) {
      var a = 0;
      $(window).scroll(function () {
        var oTop = $(".counter").offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
          if ($().countTo) {
            $(".counter")
              .find(".number")
              .each(function () {
                var to = $(this).data("to"),
                  speed = $(this).data("speed");

                $(this).countTo({
                  to: to,
                  speed: speed,
                });
              });
          }
          a = 1;
        }
      });
    }
  };

  var flattabs1 = function () {
    $(".flat-tabs1").each(function () {
      $(this).find(".content-tab1").children().hide();
      $(this).find(".content-tab1").children(".s2").show();
      $(this)
        .find(".menu-tab1")
        .children("li")
        .on("click", function () {
          var liActive = $(this).index();
          var contentActive = $(this)
            .siblings()
            .removeClass("active")
            .parents(".flat-tabs1")
            .find(".content-tab1")
            .children()
            .eq(liActive);
          contentActive.addClass("active").fadeIn("slow");
          contentActive.siblings().removeClass("active");
          $(this)
            .addClass("active")
            .parents(".flat-tabs1")
            .find(".content-tab1")
            .children()
            .eq(liActive)
            .siblings()
            .hide();
        });
    });
  };
  var flattabs2 = function () {
    $(".flat-tabs2").each(function () {
      $(this).find(".content-tab2").children().hide();
      $(this).find(".content-tab2").children().first().show();
      $(this)
        .find(".menu-tab2")
        .children("li")
        .on("click", function () {
          var liActive = $(this).index();
          var contentActive = $(this)
            .siblings()
            .removeClass("active")
            .parents(".flat-tabs2")
            .find(".content-tab2")
            .children()
            .eq(liActive);
          contentActive.addClass("active").fadeIn("slow");
          contentActive.siblings().removeClass("active");
          $(this)
            .addClass("active")
            .parents(".flat-tabs2")
            .find(".content-tab2")
            .children()
            .eq(liActive)
            .siblings()
            .hide();
        });
    });
  };

  var flattabs = function () {
    $(".flat-tabs").each(function () {
      $(this).find(".content-tab").children().hide();
      $(this).find(".content-tab").children().first().show();
      $(this)
        .find(".menu-tab")
        .children("li")
        .on("click", function () {
          var liActive = $(this).index();
          var contentActive = $(this)
            .siblings()
            .removeClass("active")
            .parents(".flat-tabs")
            .find(".content-tab")
            .children()
            .eq(liActive);
          contentActive.addClass("active").fadeIn("slow");
          contentActive.siblings().removeClass("active");
          $(this)
            .addClass("active")
            .parents(".flat-tabs")
            .find(".content-tab")
            .children()
            .eq(liActive)
            .siblings()
            .hide();
        });
    });
  };

  // Sidebar Toggle

  $(".btn").click(function () {
    $(this).toggleClass("click");
    $(".dashboard__sidebar").toggleClass("show");
    $(".dashboard").toggleClass("show");
  });
  $(".feat-btn").click(function () {
    $("nav ul .feat-show").toggleClass("show");
  });

  $(".sidebar__menu li").click(function () {
    $(this).addClass("active").siblings().removeClass("active");
  });

  $(function () {
    var url = window.location.pathname,
      urlRegExp = new RegExp(url.replace(/\/$/, "") + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
    // now grab every link from the navigation
    $(".sidebar__menu a").each(function () {
      // and test its normalized href against the url pathname regexp
      if (urlRegExp.test(this.href.replace(/\/$/, ""))) {
        $(this).addClass("active");
      }
    });
  });
  // End Sidebar Toggle

  var popupVideo = function () {
    if ($().magnificPopup) {
      $(".popup-youtube").magnificPopup({
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
      });
    }
  };

  $(".icon-star").on("click", function () {
    $(this).toggleClass("active");
  });

  // Dom Ready
  $(function () {
    handlePreloader();
    headerFixed();
    goTop();
    mobileNav();
    alertBox();
    flatAccordion();
    flatCounter();
    flattabs();
    popupVideo();
    flattabs1();
    flattabs2();

    AOS.init({
      duration: 1000,
    });
  });
})(jQuery);


document.addEventListener('DOMContentLoaded', () => {
  const notifications = [
    { text: 'Mike *** made $2,000 in interest', action: "Deposit" },
    { text: 'Tomika *** withdrew $5,000', action: "Withdrew" },
    { text: 'John *** deposited $1,500', action: "Deposit" },
    { text: 'Sarah *** made $3,200 in profit', action: "Profit" },
    { text: 'David *** withdrew $4,000', action: "Withdrew" },
    { text: 'Alex *** deposited $2,700', action: "Deposit" },
    { text: 'Nina *** made $3,800 in profit', action: "Profit" },
    { text: 'Chris *** withdrew $6,500', action: "Withdrew" },
    { text: 'Emma *** deposited $3,000', action: "Deposit" },
    { text: 'Liam *** made $2,400 in interest', action: "Interest" },
    { text: 'Sophia *** withdrew $2,200', action: "Withdrew" },
    { text: 'Lucas *** deposited $4,100', action: "Deposit" },
    { text: 'Olivia *** made $1,900 in profit', action: "Profit" },
    { text: 'Mason *** withdrew $3,300', action: "Withdrew" },
    { text: 'Ava *** deposited $5,000', action: "Deposit" },
    { text: 'Jacob *** made $2,700 in interest', action: "Interest" },
    { text: 'Mia *** withdrew $1,800', action: "Withdrew" },
    { text: 'Ethan *** deposited $3,900', action: "Deposit" },
    { text: 'Isabella *** made $2,600 in profit', action: "Profit" },
    { text: 'James *** withdrew $4,500', action: "Withdrew" },
    { text: 'Amelia *** deposited $2,500', action: "Deposit" },
    { text: 'Benjamin *** made $1,700 in interest', action: "Interest" },
    { text: 'Charlotte *** withdrew $2,900', action: "Withdrew" },
    { text: 'Henry *** deposited $3,500', action: "Deposit" },
    { text: 'Evelyn *** made $3,100 in profit', action: "Profit" },
    { text: 'Sebastian *** withdrew $4,300', action: "Withdrew" },
    { text: 'Harper *** deposited $1,600', action: "Deposit" },
    { text: 'Daniel *** made $3,400 in interest', action: "Interest" },
    { text: 'Ella *** withdrew $5,200', action: "Withdrew" },
    { text: 'Matthew *** deposited $2,300', action: "Deposit" }
  ];

  function showNotification() {
    const notification = notifications[Math.floor(Math.random() * notifications.length)];
    const notificationElement = document.getElementById('notification');
    const profileImg = document.getElementById('profile-img');
    const notificationText = document.getElementById('notification-text');
    const notificationTitle = document.getElementById('notification-title');

    // profileImg.src = notification.img;
    if (notificationElement) { 
      notificationText.textContent = notification.text;
      notificationTitle.textContent = notification.action;
      notificationElement.classList.add('show');
      notificationElement.classList.remove('hide');
    }

    setTimeout(() => {
      fadeOut(notificationElement);
    }, 3000);
  }

  function fadeOut(element) {
    element.classList.add('hide');
    element.classList.remove('show');
  }

  // Show a notification every 5 seconds
  setInterval(showNotification, 5000);
});

// document.addEventListener('DOMContentLoaded', () => {
//   fetch('/get-notifications')
//     .then(response => response.json())
//     .then(data => {
//       const notifications = data;

//       function showNotification() {
//         const notification = notifications[Math.floor(Math.random() * notifications.length)];
//         const notificationElement = document.getElementById('notification');
//         notificationElement.textContent = notification;
//         notificationElement.style.display = 'block';
//         notificationElement.style.opacity = 1;

//         setTimeout(() => {
//           fadeOut(notificationElement);
//         }, 3000);
//       }

//       function fadeOut(element) {
//         let op = 1;  // initial opacity
//         const timer = setInterval(() => {
//           if (op <= 0.1) {
//             clearInterval(timer);
//             element.style.display = 'none';
//           }
//           element.style.opacity = op;
//           element.style.filter = 'alpha(opacity=' + op * 100 + ")";
//           op -= op * 0.1;
//         }, 50);
//       }

//       // Show a notification every 5 seconds
//       setInterval(showNotification, 5000);
//     })
//     .catch(error => console.error('Error fetching notifications:', error));
// });
