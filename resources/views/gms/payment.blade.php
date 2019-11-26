@extends('gms.inc.app')
@section('content')
          </div>
        </section>

        <section class="login" style="margin-bottom:0;color:#32a8a8">
            <div class="container ">
                <h2 class="title">Complete Your donation</h2>
                <p class="subtitle">Provide payment details</p>
                @include('inc.messages')
                <div class="row">

                    <div class="col-md-4">
                        <img src="img/donation.jpeg" class="img-fluid" style="height:50%;"alt="">
                    </div>
                    <div class="col-md-8">
                      <form action="/save_payment" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Payment Amount</label>
                          <input type="text" class="form-control w-75" name="amount" aria-describedby="emailHelp" placeholder="Enter Amount">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Payment Date</label>
                          <input type="date" class="form-control w-75" name="date" aria-describedby="emailHelp" >
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Payment Options</label>
                        <select class="form-control w-75" name="option">
                          <option>Bank</option>
                          <option>MPESA</option>
                          <option>Paypal</option>
                        </select>
                      </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Transaction Code</label>
                          <input type="text" class="form-control w-75" name="code" aria-describedby="emailHelp" placeholder="Your address">
                        </div>
                        <button type="submit" class="c-btn w-75">Pay Now</button>
                      </form>
                    </div>

                </div>
            </div>
            </div>
        </section>
@endsection
