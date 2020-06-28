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

                        <form class="col s12" method="POST" action="{{ route('k2k-admin.users.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">User Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" parsley-trigger="change" placeholder="Enter user name"
                                    class="form-control" value="{{old('name')}}">
                                @error('name')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                <input type="email" name="email" parsley-trigger="change" placeholder="Enter email"
                                    class="form-control" id="emailAddress" value="{{old('email')}}">
                                @error('email')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">

                                <label for="passWord2">Role <span class="text-danger">*</span></label>
                                <select name="role" class="form-control">
                                    <option value="1">User</option>
                                    <option value="2">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="passWord2">Status<span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option value="true">Actived</option>
                                    <option value="false">Not activated</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pass1">Password<span class="text-danger">*</span></label>
                                <input id="password" type="password" name="password" placeholder="Password"
                                    class="form-control" value="{{old('password')}}">
                                @error('password')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">

                                <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                <input data-parsley-equalto="#pass1" name="cf_password" type="password"
                                    placeholder="Password" class="form-control" id="cf_password"
                                    value="{{old('cf_password')}}">
                                @error('cf_password')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            <input name="status" type="text" value="0" hidden>
                            <div class="form-group">

                                <label for="passWord2">Active<span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                <option value="true">Kích Hoạt</option>
                                <option value="false">Khóa</option>
                                </select>
                            </div>
                           

                            <div class="form-group text-right m-b-0">
                                <button class="btn btn-gradient waves-effect waves-light" type="submit">
                                    Submit
                                </button>
                                <a class="btn btn-light waves-effect m-l-5" href="{{route('k2k-admin.users.show')}}">
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