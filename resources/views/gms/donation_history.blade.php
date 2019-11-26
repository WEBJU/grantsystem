
@extends('gms.inc.app')
@section('content')
  <!-- Page Content -->
</div>
</section>
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h4 class="mt-4 mb-3">Your Application History
    </h4>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Donation History</li>
    </ol>
<table class="table">
  <div class="text-right">
    <a href="/apply_donation" class="btn btn-primary m-3">Donate new!!</a>
  </div>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Organization Name</th>
      <th scope="col">Donation Type</th>
      <th scope="col">Payment Mode</th>
      <th scope="col">Description</th>
      <th scope="col">Amount</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @if (count($userDonations)>0)
    @foreach($userDonations as $history)
    <tr class="p-4">
      <td>{{ $history->organization_name }}</td>
      <td>{{ $history->donation_type }}</td>
      <td>{{ $history->payment_mode }}</td>
      <td>{{ $history->description}}</td>
      <td style="color:green">Ksh.{{ $history->amount }}</td>
      <td colspan="2">
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  @endforeach
  @else
    <tr>
      <td style="margin:20px;"><p class="center">You are yet to donate..donate now!!</p>
          <br>
          <a type="button" class="btn btn-primary" href="/apply_donation         ">Donate now</a>
      </td>
    </tr>
  @endif
  </tbody>
</table>
</div>

@endsection
