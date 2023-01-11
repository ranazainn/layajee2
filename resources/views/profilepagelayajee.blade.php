@extends('layouts.master')
@section('title',"Home")

@section('content')
<!-- <!doctype html>
<html lang="en">
   <head> -->
      <!-- Required meta tags -->
      <!-- <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
      <!-- Bootstrap CSS -->
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <title>Layajee</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&family=Ramabhadra:wght@900&family=Archivo+Black&display=swap" rel="stylesheet"> -->
  @section('style')
  <style type="text/css">
         ul{
         list-style: none;
         }
         a{
         text-decoration: none;
         }
         .fildi01 {
         border-bottom: 1px solid #bdbdbd;
         color: gray;
         font-size: 16px;
         }
         .imgfish {
         width: 46px;
         padding: 6px;
         }
         .imgfish img{
         width:100%;
         height: auto;
         }
         .fishhome{
         display: flex;
         align-items: center;
         }
         .fishhome p{
         margin-bottom: 0px;
         padding: 6px;
         }
         element.style {
           }
           .profList ul li a{
            color: gray;
           }
         .profList ul li {
         background-color: #efefef;
         padding: 4px;
         width: 100%;
         margin-bottom: 2px;
         }
         .tab-pane{
          -webkit-transition: all .3s !important;
                transition: all .3s !important;
         }
         .profList ul li:hover,.profList ul li a:hover  .fishhome{
         background-color: #8bc34a;
         color: white;
             -webkit-transition: all .6s !important;
                transition: all .6s !important;
              }
              .profList >ul >li:focus .fishhome{
                  background-color: #8bc34a;
         color: white;
              }
         .sproF{
         background-color: #efefef;
         padding: 45px 0px;
         }
         .bgFb{
         background-color: white;
         padding: 30px;
         border-left: 10px;
         }
         .fishstyle099{
         border-right: 1px solid #eaeaea;
         }
                  .fishS088 {
            display: flex;
            align-items: center;
            font-size: 18px;
            justify-content: space-around;
         }
         .fishS088 img{
         width: 100%;
         }
         .imgstly07 {
         width: 30px;
         margin-right: 15px;
         }
         .primg img {
         width: 100%;
         }
         .primg {
         width: 100px;
         height: 100px;
         overflow: hidden;
         border-radius: 50%;
         border: 4px solid #8bc34a;
         box-shadow: 1px 2px 5px grey;
         }
         .PeoheaD{
         display: flex;
         justify-content: center;
         background: white;
         margin-bottom: 5px;
         padding: 34px;
         align-items: center;
         }
         .fishS002{
         display: flex;
         }
         .fishstyle0p{
         position: relative;
         }
         .extraicon{
         position: absolute;
         top: 38px;
         left: 16px;
         width: 20px;
         }
         .forM svg {
         width: 35px;
         }
         span.namEf {
         margin-top: 15px;
         display: flex;
         }
         .edit0o {
         position: absolute;
         bottom: 24px;
         right: -19px;
         z-index: 333;
         padding: 3px;
         border: 3px solid #e6e6e6;
         border-radius: 50%;
         }
         .Peohead2{
         position: relative;
         }
         .iImg {
          width: 51px;
            }
            .iImg img{
               width:100%;
            }
            .fishS0030{
               display: flex;
               align-items: center;
               flex-direction: column;
            }
            .spinner-grow{
               width: 25px !important;
               height: 25px !important;
            }
            .reDstop {
               display: flex;
               flex-direction: column;
               justify-content: center;
               align-items: center;
               color: #6b6b6b;
            }
            .icstop {
               width: 18px;
               height: 18px;
               background-color: red;
               justify-content: flex-end;
               align-items: center;
               border-radius: 50%;
            }
   </style>
   @endsection
   </head>
   <body>
      
      <section>
         <div class="sproF my-4">
            <div class="PeoheaD">
               <div class="Peohead2">
                  <button class="edit0o">
                     <svg xmlns="http://www.w3.org/2000/svg" width="22px" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16" style="    color: #b1acac;">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                     </svg>
                  </button>
                  <div class="primg">
                     <img src="https://www.nanx.com.pk/wp-content/uploads/2017/01/istockphoto-476085198-612x612.jpg">
                  </div>
                  <span class="namEf">Javaid Akhtar</span>
               </div>
            </div>
            <div class="container bgFb">
               <div class="row">
                  <div class="contBtns col-md-4 fishstyle099">
                      <div class="profList">
                        <ul class="nav nav-pills">
                           <li class="active main">
                              <a data-toggle="pill" href="#schoolTp1" class="active">
                                 <div class="fishhome">
                                    <div class="imgfish">
                                       <img src="images/trans-8.png">
                                    </div>
                                    <p>School Pick n Drop</p>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a data-toggle="pill" href="#officeTp1" class="">
                                 <div class="fishhome">
                                    <div class="imgfish">
                                       <img src="images/trans-3.png">
                                    </div>
                                    <p>Office Pick n Drop</p>
                                 </div>
                              </a>
                           </li>
                            <li>
                              <a data-toggle="pill" href="#cabT" class="">
                                 <div class="fishhome">
                                    <div class="imgfish">
                                       <img src="images/trans-4.png">
                                    </div>
                                    <p>Cab Service</p>
                                 </div>
                              </a>
                           </li>
                            <li>
                              <a data-toggle="pill" href="#RentT" class="">
                                 <div class="fishhome">
                                    <div class="imgfish">
                                       <img src="images/trans-5.png">
                                    </div>
                                    <p>Rent a Car</p>
                                 </div>
                              </a>
                           </li>
                            <li>
                              <a data-toggle="pill" href="#TourB" class="">
                                 <div class="fishhome">
                                    <div class="imgfish">
                                       <img src="images/trans-2.png">
                                    </div>
                                    <p>Tours Bocking</p>
                                 </div>
                              </a>
                           </li>
                            <li>
                              <a data-toggle="pill" href="#moverP" class="">
                                 <div class="fishhome">
                                    <div class="imgfish">
                                       <img src="images/trans-1.png">
                                    </div>
                                    <p>Movers n Packers</p>
                                 </div>
                              </a>
                           </li>
                            <li>
                              <a data-toggle="pill" href="#recoveryT" class="">
                                 <div class="fishhome">
                                    <div class="imgfish">
                                       <img src="images/trans-7.png">
                                    </div>
                                    <p>Recovery Service</p>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                           </div>
                  <div class="col-md-8">
                           <div class="tab-content">
                           <div id="schoolTp1" class="tab-pane in boxx active">
                           <div class="proD2 ">
                              <div class="forM ">
                                 <div class="mb-4 fonTs fishS088">
                                    <div class="imgstly07"><img src="images/stud.png"></div>
                                    <span>Nabeel Akhtar</span>
                                    <div class="iImg"><img src="images/trans-8.png">
                                       
                                    </div>
                                    <div>
                                    <div class="fishS0030 greeN">
                                 <div class="spinner-grow" role="status">
                                 <span class="visually-hidden"></span>
                                    </div > <span class="cpgreeN">Move<span>
                                    </div>
                                   <!--  <div class="reDstop">
                                       <div class="icstop"></div>
                                       <span class="cpstp">Finish</span>
                                    </div> -->
                                    </div>
                                 </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                       <div class="mb-3 row fishstyle0p">
                                          <div class="extraicon">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                   <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                             </div>
                                          </div>
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle-fill" viewBox="0 0 16 16">
                                                   <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Starting Point
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row ">
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                   <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Destination
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Starting Time 
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Destination time
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                           <div id="officeTp1" class="tab-pane fade">
                            <div class="proD2 ">
                              <div class="forM ">
                                <div class="mb-4 fonTs fishS088">
                                <div class="iImg"><img src="images/trans-3.png"></div>
                                 <div class="reDstop">
                                       <div class="icstop"></div>
                                       <span class="cpstp">Finish</span>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mb-3 row fishstyle0p">
                                          <div class="extraicon">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                   <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                             </div>
                                          </div>
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle-fill" viewBox="0 0 16 16">
                                                   <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Starting Point
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row ">
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                   <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Destination
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Starting Time 
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Destination time
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                           <div id="cabT" class="tab-pane fade">
                            <div class="proD2 ">
                              <div class="forM ">
                                 <div class="mb-4 fonTs fishS088">
                                <div class="iImg"><img src="images/trans-4.png"></div>
                                 <div class="reDstop">
                                       <div class="icstop"></div>
                                       <span class="cpstp">Finish</span>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mb-3 row fishstyle0p">
                                          <div class="extraicon">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                   <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                             </div>
                                          </div>
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle-fill" viewBox="0 0 16 16">
                                                   <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Starting Point
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row ">
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                   <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Destination
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Starting Time 
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Destination time
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                           <div id="RentT" class="tab-pane fade">
                            <div class="proD2 ">
                              <div class="forM ">
                                 <div class="mb-4 fonTs fishS088">
                                <div class="iImg"><img src="images/trans-5.png"></div>
                                <div class="fishS0030 greeN">
                                 <div class="spinner-grow" role="status">
                                 <span class="visually-hidden"></span>
                                    </div > <span class="cpgreeN">Move<span>
                                    </div>

                                </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mb-3 row fishstyle0p">
                                          <div class="extraicon">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                   <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                             </div>
                                          </div>
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle-fill" viewBox="0 0 16 16">
                                                   <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Starting Point
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row ">
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                   <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Destination
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Starting Time 
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Destination time
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                               <div id="TourB" class="tab-pane fade">
                            <div class="proD2 ">
                              <div class="forM ">
                                 <div class="mb-4 fonTs fishS088">
                                <div class="iImg"><img src="images/trans-2.png"></div>
                                <div class="reDstop">
                                       <div class="icstop"></div>
                                       <span class="cpstp">Finish</span>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mb-3 row fishstyle0p">
                                          <div class="extraicon">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                   <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                             </div>
                                          </div>
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle-fill" viewBox="0 0 16 16">
                                                   <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Starting Point
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row ">
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                   <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Destination
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Starting Time 
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Destination time
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                           <div id="moverP" class="tab-pane fade">
                            <div class="proD2 ">
                              <div class="forM ">
                                 <div class="mb-4 fonTs fishS088">
                                <div class="iImg"><img src="images/trans-1.png"></div>
                                <div class="fishS0030 greeN">
                                 <div class="spinner-grow" role="status">
                                 <span class="visually-hidden"></span>
                                    </div > <span class="cpgreeN">Move<span>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mb-3 row fishstyle0p">
                                          <div class="extraicon">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                   <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                             </div>
                                          </div>
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle-fill" viewBox="0 0 16 16">
                                                   <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Starting Point
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row ">
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                   <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Destination
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Starting Time 
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Destination time
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                           <div id="recoveryT" class="tab-pane fade">
                            <div class="proD2 ">
                              <div class="forM ">
                                 <div class="mb-4 fonTs fishS088">
                                <div class="iImg"><img src="images/trans-7.png"></div>
                                <div class="reDstop">
                                       <div class="icstop"></div>
                                       <span class="cpstp">Finish</span>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mb-3 row fishstyle0p">
                                          <div class="extraicon">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                   <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                             </div>
                                          </div>
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle-fill" viewBox="0 0 16 16">
                                                   <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Starting Point
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row ">
                                          <div class="col-sm-12 fishS002 form-control-lg">
                                             <div class="iconoo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                   <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                                </svg>
                                             </div>
                                             <div class="fildi01">
                                                Choose Destination
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Starting Time 
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <div class="col-sm-12 form-control-lg">
                                             <div class="fildi01">
                                                Destination time
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                         </div>
                         </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="secMaP">
            <div class="container">
               <div class="maP mb-4">
                  <div id="googleMap">
                  <div class="map">
                        <div id="map-canvas" style="width:100%; height:700px; border: 1px solid rgb(220, 220, 220);">
                        </div>
                    </div>
                  </div>
               </div>
               <div class="btnss">
                  <button type="submit" class="btn  bgclr606 col-sm-3"> Submit</button>
                  <button type="Cancel" class="btn  bgclr606 col-sm-3">Cancel</button>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="secL11">
            <div class="container">
               <div class="Downapp">
                  <div class="col-md-10 m-auto ">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="imgbox">
                              <img src="images/mobilImg.png">
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="downCap">
                              <span class="texcol">DOWNLOAD THE APP</span>
                              <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                              <div class="btNs">
                                 <button type="submit" class="btn   "><img src="images/playstor-iso.png"> </button>
                                 <button type="submit" class="btn  "><img src="images/playstor-goog.png"> </button>
                              </div>
                              <span>Coming Soon</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
      </section>
      </section>


      @parent
    @endsection

    @section('footer')
    @parent
    @endsection
     