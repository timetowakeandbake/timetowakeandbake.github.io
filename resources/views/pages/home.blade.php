@extends('welcome')
@section('content')

 <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Sản phẩm mới</h4>
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
            @foreach($all_product as $key =>$product)

            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
<form>
     <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
     <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
     <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
     <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
     <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                <div class="product__item">     
                    <div class="product__item__pic set-bg" data-setbg="{{URL::to('public/upload/product/'.$product->product_image)}}">
                        <div class="label new">Mới</div>
                        <ul class="product__hover">
                            <li><a href="{{URL::to('public/upload/product/'.$product->product_image)}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>


                            <li><a type="button" class="add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart"><span class="icon_bag_alt" ></span></a></li>

                           {{--  <li><button type="button" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart"><span class="icon_bag_alt"></span></button></li> --}}
                        </ul>
                        
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h6>
                        <div class="product__price">{{number_format((float)$product->product_price).' '.'VND'}}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
   </form>
    </div>
 
@endsection
