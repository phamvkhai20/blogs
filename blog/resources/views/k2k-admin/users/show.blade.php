@extends('layoutAdmin')
@section('title')
Danh sách tài khoản
@endsection
@section('content')

<div class="content-page">
    <br>
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                        <div class="col-lg">
                            <div class="card-box">

                            @if(count($users)===0)
                            <p>No data<p>
                                    @else
                                <h4 class="m-t-0 header-title">Danh Sách Tài Khoản</h4>
                              <br>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Total Post</th>
                                            <th>@</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)

                                        <tr>
                                            <th scope="row">{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{isset($user->contact)?$user->contact->phone_number:""}}</td>
                                            <td>{{isset($user->posts)?count($user->posts):""}}</td>
                                            <td>
                                                <form method="POST"
                                                    action="{{ route('k2k-admin.users.destroy',['user'=>$user ->id])}}"
                                                    >
                                                    @csrf
                                                    <button onclick="return confirm('delete user ?')" class="btn btn-danger waves-light waves-effect w-md">Xóa</button>
                                                </form>
                                                <a class="btn btn-warning waves-light waves-effect w-md"
                                                    href="{{ route('k2k-admin.users.edit',['id'=>$user ->id])}}">Sửa</a>
                                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        @endif
            </div>
        </div>
    </div>
</div>
@endsection