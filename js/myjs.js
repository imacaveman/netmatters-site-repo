const $burger = $(".hamburger");
const $hamburgerContainer = $(".burger-container");
const $headerAll = $(".sticky-container");
const $bodyAll = $("body");
let lastScrollTop = 0;
let scrollThreshold = 50;

// ********* STICKY NAV ********* //

$(window).on("scroll", function(){
  console.log("Scroll event fired");
  let scrollTop = $bodyAll.scrollTop();
  console.log("Scroll Top: ", scrollTop);
  if(scrollTop > lastScrollTop) {
    console.log("Scrolling down..")
    $headerAll.removeClass("sticky-header");
  } else {
    console.log("Scrolling up or at the top of the page");
    $headerAll.addClass("sticky-header");
  };

  
});

// ********* END OF STICKY ********* //

// ********* HAMBURGER ********* //

$hamburgerContainer.on("click", function(event){
  $burger.toggleClass("is-active");
  $(this).toggleClass("burger-clicked");
  // $sidebar.toggleClass("show");
});

// ********* END OF HAMBURGER ********* //

// ********* CAROUSEL ********* //

$(document).ready(function(){
  $('.carousel-container').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
    infinite: true,
    prevArrow: false,
    nextArrow: false,
    speed: 1000
  });
});

// ********* END OF CAROUSEL ********* //
