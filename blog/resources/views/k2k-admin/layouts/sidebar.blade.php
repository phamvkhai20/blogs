<div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="index.html">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">3</span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="mdi mdi-account"></i> <span>Người Dùng</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('k2k-admin.users.show')}}">Danh sách người dùng</a></li>
                                    <li><a href="{{route('k2k-admin.users.create')}}">Thêm mới</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="dripicons-tag"></i> <span>Danh Mục</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('k2k-admin.categories.show')}}">Danh sách Danh Mục</a></li>
                                    <li><a href="{{route('k2k-admin.categories.create')}}">Thêm mới</a></li>
                                    
                                </ul>
                            </li>
                          
                            <li>
                                <a href="javascript: void(0);"><i class="dripicons-message"></i> <span>Bình luận</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('k2k-admin.comments.show')}}">Danh sách bình luận</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class=" dripicons-pencil"></i> <span>Bài Viết</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('k2k-admin.posts.show')}}">Danh sách bài viết</a></li>
                                    <li><a href="{{route('k2k-admin.posts.create')}}">Thêm mới</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('website.index')}}"><i class=" mdi mdi-arrow-collapse-right"></i> <span>Xem Website</span></a>
                            </li>


                           

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>