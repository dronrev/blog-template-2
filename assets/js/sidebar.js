$(document).ready(function () {
  // console.log('test')
  if (screen.width <= 768) {
    $(".nav-menu").hide();
    $(".sidebar-menu").on('click',function(){
        $(".sidebar-item").toggle();
    });
  } else {
    $(".sidebar-menu").hide();
  }
});
