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

    <style type="text/css">
        .prwnshl{
          position: absolute;
          width: 100%;
          opacity: 1;
          visibility: hidden;
          -webkit-transition: all .8s !important;
          transition: all .8s;
          top: 270px;
          z-index: 52;
        }
            .prwnshl-xy {
            background: #e6ffa9;
            width: 100%;
            font-family: 'Oswald', sans-serif;
         }
         .prwnshl-xy ul li {
            padding: 10px;
            border: 1px solid #e2e2e2;
            background: #ffffff;
            width: 100%;
            min-width: 160px;
         }
               .imGdv img {
               width: 100%;
               height: auto;
               }
               .imGdv {
                width: 86px;
                }
    
               
         .mediA {
            border: 1px solid #e2e2e2;
            padding: 11px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 6px;
         }
               ul{
                  list-style: none;
               }
         .prwnshl-xy ul {
         display: flex;
         flex-direction: column;
         }

         .btnss a {
                padding: 7px 20px;
                background: #f1f1f1;
                margin-top: 2px;
                -webkit-transition: all .8s !important;
                transition: all .8s;
                color: #929292 !important;
                color: gray;
            }
         .btnss a:hover {
            background: #66bf04;
            color: white;   
         }

         .cpo {
            color: gray;
            font-weight: 400;
            border-bottom: 2px solid green;
            padding-top: 20px;
            padding-bottom: 4px;
            margin-bottom: 15px;
        }
         .cpo p {
            font-size: 14px;
            letter-spacing: .2px;
            text-transform: uppercase;
            margin-bottom: 0px;
         }
         .btnss {
            display: flex;
            flex-direction: column;
            width: 100%;
            text-align: center;
            height: 100%;
            justify-content: flex-end;
         }
         .mediA {
            border: 1px solid #e2e2e2;
            padding: 11px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 6px;
            height: 100%;
               box-shadow: 0px 42px 28px 2px #e6e6e6;
            /*  box-shadow: 8px 12px 19px 12px #e6e6e6;*/
         }
         .gallBox:hover  .prwnshl{
                  position: absolute;
               /* display: block;*/
                  opacity: 1;
                  visibility: visible;

               }
               .gallBox:hover{
                  opacity: 1;
               }
               .prwnshl-xy ul li:hover .mediA {
                  border: 1px solid #ababab;
               }
               .prwnshl-xy ul li:hover .cpo {
                  color: #66bf04;
                  -webkit-transition: all .3s !important;
                     transition: all .3s
               }
         @media only screen and (min-width: 766px) {
         .prwnshl-xy ul {
            display: flex;
            flex-direction:row;
                }
         .prwnshl{
         width: 100vw;
         left: -40%;
         }
         }
         @media only screen and (min-width: 1920px) {
         .prwnshl{
         width: 100vw;
            left: -136%;
         }
         }

         @media only screen and (min-width: 560px) {
         .prwnshl{
         width: 95vw;
            left: -33%;
         }
         }
    </style>
    
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand loGo" href="#"><img src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navRgl" id="navbarNav">
            <ul class="navbar-nav lynav">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Request Booking <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Earn Money</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">English</a>
                </li>
            </ul>
        </div>
    </nav> -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="position: relative;">
        <div class="banner-home">
            <div class="capTion">
                <div class="capcover">
                    <div class=" text-center  ">
                        <p class="wallclrF textB faimlyHead">PICK AND DROP
                        </p>
                        <div class="btnsty88">
                            <button type="submit" class="btn wallClr gobtn "> Customer Order </button>
                            <button type="submit" class="btn wallClr gobtn "> Complain </button>
                            <button type="submit" class="btn wallClr gobtn ">Request Booking </button>
                            <button type="submit" class="btn wallClr gobtn "> Service Provider </button>
                            <button type="submit" class="btn wallClr gobtn "> Earn Money </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/bgtop-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/bgtop-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/bgtop-1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- <section class="selsec">
        <div class="secLgall">
            <div class="container">
                <div class="typgall">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="gallBox">                           
                                    <div class="picSb">
                                        <img src="images/tRimg.png">
                                    </div>
                                    <div class="sbCap">
                                        <span class=" sbT">TRANSPORT</span>
                                        <span class="sbimg2"><img src="images/TrU.png"></span>
                                    </div>                                
                            </div>                       
                        </div>
                        <div class="col-md-3">
                            <div class="gallBox">
                                <a href="">
                                    <div class="picSb">
                                        <img src="images/fGimg.png">
                                    </div>
                                    <div class="sbCap">
                                        <span class="sbT">FOOD & GROCERY</span>
                                        <span class="sbimg2"><img src="images/FdU.png"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gallBox">
                                <a href="">
                                    <div class="picSb">
                                        <img src="images/rEimg.png">
                                    </div>
                                    <div class="sbCap">
                                        <span class="sbT">REAL ESTATE</span>
                                        <span class="sbimg2"><img src="images/ReU.png"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gallBox">
                                <a href="">
                                    <div class="picSb">
                                        <img src="images/hSimg.png">
                                    </div>
                                    <div class="sbCap">
                                        <span class="sbT">HOME SERVICES</span>
                                        <span class="sbimg2"><img src="images/homU.png"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="selsec">
         <div class="secLgall">
            <div class="container">
               <div class="typgall">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="gallBox">
                           <a href="">
                              <div class="picSb">
                                 <img src="images/tRimg.png">
                              </div>
                              <div class="sbCap">
                                 <span class="sbT">TRANSPORT</span>
                                 <span class="sbimg2"><img src="images/TrU.png"></span>
                              </div>
                           </a>
                           <div class="prwnshl">
                              <div class="prwnshl-xy">
                                 <ul>
                                    <li>
                                       <div class="mediA">
                                          <div class="imGdv">
                                             <img src="images/trans-8.png">
                                          </div>
                                          <div class="cpo">
                                             <p>School Pick n Drop</p>
                                          </div>
                                          <div class="btnss">
                                             <a href="">Driver</a>
                                                                                                                                 
                                             <a href="{{ Auth::check()?route('schoolchildinfo') :route('schoolparentinfo')}} ">Parent</a>
                                                                                                                                    
                                        </div>
                                       </div>
                                    </li>
                                   <li>
                                       <div class="mediA">
                                          <div class="imGdv">
                                             <img src="images/trans-3.png">
                                          </div>
                                          <div class="cpo">
                                             <p>Office Pick n Drop</p>
                                          </div>
                                          <div class="btnss">
                                             <a href="">Driver</a>
                                             <a href="{{route('indexoffice')}} ">Customer </a>
                                          </div>
                                       </div>
                                    </li>
                                   <li>
                                       <div class="mediA">
                                          <div class="imGdv">
                                             <img src="images/trans-4.png">
                                          </div>
                                          <div class="cpo">
                                             <p>cab service </p>
                                          </div>
                                          <div class="btnss">
                                             <a href="">Driver</a>
                                             <a href="">Customer</a>
                                            
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="mediA">
                                          <div class="imGdv">
                                             <img src="images/trans-5.png">
                                          </div>
                                          <div class="cpo">
                                             <p>Rent A car </p>
                                          </div>
                                          <div class="btnss">
                                             <a href="">Driver</a>
                                             <a href="">Customer</a>
                                            
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="mediA">
                                          <div class="imGdv">
                                             <img src="images/trans-2.png">
                                          </div>
                                          <div class="cpo">
                                             <p>Tour Booking </p>
                                          </div>
                                          <div class="btnss">
                                             <a href="">Driver</a>
                                             <a href="">Customer</a>
                                            
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="mediA">
                                          <div class="imGdv">
                                             <img src="images/trans-1.png">
                                          </div>
                                          <div class="cpo">
                                             <p>movers n packers  </p>
                                          </div>
                                          <div class="btnss">
                                             <a href="">Driver</a>
                                             <a href="">Customer</a>
                                            
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="mediA">
                                          <div class="imGdv">
                                             <img src="images/trans-7.png">
                                          </div>
                                          <div class="cpo">
                                             <p>recovery service </p>
                                          </div>
                                          <div class="btnss">
                                             <a href="">Driver</a>
                                             <a href="">Customer</a>                                          
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="gallBox">
                           <a href="">
                              <div class="picSb">
                                 <img src="images/fGimg.png">
                              </div>
                              <div class="sbCap">
                                 <span class="sbT">FOOD & GROCERY</span>
                                 <span class="sbimg2"><img src="images/FdU.png"></span>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="gallBox">
                           <a href="">
                              <div class="picSb">
                                 <img src="images/rEimg.png">
                              </div>
                              <div class="sbCap">
                                 <span class="sbT">REAL ESTATE</span>
                                 <span class="sbimg2"><img src="images/ReU.png"></span>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="gallBox">
                           <a href="">
                              <div class="picSb">
                                 <img src="images/hSimg.png">
                              </div>
                              <div class="sbCap">
                                 <span class="sbT">HOME SERVICES</span>
                                 <span class="sbimg2"><img src="images/homU.png"></span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>   
    <section>
        <div class="txport">
            <p class="pStyle wallclrF">now you can call any type of vehicle</p>
            <span><img src="images/urdup.png"></span>
        </div>
    </section>
    <!-- <section>
        <div class="secL3">
            <div class="container">
                <div class="Ttype flexSpB">
                    <img src="images/trans-6.png">
                    <img src="images/trans-5.png">
                    <img src="images/trans-4.png">
                    <img src="images/trans-3.png">
                    <img src="images/trans-3.png">
                    <img src="images/trans-7.png">
                    <img src="images/trans-1.png">
                </div>
            </div>
        </div>
    </section> -->
    <section>
        <div class="secL8">
            <div class="container">
                <div class="">
                    <div class="capTst05 ">
                        <p class="typo0654">how we work</p>

                    </div>
                    <div class="trunkTwo flxSA">
                        <div class="">
                            <div class="workiT">
                                <span class="ductspan1"><img src="images/workit-icon-1.png"></span>

                            </div>
                            <div class="meDiabox">
                                <span>Request for Pick and Drop for School and Offices</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <div class="blstyl">
                            <div class="workiT">
                                <span class="ductspan1"><img src="images/workit-icon-2.png"></span>
                            </div>
                            <div class="meDiabox">
                                <span>Laya jee will find an option and propose</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <div class="blstyl">
                            <div class="workiT">
                                <span class="ductspan1"><img src="images/workit-icon-3.png"></span>
                            </div>
                            <div class="meDiabox">
                                <span>Accept offer & Pay</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="secL9">
            <div class="container">
                <div class="choos">
                    <p class="typo0555">why choose layajee</p>
                    <div class="row mrg45">

                        <div class="col-md-6">
                            <div class="blkCho">
                                <span class="cHimg"><img src="images/chose-icon-1.png"></span>
                                <div class="choCap">
                                    <span class="choSpn">Time saving</span>
                                    <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blkCho">
                                <span class="cHimg"><img src="images/chose-icon-2.png"></span>
                                <div class="choCap">
                                    <span class="choSpn">Quality & Trustworthy</span>
                                    <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blkCho">
                                <span class="cHimg"><img src="images/chose-icon-3.png"></span>
                                <div class="choCap">
                                    <span class="choSpn">Affordable</span>
                                    <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blkCho">
                                <span class="cHimg"><img src="images/chose-icon-4.png"></span>
                                <div class="choCap">
                                    <span class="choSpn">Friendly Support</span>
                                    <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="secL10">
            <div class="container">
                <div class="tesTimo">
                    <div class="tiTlin">
                        <div class="btmbar"></div>
                        <p class="typo0654 ptop8">testimonials</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="Testbox">
                                <div class="raTing">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <span>1 minute ago</span>
                                </div>
                                <div class="padin15top">
                                    <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                                <div class="senDer">
                                    <span>- Jawad F</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="Testbox">
                                <div class="raTing">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <span>1 minute ago</span>
                                </div>
                                <div class="padin15top">
                                    <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                                <div class="senDer">
                                    <span>- Muhammad S</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="Testbox">
                                <div class="raTing">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <span>1 minute ago</span>
                                </div>
                                <div class="padin15top">
                                    <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                                <div class="senDer">
                                    <span>- M S</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <div class="btNs">
                                        <button type="submit" class="btn   "><img src="images/playstor-iso.png">
                                        </button>
                                        <button type="submit" class="btn  "><img src="images/playstor-goog.png">
                                        </button>
                                    </div>
                                    <span>Coming Soon</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <a href="#"> driver </a>
                        <a href="{{route('schoolparentinfo')}}"> parent</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </section>

    @parent
    @endsection

    @section('footer')
    @parent
    @endsection