jQuery(function() {
	jQuery("#thumbnails").sortable();
	jQuery("#thumbnails").disableSelection()
});
jQuery("#publish").click(function() {
	jQuery("#thumbnails").disableSelection();
	var e = jQuery("#imgIDs").val();
	var t = jQuery("#thumbnails img[id]").map(function() {
		return this.id
	}).get();
	jQuery("#imgIDs").val(t)
});
jQuery(".zia3_remove").live('click', function() {
	var e = jQuery(this).attr("id");
	jQuery("#" + e).hide();
	jQuery("#" + e).remove()
})