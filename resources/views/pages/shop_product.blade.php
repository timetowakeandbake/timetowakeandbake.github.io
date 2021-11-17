@extends('show_shop')
@section('content')
<div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Danh Mục</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    @foreach($category as $key =>$cate)
                                    <div class="card">
                                        
                                        <div class="card-heading active">
                                            <a href="{{URL::to('/danh-muc-san-pham2/'.$cate->category_id)}}">{{$cate->category_name}}</a>
                                        </div>
                                      
                                    </div>
                                  @endforeach
                                </div>
                            </div>
                        </div>


                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Thương Hiệu</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                        @foreach($brand as $key => $name)
                                    <div class="card">
                                        
                                        <div class="card-heading active">
                                            <a href="{{URL::to('/thuong-hieu-san-pham/'.$name->brand_id)}}" data-toggle="collapse" data-target="#collapseOne">{{$name ->brand_name}}</a>
                                        </div>
                                      
                                    </div>
                                  @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">

                         @foreach($category_by_id as $key =>$product)
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{URL::to('public/upload/product/'.$product->product_image)}}">
                                    <div class="label new">Mới</div>
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h6>
                                    <div class="product__price">{{number_format((float)$product->product_price).' '.'VND'}}</div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                           

                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection