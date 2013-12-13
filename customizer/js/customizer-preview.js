
( function( $ ) {

	$.each( custStyle, function( index ) {

		var colorType 		= custStyle[index].type;
		var colorSlug		= custStyle[index].slug;
		var colorProperty	= custStyle[index].property;
		var colorSelector 	= custStyle[index].selector;

		if ( colorType == 'color' || colorType == 'font' ) {
			wp.customize( colorSlug, function( value ) {
				value.bind( function( to ) {
					$(colorSelector).css(colorProperty, to ? to : '' );
				});
			});
		};

	});
	 
} )( jQuery );