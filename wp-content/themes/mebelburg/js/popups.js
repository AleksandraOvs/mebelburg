window.addEventListener('load', function() {

var len = $(".advice-block__inner").length;
var intervalCounter = 1;
setInterval(function() {
    $(".advice-block").removeClass("hidden");
  intervalCounter++;
  if (intervalCounter > len) intervalCounter = 1;
  $(".advice-block__inner").removeClass("active");
  $(".advice-block__inner").eq(intervalCounter - 1).addClass("active");
}, 20000);

$(document).on('click', '.advice-close', function () {
clearInterval(setInterval);
$(".advice-block").addClass("close");
});
});
