@extends("layouts/main/main")	
@section("content")

		<ol class="breadcrumb bc-3">
			<li>
				<a href="{{ route('dashboard') }}"><i class="entypo-home"></i>Dashboard</a>
			</li>
			<li class="active">
				<a href=""><strong>Team List</strong></a>
			</li>
			<li class="active">
				<i class="entypo-left-open"></i><a href="{{ url()->previous() }}"><strong>Back</strong></a>
			</li>
		</ol>
<hr>
<center><h2>Team List</h2></center>

<br />

<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr> 
            <th>SN</th>
			<th>Name</th>
            <th>Phone</th>
            <th>Company Name</th>
            <th>Designation</th>
            <th>Rank</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
		<tr class="odd gradeX">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            <td></td>
            <td>
            
				<a href="" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>
				
				<a href="" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
				
				<a href="" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					View
				</a>
			</td>
			
		</tr>
		
	</tbody>
	<tfoot>
        <tr>
            <th>SN</th>
			<th>Name</th>
            <th>Phone</th>
            <th>Company Name</th>
            <th>Designation</th>
            <th>Rank</th>
			<th>Action</th>
			
		</tr>
	</tfoot>
</table>
{{-- <script type="text/javascript">
    var responsiveHelper;
    var breakpointDefinition = {
        tablet: 1024,
        phone : 480
    };
    var tableContainer;
    
        jQuery(document).ready(function($)
        {
            tableContainer = $("#table-1");
            
            tableContainer.dataTable({
                "sPaginationType": "bootstrap",
                "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "bStateSave": true,
                
    
                // Responsive Settings
                bAutoWidth     : false,
                fnPreDrawCallback: function () {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper) {
                        responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
                    }
                },
                fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                    responsiveHelper.createExpandIcon(nRow);
                },
                fnDrawCallback : function (oSettings) {
                    responsiveHelper.respond();
                }
            });
            
            $(".dataTables_wrapper select").select2({
                minimumResultsForSearch: -1
            });
        });
    </script> --}}

@endsection