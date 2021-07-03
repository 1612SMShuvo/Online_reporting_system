@extends("layouts/main/main")	
@section("content")

		<ol class="breadcrumb bc-3">
			<li>
				<a href="{{ route('dashboard') }}"><i class="entypo-home"></i>Dashboard</a>
			</li>
			<li class="active">
				<a href="{{ route('agreements_create_page') }}"><strong>Add Agreement</strong></a>
			</li>
			<li class="active">
				<i class="entypo-left-open"></i><a href="{{ url()->previous() }}"><strong>Back</strong></a>
			</li>
		</ol>
<hr>
<center><h2>Agreement Setup</h2></center>
<hr>
<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
			<div class="panel-heading">
				<div class="panel-title">
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
				<form role="form" class="form-horizontal form-groups-bordered" action="{{ route('agreements_store_page') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Agreement Number</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="agreement_no" id="field-1" value="{{ $agreement }}" placeholder="Ex: PN-01" readonly="">
						</div>
					</div>
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Agreement Date*</label>
						
						<div class="col-sm-5">
							<input type="date" class="form-control" name="agreement_date" id="field-1" placeholder="Ex: Eurosia">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-5"  class="col-sm-3 control-label">Company Name*</label>
						
						<div class="col-sm-5">
							<select class="form-control" name="company_id" id="company_id">
								<option selected>Choose Please.....</option>
								@foreach ($company as $clients)
								 <option value="{{$clients->id}}">{{$clients->company_name}}</option>	
								@endforeach
								
							</select>
						</div>
                    </div>
                    <input type="hidden" name="company_name" id="company_name">
                    <div class="form-group has-success">
						<label for="field-5"  class="col-sm-3 control-label">Proposal Number*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="proposal_no" id="proposal_no" placeholder="Ex: Eurosia" readonly="">
						</div>
                    </div>
                    <div class="form-group has-success">
						<label for="field-5"  class="col-sm-3 control-label">Invoice Number*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="invoice_no" id="invoice_no" placeholder="Ex: Eurosia" readonly="">
						</div>
                    </div>
					
					<div class="form-group">
						
						<div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Make Agreement</button>
                            
						</div>
					</div>
				</form>
			</div>
		
		</div>
	
	</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#company_id").on('change', function(){
      var company_id =$(this).val();
      $.ajax({
        type:'get',
        url:'{{ route('find_agreement_proposal') }}',
        data:{'id':company_id},
        success:function(data){
          $("#proposal_no").val(data);
        },
        error:function(){

        },
      });

    });

});
</script>
<script type="text/javascript">
	$(document).ready(function(){
	    $("#company_id").on('change', function(){
	      var company_id =$(this).val();
	      $.ajax({
	        type:'get',
	        url:'{{ route('find_agreement_invoice') }}',
	        data:{'id':company_id},
	        success:function(data){
	          $("#invoice_no").val(data);
	        },
	        error:function(){

	        },
	      });

	    });
	});
</script>
@endsection
