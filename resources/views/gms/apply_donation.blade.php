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
                <h2 class="title">Describe briefly how you are going to use the donation</h2>
                <p class="subtitle">Fill in the application form below to complete</p>
                @include('inc.messages')
                <div class="row">

                    <div class="col-md-4">
                        <img src="img/donation.jpeg" class="img-fluid" style="height:100%;"alt="">
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
                          <label for="exampleInputEmail1">Your Location</label>
                          <input type="text" class="form-control w-75" name="location" aria-describedby="emailHelp" placeholder="Your location">
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
