@extends('welcome2')
@section('content2')
 <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="blog__details__content">
                    
                        <div class="blog__details__item">
                                @foreach($post_by_id as $key =>$p)
                            <img src="{{asset('public/uploads/post/'.$p->post_image)}}" alt="">
                            @endforeach
                            <div class="blog__details__item__title">
                                <span class="tip">{{$meta_title}}</span>
                              
                                <h4>{{$meta_title}}</h4>
                                
                                <ul>
                                    <li>bởi <span>Phóng viên đài truyền hình Vĩnh Long</span></li>
                            
                                </ul>
                            </div>
                        </div>
                        
                        <div class="blog__details__desc">
                            @foreach($post_by_id as $key =>$p)
                           {!!$p->post_content!!}
                            @endforeach
                        </div>
                        <div class="blog__details__quote">
                            <div class="icon"><i class="fa fa-quote-left"></i></div>
                            <p></p>
                        </div>
                        <div class="blog__details__desc">
                            <p></p>
                        </div>
                        <div class="blog__details__tags">
                            @foreach($category_post as $key =>$cat)
                            <a href="{{URL::to('/danh-muc-bai-viet/'.$cat->cate_post_slug)}}">{{$cat->cate_post_name}}</a>
                            @endforeach
                        </div>

                        <div class="blog__details__comment">
                            <p><div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="5"></div></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <div class="section-title">
                                <h4>Danh mục</h4>
                            </div>
                            <ul>
                                @foreach($category_post as $key =>$cat)
                                <li><a href="{{URL::to('/danh-muc-bai-viet/'.$cat->cate_post_slug)}}">{{$cat->cate_post_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <div class="section-title">
                                <h4>Bài viết liên quan</h4>
                            </div>
                            @foreach($related as $key =>$p)
                            <a href="{{url('/bai-viet/'.$p->post_slug)}}" class="blog__feature__item">
                                <div class="blog__feature__item__pic">
                                    <img src="{{asset('public/uploads/post/'.$p->post_image)}}" alt="{{$p->post_slug}}" width="90px" height="60">
                                </div>
                                <div class="blog__feature__item__text">
                                    <h6>{{$p->post_title}}</h6>
                                    <span>Xem ngay</span>
                                </div>
                            </a>
                            @endforeach
                        <div class="blog__sidebar__item">
                            <div class="section-title">
                                <h4>Thẻ đám mây</h4>
                            </div>
                            <div class="blog__sidebar__tags">
                                 @foreach($category_post as $key =>$cat)
                               <a href="{{URL::to('/danh-muc-bai-viet/'.$cat->cate_post_slug)}}">{{$cat->cate_post_name}}</a>
                                 @endforeach
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection