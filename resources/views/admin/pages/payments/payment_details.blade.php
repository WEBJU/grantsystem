@extends('admin.index')
  @section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Payment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Payment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <h1 style="margin-left:20px;">View Payments</h1>
        <form action="#" method="get" class="sidebar-form m-2">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search Payment...">
            <span class="input-group-btn">
                  <button type="submit" name="search_Exam" id="search-btn" class="btn btn-primary"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <table  class="table table-bordered table-striped">
          <thead>
          <tr>
            <td>#</td>
            <th>Organization Name</th>
            <th>Payment Date</th>
            <th>Donation Type</th>
            <th>Payment  Mode</th>
            {{-- <th>Transaction Code </th> --}}
            <th colspan="">Action</th>
          </tr>

          </thead>
          <tbody>
            {{-- check if exams exist --}}
            @if(count($payments)>0)
            @foreach ($payments as $payment)
          <tr>
            <td>{{$payment->id}}</td>
            <td>{{$payment->donation->organization_name}}</td>
            <td>{{$payment->payment_date}}</td>
            <td>{{$payment->donation->donation_type}}</td>
            <td>{{$payment->payment_option}}</td>
            {{-- <td>{{$payment->donation->}}</td> --}}
            <td>
              <form  method="post">
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
