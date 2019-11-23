@extends('gms.inc.app')
@section('content')
          </div>
        </section>

        <section class="login ">
            <div class="container ">
                <h2 class="title">It all starts by contributing an amount</h2>
                <p class="subtitle">Fill in the donation form below to complete</p>
                @include('inc.messages')
                <div class="row">

                    <div class="col-md-4">
                        <img src="img/donation.jpeg" class="img-fluid" style="height:100%;"alt="">
                    </div>
                    <div class="col-md-8">
                      <form action="/donation" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Your Organization</label>
                          <input type="text" class="form-control w-75" name="organization_name" aria-describedby="emailHelp" placeholder="Enter Organization Name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Address</label>
                          <input type="text" class="form-control w-75" name="address" aria-describedby="emailHelp" placeholder="Your address">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Your Country</label>
                          <input type="text" class="form-control w-75" name="country" aria-describedby="emailHelp" placeholder="Your country">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Payment Mode</label>
                          <input type="text" class="form-control w-75" name="payment_mode" aria-describedby="emailHelp" placeholder="Preferred payment mode">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Type of Donation</label>
                          <input type="text" class="form-control w-75" name="donation_type" aria-describedby="emailHelp" placeholder="Select your donation">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Any other detail</label>
                          <textarea type="text" class="form-control w-75" name="description" aria-describedby="emailHelp" placeholder="Any other description"></textarea>
                        </div>

                        <button type="submit" class="c-btn w-75">Proceed to Payment</button>
                      </form>
                    </div>

                </div>
            </div>
            </div>
        </section>
@endsection
