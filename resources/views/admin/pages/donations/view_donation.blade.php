@extends('admin.index')
  @section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Donations</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Donation List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <h1 style="margin-left:20px;">View Donations</h1>
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
            <th>Organization Name</th>
            <th>Address</th>
            <th>Country</th>
            <th>Amount Donated</th>
            <th>Date Paid</th>
            <th colspan="3">Action</th>
          </tr>

          </thead>
          <tbody>
            @if(count($donations)>0)
              @foreach ($donations as $donation)
          <tr>
            <td>{{$donation->organization_name}}</td>
            <td>{{$donation->address}}</td>
            <td>{{$donation->country}}</td>
            <td style="color:green">Ksh.{{$donation->amount}}</td>
            <td>{{$donation->created_at}}</td>

            <td>
              <a href="#" class="btn btn-primary disabled">Edit</a>
            </td>

              <td>
                <form action="" method="post">
                  @csrf
                  <input name="_method" type="hidden" value="DELETE">
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>


          </tr>
              @endforeach
            @endif
        </tbody>

  @endsection
