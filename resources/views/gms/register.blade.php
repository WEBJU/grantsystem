@extends('gms.inc.app')
@section('content')

          </div>
        </section>

        <section class="login">
          <div class="container">
          <div class="row">
            <div class="col-md-5">
              <img src="img/account.jpg" style="height:100%;" class="img-fluid" alt="">
            </div>
              <div class="col-md-7">
                <h3 style="color:#3F51B5;padding:4px;margin-bottom:10px;">Creating an account is  free</h3>
                @include('inc.messages')
                <p>Fill the form to create your account</p>
              <form method="post" action="/create_account">
                @csrf
                    <div class="form-group">
                      <label for="">Full Names</label>
                      <input type="text" class="form-control" name="name" placeholder="Your full names" required>
                    </div>
                    <div class="form-group">
                      <label for="">Phone Number</label>
                      <input type="text" class="form-control" name="phone_number" placeholder="Phone number" required>
                    </div>
                    <div class="form-group">
                      <label for="">Account Type</label>
                      <select name="account_type" class="form-control">
                        <option>NGO</option>
                        <option>DONOR</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="text" class="form-control" name="email" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Your username" required>
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" class="form-control" name="password"  placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label for="">Confirm Password</label>
                      <input type="password" class="form-control" name="confirm" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="c-btn w-100">REGISTER</button>
              </form>
                </div>

                  </div>
                    </div>
        </section>

    @endsection
