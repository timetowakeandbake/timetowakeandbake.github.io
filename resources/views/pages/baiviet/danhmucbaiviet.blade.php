@extends('welcome2')

@section('content2')
</br>
<div class="container">
            <div class="row">
                 @foreach($post_cate as $key =>$p)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('public/uploads/post/'.$p->post_image)}}" alt= "{{$p->post_slug}}"></div>
                        <div class="blog__item__text">
                            <h6><a href="{{url('/bai-viet/'.$p->post_slug)}}">{{$p->post_title}}</a></h6>
                            <ul>
                                <li>bởi <span>Nam đẹp trai</span></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                  
        </div>
             @endforeach



    
@endsection












