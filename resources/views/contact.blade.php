@extends('layouts.master')

@section('content')
<!--======= SUB BANNER =========-->
<section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% -70.5px;">
        <div class="position-center-center">
          <div class="container">
            <h4>Contact us Now</h4>
          </div>
        </div>
      </section>

      <!--======= CONATACT  =========-->
      <section class="contact padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="contact-form">
                <h5>Keep in Touch With Us</h5>
                <div class="row">
                  <div class="col-md-8">

                    <!--======= Success Msg =========-->
                    <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>

                    <!--======= FORM  =========-->
                    <form role="form" id="contact_form" class="contact-form" method="post" onsubmit="return false">
                      <ul class="row">
                        <li class="col-sm-6">
                          <label>full name *
                            <input type="text" class="form-control" name="name" id="name" placeholder="">
                          </label>
                        </li>
                        <li class="col-sm-6">
                          <label>Email *
                            <input type="text" class="form-control" name="email" id="email" placeholder="">
                          </label>
                        </li>
                        <li class="col-sm-6">
                          <label>Phone *
                            <input type="text" class="form-control" name="company" id="company" placeholder="">
                          </label>
                        </li>
                        <li class="col-sm-6">
                          <label>SUBJECT
                            <input type="text" class="form-control" name="website" id="website" placeholder="">
                          </label>
                        </li>
                        <li class="col-sm-12">
                          <label>Message
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                          </label>
                        </li>
                        <li class="col-sm-12">
                          <button type="submit" value="submit" class="btn" id="btn_submit" onclick="proceed();">SEND MAIL</button>
                        </li>
                      </ul>
                    </form>
                  </div>

                  <!--======= ADDRESS INFO  =========-->
                  <div class="col-md-4">
                    <div class="contact-info">
                      <h6>OUR ADDRESS</h6>
                      <ul>
                        <li> <i class="icon-map-pin"></i> 60 Street, Sudan Khartoum,<br>

                        <li> <i class="icon-call-end"></i>+249 902856479</li>
                        <li> <i class="icon-call-end"></i>+249 999303264</li>
                        <li> <i class="icon-envelope"></i>
                            <a href="mailto:omegatteam25@gmail.com" target="_top">omegatteam25@gmail.com</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection
