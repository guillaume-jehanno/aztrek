$(document).ready(function() {

  //responsive menu
  $('.burger').sidr({
    source: '#menu',
    displace: false,
    side: 'left',
    name: 'sidr-main',
  });



$('body').click(function(){
$.sidr('close', 'sidr-main');
})

  $(function() {
    $(".rslides").responsiveSlides({
    });
  });


});
