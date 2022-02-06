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

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome {{ Auth::user()->name }}</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">

                    <div class="col-md-10">
                        <div class="card flex-fill">
                            <div class="card-header">

                                <h4 class="card-title">UPdate  Post</h4>
                            </div>
                            <div class="card-body">

                                @php
                                $featured = json_decode($post ->featured);
                                @endphp

                                <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Post Title</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="title" class="form-control" value="{{ $post ->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Categories</label>
                                        <div class="col-md-9">
                                            @foreach ($post_category as $p_cat )
                                            <div class="checkbox">

                                                    <input type="checkbox" value="{{ $p_cat->id }}" name="checkbox[]"
                                                        @foreach ($post->postCategories as $p)
                                                        @if ($p_cat->id == $p->id)
                                                        checked
                                                    @endif
                                                        @endforeach


                                                    > {{ $p_cat->name }}

                                            </div>
                                            @endforeach


                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Tags</label>
                                        <div class="col-md-9">
                                            @foreach ($post_tags as $p_tag )
                                            <span class="checkbox">

                                                    <input type="checkbox" value="{{ $p_tag->id }}" name="tag[]"
                                                        @foreach ($post->postTags as $p)
                                                        @if ($p_tag->id == $p->id)
                                                        checked
                                                    @endif
                                                        @endforeach


                                                    > {{ $p_tag->name }}

                                            </span>
                                            @endforeach


                                        </div>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <label class="col-form-label col-md-3">Select Tag</label>
                                        <div class="col-md-8">
                                            <select class="form-control post_tag_select"  name="tag[]" multiple="multiple"
                                            @foreach ($post ->postTags  as $ptag) --}}
                                                {{-- <option  value= {{ $ptag->id  }}> {{ $ptag->name }}</option> --}}

                                            {{-- @endforeach





                                                @foreach ($post_tags as $ptag )
                                                <option  value= {{ $ptag->id  }}>{{ $ptag->name }}</option>
                                                @endforeach



                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Post Content</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" id="editor"  class="form-control" name="content" placeholder="Enter text here">{{ $post ->description }}</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                          <label for="image">Featured image</label>
                                          <div class="custom-file">
                                              <input type="file" name="image" class="custom-file-input" id="image">
                                              <label class="custom-file-label" for="image">Choose file</label>
                                          </div>
                                      </div>


                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

</div>

<!-- /Main Wrapper -->

<script src="{{asset('admin/assets/ckfinder/ckfinder.js')}}"></script>
 <script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
var editor = CKEDITOR.replace( 'editor' );
CKFinder.setupCKEditor( editor );

</script>

@endsection
