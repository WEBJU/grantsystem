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
                    <a class="nav-link active-home" href="#">HOME</span></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/login">LOGIN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/register">REGISTER</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link a-btn" href="/apply_donation">GET DONATION</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link c-btn" href="/donate">DONATE</a>
                  </li>
                </ul>
              </div>

          </nav>


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
