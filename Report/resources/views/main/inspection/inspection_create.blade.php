@extends("layouts/main/main")	
@section("content")

		<ol class="breadcrumb bc-3">
			<li>
				<a href="{{ route('dashboard') }}"><i class="entypo-home"></i>Dashboard</a>
			</li>
			<li class="active">
				<a href="companyinfo-create-page"><strong>Add Inspection</strong></a>
			</li>
			<li class="active">
				<i class="entypo-left-open"></i><a href="{{ url()->previous() }}"><strong>Back</strong></a>
			</li>
		</ol>
<hr>
<center><h2>Inspection Setup</h2></center>
<hr>
<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		{{-- @if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif --}}
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
				<form role="form" class="form-horizontal form-groups-bordered" action="" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Inspection No.</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" id="field-1" placeholder="Ex:EITCSL/Env/21/001">
						</div>
					</div>
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Identification of Issuing Body</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex:Pyramid Apparels Ltd.">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Address of Issuing Body</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex: 17, Sujit Nagar, Pallabi, Mirpur-12, Dhaka-1216">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Date of Inspection</label>
						
						<div class="col-sm-5">
							<input type="date" class="form-control" name="designation" id="field-1" >
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Inspection Time</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex: 9:30 AM - 3:30 PM">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Date of Issue</label>
						
						<div class="col-sm-5">
							<input type="date" class="form-control" name="designation" id="field-1" >
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Identification of Item(s) Inspected</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex: Light/ Lux/ Illumination Level">
						</div>
					</div>
                    <div class="form-group has-success">
                        <h4>Environmental Inspection summary:</h4>
					</div>
                  
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Inspection Item</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex: Light/ Lux/ Illumination Level">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Requirement</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex: ">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Equipment</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex: ">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Comment</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex: ">
						</div>
					</div>
					<div class="form-group">
						
						<div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Add</button>
                            
						</div>
					</div>
				</form>
			</div>
		
		</div>
	
	</div>
</div>

@endsection