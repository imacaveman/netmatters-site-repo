
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
