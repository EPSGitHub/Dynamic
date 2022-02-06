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
                   <h5 class="m-0 text-dark">Add About</h5>
               </div><!-- /.col -->
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                       <li class="breadcrumb-item"><a href="{{ route('about.index') }}">All abouts</a></li>
                       <li class="breadcrumb-item active">Create about</li>
                   </ol>
               </div><!-- /.col -->
           </div><!-- /.row -->
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
                               <h3 class="card-title">about List</h3>
                               <a href="{{ route('about.create') }}" class="btn btn-primary">Create About</a>
                           </div>
                       </div>
                       <!-- /.card-header -->
                       <div class="card-body p-0">
                           <table class="table table-striped">
                               <thead>
                                   <tr>
                                       <th style="width: 10px">#</th>
                                       <th>Image</th>
                                       <th>Title</th>
                                  

                                       <th style="width: 40px">Action</th>
                                   </tr>
                               </thead>
                               <tbody>

                                 @foreach ($abouts as $about)
                                     <tr>
                                          <td>{{ $loop->index+1 }}</td>
                                          <td>
                                            <div style="max-width: 70px; max-height:70px;overflow:hidden">
                                              <img src="{{ asset($about->image) }}" class="img-fluid img-rounded" alt="">
                                            </div>
                                          </td>
                                         <td>{{ $about->title }}</td>


                                   <td class="d-flex">
                                     <a href="{{ route('about.show', [$about->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fa fa-eye"></i> </a>
                                     <a href="{{ route('about.edit', [$about->id]) }}" class="btn btn-sm btn-warning mr-1"> <i class="fa fa-telegram"></i> </a>


                                 </td>

                                       </tr>
                                   @endforeach

                               </tbody>
                           </table>
                       </div>
                       <!-- /.card-body -->

                   </div>
               </div>
           </div>
       </div>
   </div>
  </div>
</div>
</div>


@endsection
