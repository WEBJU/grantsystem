@extends('gms.inc.app')
@section('content')
          </div>
        </section>

        <section class="login ">
            <div class="container ">
                <h2 class="title">Describe briefly how you are going to use the donation</h2>
                <p class="subtitle">Fill in the application form below to complete</p>
                @include('inc.messages')
                <div class="row">

                    <div class="col-md-4">
                        <img src="img/donation.jpeg" class="img-fluid" style="height:60%;"alt="">
                    </div>
                    <div class="col-md-8">
                      <form method="post" action="/claim_donation">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Organization Name</label>
                          <input type="text" class="form-control w-75" name="organization_name" aria-describedby="emailHelp" placeholder="Enter Organization Name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Type of NGO</label>
                          <input type="text" class="form-control w-75" name="category" aria-describedby="emailHelp" placeholder="Your NGO category">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Amount You wish to receive</label>
                          <input type="text" class="form-control w-75" name="amount" aria-describedby="emailHelp" placeholder="Amount">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">How many people are benefitting from the donation</label>
                          <input type="text" class="form-control w-75" name="population_benefitting" aria-describedby="emailHelp" placeholder="approximate number of beneficiaries">
                        </div>
                        <button type="submit" class="c-btn w-75">Claim Now</button>
                      </form>
                    </div>
                </div>
            </div>
            </div>
        </section>

      @endsection
