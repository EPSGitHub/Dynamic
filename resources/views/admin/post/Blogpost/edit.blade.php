@extends('admin.layouts.app')

@section('main-content')

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- header -->
    @include('admin.layouts.header')
    <!-- /header -->

    <!-- Sidebar -->
    @include('admin.layouts.menu')
    <!-- /Sidebar -->
<!-- Content Header (Page header) -->


    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

       <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blogpost.index') }}">Post list</a></li>
                    <li class="breadcrumb-item active">Edit Post</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Edit Blog Post </h3>
                            <a href="{{ route('blogpost.index') }}" class="btn btn-primary">Go Back to Post List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                         <div class="row">
                             <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                 <div class="card-body">
                                     <form action="{{ route('blogpost.update', [$post->id]) }}" method="POST" enctype="multipart/form-data">
                                         @csrf

                                         <div class="form-group">
                                             <label for="title">Post title</label>
                                             <input type="name" name="title" value="{{ $post->title }}" class="form-control" placeholder="Enter title">
                                         </div>
                                         <div class="form-group">
                                             <label for="category">Post Category</label>

                                             <select name="category" id="category" class="form-control">
                                                 <option value="" style="display: none" selected>Select Category</option>
                                                 @foreach($categories as $c)
                                                 <option value="{{ $c->id }}" @if($post->category_id == $c->id) selected @endif> {{ $c->name }} </option>
                                                 @endforeach
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <div class="row">
                                                 <div class="col-8">
                                                     <label for="image">Image</label>
                                                     <div class="custom-file">
                                                         <input type="file" name="image" class="custom-file-input" id="image">
                                                         <label class="custom-file-label" for="image">Choose file</label>
                                                     </div>
                                                 </div>
                                                 <div class="col-4 text-right">
                                                     <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                         <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="exampleInputPassword1">Description</label>
                                             <textarea name="description" id="editor" rows="4" class="form-control"
                                                 placeholder="Enter description">{{ $post->description }}</textarea>
                                         </div>
                                         <div class="form-group">
                                             <button type="submit" class="btn btn-lg btn-primary">Update Post</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/ckeditor/content.css') }}">
@endsection

@section('script')
<script src="{{asset('admin/assets/ckfinder/ckfinder.js')}}"></script>
 <script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
  <script>
  var editor = CKEDITOR.replace( 'editor' );
  CKFinder.setupCKEditor( editor );

  </script>


@endsection
