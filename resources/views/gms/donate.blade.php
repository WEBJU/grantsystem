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
                        <img src="img/donation.jpeg" class="img-fluid" style="height:85%;"alt="">
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
                          <label for="">Type of Donation</label>
                          <select name="donation_type" class="form-control w-75">
                              <option>Charitable Bequests</option>
                              <option>Gifts of Life Insurance</option>
                              <option>Charitable Annuities</option>
                              <option>Charitable Remainder Trusts</option>
                              <option>Endowment Funds</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Purpose of Donation</label>
                          <input type="text" class="form-control w-75" name="purpose" aria-describedby="emailHelp" placeholder="Why are you donating">
                        </div>
                        <div class="form-group">
                          <label for="">Select Receiver Organization</label>
                          <select name="receiver" class="form-control w-75">
                                  @foreach ($beneficiary as $receiver)
                                      <option>{{$receiver->organization_name}}</option>
                                  @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Payment Mode</label>
                          <select name="payment_mode" class="form-control w-75">
                              <option>Stripe</option>
                          </select>
                             <small id="emailHelp" class="form-text text-muted ">We only accept stripe as the payment mode at the moment</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Payment Amount</label>
                          <input type="text" class="form-control w-75" name="amount" aria-describedby="emailHelp" placeholder="Enter Amount">
                        </div>

                        <button type="submit" class="c-btn w-75">Proceed to Payment</button>
                      </form>
                    </div>

                </div>
            </div>
            </div>
        </section>
@endsection
