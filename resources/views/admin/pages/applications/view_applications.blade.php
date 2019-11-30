@extends('admin.index')
  @section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Fund Applications</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Applicants List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <h1 style="margin-left:20px;">View Applications</h1>
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
            <th>Organization Name</th>
            <th>Amount Applied</th>
            <th>Status</th>
            <th colspan="2">Actions</th>
          </tr>
          </thead>
          <tbody>

            {{-- check if subject is greater than 1 --}}
              @if(count($applications) > 0)
                {{-- loop through the subjects --}}
              @foreach ($applications as $application)
          <tr>
            <td>{{$application->id}}</td>
            <td>{{$application->organization_name}}</td>
            <td class="text-success">Ksh.{{$application->amount}}</td>
            @if ($application->status==0)
              <td class=" text-info">Pending</td>
            @elseif($application->status==1)
              <td class=" text-success">Approved</td>
            @elseif($application->status==2)
              <td class=" text-danger">Rejected</td>
            @endif

            <td>
              <form action="{{action('AdminController@accept_application',$application->id)}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$application->id}}">
                <button class="btn btn-info mr-1">Approve</button>
              </form>
            </td>
            <td>
              <form action="{{action('AdminController@reject_application',$application->id)}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$application->id}}">
                <button class="btn btn-danger mr-1">Reject</button>
              </form>
            </td>

          </tr>
          </tbody>

        </tbody>
          @endforeach
          @endif


  @endsection
