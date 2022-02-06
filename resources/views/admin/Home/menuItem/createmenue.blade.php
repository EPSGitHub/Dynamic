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

                                            <h4 class="card-title">Create  Menu</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('menuitem.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                  <label class="col-lg-3 col-form-label">Menu Name</label>
                                                  <div class="col-lg-9">
                                                      <input type="name" name="name" class="form-control">
                                                  </div>
  </div>
  <div class="mb-3">
    <label class="col-lg-3 col-form-label">Menu Link</label>
    <div class="col-lg-9">
        <input type="link" name="link" class="form-control">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>


        </div>
    </div>
</div>
</div>

@endsection
