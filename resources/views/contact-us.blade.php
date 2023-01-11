@extends('layouts.master')
@section('title',"Home")

@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Layajee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&family=Ramabhadra:wght@900&family=Archivo+Black&display=swap"
        rel="stylesheet">
    
<style>
    #header{
        margin-top: 60px;
    }
/*cARD sERVICES*/
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: green;
  color: #ffffff;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.heAding{
	 padding: 120px 0;
    text-align: center;
    letter-spacing: 9px;
    font-size: 24px;
   }
.headings {
  padding: 56px 0;
  text-align: center;
  letter-spacing: 8px;
  font-size: 24px;
}
.headingss {
  padding: 80px 0;
    text-align: center;
    letter-spacing: 8px;
    font-size: 24px;
}
.heding{
    padding: 56px 0;
text-align: center;
letter-spacing: 6px;
font-size: 24px;
}
.hding{
    padding: 60px 0;
text-align: center;
letter-spacing: 7px;
font-size: 24px;
}
   .test{
   	line-height: 30px;
    text-align:left;
    padding:70px 70px;
    font-size: 18px;
   }
.test1{
       line-height: 30px;
        text-align: left;
        padding: 36px 70px;
        font-size: 18px;
   }
   .bg-y{
    background: #267916;
}
.fa-check-circle{
    font-size:36px;
}
.Borderlight{
    box-shadow: 3px 4px 6px #26791638;
}
.btnInfo {
    background: #267916;
    color: #fff;
}
.btnInfo:hover {
    background: #267916c9;
    color: #fff;
    box-shadow: 1px 3px 9px #267916;
}

</style>

</head>

<body>
  <!-- Header -->
  <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                   <div class="col-md-6">
        <!-- Default form contact -->
<form class="text-center Borderlight p-5 needs-validation" action="{{route('legal-services')}}" name="cform" method="post">
@csrf
    <p class="h4 mb-4">Quick Contact</p>

    <!-- Name -->
    <input type="text" id="defaultContactFormName" name="name" class="form-control mb-4 " id="validationCustom01" placeholder="Name" required>
    <!-- Email -->
    <input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4" id="validationCustom02" placeholder="E-mail" required>

    <input type="text" id="defaultContactFormPhone" name="phone" class="form-control mb-4" id="validationCustom03" placeholder="Phone Number" required>
    <!-- Message -->
    <div class="form-group">
        <textarea name="body" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" id="validationCustom04" placeholder="Inquiry......" required></textarea>
    </div>


    <!-- Send button -->
    <button class="btn btnInfo btn-block"  name="submit" type="submit">Send</button>

</form>
<div id="megHide">
@if(session('message'))
  <div class='alert alert-success'>
  {{ session('message') }}
  </div>
@endif
</div>
<!-- Default form contact -->
    </div> 
    <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <!--<img class="img-fluid" src="images/ad.jpeg" alt="alternative">-->
                            <img class="img-fluid" src="images/amico.png" alt="leaglServices"
                        </div> 
                        <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
<div class="row ">
    <div class="col-md-1"></div>
       <div class="col-md-10 px-5">
            <h1 class="text-center">Legal Services</h1>
            <h5 class="text-center mb-5">(All Types Of Stam Papers)</h5>
            <!--card-->
            <div class="row">
                <!--1-->
    <div class="col-md-4 mb-4">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <h1 class="heAding text-light">Affidavits</h1>
                </div>
                <div class="flip-card-back">
                    <ul class="test">
                        <li>Loss Documents</li>
                        <li>Change Name</li>
                        <li>Birth Certificate</li>
                        <li>Death Certificate</li>
                        <li>Etc</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
                <!--2-->
    <div class="col-md-4 mb-4">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <h1 class="heAding text-light">Agreements</h1>
                </div>
                <div class="flip-card-back">
                    <ul class="test1">
                        <li>Land Agreements</li>
                        <li>Vehicle Agreements</li>
                        <li>Partnership Deed</li>
                        <li>Gift Deed</li>
                        <li>Divorce Deed</li>
                        <li>Trust Deed</li>
                        <li>Etc</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
     <!--3-->
        <div class="col-md-4 mb-4">
        <div class="flip-card">
            <div class="">
                <div class="flip-card-front">
                    <h1 class="headings text-light">File Transfer Of Behria Property</h1>
                </div>
                <!--<div class="flip-card-back">-->
                <!--    <ul class="test">-->
                <!--        <li>Loss Documents</li>-->
                <!--        <li>Change Name</li>-->
                <!--        <li>Birth Certificate</li>-->
                <!--        <li>Death Certificate</li>-->
                <!--        <li>Etc</li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!--4-->
    <div class="col-md-4 mt-4">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <h1 class="heding text-light">Welfare Trust Legal Consultancy</h1>
                </div>
                <div class="flip-card-back">
                    <ul class="test">
                         <li>Welfare Trust Aims & Objectives</li>
                        <li>Welfare Trust Registration</li>
                        <li>Welfare Trust Bank Account Opening</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
                <!--2-->
    <div class="col-md-4 mt-4">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <h1 class="headingss text-light">Firm Legal Consultancy</h1>
                </div>
                <div class="flip-card-back">
                    <ul class="test1">
                        <li>Firm Aims & Objectives</li>
                        <li>Firm Registration</li>
                        <li>Firm Bank Account Opening</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
     <!--3-->
        <div class="col-md-4 mt-4">
        <div class="flip-card">
            <div class="">
                <div class="flip-card-front">
                    <h1 class="hding text-light">Divorce & Court Marriage Legal Consultancy</h1>
                </div>
                <!--<div class="flip-card-back">-->
                <!--    <ul class="test">-->
                <!--        <li>Loss Documents</li>-->
                <!--        <li>Change Name</li>-->
                <!--        <li>Birth Certificate</li>-->
                <!--        <li>Death Certificate</li>-->
                <!--        <li>Etc</li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </div>
    </div>
            </div>
            <!--card-->
        </div>
    <div class="col-md-1"></div>
</div>

    @parent
    @endsection

    @section('footer')
    @parent
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#megHide").fadeOut('5000');
            
        });
    </script>