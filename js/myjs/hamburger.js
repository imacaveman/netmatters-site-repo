
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
  