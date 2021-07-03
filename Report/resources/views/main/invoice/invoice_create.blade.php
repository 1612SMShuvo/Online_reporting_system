@extends("layouts/main/main")
@section("content")
  <hr>
		<ol class="breadcrumb bc-3">
			<li>
				<a hquantity=""><i class="entypo-home"></i>Dashboard</a>
			</li>
			<li>
				<a hquantity="">Invoice List</a>
			</li>
			<li class="active">
				<i class="entypo-left-open"></i><a hquantity="{{ url()->previous() }}"><strong>Back</strong></a>
			</li>
		</ol>

<center><h2>INVOICE</h2></center>
<br>
        <head>

        <link rel="stylesheet" hquantity="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" hquantity="bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        </head>
    <body>
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form role="form" action="{{ route('invoice-create-store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-7">

                        </div>
                        <div class="col-sm-5">
                            <div class="form-group has-warning">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="field-5">Proforma Invoice No:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="invoice" class="form-control" value="{{ $invoice }}" id="invoice" placeholder="PAV160421101" readonly>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">

                        </div>
                        <div class="col-sm-5">
                            <div class="form-group has-warning">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="field-5">Proposal No:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="proposal_no" value="" id="proposal_no">
                                            <option selected>Choose Please.....</option>
                                            @foreach($proposal as $data)
                                                <option value="{{ $data->proposal_no }}">{{ $data->proposal_no }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group has-warning">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="field-5">Invoice Date:</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="date" name="entry_date" class="form-control" id="field-2" placeholder="Date:" >
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group has-warning">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <button type="button" name="add" id="add" class="btn btn-success">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered datatable" id="" style="width: 100%%">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Standard Price (BDT)</th>
                                    <th>Quantity</th>
                                    <th>Price (BDT)</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($service as $item)
                                    <tr>
                                        <td><input type="text" value="{{$item->service_name}}" name="service_name[]" class="form-control" readonly/></td>
                                        <td><input type="text" value="{{$item->price}}" name="s_price[]" class="form-control" readonly/></td>
                                        <td><input type="text" name="quantity[]" class="form-control" /></td>
                                        <td><input type="text" name="price[]" class="form-control" /></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-warning">
                                <label for="field-5">Sales Tax(%)</label>
                                <input type="number" name="sale_tax" id="sale_tax" class="form-control" placeholder="Enter Only Number E.g: 10">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-warning">
                                <label for="field-5">Others Parcentage(%)</label>
                                <input type="number" name="others" id="others" class="form-control" placeholder="Enter Only Number E.g: 10">
                            </div>
                        </div>
                    </div>
                    </br>
                    <div align="center">
                      <button type="submit" class="btn btn-secondary" value="Save">Save</button>
                    </div>
                </form>
                <br/>
                <!--modal-->
               {{--  <div id="user_dialog" title="Add Data" style="border-color: solid 1px; background: linear-gradient(to bottom, #66ffcc 0%, #ff99cc 100%);">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Service Name</label>
                            <select class="form-control" name="service_no" id="service_no">
        						<option selected>Choose Please.....</option>
                                @foreach($service as $data)
                                <option value="{{ $data->service_name }}">{{ $data->service_name }}</option>
                                @endforeach
        					</select>
                            <span id="error_service_no" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Standard Price (BDT)</label>
                            <input type="text" name="s_price" id="s_price" class="form-control" />
                            <span id="error_s_price" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Quantity</label>
                            <input type="text" name="quantity" id="quantity" class="form-control" />
                            <span id="error_quantity" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Price (BDT)</label>
                            <input type="text" name="price" id="price" class="form-control" />
                            <span id="error_price" class="text-danger"></span>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="form-group" align="center">
                            <input type="hidden" name="row_id" id="hidden_row_id" />
                            <button type="button" name="save" id="save" style="background-color: #562d7;">Save</button>
                        </div>
                    </div>
                </div>
                <div id="action_alert" title="Action">
                </div> --}}
            </div>
    </body>


{{-- <script>
$(document).ready(function(){

 var count = 0;

 $('#user_dialog').dialog({
  autoOpen:false,
  width:400,
 });

 $('#add').click(function(){
  $('#user_dialog').dialog('option', 'title', 'Add Data').css('border-color', 'black');
  $('#service_no').val('');
  $('#s_price').val('');
  $('#quantity').val('');
  $('#price').val('');
  $('#error_service_no').text('');
  $('#error_s_price').text('');
  $('#error_quantity').text('');
  $('#error_price').text('');
  $('#service_no').css('border-color', 'black');
  $('#s_price').css('border-color', '');
  $('#quantity').css('border-color', '');
  $('#total_price').css('border-color', '');
  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_service_no = '';
  var error_s_price = '';
  var error_quantity = '';
  var error_price = '';
  var service_no = '';
  var s_price = '';
  var quantity = '';
  var total_price = '';
  if($('#service_no').val() == '')
  {
   error_service_no = 'Payment Source is required';
   $('#error_service_no').text(error_service_no);
   $('#service_no').css('border-color', '#cc0000');
   service_no = '';
  }
  else
  {
   error_service_no = '';
   $('#error_service_no').text(error_service_no);
   $('#service_no').css('border-color', '');
   service_no = $('#service_no').val();
  }
 

  if($('#s_price').val() == '')
  {
   error_s_price = 'Cheque no is required';
   $('#error_s_price').text(error_s_price);
   $('#s_price').css('border-color', '#cc0000');
   s_price = '';
  }
  else
  {
   error_s_price = '';
   $('#error_s_price').text(error_s_price);
   $('#s_price').css('border-color', '');
   s_price = $('#s_price').val();
  }
 
  if($('#quantity').val() == '')
  {
   error_quantity = 'quantityerence is required';
   $('#error_quantity').text(error_quantity);
   $('#quantity').css('border-color', '#cc0000');
   quantity = '';
  }
  else
  {
   error_quantity = '';
   $('#error_quantity').text(error_quantity);
   $('#quantity').css('border-color', '');
   quantity = $('#quantity').val();
  }

  if($('#price').val() == '')
  {
   error_price = 'price is required';
   $('#error_price').text(error_price);
   $('#price').css('border-color', '#cc0000');
   price = '';
  }
  else
  {
   error_price = '';
   $('#error_price').text(error_price);
   $('#price').css('border-color', '');
   price = $('#price').val();
  }
  if(error_service_no != ''|| error_s_price != ''|| error_quantity != ''|| error_price != '')
  {
   return false;
  }
  else
  {
   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td>'+service_no+' <input type="hidden" name="service_no[]" id="service_no'+count+'" class="service_no" value="'+service_no+'" /></td>';
    output += '<td>'+s_price+' <input type="hidden" name="s_price[]" id="s_price'+count+'" value="'+s_price+'" /></td>';
    output += '<td>'+quantity+' <input type="hidden" name="quantity[]" id="quantity'+count+'" value="'+quantity+'" /></td>';
    output += '<td>'+price+' <input type="hidden" name="price[]" id="price'+count+'" value="'+price+'" /></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output = '<td>'+service_no+' <input type="hidden" name="service_no[]" id="service_no'+row_id+'" class="service_no" value="'+service_no+'" /></td>';
    output += '<td>'+s_price+' <input type="hidden" name="s_price[]" id="s_price'+row_id+'" value="'+s_price+'" /></td>';
    output += '<td>'+quantity+' <input type="hidden" name="quantity[]" id="quantity'+row_id+'" value="'+quantity+'" /></td>';
    output += '<td>'+price+' <input type="hidden" name="price[]" id="price'+row_id+'" value="'+price+'" /></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
  }
 });

 $(document).on('click', '.view_details', function(){
  var row_id = $(this).attr("id");
  var service_no = $('#service_no'+row_id+'').val();
  var s_price = $('#s_price'+row_id+'').val();
  var quantity = $('#quantity'+row_id+'').val();
  var price = $('#price'+row_id+'').val();
  $('#service_no').val(service_no);
  $('#s_price').val(s_price);
  $('#quantity').val(quantity);
  $('#price').val(price);
  $('#save').text('Edit');
  $('#hidden_row_id').val(row_id);
  $('#user_dialog').dialog('option', 'title', 'Edit Data');
  $('#user_dialog').dialog('open');
 });

 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this row data?"))
  {
   $('#row_'+row_id+'').remove();
  }
  else
  {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });

 $('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.service_no').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#user_data').find("tr:gt(0)").remove();
     $('#action_alert').html('<p>Data Inserted Successfully</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Please Add atleast one data</p>');
   $('#action_alert').dialog('open');
  }
 });

});
</script> --}}




@endsection
