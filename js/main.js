$( document ).ready( function() {
	$( 'body' ).on( 'click', '.thumbnail-row a', function() {
		var id = $( this ).attr( 'href' );
		if( $( id ).filter( ':visible' ).length ) {
			$( id ).slideUp();
		} else {
			$( '.preview-row section' ).slideUp();
			$( id ).slideDown();
		}
		return false;
	})
});
