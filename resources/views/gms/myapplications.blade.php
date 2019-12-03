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
      <li class="breadcrumb-item active">Application History</li>
    </ol>
<table class="table table-striped">
  <div class="text-right">
    <a href="/apply_donation" class="btn btn-primary m-3">Apply new!!</a>
  </div>
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th scope="col">Organization Name</th>
      <th scope="col">Category</th>
      <th scope="col">Amount</th>
      <th scope="col">Population Benefitting</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @if (count($userApplications)>0)
    @foreach($userApplications as $history)
    <tr class="p-4">
      <td>{{ $history->id }}</td>
      <td>{{ $history->organization_name }}</td>
      <td>{{ $history->category }}</td>
      <td style="color:green">Ksh.{{ $history->amount }}</td>
      <td>{{ $history->population_benefitting }} &nbsp;People</td>
      @if ($history->status==0)
        <td class="text-info">Pending</td>
      @elseif($history->status==1)
        <td class="text-success">Approved</td>
      @else
        <td class="text-warning">Rejected</td>
      @endif
      {{-- <td>{{ $history->status }}</td> --}}

    </tr>
  @endforeach
  @else
    <tr>
      <td style="margin:20px;"><p class="center">You not applied yet!!Apply now Donation..</p>
          <br>
          <a type="button" class="btn btn-primary" href="/apply_donation         ">Apply now</a>
      </td>
    </tr>
  @endif
  </tbody>
</table>
</div>

@endsection
