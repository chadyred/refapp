			$(document).ready(function() {
				$("#tabs").tabs( {
					"show": function(event, ui) {
						var table = $.fn.dataTable.fnTables(true);
						if ( table.length > 0 ) {
							$(table).dataTable().fnAdjustColumnSizing();
						}
					}
				} );
				
				$('table.display').dataTable( {
					"sScrollY": "200px",
					"bScrollCollapse": true,
					"bPaginate": false,
					"bJQueryUI": true,
					"aoColumnDefs": [
						{ "sWidth": "10%", "aTargets": [ -1 ] }
					]
				} );
			} );
