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

                            @if(count($posts)===0)
                            <p>No data<p>
                                    @else
                                <h4 class="m-t-0 header-title">Danh Sách Tài Khoản</h4>
                              <br>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>title phụ</th>
                                            <th>image</th>
                                            <th>Author</th>
                                            <th>category</th>
                                            <th>@</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)

                                        <tr>
                                            <th scope="row">{{$post->id}}</th>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->title2}}</td>
                                            <td>  <img style="height:100px;vertical-align: middle;width:100px" src="<?php if(substr($post->images,0,6)=='public'){echo asset('storage/'. substr($post->images,6,1000));}else{echo asset('storage/'.$post->images);} ?> " alt="" title="" /></td>
                                            <td>{{isset($post->user)?$post->user->name:""}}</td>
                                            <td>{{isset($post->category)?$post->category->name_category:""}}</td>
                                            <td>
                                                    <form method="POST"
                                                        action="{{ route('k2k-admin.posts.destroy',['post'=>$post ->id])}}"
                                                    >
                                                    @csrf
                                                    <button onclick="return confirm('delete post ?')"  class="btn btn-danger waves-light waves-effect w-md">Xóa</button>
                                                </form>
                                                <a class="btn btn-warning waves-light waves-effect w-md"
                                                    href="{{ route('k2k-admin.posts.edit',['id'=>$post ->id])}}">Sửa</a>
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