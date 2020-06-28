@extends('./website/layouts/layoutWebsite')
@section('title','Trang Chủ')
@section('content')
<div class="col-xl-8 px-md-5">
    <h3 style="margin-left:-20px;padding:10px">Trang Chủ
    </h3>

	<hr>
    <div class="row pt-md-4">
   

        @foreach($posts as $post)
        
        <div class="col-md-30">
            <div class="blog-entry ftco-animate d-md-flex">
            <div style="width:160px;height:160px;">
                <a href="{{ route('website.single',['id'=>$post ->id])}}" class="img" style="border-radius:5px;width:160px;height:160px;background-image: url(<?php if(substr($post->images,0,6)=='public'){echo asset('storage/'. substr($post->images,6,1000));}else{echo asset('storage/'.$post->images);} ?> )"></a>
                </div>
                <div class=" text-2 pl-md-4">
                    <h5  class="mb-2"><a style="color:#000" href="{{ route('website.single',['id'=>$post ->id])}}">{{$post->title}}</a></h5>
                    <div class="meta-wrap">
                        <p class="meta">
                            <span><i class="icon-calendar mr-2"></i>
                                {{date_format($post->created_at,"d/m/Y H:i") }}</span>
                            <span>        <a href="{{route('website.profile.home',['id'=>($post->user->email)])}}"><i class=" mdi mdi-account-box-outline"> </i> {{$post->user->name}}</a></span>
                            <span><i class="icon-comment2 mr-2" style="color:red"></i>{{count($post->comments)}}</span>
                        </p>

                    </div>
                    <p class="mb-4" id="content"><a href="{{route('website.danhmuc',['id'=>$post->category->id])}}">{{$post->category->name_category}}</a> - {{$post->title2}}</p>
                  
                </div>
            </div>

        </div>

        @endforeach
        <div class="row" style="width:22%;margin:auto">
        {{$posts->links()}}
		</div>
   

    </div><!-- END-->
    <!-- <div class="row">
        <div class="col">
            <div class="block-27">
                <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </div>
        </div>
    </div> -->
</div>



<div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
    <div class="sidebar-box pt-md-4">
        <form action="#" class="search-form">
            <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
        </form>
    </div>
    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Categories</h3>
        <ul class="categories">
            @foreach($categories as $category)
            @if($category->status==1&& count($category->posts)>0)
            <li><a href="{{route('website.danhmuc',['id'=>$category->id])}}">{{$category->name_category}} <span> {{count($category->posts)}}</span></a></li>
            @endif
            @endforeach
        </ul>
    </div>

    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Popular Articles</h3>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
            <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
            </div>
        </div>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
            <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
            </div>
        </div>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
            <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Tag Cloud</h3>
        <ul class="tagcloud">
            <a href="#" class="tag-cloud-link">animals</a>
            <a href="#" class="tag-cloud-link">human</a>
            <a href="#" class="tag-cloud-link">people</a>
            <a href="#" class="tag-cloud-link">cat</a>
            <a href="#" class="tag-cloud-link">dog</a>
            <a href="#" class="tag-cloud-link">nature</a>
            <a href="#" class="tag-cloud-link">leaves</a>
            <a href="#" class="tag-cloud-link">food</a>
        </ul>
    </div>

    <div class="sidebar-box subs-wrap img py-4" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <h3 class="mb-4 sidebar-heading">Newsletter</h3>
        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
        <form action="#" class="subscribe-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email Address">
                <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
            </div>
        </form>
    </div>




    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Paragraph</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod
            mollitia delectus aut.</p>
    </div>
</div><!-- END COL -->

@endsection