@extends('./website/layouts/layoutWebsite')
@section('title','Trang Chủ')
@section('content')
<div class="col-lg-8 px-md-5">
    <h3 style="margin-left:-20px;padding:10px">
        <h3>
            <a href="{{route('website.index')}}"><i class="mdi mdi-keyboard-backspace"></a></i> Edit Info
        </h3>
    </h3>

    <hr>
    <div class="row pt-md-4">
        <form method="post" action="{{route('website.profile.saverInfo')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$users->name}}" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="text"  name="email" class="form-control" id="inputPassword4"  value="{{$users->email}}">
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{$users->id}}"  >
            <div class="form-group">
                <label for="inputAddress2">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress2" value="{{isset($users->contact->address)?$users->contact->address:'' }}" >
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Phone</label>
                    <input type="text" class="form-control" name="phone_number" value="{{isset($users->contact->phone_number)?$users->contact->phone_number:''}}" id="inputAddress">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <input class="form-control" name="birth_day" type="date"value="{{isset($users->contact->birth_day)?$users->contact->birth_day:''}}" id="example-date-input">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Avatar</label>
                    <input type="file" style="font-size:15px" name="avatar" class="form-control" id="inputZip">
                </div>
            </div>
            
            <button onclick="return confirm('Lưu thông tin ?')" type="submit" style="padding:0 30px 0 30px;height:50px" class="btn btn-primary">Edit</button>
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