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

                            @if(count($categories)===0)
                            <p>No data<p>
                                    @else
                                <h4 class="m-t-0 header-title">Danh sách danh mục</h4>
                              <br>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name Category</th>
                                            <th>Author</th>
                                            <th>Time create</th>
                                            <th>Total Post</th>
                                            <th>@</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)

                                        <tr>
                                            <th scope="row">{{$category->id}}</th>
                                            <td>{{$category->name_category}}</td>
                                            <td>{{$category->user->name}}</td>
                                            <td>{{$category->created_at}}</td>
                                            <td>{{isset($category->posts) ? count($category->posts) :"0" }}</td>
                                            <td>
                                            <form method="POST"
                                                    action="{{ route('k2k-admin.categories.destroy',['category'=>$category ->id])}}"
                                                    >
                                                    @csrf
                                                    <button onclick="return confirm('delete category ?')"  class="btn btn-danger waves-light waves-effect w-md">Xóa</button>
                                                </form>
                                                <a class="btn btn-warning waves-light waves-effect w-md"
                                                    href="{{ route('k2k-admin.categories.edit',['id'=>$category ->id])}}">Sửa</a>
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