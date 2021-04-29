
<!-- get in touch start -->
<section class="contact-us grey">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h1 class="heading">Get in Touch</h1>
             <form id="sendForm" action="">
                <div id="notification" class="alert alert-success col-md-6 d-none">

                </div>
                 @csrf
                <div class="row">
                   <div class="col-md-6 col-lg-4 mb-3">
                      <div class="form-group">
                         <input type="text" class="form-control form-field required" name="name" id="name" placeholder="Your Name" >
                         <label id="name-error" class="error mb-0" for="name"style="display:none;"> </label>
                      </div>
                   </div>
                   <div class="col-md-6 col-lg-4 mb-3">
                      <div class="form-group">
                         <input type="email" class="form-control form-field email required" name="email" id="email" placeholder="Email Address *" >
                         <label id="email-error" class="error mb-0" for="email"style="display:none;"> </label>

                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12 col-lg-8 mb-3">
                      <div class="form-group">
                         <input type="text" class="form-control form-field required" name="phone_no" id="phone_no" placeholder="Phone Number *">
                         <label id="number-error" class="error mb-0" for="number"style="display:none;"> </label>

                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12 col-lg-8 mb-3">
                      <div class="form-group">
                         <textarea class="form-control form-area required"style="resize: none;" name="message" placeholder="How we can serve you ?" id="message" rows="5" ></textarea>
                         <label id="message-error" class="error mb-0" for="message"style="display:none;"> </label>
                      </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-8 mb-3">
                        <div class="form-check form-check-inline check-box">
                        <input class="form-check-input" name="check" type="checkbox" id="check" value="option1" >
                        <label class="form-check-label" for="check"> Sign up for our email list for updates, promotions, and more.</label>
                        </div>
                    </div>
                   <input type="hidden" name="recaptcha" id="recaptcha">
                </div>
                <div class="form-button">
                   <button type="submit" id="sendbtn" data-style="zoom-in" class="primary-Btn">Send <i class="las la-arrow-right"></i></button>

                </div>
                <div class="row">
                <div class="col-md-12 col-lg-8 mb-3">
                   <p class="form-text">
                      This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy </a>and <a href="https://policies.google.com/terms">Terms of Service </a>apply.
                   </p>
                </div>
              </div>`
             </form>
          </div>
       </div>
    </div>
    <div>
       <img  class="contact-img" src="{{ asset('img/contact-img.png') }}" alt="img">
    </div>
 </section>
@section('page-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/spin.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/ladda.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/ladda.jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js" ></script>
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
@endsection
 @section('mail-script')
    <script>
        $(document).ready(function() {
            $('#sendForm').validate({
                submitHandler: function(form, e) {
                    e.preventDefault();
                    var formdata = new FormData($('#sendForm')[0]);
                    var l = Ladda.create(document.querySelector('#sendbtn'));
                    $.ajax({
                        url:"{{route('mail')}}",
                        method:'POST',
                        data:formdata,
                        dataType:'json',
                        processData: false,
                        contentType: false,
                        beforeSend:function(){
                            l.start();
                            $('#notification').html();
                            $('#notification').addClass('d-none');
                        },
                        success:function(res)
                        {
                            l.stop();
                            if(!res.success && res.status==2)
                            {
                                if(res.captcha)
                                {
                                    $('#notification').html(res.captcha);
                                    $('#notification').removeClass('d-none');
                                    $('#notification').removeClass('alert-success');
                                    $('#notification').addClass('alert-danger');
                                }
                                $.each( res.error, function( key, value ) {

                                    $('#'+key+'-error').show().html(value);
                                    $('#'+key).addClass('error');

                                });
                            }
                            else if(res.success && res.status ==1)
                            {
                                l.stop();
                                $('#sendForm').trigger('reset');
                                $('#notification').html(res.message);
                                $('#notification').removeClass('d-none');
                                $('#notification').addClass('alert-success');
                                $('#notification').removeClass('alert-danger');
                            }
                        },
                        error: function (jqXHR, exception) {
                            l.stop();
                            var msg = '';
                            if (jqXHR.status === 0) {
                            msg = 'Not connect.\n Verify Network.';
                            } else if (jqXHR.status == 404) {
                                msg = 'Requested page not found. [404]';
                            } else if (jqXHR.status == 500) {
                                msg = 'Internal Server Error [500].';
                            } else if (exception === 'parsererror') {
                                msg = 'Requested JSON parse failed.';
                            } else if (exception === 'timeout') {
                                msg = 'Time out error.';
                            } else if (exception === 'abort') {
                                msg = 'Ajax request aborted.';
                            } else {
                                msg = 'Uncaught Error.\n' + jqXHR.responseText;
                            }
                            $('#notification').html(msg);
                            $('#notification').removeClass('d-none');
                            $('#notification').removeClass('alert-success');
                            $('#notification').addClass('alert-danger');
                        },
                    });
                    return false;
                }
            });

            // google captcha
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
                    if (token) {
                    document.getElementById('recaptcha').value = token;
                    }
                });
            });

        });
    </script>
 @endsection
