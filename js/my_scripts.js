jQuery(document).ready(function ($) {


  jQuery('.wpcf7-form-control-wrap').on('click', function (e) {
    $(this).parent().find(".gate").toggleClass('current');
  });

  $(document).mouseup(function(e){
    var container = $(".gate");
    if(!container.is(e.target) && container.has(e.target).length === 0 ){
    /*  container.css( "transform", "rotate(0deg)" );*/
      container.removeClass('current');
    }
  });


});
