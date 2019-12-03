  @extends('gms.inc.app')
  @section('content')
            <div class="row banner">
                <div class="col-md-6">
                    <h1>Lets make the change</h1>
                    <p>Grant Management System helps you to make meaning for others <br>By donating the to other and making an impact</p>
                    <a href="#">JOIN NOW</a>
                    <a href="/view_donors" class="btn-learn">VIEW DONORS</a>
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
@endsection
