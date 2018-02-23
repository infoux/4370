$(document).ready(function() {







  function viewMode() {
    var windowWidth = $(window).width();
    if (windowWidth < 1199) {

        $("body").removeClass("pc");
        $("body").addClass("mobile");

        $('li.depth1:has(.depth2)').each(function () {
            $(this).find("a.hd1").removeAttr("href");
        });



    } else {
        $("body").addClass("pc");
        $("body").removeClass("mobile");


    }
}

viewMode();

  $(window).on("resize", function() {
    viewMode();

  });

  $("#header nav button.active").on("click", function() {
    $(this).parent().toggleClass("on");
  });





  $(".pc #header nav li.depth1").on("mouseenter", function(){
    $("header nav ul.depth2").removeClass("hover");
   $(this).find("ul.depth2").addClass("hover");
 });

 $(".pc #header nav").on("mouseleave", function(){
   $("header nav ul.depth2").removeClass("hover");
 });



  $("#header button.menu").on("click", function() {

    console.log("야옹");

    if ($("#header").hasClass("open")) {

      $("#header").removeClass("open");
      $("body").removeClass("menuOn");

    } else {

      $("#header").addClass("open");
      $("body").addClass("menuOn");
      $("body").scrollTop(0);

    }
  });

  $(".mobile #header nav li.depth1 a").on("click", function(){
    $("header nav ul.depth2").removeClass("hover");
    $(this).find("ul.depth2").addClass("hover");

    $("#header nav li.depth1 a").removeClass("active");
    $(this).addClass("active");

  });








  $("#header nav li.depth1").on("click", function(){
    $("header nav ul.depth2").removeClass("hover");
    $(this).find("ul.depth2").addClass("hover");
  });


  $('.board.comm-list p.image').each(function () {
    $(this).css("background", "url(" + $(this).find("img").attr("src") + ") no-repeat center / cover");
});


$('.main-comm p.image').each(function () {
  $(this).css("background", "url(" + $(this).find("img").attr("src") + ") no-repeat center / cover");
});


$('.main-txt .ucc div').each(function () {
  $(this).css("background", "url(" + $(this).find("img").attr("src") + ") no-repeat center / cover");
});


$('ul.rectangle-list li p.img').each(function () {
  $(this).css("background", "url(" + $(this).find("img").attr("src") + ") no-repeat center / cover");
});




if ($(".indicator .depth2 li").length == 0) {

  $(".indicator .depth2 ul").css("display", "none");
}



});

