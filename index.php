<?php
require_once 'controllers/autoController.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/lightbox.css">    
    <title>Buy Cars</title>
    
</head>
<body >
    <nav class="navbar navbar-expand-lg bg-white navbar-light" style="height: 50px;">
        <div class="container d-flex justify-content-between mt-2">
           <div class="row ">
               <div class="col d-flex justify-content-between">
                <div class="d-flex top-bar">
                    <div class="">
                        <i class="bi bi-telephone-fill" style="background-color: #000; color: #fff; padding: 16px 15px 25px 15px; font-size: 13px;"></i>
                    </div>
                    <div>
                        <p class="fs-6">+(229) 95 11 99 69</p>
                    </div>
                </div>
                <div class="d-flex top-bar">
                    <div class="">
                        <i class="bi bi-whatsapp" style="background-color: #000; color: #fff; padding: 116px 15px 25px 15px; font-size: 13px;"></i>
                    </div>
                    <div class="">
                        <p class="fs-6">+(229) 95 11 99 69</p>
                    </div>
                </div>
                <div class="d-flex top-bar">
                    <div>
                        <i class="bi bi-envelope-fill" style="background-color: #000; color: #fff; padding: 16px 15px 25px 15px; font-size: 13px;"></i>
                    </div>
                    <div>
                        <p class="fs-6">ellaemezieobi456@gmail.com</p>
                    </div>
                </div>
              </div>
           </div>
           <div class="d-flex ">
              <div class="social-ic">
                <i class="bi bi-facebook"></i>
              </div>
              <div>
                <i class="bi bi-linkedin"></i>
              </div>
           </div>
        </div>
        
    </nav>
    <!-- <hr> -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light p-4">
        <div class="container">
            <a href="" class="navbar-brand">
                <img src="./images/logo_wdu.png" alt="" class="" style="width: 200px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse list-iten" id="navmenu">
                <ul class="navbar-nav text-uppercase ms-auto list-text">
                    <li class="nav-item ">
                        <a href="#" class="nav-link">Reception</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">How does it work</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Our Offers</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">Our Rate</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-white list-active">Reservation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="./images/baniere1.jpg" style="height: 600px;" class="d-block w-100 " class="animate__zoomIn" alt="...">
            <div class="carousel-caption d-md-block text-white slide-text">
              <h5 class="fs-2 text-uppercase slide-header1 text-sm-center animate__animated animate__zoomIn">Accesseble to all</h5>
              <h1 class="fw-bold slide-header text-md-center animate__animated animate__zoomIn">Very affordable Rates</h1>
              <div class="pt-1">
                <button type="button" class="btn-head animate__animated animate__zoomIn">Services</button>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./images/baniere1.jpg" style="height: 600px;" class="d-block w-100" class="animate__zoomIn" alt="...">
            <div class="carousel-caption d-md-block text-white slide-text">
              <h5 class="fs-2 text-uppercase slide-header1 animate__animated animate__zoomIn">Accesseble to all</h5>
              <h1 class="fw-bold slide-header animate__animated animate__zoomIn">Very affordable Rates</h1>
              <div class="pt-1">
                <button type="button" class="btn-head animate__animated animate__zoomIn">Services</button>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./images/baniere1.jpg" style="height: 600px;" class="d-block w-100" class="animate__zoomIn" alt="...">
            <div class="carousel-caption d-md-block text-white slide-text">
              <h5 class="fs-2 text-uppercase slide-header1 animate__animated animate__zoomIn">Accesseble to all</h5>
              <h1 class="fw-bold slide-header animate__animated animate__zoomIn">Very affordable Rates</h1>
              <div class="pt-1">
                <button type="button" class="btn-head animate__animated animate__zoomIn">Services</button>
              </div>
            </div>
          </div>
      </div>

      <section class="bg-white">
          <div class="container">
              <div class="text-center order-title">
                  <h1>Instant Order</h1>
                  <p>Order your car directly by filling out the form below.</p>
                  <div class="order-boder">
                      <div class="order-line"></div>
                      <div class="order-line2">
                          <div class="order-flex1"></div>
                          <div class="order-flex2"></div>
                      </div>
                  </div>
              </div>
              <div class="order-cars d-flex justify-content-center ">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="50" height="50"
                    viewBox="0 0 172 172"
                    class="car-boder"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#fcd53b"><path d="M51.54625,58.42625c-0.16125,0.01344 -0.33594,0.02688 -0.49719,0.05375h-12.65813c-3.69531,0 -7.12187,1.98875 -8.96281,5.20031l-8.94938,15.65469l-11.15312,1.08844c-5.32125,0.51063 -9.32563,4.93156 -9.32563,10.26625v2.19031h6.88v6.88h-6.88v6.88c0,5.68406 4.63594,10.32 10.32,10.32h7.37719c1.54531,5.89906 6.89344,10.32 13.26281,10.32c6.36938,0 11.7175,-4.42094 13.26281,-10.32h86.99437c1.54531,5.89906 6.89344,10.32 13.26281,10.32c6.36938,0 11.7175,-4.42094 13.26281,-10.32h3.93719c5.68406,0 10.32,-4.63594 10.32,-10.32v-3.44h-6.88v-6.88h6.88v-1.08844c0,-4.87781 -3.46687,-9.1375 -8.23719,-10.105l-27.18406,-5.59l-12.88656,-15.05c-3.27875,-3.81625 -8.03562,-6.00656 -13.06125,-6.00656h-10.33344c-0.20156,-0.02687 -0.38969,-0.05375 -0.59125,-0.05375c-0.16125,0.01344 -0.33594,0.02688 -0.49719,0.05375h-47.07156c-0.20156,-0.02687 -0.38969,-0.05375 -0.59125,-0.05375zM38.39094,65.36h9.76906v13.76h-19.63219l6.88,-12.02656c0.60469,-1.075 1.76031,-1.73344 2.98312,-1.73344zM55.04,65.36h41.28v13.76h-41.28zM103.2,65.36h7.43094c3.02344,0 5.87219,1.31688 7.83406,3.60125l8.7075,10.15875h-23.9725zM30.96,106.64c3.62813,0 6.50375,2.72781 6.82625,6.26188c-0.08062,0.40312 -0.08062,0.80625 0,1.20937c-0.30906,3.5475 -3.18469,6.28875 -6.82625,6.28875c-3.7625,0 -6.71875,-2.91594 -6.85312,-6.63812c0,-0.08063 0.05375,-0.16125 0.05375,-0.24188c0,-0.08062 -0.05375,-0.16125 -0.05375,-0.24187c0.13437,-3.72219 3.09062,-6.63813 6.85312,-6.63813zM144.48,106.64c3.84313,0 6.88,3.03688 6.88,6.88c0,3.84313 -3.03687,6.88 -6.88,6.88c-3.84312,0 -6.88,-3.03687 -6.88,-6.88c0,-3.84312 3.03688,-6.88 6.88,-6.88z"></path></g></g></svg>
                  </div>
                  <div class="social-cars">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="50" height="50"
                    viewBox="0 0 172 172"
                    class="car-boder"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M51.54625,58.42625c-0.16125,0.01344 -0.33594,0.02688 -0.49719,0.05375h-12.65813c-3.69531,0 -7.12187,1.98875 -8.96281,5.20031l-8.94938,15.65469l-11.15312,1.08844c-5.32125,0.51063 -9.32563,4.93156 -9.32563,10.26625v2.19031h6.88v6.88h-6.88v6.88c0,5.68406 4.63594,10.32 10.32,10.32h7.37719c1.54531,5.89906 6.89344,10.32 13.26281,10.32c6.36938,0 11.7175,-4.42094 13.26281,-10.32h86.99437c1.54531,5.89906 6.89344,10.32 13.26281,10.32c6.36938,0 11.7175,-4.42094 13.26281,-10.32h3.93719c5.68406,0 10.32,-4.63594 10.32,-10.32v-3.44h-6.88v-6.88h6.88v-1.08844c0,-4.87781 -3.46687,-9.1375 -8.23719,-10.105l-27.18406,-5.59l-12.88656,-15.05c-3.27875,-3.81625 -8.03562,-6.00656 -13.06125,-6.00656h-10.33344c-0.20156,-0.02687 -0.38969,-0.05375 -0.59125,-0.05375c-0.16125,0.01344 -0.33594,0.02688 -0.49719,0.05375h-47.07156c-0.20156,-0.02687 -0.38969,-0.05375 -0.59125,-0.05375zM38.39094,65.36h9.76906v13.76h-19.63219l6.88,-12.02656c0.60469,-1.075 1.76031,-1.73344 2.98312,-1.73344zM55.04,65.36h41.28v13.76h-41.28zM103.2,65.36h7.43094c3.02344,0 5.87219,1.31688 7.83406,3.60125l8.7075,10.15875h-23.9725zM30.96,106.64c3.62813,0 6.50375,2.72781 6.82625,6.26188c-0.08062,0.40312 -0.08062,0.80625 0,1.20937c-0.30906,3.5475 -3.18469,6.28875 -6.82625,6.28875c-3.7625,0 -6.71875,-2.91594 -6.85312,-6.63812c0,-0.08063 0.05375,-0.16125 0.05375,-0.24188c0,-0.08062 -0.05375,-0.16125 -0.05375,-0.24187c0.13437,-3.72219 3.09062,-6.63813 6.85312,-6.63813zM144.48,106.64c3.84313,0 6.88,3.03688 6.88,6.88c0,3.84313 -3.03687,6.88 -6.88,6.88c-3.84312,0 -6.88,-3.03687 -6.88,-6.88c0,-3.84312 3.03688,-6.88 6.88,-6.88z"></path></g></g></svg>
                  </div>
              </div>
              <div class="cars"></div>
          </div>
      </section>

      <section class="bg-light">
          <div class="container input-ic">
            <form action="index.php" method="post">
                <div class="row justify-content-md-center">
                    <div class="col-md">
                    <?php if(isset($errors['name'])):?>
                        <div class="text-danger" style="font-size:10px;">*
                         <?php echo $errors['name'];?>
                        </div>
                         <?php endif;?>
                        <div class="input-group mb-3 input1"> 
                            <input type="text" class="form-control" name="name"  placeholder="Your name" >
                            <span class="input-group-text bg-white" id="basic-addon">
                                <i class="bi bi-file-person"></i>
                            </span>
                            
                          </div>
                        </div>
                   
                      <div class="col-md">                 
                         <?php if(isset($errors['location'])):?>
                        <div class="text-danger" style="font-size:10px;">*
                         <?php echo $errors['location'];?>
                        </div>
                         <?php endif;?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="location" placeholder="where do we pick you at" aria-describedby="basic-addon2">
                            <span class="input-group-text bg-white" id="basic-addon">
                                <i class="bi bi-flag-fill"></i>
                            </span>
                            
                          </div>
                        </div>
                    
                    
                        <div class="col-md">
                         <?php if(isset($errors['email'])):?>
                         <div class="text-danger" style="font-size:10px;">*
                           <?php echo $errors['email'];?>
                         </div>
                         <?php endif;?>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" style="border:none; padding:16px; boder-radius: 0px;" name="email" placeholder="email address"  aria-describedby="basic-addon2">
                                <span class="input-group-text bg-white" id="basic-addon">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                              </div>
                        </div>
                       

                        <div class="col-md">
                         <?php if(isset($errors['pickup_time'])):?>
                         <div class="text-danger" style="font-size:10px;">*
                           <?php echo $errors['pickup_time'];?>
                         </div>
                         <?php endif;?>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="pickup_time" placeholder="09:09--"  aria-describedby="basic-addon2">
                                <span class="input-group-text bg-white" id="basic-addon">
                                    <i class="bi bi-clock"></i>
                                </span>
                            </div>
                        </div>
                </div>

                <div class="row justify-content-md-center mt-1">
                    <div class="col-md">
                       <?php if(isset($errors['phone_num'])):?>
                        <div class="text-danger" style="font-size:10px;">*
                         <?php echo $errors['phone_num'];?>
                        </div>
                         <?php endif;?>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="phone_num" placeholder="Phone number" style="border:none; padding:16px; boder-radius: 0px;" aria-describedby="basic-addon2">
                            <span class="input-group-text bg-white" id="basic-addon">
                                <i class="bi bi-telephone-fill"></i>
                            </span>
                        </div>
                    </div>
                   
                      <div class="col-md">
                        <?php if(isset($errors['country'])):?>
                        <div class="text-danger" style="font-size:10px;">*
                         <?php echo $errors['country'];?>
                         </div>
                         <?php endif;?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="country" placeholder="where are you going"  aria-describedby="basic-addon2">
                            <span class="input-group-text bg-white" id="basic-addon">
                                <i class="bi bi-envelope"></i>
                            </span>
                        </div>
                       </div>
                    
                    
                        <div class="col-md">
                          <?php if(isset($errors['days'])):?>
                          <div class="text-danger" style="font-size:10px;">*
                            <?php echo $errors['days'];?>
                          </div>
                          <?php endif;?>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="days" placeholder="For when" aria-describedby="basic-addon2">
                                <span class="input-group-text bg-white" id="basic-addon">
                                    <i class="bi bi-envelope"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="input-group mb-3 d-flex justify-content-center">
                                <button type="submit" name="submit" style="font-size: 15px;" class="btn btn-md btn-lg btn-warning text-white">
                                    ORDER
                                </button>
                            </div>
                        </div>
                </div>
                
              </form>
          </div>
          <div class="p-4"></div>
      </section>
      <div class="cars"></div>

      <section>
          <div class="container">
              <div class="row ">
                  <div class="col-md">
                    <img class="img-fluid w-100" src="./images/gamme.jpg" alt="">
                  </div>
                  <div class="reliable col-md">
                      <h4 class="rely-h4">Always More Reliable</h4>
                      <h3 class="rely-h">Our services are requested by thousands of Beninese every month!</h3>
                      <p class="rely-p">Our cars, mostly commoditized, our drivers, experienced and dynamic and our high availability have not ceased to make the satisfaction of our customers.</p>
                      <div class="row rely">
                         <div class="col-md rely1">
                            <ul>
                                <li>Airport pickup</li>
                                <li>Long journey</li>
                                <li>Event Renter</li>
                                <li>Long term Rental</li>
                            </ul>
                         </div>
                         <div class="col-md rely2">
                            <ul>
                                <li>Tourist convoy</li>
                                <li>Rental for corturne exit</li>
                                <li>Rental for school tips</li>
                                <li>Rental with carpooling support</li>
                            </ul>
                         </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <div class="cars"></div>

      <section class="" style="background-color: #091c36; opacity: .9; color: #fff;">
          <div class="container">
              <div class="d-md-flex justify-content-between vehicle-p">
                  <div class="vehicle1">
                      <h1>Our vehicle Ranges</h1>
                      <div class="vehicle-border">
                          <div class="vehicle-m"></div>
                          <div class="vehicle-m1">
                              <div class="vehicle-m2"></div>
                              <div class="vehicle-m3"></div>
                          </div>
                      </div>
                      <div class="mt-5">
                        <p>We put at your disposal various ranges of vehicles</p>
                        <p>Whatever the range you want, know that you will find all the comfort you need.</p>
                        <p>For your outings whatever they are do not hesitate to do them on board our vehicles.</p>
                      </div>
                  </div>
        
                  <div class="vehicle-sec"></div>
                  <div class="d-md-flex">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active  d-md-flex justify-content-around" data-bs-interval="1000">
                            <div class="max-drive-h">
                                <img src="./images/presti.jpg" class="d-block w-100" alt="...">
                                <div class=" text-white max-drive">
                                    <!-- <img src="./images/presti.jpg" class="d-block w-50" alt="..."> -->
                                    <h2 >MAXI-DRIVE</h2>
                                    <h4>4x4 vehicle</h4>
                                    <div class="car-b"></div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>4 Doors</p>
                                    </div>
                                    <div class="">
                                        <i></i>
                                        <p>7 Seats</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>Air conditioner/Heating</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>1 Coli/1 suitcases</p>
                                    </div>
                                </div>
                            </div>
                            <div class="max-drive-h">
                                <img src="./images/presti.jpg" class="d-block w-100" alt="...">
                                <div class=" text-white max-drive">
                                    <!-- <img src="./images/presti.jpg" class="d-block w-50" alt="..."> -->
                                    <h2 >MAXI-DRIVE</h2>
                                    <h4>4x4 vehicle</h4>
                                    <div class="car-b"></div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>4 Doors</p>
                                    </div>
                                    <div class="">
                                        <i></i>
                                        <p>7 Seats</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>Air conditioner/Heating</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>1 Coli/1 suitcases</p>
                                    </div>
                                </div>
                            </div>
                            <div class="max-drive-h">
                                <img src="./images/presti.jpg" class="d-block w-100" alt="...">
                                <div class=" text-white max-drive">
                                    <!-- <img src="./images/presti.jpg" class="d-block w-50" alt="..."> -->
                                    <h2 >MAXI-DRIVE</h2>
                                    <h4>4x4 vehicle</h4>
                                    <div class="car-b"></div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>4 Doors</p>
                                    </div>
                                    <div class="">
                                        <i></i>
                                        <p>7 Seats</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>Air conditioner/Heating</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>1 Coli/1 suitcases</p>
                                    </div>
                                </div>
                            </div>
                            
                          </div>

                          <div class="carousel-item d-md-flex justify-content-around" data-bs-interval="2000">
                            <div class="max-drive-h">
                                <img src="./images/presti.jpg" class="d-block w-100" alt="...">
                                <div class=" text-white max-drive">
                                    <!-- <img src="./images/presti.jpg" class="d-block w-50" alt="..."> -->
                                    <h2 >MAXI-DRIVE</h2>
                                    <h4>4x4 vehicle</h4>
                                    <div class="car-b"></div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>4 Doors</p>
                                    </div>
                                    <div class="">
                                        <i></i>
                                        <p>7 Seats</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>Air conditioner/Heating</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>1 Coli/1 suitcases</p>
                                    </div>
                                </div>
                            </div>
                            <div class="max-drive-h">
                                <img src="./images/presti.jpg" class="d-block w-100" alt="...">
                                <div class=" text-white max-drive">
                                    <!-- <img src="./images/presti.jpg" class="d-block w-50" alt="..."> -->
                                    <h2 >MAXI-DRIVE</h2>
                                    <h4>4x4 vehicle</h4>
                                    <div class="car-b"></div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>4 Doors</p>
                                    </div>
                                    <div class="">
                                        <i></i>
                                        <p>7 Seats</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>Air conditioner/Heating</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>1 Coli/1 suitcases</p>
                                    </div>
                                </div>
                            </div>
                            <div class="max-drive-h">
                                <img src="./images/presti.jpg" class="d-block w-100" alt="...">
                                <div class=" text-white max-drive">
                                    <!-- <img src="./images/presti.jpg" class="d-block w-50" alt="..."> -->
                                    <h2 >MAXI-DRIVE</h2>
                                    <h4>4x4 vehicle</h4>
                                    <div class="car-b"></div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>4 Doors</p>
                                    </div>
                                    <div class="">
                                        <i></i>
                                        <p>7 Seats</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>Air conditioner/Heating</p>
                                    </div>
                                    <div class="d-flex">
                                        <i></i>
                                        <p>1 Coli/1 suitcases</p>
                                    </div>
                                </div>
                            </div>

                            
                            
                          </div>


                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button> -->
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <div class="cars"></div>

      <section>
          <div class="container">
              <div class="row">
                  <div class="col-md">
                      <div class=" mt-3 d-flex services">
                          <i class="bi bi-envelope di-dark"></i>
                          <div class="quality">
                              <h3>Quality service</h3>
                              <div class="service-border"></div>
                          </div>
                      </div>  
                  </div>
                  <div class="col-md">
                       <div class=" mt-3 d-flex services">
                           <i class="bi bi-heart di-dark"></i>
                           <div class="quality">
                               <h3>Many trust us</h3>
                               <div class="service-border"></div>
                           </div>
                       </div>  
                  </div>
                  <div class="col-md">
                       <div class="mt-3 d-flex service">
                        <img src="https://img.icons8.com/android/24/000000/car.png" class=""/>
                           <div class="quality">
                               <h3>Quality service</h3>
                               <div class="service-border"></div>
                           </div>
                       </div>  
                  </div>
              </div>
              <div class="row mt-4">
                <div class="col-md">
                    <div class=" mt-3 d-flex services">
                        <i class="bi bi-envelope di-dark"></i>
                        <div class="quality">
                            <h3>Quality service</h3>
                            <div class="service-border"></div>
                        </div>
                    </div>  
                </div>
                <div class="col-md">
                     <div class=" mt-3 d-flex services">
                         <i class="bi bi-envelope di-dark"></i>
                         <div class="quality">
                             <h3>Quality service</h3>
                             <div class="service-border"></div>
                         </div>
                     </div>  
                </div>
                <div class="col-md">
                     <div class="mt-3 d-flex services">
                         <i class="bi bi-envelope di-dark"></i>
                         <div class="quality">
                             <h3>Quality service</h3>
                             <div class="service-border"></div>
                         </div>
                     </div>  
                </div>
              </div>
          </div>
      </section>
      <div class="cars"></div>

      <section class="bg-light sec-3">
          <div class="container">
              <div class="text-center fleet">
                  <h1>Our fleet</h1>
                  <p>We put at your disposal a diversified fleet.</p>
                  <div class="fleet-b">
                    <div class="fleet-m"></div>
                    <div class="fleet-m1">
                      <div class="fleet-m2"></div>
                      <div class="fleet-m3"></div>
                    </div>
                  </div>
              </div>
          </div>

      </section>
      <div class="cars"></div>

      <section>
          <div class="container2">
              <ul class="text-dark">
                  <li class="list active" data-filter="all">All</li>
                  <li class="list" data-filter="suv">SUV</li>
                  <li class="list" data-filter="honda">HONDA</li>
                  <li class="list" data-filter="3xs">3XS</li>
                  <li class="list" data-filter="bmw">PICKUP</li>
              </ul>
              <div class="product">
                  <div class="itemBox suv">
                      <a href="./images/higlander.png" data-lightbox="models">
                        <img src="./images/higlander.png" alt="">
                      </a>
                  </div>
                   <div class="itemBox honda">
                      <a href="./images/prado.png" data-lightbox="models">
                        <img src="./images/prado.png" alt="">
                      </a>
                  </div>
                   <div class="itemBox 3xs">
                      <a href="./images/peugeot-noire.png" data-lightbox="models">
                        <img src="./images/peugeot-noire.png" alt="">
                      </a>
                  </div>
                   <div class="itemBox bmw">
                      <a href="./images/corrola.png" data-lightbox="models">
                        <img src="./images/corrola.png" alt="">
                      </a>
                  </div>
                   <div class="itemBox suv">
                      <a href="./images/ford-explorer.png" data-lightbox="models">
                        <img src="./images/ford-explorer.png" alt="">
                      </a>
                  </div>
                   <div class="itemBox honda">
                      <a href="./images/ciaz.png" data-lightbox="models">
                        <img src="./images/ciaz.png" alt="">
                      </a>
                  </div>
                   <div class="itemBox 3xs">
                      <a href="./images/ciaz.png" data-lightbox="models">
                        <img src="./images/ciaz.png" alt="">
                      </a>
                  </div>
                   <div class="itemBox bmw">
                      <a href="./images/corrola.png" data-lightbox="models">
                        <img src="./images/corrola.png" alt="">
                      </a>
                  </div>
                  <div class="itemBox suv">
                      <a href="./images/ford-explorer.png" data-lightbox="models">
                        <img src="./images/ford-explorer.png" alt="">
                      </a>
                  </div>
                   <div class="itemBox honda">
                      <a href="./images/ciaz.png" data-lightbox="models">
                        <img src="./images/ciaz.png" alt="">
                      </a>
                  </div>
              </div>
             </div>
          </div>
          <div class="bg-warning call-h">
            <div class="container text-white">
                <div class="d-md-flex justify-content-between">
                    <div class=" call-us">
                        <h1>make your choice and call us</h1>
                    </div>
                    <div class="num">
                        <i class="bi bi-call"></i>
                        <p>+(229) 69 35 83 86</p>
                    </div>
                </div>
            </div>
          </div>
      </section>
      <div class="cars"></div>

      <section class="acess-bg">
          <div class="container">
              <div class="row">
                  <div class="col-md img-p">
                      <img src="./images/logo_wdu.png" alt="" class="w-100">
                      <p>WiDriveU puts at your disposal a wide range of Cars and a team of experienced drivers to accompany 
                          you in your races in Cotonou and its surroundings.
                      </p>
                     <i class="bi bi-facebook"></i>
                  </div>

                  <div class="col-md quick-w">
                      <div class="d-flex quick">
                          <div class="quick-b"></div>
                          <h4>QUICK ACCESS</h4>
                      </div>
                      <div class="d-md-flex justify-content-between">
                          <div class="access1">
                              <div class="d-flex">
                                  <i class="bi bi-chevron-right back-arrow"></i>
                                  <p>Fleet</p>
                              </div>
                              <div class="d-flex">
                                 <i class="bi bi-chevron-right back-arrow"></i>
                                 <p>Subscription</p>
                              </div>
                             
                          </div>

                          <div class="access2">
                            <div class="d-flex">
                                <i class="bi bi-chevron-right back-arrow"></i>
                                <p>Fleet</p>
                            </div>
                            <div class="d-flex">
                               <i class="bi bi-chevron-right back-arrow"></i>
                               <p>Subscription</p>
                            </div>
                            <div></div>
                        </div>
                      </div>
                  </div>

                  <div class="col-md quick-left">
                    <div class="d-flex quick">
                        <div class="quick-b"></div>
                        <h4>CATEGORIES</h4>
                    </div>
                    <div class="access3">
                        <div class="d-flex">
                            <i class="bi bi-chevron-right back-arrow"></i>
                            <p>sedan</p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-chevron-right back-arrow"></i>
                            <p>suv/min 4x4</p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-chevron-right back-arrow"></i>
                            <p>4x4/van</p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-chevron-right back-arrow"></i>
                            <p>prestige</p>
                        </div>
                    </div>

                  </div>

                  <div class="col-md">
                    <div class="d-flex quick">
                        <div class="quick-b"></div>
                        <h4>CONTACT US</h4>
                    </div>
                    <div class="access5">
                        <div class="d-flex">
                            <i class="bi bi-telephone-fill back-arrow"></i>
                            <p class="access5-p">(+229) 69 35 83 86</p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-envelope back-arrow"></i>
                            <p>ellaemezieobi@gmail.com</p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-geo-alt back-arrow"></i>
                            <p>Cotonou, Fidjrosse. Benin</p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-clock back-arrow"></i>
                            <p>Mon - Sun : H24</p>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>



     <!-- <script>
         $(function() {
       $('#datetimepicker1').datetimepicker();
        });
     </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script> -->
    <script src="./lightbox-plus-jquery.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('.list').click(function(){
            const value = $(this).attr('data-filter');
            if (value == 'all'){
                $('.itemBox').show('1000');
            }else{
                $('itemBox').not('.'+value).hide('1000');
                $('itemBox').filter('.'+value).show('1000');

            }
        })

        $('.list').click(function(){
            $(this).addClass('active').siblings().removeClass('active');
        })
    })
 </script>
</body>
</html>