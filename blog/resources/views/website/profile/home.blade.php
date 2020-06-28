@extends('./website/layouts/layoutWebsite')
@section('title','Trang Chủ')
@section('content')
<div class="col-lg-8 px-md-5">
    <h3 style="margin-left:-20px;padding:10px">

        <h3>
            <a href="{{route('website.index')}}"><i class="mdi mdi-keyboard-backspace"></a></i> {{$users->name}}
            @if($users->role==2)
            <i class="mdi mdi-approval" style="padding-left:10px;color:blue" title="admin"></i>
            @endif</h3>
    </h3>
    <br>
    <div style="height:190px;">
        <div>
            <form class="col s12" method="post" action="{{route('website.profile.followAuthor')}}"> 
                @csrf
                <span style=" float:left;">
                    @auth
                    <input type="text" name="author_id" value="{{$users->id}}" hidden>
                    <input type="text" name="user_id" value="{{Auth::user()->id}} " hidden>
                    @if($users->id !== Auth::user()->id)
                    @if(count($follows)>0)
                    <button onclick="return confirm('Hủy Theo dõi {{$users->name}}')" style="margin-left:-30px"
                        class="btn btn-light waves-effect"> <i class=" mdi mdi-check"></i>
                        <span>Huỷ theo dõi</span>
                    </button>
                    @else
                    <button class="btn btn-light waves-effect"> <i class="mdi mdi-rss"></i>
                        <span>Theo dõi</span>
                    </button>
                    @endif
                    @endif
                    @endauth
                </span>
            </form>
            @auth
            @if($users->id == Auth::user()->id)
            <a href="{{route('website.profile.editProfile')}}" class="btn btn-light waves-effect" style="padding-right:20px;font-size:20px">
                <i class=" mdi mdi-border-color"></i> Edit info
            </a>
            @endif
            @endAuth
            <br>
            <br>
            <ul >
                <li>
                    Email: {{$users->email}}
                </li>

                @if(!empty( $users->contact))
                <li>
                 Phone:   {{ $users->contact->phone_number}}
                </li>
                <li>
                 Addres:   {{ $users->contact->address}}
                </li>
                @endif
                <li>
                    <b>{{count($dangtheodoi)}}</b> Following <b>{{count($duoctheodoi)}}</b>
                    Followers</li>
                <li>
                    Total Post: <b> {{count($users->posts)}}</b>  </Total>
                </li>
            </ul>
            </span>

        </div>
        @if(isset($users->contact->avatar))
        <img style="width:120px;height:120px;border-radius:100px;vertical-align: middle;float: right;margin-top:-170px"
            src="<?php if(substr($users->contact->avatar,0,6)=='public'){echo asset('storage/'. substr($users->contact->avatar,6,1000));}else{echo asset('storage/'.$users->contact->avatar);} ?> " />
        @else
        <img style="width:120px;height:120px;border-radius:100px;vertical-align: middle;float: right;margin-top:-170px"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR8Yw0QQOJjb8ILNUJfw5QlGoBqmvo_5yv9p2Wv-6tMaRRJtWLA&usqp=CAU" />
        @endif
        </div>
    <hr>
    <div class="row pt-md-4">

        @foreach($posts as $post)
        <div class="col-md-30">
            <div class="blog-entry ftco-animate d-md-flex" style="width:600px">
                <div style="width:160px;height:160px;">
                    <a href="{{ route('website.single',['id'=>$post ->id])}}" class="img"
                        style="border-radius:5px;width:160px;height:160px;background-image: url(<?php if(substr($post->images,0,6)=='public'){echo asset('storage/'. substr($post->images,6,1000));}else{echo asset('storage/'.$post->images);} ?> );"></a>
                </div>
                <div class=" text-2 pl-md-4">
                    <h5 class="mb-2"><a style="color:#000"
                            href="{{ route('website.single',['id'=>$post ->id])}}">{{$post->title}}</a></h5>
                    <div class="meta-wrap">
                        <p class="meta" style="margin-top:-8px">
                            <span><i class="icon-calendar mr-2"></i>
                                {{date_format($post->created_at,"d/m/Y H:i") }}</span>
                            <span> <a href="{{route('website.profile.home',['id'=>($post->user->email)])}}"><i
                                        class=" mdi mdi-account-box-outline"> </i> {{$post->user->name}}</a></span>
                            <span><i class="icon-comment2 mr-2" style="color:red"></i>{{count($post->comments)}}</span>
                        </p>
                    </div>
                    <p class="mb-4" id="content" style="margin-top:-20px"><a href="single.html">{{$post->category->name_category}}</a> -
                        {{$post->title2}}</p>
                </div>
            </div>

        </div>

        @endforeach
    </div>
</div>
<div class="col-lg-4 sidebar ftco-animate bg-light pt-5">
    <div class="sidebar-box pt-md-4">
        <form action="#" class="search-form">
            <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
        </form>
    </div>
    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Following</h3>
        <ul class="categories">
            @foreach($dangtheodoiShow as $following)
            <li><a href="{{route('website.profile.home',['id'=>$following->user1->email]) }}"><i style="color:green"
                        class="mdi mdi-account-circle"></i> {{$following->user1->name}} <span>(<i style="color:red"
                            class=" mdi mdi-format-float-right"> </i>{{count($following->user1->posts)}})</span></a>
            </li>
            @endforeach
        </ul>
    </div>


    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Popular Articles</h3>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
            <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a>
                </h3>
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
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a>
                </h3>
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
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a>
                </h3>
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

    <div class="sidebar-box subs-wrap img" style="background-image: url(images/bg_1.jpg);">
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
            necessitatibus voluptate quod mollitia delectus aut.</p>
    </div>
</div><!-- END COL -->

@endsection