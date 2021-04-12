@extends('admin.master')
@section('title')
    Menu-List
@endsection
@section('content')
<div class="content-header mt-4 fixed">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menu List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('menu.index')}}">Menu</a></li>
                        <li class="breadcrumb-item active">Manage</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                {{--  <h3 class="card-title">Menu List</h3>  --}}
                                @isset(Auth::guard('admin')->user()->role->parmission['parmission']['menu']['add'])
                                    <button  class="card-title float-left btn btn-success MenuAdd" id="btnMenuAdd">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        Add Menu
                                    </button>
                                @endisset
                                @isset(Auth::guard('admin')->user()->role->parmission['parmission']['menu']['add'])
                                    <button  class="card-title float-right btn btn-success MenuAdd" id="btnMenuAdd">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        Add Sub Menu
                                    </button>
                                @endisset
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="tblMenu" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Menu Name</th>
                                        <th>Ringht Icon</th>
                                        <th>Left Icon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                            </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
            </div>
    </section>
    <!-- Modal ADD-->
    <div class="modal fade" id="MenuAdd" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-primary justify-content-center">
            <h5 class="modal-title" id="staticBackdropLabel">Add Menu</h5>

          </div>
          <div class="modal-body">

            <form  id="MenuForm">
                @csrf
                <div class="form-group">
                    <label for="name" class="col-form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="write Title Menu" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">


                </div>
                <div class="form-group">
                    <label for="right_icon" class="col-form-label">Right Icon</label>
                    <input type="text" class="form-control" id="right_icon" name="right_icon" value="{{old('right_icon')}}" placeholder="Right Icon Menu">
                </div>
                <div class="form-group">
                    <label for="left_icon" class="col-form-label">Left Icon</label>
                    <input type="text" class="form-control" id="left_role" name="left_icon" value="{{old('left_icon')}}" placeholder="Left Icon Menu" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                </div>

                    <div class="modal-footer col-md-12 justify-content-center">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="submitForm" class="btn btn-primary">Save</button>
                    </div>

            </form>
        </div>
      </div>
    </div>
    {{-- end modal ADD--}}
   
@endsection
