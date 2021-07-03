@extends("layouts/main/main")	
@section("content")

		<ol class="breadcrumb bc-3">
			<li>
				<a href="{{ route('dashboard') }}"><i class="entypo-home"></i>Dashboard</a>
			</li>
			<li class="active">
				<a href=""><strong>Invoice List</strong></a>
			</li>
			<li class="active">
				<i class="entypo-left-open"></i><a href="{{ url()->previous() }}"><strong>Back</strong></a>
			</li>
		</ol>
<hr>
<center><h2>Invoice List</h2></center>

<br />
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr> 
            <th>SN</th>
            <th>Invoice Date</th>
			<th>Invoice No</th>
			<th>Total</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
        @php $i=1; @endphp
        @foreach($data as $invoice)
		<tr class="odd gradeX">
            <td>{{$i++}}</td>
            <td>{{ $invoice->created_at }}</td>
            <td>{{ $invoice->invoice }}</td>
            <td>{{ $invoice->total_price }}</td>
            <td>
            
				{{-- <a href="" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a> --}}
				
				<a href="{{ route('invoice-delete-store',$invoice->id) }}" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
				
				<a href="{{ route('invoice_print',$invoice->id) }}" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					View
				</a>
			</td>
			
		</tr>
        @endforeach
		
	</tbody>
	<tfoot>
        <tr>
            <th>SN</th>
            <th>Invoice Date</th>
			<th>Invoice No</th>
			<th>Total</th>
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