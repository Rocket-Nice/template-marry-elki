$(document).ready(function() {
  
  $('.gallery').mixItUp();
  
});

$(document).ready(function(){
  $(".lightBox").on("click", function(){
    $(".backDrop").animate({"opacity": ".70"}, 500);
    $(".box").animate({"opacity": "1.0"}, 500);
    $(".backDrop, .box").css("display", "block");
    $(".header").css('zIndex', '0');
    return false;
  });
  
  $(".thumb").on("click", function(){
    var largeImage = $(this).attr("src");
    $(".largeImage").attr({src: largeImage});
  });
  
  $(".close, .backDrop").on("click", function(){
    closeBox();
    $(".header").css('zIndex', '2');
  });

  function closeBox(){
    $(".backDrop, .box").animate({"opacity": "0"}, 500, function(){
    $(".backDrop, .box").css("display", "none");
    });
  }
});