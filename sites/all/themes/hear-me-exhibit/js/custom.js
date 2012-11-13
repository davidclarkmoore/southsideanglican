(function ($) {
	
		$("div.view-hear-me-your-story-through-tattoos- div.view-content .view-row").click(function () {

				var cardlink =	$(this).find('a').attr('href');
       		 document.location = cardlink;
		});

})(jQuery);