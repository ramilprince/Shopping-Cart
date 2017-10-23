@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart_show as $each)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/cart/{{ $each -> productphoto }}" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{ $each -> productname }}</a></h4>
                                <h5 class="media-heading"> by <a href="#">Ramil Sison</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock Always</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $each -> productquantity }}">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>PHP {{ $each -> productprice }}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>PHP 
                        	<?php
                        		$x = $each -> productquantity;
                        		$y = $each -> productprice;

                        		$total = $x * $y;
                        		echo $total;
                        	?>
                        </strong></td>
                        <td class="col-sm-1 col-md-1">
	                        <form action="/remove-cart" method="post">
	                        {{ csrf_field() }}
	                        	<input type="hidden" name="product_id" value="{{ $each -> product_id }}"></input>
		                        <button type="submit" class="btn btn-danger">
		                            <span class="glyphicon glyphicon-remove"></span> Remove
		                        </button>
		                    </form>
                        </td>
                    </tr>
                    @endforeach

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>PHP 
                        	<?php $subtotal = 0; ?>
                        	@foreach ($cart_show as $each)
                        	<?php
                        		$x = $each -> productquantity;
                        		$y = $each -> productprice;

                        		$total = $x * $y;
                        		$subtotal += $total;
                        	?>
                        	@endforeach
                        		{{$subtotal}} 
                        </strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>PHP <?php $shipping = $total * .12; echo $shipping; ?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>PHP <?php $overall = $subtotal + $shipping; echo $overall; ?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <form action="/home" method="get">
	                        <button type="submit" class="btn btn-default">
	                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
	                        </button>
                        </form></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection