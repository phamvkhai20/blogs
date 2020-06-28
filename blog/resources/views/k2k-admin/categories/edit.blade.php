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
                                    <h4 class="header-title m-t-0">Thêm Danh mục</h4>
                                    <br>

                                    <form class="col s12" method="POST" action="{{ route('k2k-admin.categories.update',['id'=>$category  ->id])}}">
                                       @csrf
                                        <div class="form-group">
                                            <label for="name">Name category<span class="text-danger">*</span></label>
                                            <input type="text" name="name_category" parsley-trigger="change" 
                                                   placeholder="Enter user name" value="{{$category->name_category}}" class="form-control" id="name">
                                                   @error('name_category')
                                                        <small style="color:red" >{{$message}}</small>
                                                    @enderror
                                        </div>
                                            <input type="text" name="user_id" value={{$category->user_id}} hidden>

                                            <div class="radio radio-info form-check-inline" style="margin-left:10px">
                                                    <input type="radio" id="inlineRadio1" value="1" name="status"  {{$category->status==1 ? "checked": ""}}>
                                                    <label for="inlineRadio1">Public </label>
                                                </div>
                                                <div class="radio form-check-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="status"  {{$category->status==0 ? "checked": ""}}>
                                                    <label for="inlineRadio2">Hide </label>
                                                </div>
                                            
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-gradient waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                            <a  class="btn btn-light waves-effect m-l-5" href="{{route('k2k-admin.categories.show')}}">
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