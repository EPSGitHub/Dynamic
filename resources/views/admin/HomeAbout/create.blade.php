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

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

          <div class="content-header">
           <div class="row mb-2">
               <div class="col-sm-6">
                   <h1 class="m-0 text-dark">Create About</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                       <li class="breadcrumb-item"><a href="{{ route('about.index') }}">All Abouts</a></li>
                       <li class="breadcrumb-item active">Create About</li>
                   </ol>
               </div><!-- /.col -->
           </div><!-- /.row -->
         </div>
   <!-- /.content-header -->
   <div class="content">

           <div class="row">
               <div class="col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <div class="d-flex justify-content-between align-items-center">
                               <h3 class="card-title">Add Abouts</h3>
                               <a href="{{ route('about.index') }}" class="btn btn-primary">Go Back to abouts List</a>
                           </div>
                       </div>
                       <div class="card-body p-0">
                           <div class="row">
                               <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> Title</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Content 1</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" id="editor"  class="form-control" name="description1" placeholder="Enter text here">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Content 2</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" id="editor"  class="form-control" name="description2" placeholder="Enter text here">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                          <label for="image"> image</label>
                                          <div class="custom-file">
                                              <input type="file" name="image" class="custom-file-input" id="image">
                                              <label class="custom-file-label" for="image">Choose file</label>
                                          </div>
                                      </div>



                                <div class="card-footer">
                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

 </div>
</div>
</div>
</div>
</div>

<script src="{{asset('admin/assets/ckfinder/ckfinder.js')}}"></script>
 <script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
var editor = CKEDITOR.replace( 'editor' );
CKFinder.setupCKEditor( editor );

</script>

@endsection
