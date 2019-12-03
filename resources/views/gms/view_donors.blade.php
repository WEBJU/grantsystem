@extends('gms.inc.app')
@section('content')
          </div>
        </section>

        <section class="login ">
            <div class="container ">
              {{-- <p>Available Partners</p> --}}
                <h2 class="title">Partner to make an impact</h2>
                @include('inc.messages')
                <div class="row">

                    <div class="col-md-8">
                      <form action="/collaborate_now" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="">Select Partner Organization</label>
                          <select name="grant_type" class="form-control w-75" >
                              {{-- <option>continuation</option> --}}
                              @foreach ($donor_organization as $partner)
                                  <option>{{$partner->organization_name}}</option>
                              @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Category</label>
                          <input type="text" class="form-control w-75" name="category" aria-describedby="emailHelp" placeholder="Category">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Purpose</label>
                          <input type="text" class="form-control w-75" name="purpose" aria-describedby="emailHelp" placeholder="Purpose">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Amount</label>
                          <input type="text" class="form-control w-75" name="amount" aria-describedby="emailHelp" placeholder="Amount">
                        </div>
                        <button type="submit" class="c-btn w-75">Collaborate Now</button>
                      </form>
                    </div>
                    <div class="col-md-4">
                        <img src="img/donation.jpeg" class="img-fluid" style="height:60%;"alt="">
                    </div>
                </div>
            </div>
            </div>
        </section>
@endsection
