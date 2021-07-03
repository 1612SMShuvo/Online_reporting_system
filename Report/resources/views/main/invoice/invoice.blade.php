<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Eurosia ITC Services Limited | Invoice</title>
	

	<link rel="stylesheet" href="{{asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/font-icons/entypo/css/entypo.css')}}">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/neon-core.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/neon-theme.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/neon-forms.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

	<script src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>

	<style>
		table, td, th {
			border: 1px solid black;
			margin-left:5px; 
		}
		
		table {
		  width: 80%;
		  border-collapse: collapse;
		}
		</style>

	
	
</head>
<body class="page-body" >

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
<div class="main-content">
	

<div class="invoice" style="margin-top:0px">

	<div class="row">
		<div class="col-sm-12" style="padding:5px ;">
			<h1 style="color: chartreuse;font-size:24px;"><center><b><img src="{{asset('assets/images/logo1.png')}} " style="width:50px; height:50px;" />EUROSIA ITC SERVICE LIMITED</b></center></h1>	
			<p><center><b>Commercial Invoice</b></center></p>
		</div>
	</div>
	<div class="row">
		<div align="center">
		<table style="border-collapse: none;">
			<tbody>
				<tr>
					<td style="padding:5px ;">
						Proforma Invoice No:{{ $invoice->invoice }} 
					</td>
					<td style="text-align:right;padding:5px ;">
						Invoice Date:{{ date('d-m-Y', strtotime($invoice->created_at)) }}
					</td>
				</tr>
				<tr>
					<td colspan="2" style="padding:5px ;"> 
						Bill To:
							{{ $clients->company_name }}<br>
							{{ $clients->company_address }}<br>
							Email: {{ $clients->company_email }}

					</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>

	<div class="row">
		<div align="center">
			<table>
				<tbody>
					<tr>
						<td style="padding:5px ;">
							Description
						</td>
						<td style="padding:5px ;text-align:center;">
							Quantity
						</td style="padding:5px ;">
						<td style="padding:5px ;text-align:center;">
							Standard Price (BDT)
						</td>
						<td style="padding:5px ;text-align:center;">
							Price (BDT)
						</td>
					</tr>
					@php $t_price=0; @endphp
					@foreach($invoicebreakdown as $data)
					<tr>
						<td style="padding:5px ;">
							<p><span>{{ $data->service_name }}</span></p>
						</td>
						<td style="padding:5px ;text-align:center;">{{ $data->quantity }}</td>
						<td style="padding:5px ;text-align:center;">{{ $data->s_price }}</td>
						<td style="padding:5px ;text-align:center;">{{ $data->price }}</td>
						@php $t_price = $data->price + $t_price; @endphp
					</tr>
					@endforeach
					<tr>
						<td colspan="3" style="padding:5px ;">
							<p style='text-align:center;'><span style="color:black;">Total Amount in BDT</span></p>
						</td>
						<td style="padding:5px ;text-align:center;">{{ $t_price }}</td>
					</tr>
					<tr>
						<td colspan="3" style="padding:5px ;">
							<p style='text-align:center;'><span style="color:black;">Administrative cost 10%</span></p>
						</td>
						<td style="padding:5px ;text-align:center;">{{ ($t_price*10/100) }}</td>
					</tr>
					<tr>
						<td colspan="3" style="padding:5px ;">
							<p style='text-align:right;'><strong><span style="color:black;">Subtotal</span></strong></p>
						</td>
						<td style="padding:5px ;text-align:center;">{{ $t_price + ($t_price*10/100) }}</td>
					</tr>
					<tr>
						<td colspan="3" style="padding:5px ;">
							<p style='text-align:right;'><span style="color:black;">Sales Tax</span></p>
						</td>
						<td style="padding:5px ;text-align:center;">{{ $invoice->sale_tax }}%</td>
					</tr>
					<tr>
						<td colspan="3" style="padding:5px ;" style="padding:5px ;">
							<p style='text-align:right;'><span style="color:black;">Other&rsquo;s</span></p>
						</td>
						<td style="padding:5px ;text-align:center;">{{ $invoice->others }}%</td>
					</tr>
					<tr>
						<td colspan="3" style="padding:5px ;" style="padding:5px ;">
							<p style='text-align:right;'><strong><span style="color:black;">Net Payable</span></strong></p>
						</td>
						<td style="padding:5px ;text-align:center;">{{ $invoice->total_price }}</td>
					</tr>
					{{-- <tr>
						<td colspan="2" style="padding:5px ;" style="padding:5px ;">
							<p style='text-align:right;'><strong><span style="color:black;">In Words:</span></strong></p>
						</td>
						<td colspan="2" style="padding:5px ;text-align:center;"></td>
					</tr> --}}
				</tbody>
			</table>
		</div>
	</div>
	<br><br>
	<div class="row">
		<div style="margin-left: 50px">
			<h4 style="text-align: center;">Terms and Conditions</h4>
			<p><strong>Notes:</strong></p>
			<p> 1. The offer is valid for 30 days from the date of submission<br>
				2. Total 7 working days required to complete the above work from the date of work order.<br>
				3. Payment: 50% with work order and rest amount should be paid after the job done.</p>
			<p>Bank Details:</p>
			<p>Eurosia Certifications Ltd.<br>
				A/c: 1151070209997<br>
				Eastern Bank Ltd<br>
				Bashandhura Branch, Dhaka
			</p>
			<p>Deliverable:;One copy of colored book of reports with its protected PDF soft copy</p>
			<p><em><span style="font-size:13px;font-family:Calibri-Bold;">This is Computer Generated Invoice does not require Signature</span></em></p>
	    </div>
	</div>


	<div class="row">
	

		<div class="col-md-12 invoice-right">
			<br />
				
				<a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
					Print Invoice
					<i class="entypo-doc-text"></i>
				</a>
				
				&nbsp;
		</div>
	
		
		
	</div>
	         

</div><!-- Footer -->
</div>

</div>

	<link rel="stylesheet" href="{{asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
	<link rel="stylesheet" href="{{asset('assets/js/rickshaw/rickshaw.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/js/datatables/responsive/css/datatables.responsive.css')}}">
	<link rel="stylesheet" href="{{asset('assets/js/select2/select2-bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/js/select2/select2.css')}}">


	<!-- Bottom Scripts -->

	

	<script src="{{asset('assets/js/gsap/main-gsap.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/js/joinable.js')}}"></script>
	<script src="{{asset('assets/js/resizeable.js')}}"></script>
	<script src="{{asset('assets/js/neon-api.js')}}"></script>
	<script src="{{asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script src="{{asset('assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js')}}"></script>
	<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('assets/js/rickshaw/vendor/d3.v3.js')}}"></script>
	<script src="{{asset('assets/js/rickshaw/rickshaw.min.js')}}"></script>
	<script src="{{asset('assets/js/raphael-min.js')}}"></script>
	<script src="{{asset('assets/js/morris.min.js')}}"></script>
	<script src="{{asset('assets/js/toastr.js')}}"></script>
	<script src="{{asset('assets/js/neon-chat.js')}}"></script>
	<script src="{{asset('assets/js/neon-custom.js')}}"></script>
	<script src="{{asset('assets/js/neon-demo.js')}}"></script>

</body>
</html>