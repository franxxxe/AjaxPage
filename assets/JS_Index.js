
function navLink(linkId){
  $.ajax({
    url: "components/function.php",
    type: "post",
    data: {LinkID: linkId},
    success: function (response) {
      console.log(response);
      $(".AJAX-Load-Content").html(response);
      $(".nav-li" + linkId).addClass("active-nav") .removeClass("inactive-nav") .siblings().removeClass("active-nav");
    },
  });
}