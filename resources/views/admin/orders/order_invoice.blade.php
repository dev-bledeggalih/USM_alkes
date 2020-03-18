<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('schon/images/mt-logo.png') }}">
        </div>
        <div class="col-md-4">
            
        </div>
        <div class="col-md-4">
            <ul class="list-unstyled address-list align-right" style="text-align: right">
                <li><i class="fa fa-map-marker"></i><address><a href="https://g.page/Protecsoft?share">Rukan Permata Senayan Blok F No.11<br>Jl. Tentara Pelajar, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12210<br>Indonesia</a></address></li>
                <li><i class="fa fa-phone"></i><a href="tel:6287777322766">+62 877-7732-2766</a></li>
                <li><i class="fa fa-envelope-o"></i><a href="mailto:support@bledeggalih.com?subject=Contact%20Schon">support@bledeggalih.com</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">Order # {{ $orderDetails->id }}</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					{{ $userDetails->name }} <br>
		                {{ $userDetails->address }} <br>
		                {{ $userDetails->city }} <br>
		                {{ $userDetails->state }} <br>
		                {{ $userDetails->country }} <br>
		                {{ $userDetails->pincode }} <br>
		                {{ $userDetails->mobile }} <br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    					{{ $orderDetails->name }} <br>
		                {{ $orderDetails->address }} <br>
		                {{ $orderDetails->city }} <br>
		                {{ $orderDetails->state }} <br>
		                {{ $orderDetails->country }} <br>
		                {{ $orderDetails->pincode }} <br>
		                {{ $orderDetails->mobile }}
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					{{ $orderDetails->payment_method }}
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					{{ $orderDetails->created_at }}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td style="width:18%"><strong>Product Code</strong></td>
        							<td style="width:18%" class="text-center"><strong>Size</strong></td>
        							<td style="width:18%" class="text-center"><strong>Color</strong></td>
        							<td style="width:18%" class="text-center"><strong>Price</strong></td>
        							<td style="width:18%" class="text-center"><strong>Qty</strong></td>
        							<td style="width:18%" class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<?php $Subtotal = 0; ?>
    							@foreach($orderDetails->orders as $pro)
    							<tr>
    								<td class="text-left">{{ $pro->product_code }}</td>
    								<td class="text-center">{{ $pro->product_size }}</td>
    								<td class="text-center">{{ $pro->product_color }}</td>
    								<td class="text-center">IDR {{ $pro->product_price }}</td>
    								<td class="text-center">{{ $pro->product_qty }}</td>
    								<td class="text-right">IDR {{ $pro->product_price * $pro->product_qty }}</td>
    							</tr>
    							<?php $Subtotal = $Subtotal + ($pro->product_price * $pro->product_qty); ?>
                                @endforeach
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">IDR {{ $Subtotal }}</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Shipping Charges (+)</strong></td>
    								<td class="no-line text-right">IDR 0</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Coupon Discount (-)</strong></td>
    								<td class="no-line text-right">IDR {{ $orderDetails->coupon_amount }}</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Grand Total</strong></td>
    								<td class="no-line text-right">IDR {{ $orderDetails->grand_total }}</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<div class="footer-area" style="margin-bottom: 100px">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <p>© <a href="index.html">schön.</a> - All rights Reserved</p>
            </div>
            <div class="col-xs-12 col-sm-6 text-right">
                <div class="bank-card">
                    <img src="{{asset('schon/images/logo.png')}}" alt="bank-card">
                </div>
            </div>
        </div>
    </div>
</div>