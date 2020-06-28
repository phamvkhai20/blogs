@extends('layoutAdmin')
@section('title','Danh sách tài khoản')
@section('content')

<div class="content-page">
    <br>
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                        <div class="col-lg">
                            <div class="card-box">

                            @if(count($comments)===0)
                            <p>No data<p>
                                    @else
                                <h4 class="m-t-0 header-title">Danh Sách Tài Khoản</h4>
                              <br>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Post</th>
                                            <th>Content</th>
                                            <th>Date</th>
                                            <th>@</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($comments as $comment)

                                        <tr>
                                            <th scope="row">{{$comment->id}}</th>
                                            <td>{{$comment->user->name}}</td>
                                            <td>{{$comment->post->title}}</td>
                                            <td style="width:250px">{{substr($comment->content,0,100)}}</td>
                                            <td>{{$comment->created_at}}</td>
                                            <td>
                                                <form method="POST"
                                                    action=""
                                                    >
                                                    @csrf
                                                    <button class="btn btn-danger waves-light waves-effect w-md">Xóa</button>
                                                </form>
                                                <a class="btn btn-warning waves-light waves-effect w-md"
                                                    href="">Sửa</a>
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