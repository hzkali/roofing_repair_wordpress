jQuery(document).ready(function ($) {

  "use strict";

  $('.js-fonts-select').select2();


  var roofing_font_family = "";
  var roofing_font_weight = "";
  var roofing_font_subsets = "";


  $("#tabs-2 select.font_familly").on("change", function () {
    roofing_font_family = $(this).find(":selected").val();

    $("#wd-google-fonts-css").attr("href", "http://fonts.googleapis.com/css?family=" + roofing_font_family + ":" + roofing_font_weight + "&subset=" + roofing_font_subsets);
    $(this).closest("tbody").find("p").css("font-family", roofing_font_family);
    $(this).closest("tbody").find("h2").css("font-family", roofing_font_family);
    $(this).closest("tbody").find("ul li").css("font-family", roofing_font_family);
  });

  $("#tabs-2 select.font_weight").on("change", function () {
    roofing_font_family = $(this).find(":selected").val();

    $(this).closest("tbody").find("p").css("font-weight", roofing_font_family);
    $(this).closest("tbody").find("h2").css("font-weight", roofing_font_family);
    $(this).closest("tbody").find("ul li").css("font-weight", roofing_font_family);
  });


  $("#tabs-2 select.text_transform").on("change", function () {
    roofing_font_family = $(this).find(":selected").val();

    $(this).closest("tbody").find("p").css("text-transform", roofing_font_family);
    $(this).closest("tbody").find("h2").css("text-transform", roofing_font_family);
    $(this).closest("tbody").find("ul li").css("text-transform", roofing_font_family);
  });

  $("#tabs-2 select.text_size").on("change", function () {
    roofing_font_family = $(this).find(":selected").val();
    $(this).closest("tbody").find("p").css("font-size", roofing_font_family + 'px');
    $(this).closest("tbody").find("h2").css("font-size", roofing_font_family + 'px');
    $(this).closest("tbody").find("ul li").css("font-size", roofing_font_family + 'px');
  });

  $("#tabs-2 select.font_subsets").on("change", function () {
    roofing_font_family = $(this).find(":selected").val();
    $("#wd-google-fonts-css").attr("href", "http://fonts.googleapis.com/css?family=" + roofing_font_family + ":" + roofing_font_weight + "&subset=" + roofing_font_subsets);
  });




  /*--------------------------------------*/
  var curent_sreen = '';

  function roofing_add_ckeckbox_class() {
    curent_sreen = $("input:radio[name='roofing_start_screan']:checked").val();
    $("input[name='roofing_start_screan']").parent().removeClass('selected');

    $("input[value='" + curent_sreen + "'][name='roofing_start_screan']").parent().addClass('selected');
  }


  $("#tabs").tabs(); //initialize tabs
  $(function () {
    $("#tabs").tabs({
      activate: function (event, ui) {
        var scrollTop = $(window).scrollTop(); // save current scroll position
        window.location.hash = ui.newPanel.attr('id'); // add hash to url
        $(window).scrollTop(scrollTop); // keep scroll at current position
      }
    });
  });
  // reload the form when the checkbox is changed
  roofing_add_ckeckbox_class();
  $('.roofing_start_screan').on("click", function (e) {
    if (curent_sreen != $(this).val()) {
      roofing_add_ckeckbox_class();
      $(this).closest('form').submit();
    }
  });

  if (typeof wp.media !== 'undefined') {

    var _custom_media = true, _orig_send_attachment = wp.media.editor.send.attachment;

    $('.uploader .button').on("click", function (e) {
      var send_attachment_bkp = wp.media.editor.send.attachment;
      var button = $(this);
      var id = button.attr('id').replace('_button', '');
      _custom_media = true;
      wp.media.editor.send.attachment = function (props, attachment) {
        if (_custom_media) {
          $("#" + id).val(attachment.url);
        } else {
          return _orig_send_attachment.apply(this, [props, attachment]);
        }
        ;
      };

      wp.media.editor.open(button);
      return false;
    });

    $('.add_media').on('click', function () {
      _custom_media = false;
    });

  }

  $('.logo_position').on('change', 'input[name=roofing_logo_position]:radio', function (e) {
    var input_value = $(this).attr('id');
    $('.logo_position label').removeClass("label_selected");
    $("." + input_value).addClass("label_selected");
  });
  $('.import-demo-screenshot').on('change', 'input[name=roofing_footer_columns]:radio', function (e) {
    var input_value = $(this).attr('id');
    $('.roofing_footer_columns label').removeClass("label_selected");
    $("." + input_value).addClass("label_selected");
  });

  $('.import-demo-screenshot').on('change', 'input[name=demo_screenshot]:radio', function (e) {
    var input_value = $(this).attr('id');
    $('.import-demo-screenshot label').removeClass("label_selected");
    $("." + input_value).addClass("label_selected");
  });
//---------page setting-----------
  $(function () {
    $('#roofing_page_title_area_style').on("change", function () {
      var selected = $(this).find(':selected').text();
      //alert(selected);
      if (selected == 'Standard Style') {
        $(".roofing_show_hide.float_left").hide();
      } else {
        $(".roofing_show_hide.float_left").show();
      }
      //$('#' + selected).show();
    }).on("change")
  });

});
