@extends("layouts/main/main")	
@section("content")

		<ol class="breadcrumb bc-3">
			<li>
				<a href="{{ route('dashboard') }}"><i class="entypo-home"></i>Dashboard</a>
			</li>
			<li class="active">
				<a href="companyinfo-create-page"><strong>Update Company</strong></a>
			</li>
			<li class="active">
				<i class="entypo-left-open"></i><a href="{{ url()->previous() }}"><strong>Back</strong></a>
			</li>
		</ol>
<hr>
<center><h2>Company Setup</h2></center>
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
				<form role="form" class="form-horizontal form-groups-bordered" action="{{ route('companyinfo-edit-store',$data->id) }}" method="POST" enctype="multipart/form-data">
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
						<label for="field-1" class="col-sm-3 control-label">Company MD*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_md"  value="{{$data->company_md}}" id="field-1" placeholder="Ex: Eurosia">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Phone Number*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_phone"  value="{{$data->company_phone}}" id="field-1" placeholder="Ex: 017xxxxxxxx">
						</div>
					</div>
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Telephone Number*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_telephone"  value="{{$data->company_telephone}}" id="field-1" placeholder="Ex: 017xxxxxxxx">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Company Address*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_address"  value="{{$data->company_address}}" id="field-1" placeholder="Address">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Company License No.*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_licence"  value="{{$data->company_licence}}" id="field-1" placeholder="Ex: 017xxxxxxxx">
						</div>
					</div>
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Email*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_email"  value="{{$data->company_email}}" id="field-1" placeholder="Ex: eurosia'@'gmail.com">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Website*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="company_website"  value="{{$data->company_website}}" id="field-1" placeholder="Ex: www.Eurosia.com">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Facebook Link*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" name="company_facebook"  value="{{$data->company_facebook}}" placeholder="Ex: www.fb.com/eurosia">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Instagram Link*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" name="company_instagram"  value="{{$data->company_instagram}}" placeholder="eurosia.'@'instagram.com">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Whatsapp Link*</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" name="company_whatsapp"  value="{{$data->company_whatsapp}}" placeholder="eurosia.'@'whatsapp">
						</div>
					</div>
					<div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Comapny Logo*</label>
						
						<div class="col-sm-5">
							<input type="file" class="form-control" id="field-file" name="company_logo"  value="{{$data->company_logo}}">
						</div>
					</div>
                    <div class="form-group has-success">
						<label for="field-1" class="col-sm-3 control-label">Company Icon*</label>
						
						<div class="col-sm-5">
							<input type="file" class="form-control" id="field-file" name="company_icon"  value="{{$data->company_icon}}">
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