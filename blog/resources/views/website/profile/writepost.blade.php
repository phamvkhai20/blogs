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
    <div style="height:150px;">
        <span style=" float:left;">
            <i class=" mdi mdi-border-color" style="padding-right:20px;font-size:25px"></i><i
                style="padding-right:20px;font-size:25px" class=" mdi mdi-account-plus"></i><i
                style="padding-right:20px;font-size:25px" class="icon-calendar mr-2"></i>
            <br>
            <p style=" float:left;">Email: {{$users->email}}</p>
            <br>
            <p style=" float:left;margin-top:-15px">
                {{!empty( $users->contact)?"Phone: ".$users->contact->phone_number :""}}</p>
            <br>
            <p style=" float:left;margin-top:-15px"><b>{{count($dangtheodoi)}}</b> Following
                <b>{{count($duoctheodoi)}}</b> Followers </p>
            </p>
            <br>
            <p style=" float:left;margin-top:-15px">Total Post: <b> {{count($users->posts)}} </b> </p>
        </span>
        <img style="width:120px;height:120px;border-radius:100px;vertical-align: middle;float: right;"
            src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/88125274_1086492335036051_5584386112563970048_o.jpg?_nc_cat=105&_nc_sid=7aed08&_nc_ohc=vbhCOZZNrL4AX8YQIPc&_nc_ht=scontent.fhan2-4.fna&oh=5d9af4f8d75a15d4245ba19f8a0edc75&oe=5F06B9CC" />
    </div>
    <hr>
    <div class="row pt-md-4">
        <form class="col s12" method="POST" action="{{route('website.posts.addpost')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Title<span class="text-danger">*</span></label>
                <input type="text" name="title" parsley-trigger="change" placeholder="Tiêu đề" class="form-control"
                    id="name" value="{{old('title')}}">
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Title<span class="text-danger">*</span></label>
                <input type="file" name="images" parsley-trigger="change"class="form-control"
                    id="name" value="{{old('title')}}">
                
            </div>

            <div class="form-group">
                <label for="name">Title phụ<span class="text-danger">*</span></label>
                <input type="text" name="title2" parsley-trigger="change" placeholder="Tiêu đề Phụ" class="form-control"
                    id="name" value="{{old('title2')}}">
                @error('title2')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <!-- 
            <div class="form-group">
                <label for="name">Images<span class="text-danger">*</span></label>
                <input type="file" name="images" class="form-control" id="name">
            </div> -->

            <div class="form-group">
                <label for="emailAddress">Category<span class="text-danger">*</span></label>
                <select class="form-control" name="Category_Id">
                    @foreach($categories as $category)
                    <option class="form-control" value="{{$category->id}}">{{$category->name_category}}
                    </option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="userId" value="{{Auth::user()->id}}" />
            <input type="hidden" name="follow_id" value="{{Auth::user()->id}}" />

            <input type="text" name="classify" value="true" hidden />
            <div class="form-group">
                <label for="emailAddress">Content<span class="text-danger">*</span></label>
                @error('content')
                <small style="color:red">{{$message}}</small>
                @enderror
                <textarea id="elm1" class="form-control" name="content">{{old('content')}}</textarea>
            </div>
            <script src="{{asset('assets/js/jquery.core.js')}}"></script>
            <script src="{{asset('assets/js/jquery.app.js')}}"></script>




            <div class="form-group text-right m-b-0">
                <button class="btn btn-gradient waves-effect waves-light" type="submit">
                    Submit
                </button>
                <a class="btn btn-light waves-effect m-l-5" href="{{route('k2k-admin.users.show')}}">
                    Cancel
                </a>
            </div>

        </form>
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