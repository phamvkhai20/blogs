<aside id="colorlib-aside" role="complementary" class="js-fullheight">
<a href="{{route('website.index')}}"> <img style="width:40px; margin:-20px 0 10px 0" src="https://upload.wikimedia.org/wikipedia/vi/thumb/9/9f/Twitter_bird_logo_2012.svg/1200px-Twitter_bird_logo_2012.svg.png" /></a>
<br>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li class="colorlib-active"><a href="{{route('website.index')}}"><i class="dripicons-home" style="padding-right:10px"></i> Home</a></li>
            <li><a href="#"><i class="dripicons-message" style="padding-right:10px"></i> Contact</a></li>
            @auth
            <li><a href="{{route('website.profile.notification',['id'=>(Auth::user()->id)])}}"><i class="mdi mdi-bell" style="padding-right:10px"></i>Notifications</a></li>
            <li><a href="{{route('website.profile.home',['id'=>(Auth::user()->email)])}}"><i class="dripicons-briefcase" style="padding-right:10px"></i> 
            
            Profile

            @php 
                     $contacts= App\Models\Contact::where('user_id',Auth::user()->id)->get();
                     if(count($contacts)==0){
                            echo "<i class=' mdi mdi-alert-circle-outline' style='color:red;font-size:25px'></i>";
                     };
            @endphp
            
            </a></li>
            @if(Auth::user()->role==2)
            <li><a href="{{route('k2k-admin.users.show')}}"><i class="dripicons-flag" style="padding-right:10px"></i> Admin</a></li>
            @endif
            <li><a href="{{route('logout')}}"><i class=" dripicons-power" style="padding-right:10px"></i> Logout</a></li>
            @endauth
            @guest
            <li><a href="{{route('formlogin')}}"><i class=" mdi mdi-chevron-double-right" style="padding-right:10px"></i>Loign</a></li>
            @endguest
        </ul>
    </nav>
    <div class="colorlib-footer" >
    @auth
    <a style="margin:auto" href="{{route('website.profile.vietbai')}}" class="btn btn-outline-primary"> <i class=" mdi mdi-border-color"></i> Thêm Bài Viết Mới</a>
    @endauth     
    </div>
</aside>