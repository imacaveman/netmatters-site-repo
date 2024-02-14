
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