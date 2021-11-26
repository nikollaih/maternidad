jQuery(document).on("change", ".select-toggle", function() {
    let class_name = jQuery(this).attr("data-class");
    if (jQuery(this).val() == "-1") {
        jQuery("." + class_name).removeClass("d-none");
    } else {
        jQuery("." + class_name).addClass("d-none");
    }
});