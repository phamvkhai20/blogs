@extends('./website/layouts/layoutWebsite')
@section('title','Trang Chủ')
@section('content')
<div class="col-lg-8 px-md-5">
    <h3 style="margin-left:-20px;padding:10px">
        <h3>{{$posts->title}}</h3>
    </h3>
    <form class="col s12" method="post" action="{{route('website.followAuthor')}}">
        @csrf
        <span class="date"> {{date_format($posts->created_at,"d/m/Y H:i") }}</span>
        <a href="{{route('website.profile.home',['id'=>($posts->user->email)])}}">
            <span class="date" style="padding-left:20px;">{{$posts->user->name}}
        </a>
        @auth
        <input type="text" name="author_id" value="{{$posts->user->id}}" hidden>
        <input type="text" name="user_id" value="{{Auth::user()->id}} " hidden>
        @if($posts->user->id !== Auth::user()->id)
        @if(count($follows)>0)
        <button onclick="return confirm('Hủy Theo dõi {{$posts->user->name}}')" class="btn btn-light waves-effect"> <i
                class=" mdi mdi-check"></i>
            <span>Hủy theo dõi</span>
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
    <hr>
    <div class="row">
        <p class="content">{!!$posts->content!!}<p>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a class="tag-cloud-link">{{$posts->category->name_category}}</a>
                    </div>
                </div>


                <div class="pt-5 mt-5">
                    <h5 class="mb-5 font-weight-bold">Tất cả {{count($comments)}} bình luận</h5>
                    <ul class="comment-list">
                        @foreach($comments as $comment)
                        @if($comment->status==1)
                        <li class="comment" id="comment{{$comment->user->email}}">
                            <div class="vcard bio">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS5XeaUtqAP_D0zXrIJHpweOquZpGWRnPXyBWlyZKd-j1LhfW-0&usqp=CAU"
                                    alt="Image placeholder">
                            </div>
                            <input type="text" id="name{{$comment->id}}" value="{{$comment->user->name}}" hidden>
                            <form method="POST" action="{{ route('website.deleteComment',['comment'=>$comment->id])}}">
                                @csrf
                                <div class="comment-body">
                                    <h3><a href="{{ route('website.profile.home',['id'=>$comment->user->email,])}}">
                                            {{$comment->user->name}}</a>
                                        @if($comment->user->role==2)
                                        <i class="mdi mdi-approval" style="padding-left:10px;color:blue"
                                            title="admin"></i>
                                        @endif
                                    </h3>
                                    <div class="meta">{{date_format($comment->created_at,"d/m/Y H:i") }}</div>
                                    <p>{{$comment->content}}</p>
                                    <p><a onclick="clicknek({{$comment->id}})" class="reply">Reply</a> <a class="reply"
                                            style="margin-left:10px;color:red"><i class="mdi mdi-flag"></i>Report</a>
                                        @auth
                                        @if(Auth::user()->role==2)
                                        <button class="reply" onclick="return confirm('Xóa Bình Luận Này ?')"
                                            style="border:0" style="padding-left:10px"><i
                                                class="mdi mdi-delete"></i>Xóa</button>
                                        @else
                                        @if($comment->user_id== Auth::user()->id)
                                        <button class="reply" onclick="return confirm('Xóa Bình Luận Này ?')"
                                            style="border:0" style="padding-left:10px"><i
                                                class="mdi mdi-delete"></i>Xóa</button>
                                        @endif
                                        @endif

                                        @endauth

                                    </p>

                                </div>
                            </form>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                    <!-- END comment-list -->
                   
                    <div class="comment-form-wrap pt-5" style="width:660px">
                        <h4 class="mb-5">Bình luận</h4>
                        @auth
                        
                        @if(Auth::user()->id== $posts->user->id||Auth::user()->role==2 )
                        <form class="col s12" method="post" action="{{route('website.isComment',['id'=>$posts->id])}}">
                            @csrf
                            <span>
                                @if($posts->is_comment=='true')
                                <button class="btn btn-light waves-effect"> <i class="mdi mdi-message-bulleted-off"></i>
                                    <span>Tat binh luan</span>
                                </button>
                                @else
                                <button class="btn btn-light waves-effect"> <i class="mdi mdi-message-settings"></i>
                                    <span>Bat binh luan</span>
                                </button>
                                @endif

                        </form>
                        @endif
                        @endauth



                        @if($posts->is_comment=='true')
                        @auth
                        <form class="col s12" method="POST" action="{{ route('website.comment')}}">
                            @csrf
                            <input type="text" name="post_id" value="{{$posts->id}}" hidden>
                            <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                            <input type="text" name="status" value="1" hidden>
                            <input type="text" name="is_report" value="0" hidden>
                            <div class="form-group">
                                <label for="message">Nội Dung</label>
                                <textarea name="content" id="content" cols="70" rows="10"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Bình Luận" class="btn py-3 px-4 btn-primary">
                            </div>
                        </form>
                        @endauth
                        @if(!isset(Auth::User()->id))
                        <hr>
                        <p style="text align:center;">Đăng Nhập để bình luận > <a href="{{route('formlogin')}}">Đăng
                                Nhập</a> </p>
                        <hr>
                        @endif
                        @else
                        <hr>
                        <p style="text align:center;">Bài viết đã bị Quản trị viên hoặc tác giả tắt tính năng bình luận
                        </p>
                        <hr>
                        @endif
                    </div>


                </div>

                <script>
                function clicknek(a) {
                    var textarea = document.querySelector("#content");
                    var gg = "#name" + a;
                    var names = document.querySelector(gg).value;
                    textarea.value = '@' + names + "  ";
                    textarea.focus();
                }
                </script>



    </div><!-- END-->
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
        <h3 class="sidebar-heading">Danh Mục</h3>
        <ul class="categories">
            @foreach($categories as $category)

            @if($category->status==1 && count($category->posts)>0)
            <li><a href="{{route('website.danhmuc',['id'=>$category->id])}}">{{$category->name_category}} <span>
                        {{count($category->posts)}}</span></a></li>
            @endif
            @endforeach
        </ul>
    </div>

    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Posts same topic</h3>
        @foreach($postsome as $postsome1)
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4"
                style="background-image: url(<?php if(substr($postsome1->images,0,6)=='public'){echo asset('storage/'. substr($postsome1->images,6,1000));}else{echo asset('storage/'.$postsome1->images);} ?>);"></a>
            <div class="text">
                <h3 class="heading"><a href="#">$postsome1->title</a>
                </h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> {{$postsome1->created_at}}</a></div>
                    <div><a href="#"><span class="icon-person"></span> {{$postsome1->user->name}}</a></div>
                    <div><a href="#"><span class="icon-chat"></span> {{count($postsome1->comments)}}</a></div>
                </div>
            </div>
        </div>
        @endforeach

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

</div><!-- END COL -->

@endsection