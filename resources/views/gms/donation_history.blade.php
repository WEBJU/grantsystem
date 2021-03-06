
@extends('gms.inc.app')
@section('content')
  <!-- Page Content -->
</div>
</section>
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h4 class="mt-4 mb-3">Your Donation History
    </h4>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Donation History</li>
    </ol>
<table class="table table-striped">
  <div class="text-right">
    <a href="/donate" class="btn btn-primary m-3">Donate new!!</a>
  </div>
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th scope="col">Organization Name</th>
      <th scope="col">Donation Type</th>
      <th scope="col">Payment Mode</th>
      <th scope="col">Receiver Organization</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    @if (count($userDonations)>0)
    @foreach($userDonations as $history)
    <tr class="p-4">
      <td>{{ $history->id }}</td>
      <td>{{ $history->organization_name }}</td>
      <td>{{ $history->donation_type }}</td>
      <td>{{ $history->payment_mode }}</td>
      <td>{{ $history->receiver_orgnization}}</td>
      <td style="color:green">Ksh.{{ $history->amount}}</td>

    </tr>
  @endforeach
  @else
    <tr>
      <td style="margin:20px;"><p class="center">You are yet to donate..donate now!!</p>
          <br>
          <a type="button" class="btn btn-primary" href="/donate         ">Donate now</a>
      </td>
    </tr>
  @endif
  </tbody>
</table>
</div>

@endsection
