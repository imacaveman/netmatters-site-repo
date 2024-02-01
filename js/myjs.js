const $burger = $(".hamburger");
const $hamburgerContainer = $(".burger-container");
const $headerAll = $(".sticky-container");
const $bodyAll = $("body");
let lastScrollTop = 0;
let scrollThreshold = 50;

// ********* STICKY NAV ********* //

$(window).on("scroll", function(){
  let scrollTop = $(this).scrollTop();
  // if(scrollTop > lastScrollTop) {
  if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
    $headerAll.removeClass("sticky-header");
  } else if(scrollTop <= scrollThreshold) {
    $headerAll.removeClass("sticky-header");
  } else {
    $headerAll.addClass("sticky-header");
  }

  lastScrollTop = scrollTop;
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
