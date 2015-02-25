
$(document).ready(function() {


	/************************************
	Basic Data Table
	************************************/
    $('#basic-datatable').dataTable({
		"order": [[5, 'desc']],
		"language": {
            "lengthMenu": "_MENU_ Įrašai lape",
            "zeroRecords": "Nothing found - sorry",
            "info": "Puslapis _PAGE_ iš _PAGES_",
            "infoEmpty": "Nėra įrašų.",
			"search":         "Paieška:",
			"paginate": {
				"first":      "Pirmas",
				"last":       "Paskutinis",
				"next":       "Kitas",
				"previous":   "Buvęs"
			},
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
	});
	
	
	
	
	/************************************
	Toggle Column
	************************************/
	var toggleColumnTable = $('#toggleColumn-datatable').DataTable();
 
    $('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = toggleColumnTable.column( $(this).attr('data-column') );
 
        // Toggle the visibility
        column.visible( ! column.visible() );
    });
	
	
	
	
	
	
	/* Formatting function for row details - modify as you need */
	function format ( d ) {
		// `d` is the original data object for the row
		return '<table class="extra-info">'+
			'<tr>'+
				'<td>Full name:</td>'+
				'<td>'+d.name+'</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Extension number:</td>'+
				'<td>'+d.extn+'</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Extra info:</td>'+
				'<td>And any further details here (images etc)...</td>'+
			'</tr>'+
		'</table>';
	}
 

 
    var table = $('#hiddendta-datatable').DataTable( {
        //"ajax": "assets/js/plugins/datatables/objects.txt",
        "columns": [
            {
                "class":          'details-control',
                "orderable":      true,
                "data":           null,
                "defaultContent": '<a class="btn btn-link"><i class="fa fa-plus-square"></i></a>'
            },
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "salary" }
        ],
        "order": [[1, 'desc']]
    } );
     
    // Add event listener for opening and closing details
    $('#hiddendta-datatable tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );

	
	
	
});