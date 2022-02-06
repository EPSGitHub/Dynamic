@extends('admin.master')

@push('page-css')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Frequently Asked Questions</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Frequently Asked Questions</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    <!-- @include('admin.partials.alert_message') -->
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">FAQ List</h4>
                    <div class="heading-elements" style="float: right">
                        <a href="{{ route('admin.faq.create') }}" class="btn btn-success btn-sm">
                            <i class="fas fa-plus white"></i> Add FAQ
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                  <div class="card-body">
                    <table class="table table-striped table-bordered zero-configuration text-center">
                        <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Question</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($faqs as $faq)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ $faq->question }}
                                </td>
                                <td>
                                    <button id="btnAction" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="btn btn-info dropdown-toggle">
                                        <i class="la la-cog"></i>
                                    </button>
                                    <span aria-labelledby="btnAction"
                                        class="dropdown-menu mt-1 dropdown-menu-right">
                                        <a class="dropdown-item" href="">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                  </div>
                  <!-- /.card-body -->

              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
@push('page-js')
<!-- jquery-validation -->
<script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-validation/additional-methods.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function () {
      bsCustomFileInput.init();
      $('#summernote').summernote();
    });
</script>
@endpush
