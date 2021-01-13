@extends('layout')
@section('content')

    <div class="features_items"><!--features_items-->
        @foreach($brand_name as $key => $name)
            <h2 class="title text-center">{{$name->brand_name}}</h2>
        @endforeach
        @foreach($brand_by_id as $key => $product)

            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="" />
                                <h2>{{number_format($product->product_price).' VNĐ'}}</h2>
                                <p style="overflow: hidden;  display: -webkit-box;  -webkit-line-clamp: 2;  -webkit-box-orient: vertical;">{{$product->product_name}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                            </div>
                        </a>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        @endforeach
    </div><!--features_items-->
    <style>
        .productinfo {
            overflow: hidden;
            border: 1px solid #e5e5e5;
        }

        .productinfo img {
            width: 100%;
            height: 100%;
            transition-duration: 0.3s;
        }

        .productinfo img:hover {
            transform: scale(1.2);
        }
    </style>
@endsection
