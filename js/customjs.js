jQuery.noConflict();
(function( $ ) {

	// style featured article images
	$("div.blog-featured img").addClass("img-rounded");
	$("div.blog-featured div.item-image").removeClass("pull-left");

	// fix dropdown menus
	$("li.deeper.parent").addClass("dropdown");
	$("li.deeper.parent a").addClass("dropdown-toggle").attr("data-toggle", "dropdown");
	$("ul.nav-child").addClass("dropdown-menu");
	$("ul.nav-child a").removeAttr("class data-toggle");

	// add fancy line above or below side bar items depending on needs
	$(".add-fancy-line-before").before("<div style='text-align: center;'><img style='margin: 25px 0;' src='http://asiamministries.net/templates/asIAMtemplate/images/fancy-line.png' alt='fancy-line2' /></div>");
	$(".add-fancy-line-after").after( "<div style='text-align: center;'><img style='margin: 25px 0;' src='http://asiamministries.net/templates/asIAMtemplate/images/fancy-line.png' alt='fancy-line2' /></div>" );

})(jQuery);