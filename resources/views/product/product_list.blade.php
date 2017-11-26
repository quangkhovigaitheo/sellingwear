@extends('layouts.app')
@section('css')
<link href="{{ asset('css/content/productList.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="row">
    <div class="main-nav-wrap">
        <ul>
        <h2>Category list</h2>
            @foreach ($categories as $category)
            <li>
                <a href="{{route('view_category', $category->id)}}">
                    <i class="ico ico-book"></i>
                    <span>{{$category->name}}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div id="home-main" class="main-content col-md-9">
        <div>
            @isAdmin
            <a href="{{route('create_product')}}">
                <button class="btn btn-primary add-product-btn">Add new product</button>
            </a>
            @endisAdmin
        </div>
        <div class="category-list">
            <h3 class="category-name">
                .
            </h3>
        </div>
        <div class="content-product-list">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="box box-solid limit-p-width">
                        <div class="box-body affiliate product-item">
                            <div class="product-heading">
                                <a href="{{route('view_product',$product->id)}}">
                                    {{$product->name}}
                                </a>
                            </div>
                            <a href="{{route('view_product',$product->id)}}">
                                <img src="{{asset($product->feature_image)}}" class="img-responsive">
                            </a>

                            <div class="caption">
                                <h3>{{$product->price}}$</h3>

                                <p>{{$product->description}}</p>

                                <p>
                                    <a href="" class="btn btn-primary" role="button">
                                        Preview
                                    </a>
                                    <a href="" class="btn btn-success" role="button">
                                        Buy Now
                                    </a>
                                </p>
                                <p>
                                    @isAdmin
                                    <a href="{{route('create_product', $product->id)}}" class="btn btn-info"
                                       role="button">
                                        Update
                                    </a>
                                    <a href="{{route('delete_product', $product->id)}}" class="btn btn-danger"
                                       role="button">
                                        Delete
                                    </a>
                                    @endisAdmin
                                </p>
                                <p><i class="fa fa-shopping-cart margin-r5"></i> 47+ purchases</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/list_product/category.js') }}"></script>
@endsection
