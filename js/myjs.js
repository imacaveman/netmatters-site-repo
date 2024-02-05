const $burger = $(".hamburger");
const $hamburgerContainer = $(".burger-container");
const $headerAll = $(".sticky-container");
const $bodyAll = $(".main-body");
const $sideBar = $(".sidebar");
let lastScrollTop = 0;
let scrollThreshold = 50;

// ********* COOKIES POP UP ********* //

$(document).ready(function() {
  if(!localStorage.getItem("cookiesAccepted")) {
    $(".overlay").show();
    $("#cookies-popup").show();
    $("body").css("overflow", "hidden");
  } else {
    $(".overlay").hide();
    $("#cookies-popup").hide();
  }

  $("#accept-cookies").on("click", function(){
    $(".overlay").hide();
    $("#cookies-popup").hide();
    $("body").css("overflow", "auto");
    localStorage.setItem("cookiesAccepted", "true");
  });
});

$(".cookieconsent-btn").on("click", function(){
  $(".overlay").show();
  $("#cookies-popup").show();
  $("body").css("overflow", "hidden");
});

// ********* END OF COOKIES ********* //

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
  $bodyAll.toggleClass("allmove");
  $(".clickableoverlay").show();
  $sideBar.toggleClass("sidebar-show");
  $("body").css("overflow", "hidden");
});

$(".clickableoverlay").on("click", function(){
  $(this).hide();
  $burger.toggleClass("is-active");
  $bodyAll.toggleClass("allmove");
  $sideBar.toggleClass("sidebar-show");
  $("body").css("overflow", "auto");
});


// ********* END OF HAMBURGER ********* //

// ********* CAROUSEL ********* //


$('.carousel-container').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
    infinite: true,
    prevArrow: false,
    nextArrow: false,
    speed: 1000
});


// ********* END OF CAROUSEL ********* //
