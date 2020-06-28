@extends('./website/layouts/layoutWebsite')
@section('title','Trang Chủ')
@section('content')
<div class="col-xl-8 px-md-5">
    <h3 style="margin-left:-20px;padding:10px"> <a href="{{route('website.index')}}"><i
                class="mdi mdi-keyboard-backspace"></i></a> Notifications
    </h3>
    <hr>
    <div class="row pt-md-4">
        @foreach($follows as $follow)
        @if(isset($follow->notifications[0]))
        @foreach($follow->notifications as $noti)
        @if($follow->author_id == $noti->follow_id)
        @foreach($posts as $post)
        @if($post->created_at == $noti->created_at)
        <a style="width:100%;padding:10px" href="{{route('website.single' ,['id'=>$post->id])}}">
            <div class="col-md-30">
                <div class="blog-entry ftco-animate d-md-flex">
                    <div style="width:80px;height:80px;">
                
                        @if(isset($noti->user->contact->avatar))
                        <p class="img"
                            style="border-radius:5px;width:80px;height:80px;background-image: url(<?php if(substr($noti->user->contact->avatar,0,6)=='public'){echo asset('storage/'. substr($noti->user->contact->avatar,6,1000));}else{echo asset('storage/'.$noti->user->contact->avatar);} ?>);">
                        </p>
                        @else
                        <p class="img"
                            style="border-radius:5px;width:80px;height:80px;background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR8Yw0QQOJjb8ILNUJfw5QlGoBqmvo_5yv9p2Wv-6tMaRRJtWLA&usqp=CAU);">
                        </p>
                        @endif
                    </div>
                    <div class=" text-2 pl-md-4">
                        <h5 class="mb-2">
                            <b> {{$noti->user->name}}</b> added a new post.</h5>
                        <div class="meta-wrap">
                            <p class="meta">
                                <span>{{$post->created_at}}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </a>
        @endif
        @endforeach
        @endif
        @endforeach
        @endif
        @endforeach

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