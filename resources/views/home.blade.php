@extends('layouts.front')

@section('content')

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

<div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
<div class="electronic-banner-area">
    <div class="custom-row-2">
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/15gg.jpg" style="height:300px;width:450px" alt="">
                <div class="electro-banner-style electro-banner-position">
                    <h1 style="color:white">Live 4K! </h1>
                    <h2 style="color:white">up to 20% off</h2>
                    <h4 style="color:white">Amazon exclusives</h4>
                    <a href="product-details.html" style="color:white">Buy Now→</a>
                </div>
            </div>
        </div>
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/16gg.jpg" style="height:300px;width:450px" alt="">
                <div class="electro-banner-style electro-banner-position2">
                    <h1 style="color:white">Canon And Nikon </h1>
                    <h2 style="color:white">up to 15% off</h2>
                    <h4 style="color:white">Amazon exclusives</h4>
                    <a href="product-details.html" style="color:white">Buy Now→</a>
                </div>
            </div>
        </div>
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/17gg.jpg" style="height:300px;width:450px"  alt="">
                <div class="electro-banner-style electro-banner-position3">
                    <h1 style="color:white">BY Furniture</h1>
                    <h2 style="color:white">Super Discount</h2>
                    <h4 style="color:white">Amazon exclusives</h4>
                    <a href="product-details.html" style="color:white">Buy Now→</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="section-title-4 text-center mb-40">
        <h2>Top Products</h2>
    </div>
    <div class="top-product-style">

        </div>
        <div >
            <div  id="electro1">
                <div class="custom-row-2">
                    <?php $i=0; ?>
                    @foreach($allproducts as $product)
                    <div class="custom-col-style-2 custom-col-4">
                        <div class="product-wrapper product-border mb-24">
                            <div class="product-img-3">
                                <a href="product-details.html">
                                <img src="assets/img/product/electro/{{++$i}}.jpg" alt="{{$product->name}}">
                                </a>
                                <div class="product-action-right">

                                    <a class="animate-top" title="Add To Cart" href="{{route('cart.add',$product->id)}}">
                                        <i class="pe-7s-cart"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="product-content-4 text-center">
                                <div class="product-rating-4">
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star"></i>
                                </div>
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <span>{{$product->description}}</span>
                                <h5>$ {{$product->price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <?php$i=1; ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
