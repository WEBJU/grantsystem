@extends('admin.index')
  @section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Beneficairies</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Beneficairies List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <h1 style="margin-left:20px;">View NGO'S</h1>
        <form action="#" method="get" class="sidebar-form m-2">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <table  class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>#</th>
            {{-- <th>Representative Name</th> --}}
            <th>Organizatio Name</th>
            <th>Category</th>
            <th>Dependent Population</th>
            <th>Actions</th>
          </tr>

          </thead>
          <tbody>
          <!--MAKE WORK EASIER :-) -->
          @foreach($beneficiaries as $beneficiary)
              <tr>
                  {{-- <td>{{$beneficiary->user->name}}</td> --}}
                  <td>{{$beneficiary->id}}</td>
                  <td>{{$beneficiary->organization_name}}</td>
                  <td>{{$beneficiary->category}}</td>
                  <td>{{$beneficiary->population_benefitting}} &nbsp;People</td>

                  <td>
                    <form  method="POST">
                      @csrf
                      <input type="hidden"  name="id" value="{{$beneficiary->id}}">
                      <button class="btn btn-danger mr-1">Delete</button>
                    </form>
                    {{-- <form method="post" class="delete_form">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE" />
                      <button type="submit" class="btn btn-danger">Delete</button>
                     </form> --}}
                  </td>
              </tr>
          @endforeach
        </tbody>

  @endsection
