@extends('./layoutAdmin')
@section('title','Thêm mới')
@section('content')

<div class="content-page">
    <br>
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                    <div class="row">
                            <div class="col-lg">

                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Thêm tài khoản mới</h4>
                                    <br>

                                    <form class="col s12" method="POST" action="{{ route('k2k-admin.users.update',['id'=>$user ->id])}}">
                                       @csrf
                                        <div class="form-group">
                                            <label for="name">User Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" parsley-trigger="change" required
                                                   placeholder="Enter user name" value="{{$user->name}}" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                            <input type="text" name="email" parsley-trigger="change" required
                                                   placeholder="Enter email" value="{{$user->email}}"  class="form-control" id="emailAddress">
                                        </div>
                                        <div class="form-group">
                                        <label for="emailAddress">Status<span class="text-danger">*</span></label>
                                        <select name="status" class="form-control">
                                            @if($user->status=='true')
                                            <option value="user->status">Hoạt động</option>
                                            <option value="false">Khóa</option>
                                        
                                        @else
                                        <option value="false">Khóa</option>

                                        <option value="true">Hoạt động</option>
                                        @endif
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="emailAddress">Role<span class="text-danger">*</span></label>
                                        <select name="role" class="form-control">
                                        @if($user->role=='2')
                                            <option value="2">Admin</option>
                                            <option value="1">User</option>
                                        
                                        @else
                                        <option value="1">User</option>

                                        <option value="2">Admin</option>
                                        @endif
                                        </select>
                                        </div>
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-gradient waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                            <a  class="btn btn-light waves-effect m-l-5" href="{{route('k2k-admin.users.show')}}">
                                                Cancel
                                            </a>
                                        </div>

                                    </form>
                                </div> <!-- end card-box -->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
                <script>
                    

                </script>
@endsection