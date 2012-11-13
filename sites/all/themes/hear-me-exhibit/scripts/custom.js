(function ($) {

	$(document).ready(function(){

		$('.node-type-personal-story #church-link').empty().append('<h3><a href="/hear-me-exhibit">&#60; back to Exhibit home</a></h3>')

		$("div.view-hear-me-your-story-through-tattoos- div.view-content .views-row").click(function () {

				var cardlink =	$(this).find('a').attr('href');
       		 document.location = cardlink;
		});

		$(".hear-me-back-button, #hear-me-logo").click(function () { 

			document.location = '/hear-me-exhibit';});

		$("div.view-hear-me-your-story-through-tattoos- div.view-content .views-row").addClass('fade-in');

	});

})(jQuery);