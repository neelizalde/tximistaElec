$(() => {

	'use strict';

	/****************************************************************
	 *                      Check animation
	 ****************************************************************/
	$(".modal").on('shown.bs.modal', function () {

		$(this).find('.checkmark').show();
		$(this).find(".circle-loader").addClass("load-complete");

		$(this).find('.errormark').show();
		$(this).find(".ex-loader").addClass("load-complete");
	});

	$(".modal").on('hide.bs.modal', function () {

		$(this).find('.checkmark').hide();
		$(this).find(".circle-loader").removeClass("load-complete");

		$(this).find('.errormark').hide();
		$(this).find(".ex-loader").removeClass("load-complete");

	});

	// Mostrar/Ocultar la ayuda
    // Muestra una ayuda de los iconos con su significado
    $(".help-legend-btn").click(function () {
        $(".help-legend").slideToggle();
    });

});