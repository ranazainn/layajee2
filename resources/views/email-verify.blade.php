
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
                .btn1 {
                margin-top: 45px;
                background-color: #78c14d;
                padding: 11px 43px;
                border-radius: 0px;
                font-weight: 500;
                }
                .btn1:hover {
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
      <section  class="login-sec login-main-section">
      
        <form id="verificationForm" method="post" action="{!! route('verification') !!}">
            @csrf
                <div class="container">                  
                    <a href="{{route('schoolparentinfo')}}" class="gb">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>Back</a>
                    
                        <div class="flxfish">
                            <h4>Validate OTP</h4>
                            <p >
                            {{__('A verification code is send to your email. Please check your email and enter code below.')}}
                        </p>     
                                         
                            <div class="col-sm-4 inpo">
                            <input type="text" class="ctm-input" placeholder="{{__('1234')}}" minlength="4"
                            maxlength="4" parsley-required="true"  name="verification_code">
                            @include('common.alert', ['input' => 'verification_code']) 
                        </div>                                                                     
                    <div>
                      <Button type="submit" class="btn1 login-p "   >Validate</Button>
                      <Button type="button" class="btn1 login-s verify-btn-resend ">Resend OTP</Button>
                    </div>
                    
                  </div>
                </div>
        </form> 
        
      </section>
                            
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.verify-btn-resend').on('click', function() {
        $.ajax({
            type: "GET",
            url:  "{{url('verification-resend')}}",
            success: function(res) {
                if (res.success == true) {
                    alert("Code Sent")
                    // toastr.success(res.message, 'Success');
                } else {
                    // toastr.error('Something went wrong');

                }
            }
        })
    })
})
</script> 
