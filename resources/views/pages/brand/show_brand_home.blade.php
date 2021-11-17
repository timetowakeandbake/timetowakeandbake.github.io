@extends('welcome')
@section('content')
 <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                     @foreach($brand_name as $key => $name)
                    <h4>{{$name -> brand_name}}</h4>
                   
                </div>
            </div>
                      <div class="col-lg-8 col-md-8">
                 
                <ul class="filter__controls">
                       <li ><a href="{{URL::to('/trang-chu')}}">Tất cả</a></li>
                @foreach($category as $key =>$cate)
             <li data-filter=".women"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>
         
                @endforeach
                </ul>

            </div>
           
        </div>
        <div class="row property__gallery">
            @foreach($brand_by_id as $key =>$product)
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">     
                    <div class="product__item__pic set-bg" data-setbg="{{URL::to('public/upload/product/'.$product->product_image)}}">
                        <div class="label new">Mới</div>
                        <ul class="product__hover">
                            <li><a href="img/product/product-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="product-details.html">{{$product->product_name}}</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">{{number_format((float)$product->product_price).' '.'VND'}}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

@endsection