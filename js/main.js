$( document ).ready( function() {
	$( 'body' ).on( 'click', '.thumbnail-row a', function() {
		var id = $( this ).attr( 'href' );

		if( $( id ).filter( ':visible' ).length ) {
			$( id ).slideUp();
		} else {
			$( '.preview-row section' ).slideUp();
			$( id ).slideDown()
					.parents( '.preview-full-width' )
					.css( 'background', $( this ).data( 'background') )
					.css( 'color', $( this ).data( 'color' ) );
		}
		return false;
	})
});
