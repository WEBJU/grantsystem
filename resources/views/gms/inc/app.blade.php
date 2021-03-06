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
                <a class="navbar-brand" href="#">GMS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse text-right" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                      <a class="nav-link active-home" href="/">HOME</span></a>
                    </li>
                    @if (auth()->check())

                      @if(auth()->user()->account_type=='DONOR')
                      <li class="nav-item ">
                          <a class="nav-link c-btn" href="/donate">DONATE</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link c-btn" href="/collaborate">COLLABORATE</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link c-btn" href="/my_donations">MY DONATIONS</a>
                      </li>

                    @elseif(auth()->user()->account_type=='NGO')
                       <li class="nav-item">
                         <a class="nav-link a-btn" href="/apply_donation">GET DONATION</a>
                       </li>
                        <li class="nav-item">
                          <a class="nav-link a-btn" href="/myapplications">DONATION HISTORY</a>
                        </li>
                        {{-- <li class="nav-item">
                          <a class="nav-link a-btn" href="/application_history">DONATION HISTORY </a>
                        </li> --}}
                      @endif
                      {{-- <li class="nav-item" style="padding-top:0px;">
                      <div class="dropdown">
                        <button class="c-btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">Action</button>
                          <button class="dropdown-item" type="button">Another action</button>
                          <button class="dropdown-item" type="button">Something else here</button>
                        </div>
                      </div>
                      </li> --}}
                      <li class="nav-item">
                        <a class="nav-link" href="#"><p style="">{{auth()->user()->username}}</p></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/logout" class="btn btn-warning btn-outline">LOGOUT</a>
                      </li>
                    @else
                      <li class="nav-item">
                        <a class="nav-link a-btn" href="/apply_donation">GET DONATION</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link c-btn" href="/donate">DONATE</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/login" >LOGIN</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/register">REGISTER</a>
                    </li>
                      @endif
                  </ul>
                </div>

            </nav>
            @yield('content')



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
