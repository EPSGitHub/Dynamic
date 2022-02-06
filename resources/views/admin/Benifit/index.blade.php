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
                   <h5 class="m-0 text-dark">Add Benifit</h5>
               </div><!-- /.col -->
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                       <li class="breadcrumb-item"><a href="{{ route('benifit.index') }}">All Benifits</a></li>
                       <li class="breadcrumb-item active">Create Benifit</li>
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
                               <h3 class="card-title">Benifit List</h3>
                               <a href="{{ route('benifit.create') }}" class="btn btn-primary">Create Benifit</a>
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
                                       <th>Description</th>
                                       
                                       <th style="width: 40px">Action</th>
                                   </tr>
                               </thead>
                               <tbody>

                                 @foreach ($benifits as $benifit)
                                     <tr>
                                          <td>{{ $loop->index+1 }}</td>
                                          <td>
                                            <div style="max-width: 70px; max-height:70px;overflow:hidden">
                                              <img src="{{ asset($benifit->image) }}" class="img-fluid img-rounded" alt="">
                                            </div>
                                          </td>
                                         <td>{{ $benifit->title }}</td>
                                         <td>{{ $benifit->descriptipon }}</td>
                                         


                                   <td class="d-flex">
                                     <a href="{{ route('benifit.show', [$benifit->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fa fa-eye"></i> </a>
                                     <a href="{{ route('benifit.edit', [$benifit->id]) }}" class="btn btn-sm btn-warning mr-1"> <i class="fa fa-telegram"></i> </a>

                                     <form action="{{ route('benifit.destroy', [$benifit->id]) }}" class="mr-1" method="POST">
                                         @method('DELETE')
                                         @csrf
                                         <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                     </form>
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
