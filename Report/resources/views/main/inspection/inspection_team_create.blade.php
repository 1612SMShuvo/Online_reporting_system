@extends("layouts/main/main")	
@section("content")

		<ol class="breadcrumb bc-3">
			<li>
				<a href="{{ route('dashboard') }}"><i class="entypo-home"></i>Dashboard</a>
			</li>
			<li class="active">
				<a href="companyinfo-create-page"><strong>Add Technical Team</strong></a>
			</li>
			<li class="active">
				<i class="entypo-left-open"></i><a href="{{ url()->previous() }}"><strong>Back</strong></a>
			</li>
		</ol>
<hr>
<center><h2>Technical Team Setup</h2></center>
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
						<label for="field-1" class="col-sm-3 control-label">Name</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" id="field-1" placeholder="Ex: Oli ullah">
						</div>
					</div>
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Designation</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex: Bsc in SWE">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Rank</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex: Quality Officers">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Phone</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="designation" id="field-1" placeholder="Ex: 01700000000">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-5"  class="col-sm-3 control-label">Company Name</label>
						
						<div class="col-sm-5">
							<select class="form-control" name="center_no">
								<option selected>Choose Please.....</option>
							</select>
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