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
                                    <h4 class="header-title m-t-0">Thêm bài viết </h4>
                                    <br>

                                    <form class="col s12" method="POST" action="{{ route('k2k-admin.posts.update',['id'=>$post->id])}}" enctype="multipart/form-data" >
                                       @csrf
                                        <div class="form-group">
                                            <label for="name">Title<span class="text-danger">*</span></label>
                                            <input type="text" name="title" parsley-trigger="change" 
                                                   placeholder="Tiêu đề" value="{{$post->title}}" class="form-control" id="name">
                                                   @error('title')
                                        <small style="color:red" >{{$message}}</small>
                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Title Phụ<span class="text-danger">*</span></label>
                                            <input type="text" name="title2" parsley-trigger="change" 
                                                   placeholder="Tiêu đề" value="{{$post->title2}}" class="form-control" id="name">
                                                   @error('title2')
                                        <small style="color:red" >{{$message}}</small>
                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Images<span class="text-danger">*</span></label>
                                            <input type="file" name="images" class="form-control" id="name">

                                            <input type="hidden" name="id" value="{{$post->id}}" class="form-control" id="name">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="emailAddress">Category<span class="text-danger">*</span></label>
                                            <select class="form-control" name="Category_Id">
                                            <option class="form-control" value="{{$post->category->id}}">{{$post->category->name_category}}</option>
                                            @foreach($categories as $category)
                                            @if(($category->id)!==($post->Category_Id))
                                                <option class="form-control" value="{{$category->id}}">{{$category->name_category}}</option>
                                            @endif
                                            @endforeach
                                            </select>
                                        </div>
                                        <input type="text" name="userId" value="{{$post->userId}}"  hidden/>
                                        <div class="form-group">
                                        <label for="emailAddress">Content<span class="text-danger">*</span></label>
                                        @error('content')
                                        <small style="color:red" >{{$message}}</small>
                                    @enderror
                                                    <textarea id="elm1" class="form-control" name="content">{{$post->content}}</textarea>
                                        </div>



                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-gradient waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                            <a  class="btn btn-light waves-effect m-l-5" href="{{route('k2k-admin.posts.show')}}">
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
                

    @endsection