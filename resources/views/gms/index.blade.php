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
                    <a class="nav-link" href="/">HOME</span></a>
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

            <div class="row banner">
                <div class="col-md-6">
                    <h1>Lets make the change</h1>
                    <p>Grant Management System helps you to make meaning for others <br>By donating the to other and making an impact</p>
                    <a href="#">JOIN NOW</a>
                    <a href="#" class="btn-learn">LEARN MORE</a>
                </div>
                <div class="col-md-6">
                  <img src="img/bg.jpg" class="img-fluid">
                </div>
            </div>
          </div>
        </section>

        <section class="services">
            <div class="container text-center">
                <h2 class="title">Our Services</h2>
                <p class="subtitle">We ensure there is enough funds for supporting those in need by linking donors to NGOS</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="service-box">
                            <img src="img/donors.jpg" class="img-fluid" style="height:200px; width:500px;">
                            <h6>Managing Donations</h6>
                            <p>We collect and manage funds from donors</p>
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-box">
                          <img src="img/ngo.jpg" class="img-fluid" style="height:200px; width:500px;">
                          <h6>Disbursing Funds</h6>
                          <p>We disburse the funds collected to the NGO's when necessary</p>
                          <i class="fa fa-arrow-right"></i>
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
