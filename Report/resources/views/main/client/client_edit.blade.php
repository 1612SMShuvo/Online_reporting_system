@extends("layouts/main/main")	
@section("content")

		<ol class="breadcrumb bc-3">
			<li>
				<a href="{{ route('dashboard') }}"><i class="entypo-home"></i>Dashboard</a>
			</li>
			<li class="active">
				<a href=""><strong>Edit Client</strong></a>
			</li>
			<li class="active">
				<i class="entypo-left-open"></i><a href="{{ url()->previous() }}"><strong>Back</strong></a>
			</li>
		</ol>
<hr>
<center><h2>Client Setup Update</h2></center>
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
				<form role="form" class="form-horizontal form-groups-bordered" action="{{ route('client-edit-store',$data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Company Name*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_name" value="{{$data->company_name}}" id="field-1" placeholder="Ex: Eurosia">
						</div>
					</div>
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Company Owner Name*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_owner" value="{{$data->company_owner}}" id="field-1" placeholder="Ex: Eurosia">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Phone Number*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_phone" value="{{$data->company_phone}}" id="field-1" placeholder="Ex: 017xxxxxxxx">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Company Address*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_address" value="{{$data->company_address}}" id="field-1" placeholder="Address">
						</div>
					</div>
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Email*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_email"  value="{{$data->company_email}}" id="field-1" placeholder="Ex: eurosia'@'gmail.com">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Contract Person Name*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="con_per_name" value="{{$data->con_per_name}}" id="field-1" placeholder="Ex: Eurosia">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Contract Person Phone*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="con_per_phone" value="{{$data->con_per_phone}}"id="field-1" placeholder="Ex: 017000000000">
						</div>
					</div>
					
					<div class="form-group">
						
						<div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Update</button>
                            
						</div>
					</div>
				</form>
			</div>
		
		</div>
	
	</div>
</div>

@endsection