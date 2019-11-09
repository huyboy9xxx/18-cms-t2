/* global ajaxurl, h3qtcms1NUX */
( function( wp, $ ) {
	'use strict';

	if ( ! wp ) {
		return;
	}

	$( function() {
		// Dismiss notice
		$( document ).on( 'click', '.sf-notice-nux .notice-dismiss', function() {
			$.ajax({
				type:     'POST',
				url:      ajaxurl,
				data:     { nonce: h3qtcms1NUX.nonce, action: 'h3qtcms1_dismiss_notice' },
				dataType: 'json'
			});
		});
	});
})( window.wp, jQuery );