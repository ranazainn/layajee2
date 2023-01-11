

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <title>Layajee</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&family=Ramabhadra:wght@900&family=Archivo+Black&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

     <style type="text/css">
                .flxfish {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 45px 0;
                }
                .flxfish p{
                padding-top: 22px;
                }
                .flxfish a {
                margin-top: 45px;
                background-color: #78c14d;
                padding: 11px 43px;
                border-radius: 0px;
                font-weight: 500;
                }
                .flxfish a:hover {
                -webkit-transition: all .6s !important;
                        transition: all .6s;
                background-color:white;
                border: 1px solid #78c14d;
                }
                .inpo input {
                width: 100%;
                }
                .inpo {
                display: flex;
                justify-content: center;
                }
                span.gb {
                position: absolute;
                top: 12px;
                }
                .gb {
                position: absolute;
                top: 12px;
                color: #bbbbbb;
                }
                .gb svg {
                margin-right: 4px;
                font-weight: 700;
                color: black;
                }
      </style>
   </head>
   <body>   
<section >
    <div class="container">
        <form id="verificationForm" method="post" action="{!! route('verification') !!}">
            @csrf
            
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="sec-heading  mb-24-ctm">
                        <h2 class="title mb-13-ctm"> {{__('Email')}} <span>{{__('Verification')}}</span></h2>
                        <p class="des">
                            {{__('A verification code is send to your email. Please check your email and enter code below.')}}
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-25-ctm">
                            <div class="input-style">
                                <input type="text" class="ctm-input" placeholder="{{__('1234')}}" minlength="4"
                                    maxlength="4" parsley-required="true" name="verification_code">
                            </div>
                            @include('common.alert', ['input' => 'verification_code'])
                        </div>
                        <!-- <div class="col-md-6 mb-25-ctm">
                            <button class="login-s " type="button">{{__('Resend')}}</button>
                        </div>
                        <div class="col-md-6 mb-25-ctm">
                            <button class="login-p verify-btn-resend" type="submit">{{__('Submit')}}</button>
                        </div> -->

                        <div>
                      <Button  type="submit" class=" login-p  btn">Validate</Button>
                      <Button  type="button" class=" login-s verify-btn-resend">Resend OTP</Button>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


@push('script-page-level')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.verify-btn-resend').on('click', function() {
        $.ajax({
            type: "GET",
            url:  "{{url('verification-resend')}}",
            success: function(res) {
                if (res.success == true) {
                    // alert("Code Sent")
                    toastr.success(res.message, 'Success');
                } else {
                    // toastr.error('Something went wrong');

                }
            }
        })
    })
})
</script> 
@endpush

</body>
</html>