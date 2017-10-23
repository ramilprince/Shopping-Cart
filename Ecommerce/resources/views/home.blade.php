@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">HI! welcome to my shop




                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Shop All You Want!
                </div>
            </div>
        </div>
    </div>
    @foreach ($products_show as $product)
    <div class="row">
       <div class="col-xs-4 item-photo">
            <img style="max-width:100%;" src="/cart/{{ $product -> productphoto }}" />
        </div>
        <div class="col-xs-5" style="border:0px solid gray">
            <!-- Datos del vendedor y titulo del producto -->
            <h3> {{ $product -> productname }} </h3>    
            <h5 style="color:#337ab7">CATEGORY OF <a href="#">Name</a> · <small style="color:#337ab7">(5054 ventas)</small></h5>

            <!-- Precios -->
            <h6 class="title-price"><small>PRICE RANGE</small></h6>
            <h3 style="margin-top:0px;">PHP {{ $product -> productprice }}</h3>

            <!-- Detalles especificos del producto -->
            <div class="section">
                <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>                    
                <div>
                    <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                    <div class="attr" style="width:25px;background:white;"></div>
                </div>
            </div>
            <div class="section" style="padding-bottom:5px;">
                <h6 class="title-attr"><small>CAPACITY</small></h6>                    
                <div>
                    <div class="attr2">500 GB</div>
                    <div class="attr2">250 GB</div>
                </div>
            </div>   
            <div class="section" style="padding-bottom:20px;">
                <h6 class="title-attr"><small>QUANTITY</small></h6>                    
                <div>
                    <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                    <input value="{{ $product -> productquantity }}" />
                    <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                </div>
            </div>                

            <!-- Botones de compra -->
            <div class="section" style="padding-bottom:20px;">
                <form action="/add-cart" method="post">
                {{ csrf_field() }}
                    <input type="hidden" name="product_id" value="{{ $product -> id }}"></input>
                    <input type="hidden" name="productname" value="{{ $product -> productname }}"></input>
                    <input type="hidden" name="productphoto" value="{{ $product -> productphoto }}"></input>
                    <input type="hidden" name="productquantity" value="{{ $product -> productquantity }}"></input>
                    <input type="hidden" name="productprice" value="{{ $product -> productprice }}"></input>

                    <button class="btn btn-success" type="submit"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart </button>
                </form>
                
                <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Help to Sir Romack</a></h6>
                
            </div>                                        
        </div>                                   
    </div>
    @endforeach
</div>
@endsection

<script src="{{ asset('js/home.js') }}"></script>