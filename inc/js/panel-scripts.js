jQuery(document).ready(function ($) {
    "use strict";
    $('.wd-color-picker').colorpicker(
        {format: 'rgba'}
    );

    //---------------logo script-----------
    jQuery('#roofing_upload_btn').on('click',function () {
        wp.media.editor.send.attachment = function (props, attachment) {
            jQuery('#roofing_logo_path').val(attachment.url);
        }
        wp.media.editor.open(this);

        return false;
    });


    //------favicon script-----
    jQuery('#roofing_upload_favicon').on('click',function () {
        wp.media.editor.send.attachment = function (props, attachment) {
            jQuery('#roofing_favicon_icon_path').val(attachment.url);
        }
        wp.media.editor.open(this);
        return false;
    });
    //------single background post script-----
    jQuery('#roofing_upload_single_post').on('click',function () {
        wp.media.editor.send.attachment = function (props, attachment) {
            jQuery('#roofing_bg_single_post_path').val(attachment.url);
        }
        wp.media.editor.open(this);
        return false;
    });
    //-------------------Footer Background------------------
    jQuery('#roofing_upload_bg_btn').on('click',function () {
        wp.media.editor.send.attachment = function (props, attachment) {
            jQuery('#roofing_footer_bg_path').val(attachment.url);
        }
        wp.media.editor.open(this);
        return false;
    });
});