@extends('gms.inc.app')
@section('content')

          </div>
        </section>

        <section class="login">
          <div class="container">


          <div class="row">
              <div class="col-md-6">
                <h3 style="color:#3F51B5;padding:4px;margin-bottom:10px;">Login using your details</h3>
                @include('inc.messages')
              <form method="post" action="/accountAccess">
                @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control"  name="username" placeholder="Your username">
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" class="form-control" name="password"  placeholder="Password">
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="c-btn w-100">LOGIN</button>
              </form>
                </div>
                <div class="col-md-6">
                  <img src="img/account.jpg" class="img-fluid" alt="">
                </div>
                  </div>
                    </div>
        </section>
@endsection
