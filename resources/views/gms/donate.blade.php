<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grant Management System</title>
    <meta name="viewport" content="width:device-width,intial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </head>
  <body>
        <section class="header">
          <div class="container">
          <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="#">Grant Management System</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse text-right" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item ">
                    <a class="nav-link active-home" href="/">HOME</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link a-btn" href="/apply_donation">GET DONATION</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link c-btn" href="/donate">DONATE</a>
                  </li>
                  @if (auth()->check())
                    <li class="nav-item">
                      <a class="nav-link" href="#"><p>Welcome,{{auth()->user()->username}}</p></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/logout">LOGOUT</a>
                    </li>
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="/login">LOGIN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/register">REGISTER</a>
                  </li>
                    @endif
                </ul>
              </div>

          </nav>
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

        <section class="footer text-center">
            <div class="container">
                <h2>Subscribe to Our Newsletter</h2>
                <form class="" action="index.html" method="post">
                    <input type="text" name="" placeholder="Your Email" required>
                    <button type="button" name="button">SUBSCRIBE</button>
                    <small>Copyright @2019,Designed by Grant Management Systems</small>
                </form>
            </div>
        </section>
  </body>
</html>
