// Menus 
function ecommerce_landing_page_menu_open_nav() {
  jQuery(".sidenav").addClass('show');
}
function ecommerce_landing_page_menu_close_nav() {
  jQuery(".sidenav").removeClass('show');
}

(function (window, document) {
  function ecommerce_landing_page_keepFocusInMenu() {
    document.addEventListener('keydown', function (e) {
      const ecommerce_landing_page_nav = document.querySelector('.sidenav');

      if (!ecommerce_landing_page_nav || !ecommerce_landing_page_nav.classList.contains('show')) {
        return;
      }
      const elements = [...ecommerce_landing_page_nav.querySelectorAll('input, a, button')],
        ecommerce_landing_page_lastEl = elements[elements.length - 1],
        ecommerce_landing_page_firstEl = elements[0],
        ecommerce_landing_page_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if (!shiftKey && tabKey && ecommerce_landing_page_lastEl === ecommerce_landing_page_activeEl) {
        e.preventDefault();
        ecommerce_landing_page_firstEl.focus();
      }

      if (shiftKey && tabKey && ecommerce_landing_page_firstEl === ecommerce_landing_page_activeEl) {
        e.preventDefault();
        ecommerce_landing_page_lastEl.focus();
      }
    });
  }
  ecommerce_landing_page_keepFocusInMenu();
})(window, document);

jQuery('document').ready(function ($) {
  $(window).scroll(function () {
    var sticky = $('.header-sticky'),
      scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('header-fixed');
    else sticky.removeClass('header-fixed');
  });

  /*sticky sidebar*/
  window.addEventListener('scroll', function () {
    var sticky = document.querySelector('.sidebar-sticky');
    if (!sticky) return;

    var scrollTop = window.scrollY || document.documentElement.scrollTop;
    var windowHeight = window.innerHeight;
    var documentHeight = document.documentElement.scrollHeight;

    var isBottom = scrollTop + windowHeight >= documentHeight - 100;

    if (scrollTop >= 100 && !isBottom) {
      sticky.classList.add('sidebar-fixed');
    } else {
      sticky.classList.remove('sidebar-fixed');
    }
  });

  // Sticky Copyright
  $(window).scroll(function () {
    var sticky = $('.copyright-sticky'),
      scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('copyright-fixed');
    else sticky.removeClass('copyright-fixed');
  });
  setTimeout(function () {
    jQuery("#preloader").fadeOut("slow");
  }, 1000);
});

jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
  });
  jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
  });
});

jQuery('#banner .slider-for').slick({
  slidesToShow: 1,
  infinite: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 5000,
  fade: true,
  asNavFor: '.slider-nav',

});
jQuery('#banner .slider-nav').slick({
  slidesToShow: 3,
  infinite: true,
  centerPadding: '0px',
  arrows: false,
  slidesToScroll: 1,
  asNavFor: '#banner .slider-for',
  dots: false,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
})
jQuery(document).ready(function () {
  jQuery(".inner_carousel h1").each(function () {
    var t = jQuery(this).text();
    var splitT = t.split(" ");
    console.log(splitT);
    var lastWordIndex = splitT.length - 1; // Zero-based index for the last word
    var newText = "";
    for (var i = 0; i < splitT.length; i++) {
      if (i === lastWordIndex) {
        newText += "<span class='slider-color' style='color:#fff; background: #000; padding: 4px 12px;'>";
        newText += splitT[i];
        newText += "</span>";
      } else {
        newText += splitT[i] + " ";
      }
    }
    jQuery(this).html(newText);
  });
});
/* Progress Bar */
document.addEventListener("DOMContentLoaded", function () {
  const ecommerce_landing_page_progressBar =
    document.getElementById("ecommerce_landing_page_elemento_progress_bar");
  if (!ecommerce_landing_page_progressBar) return;
  window.addEventListener("scroll", function () {
    const ecommerce_landing_page_scrollTop =
      document.documentElement.scrollTop || document.body.scrollTop;
    const ecommerce_landing_page_height =
      document.documentElement.scrollHeight -
      document.documentElement.clientHeight;
    const ecommerce_landing_page_scrolled =
      (ecommerce_landing_page_scrollTop / ecommerce_landing_page_height) * 100;
    ecommerce_landing_page_progressBar.style.width =
      ecommerce_landing_page_scrolled + "%";
  });
});