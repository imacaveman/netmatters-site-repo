
$hamburgerContainer.on("click", function(event){
    $burger.toggleClass("is-active");
    $(this).toggleClass("burger-clicked");
    $sideBar.toggleClass("sidebar-show");
    $bodyAll.toggleClass("allmove");
    $(".clickableoverlay").show();
});
  
$(".clickableoverlay").on("click", function(){
    $(this).hide();
    $burger.toggleClass("is-active");
    $sideBar.toggleClass("sidebar-show");
    $bodyAll.toggleClass("allmove");
    $('body').off('scroll mousewheel touchmove', function(e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
  });
});
  