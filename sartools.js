function loaded(){
	$('#osgrid').on('input', function() {
		var grid = $('#osgrid').val();
		grid = grid.replace(/[^0-9a-z]/gi, '');
		$.get( "http://sartools-api.geekinter.net:9090/v4/gridref/" + grid, function( data ) {
 			 $( "#link" ).html( '<a href="https://www.google.com/maps/dir/My+Location/' + data.lat + ',' + data.lon + '">Navigate</a>' );
		});
	});
}
