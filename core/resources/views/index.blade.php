<!DOCTYPE html>
<html lang="en">

<head>
    <title>elitetrustbk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://use.fontawesome.com/0feb0ba8ad.js"></script>

    <link href="{{ asset('style-hover/css/bootstrap-dropdownhover.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('style-hover/js/bootstrap-dropdownhover.min.js') }}"></script>
    <style>
        .navbar-custom {
            color: #FFFFFF;
            background-color: #e1f7e9;
        }
        
        .topnav {
            background-color: #c8c9a9;
            border-radius: 8px;
            overflow: hidden;
        }
        /* Style the links inside the navigation bar */
        
        .topnav a {
            float: left;
            display: block;
            color: #8c492a;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            font-weight: bold;
        }
        /* Change the color of links on hover */
        
        .topnav a:hover {
            background-color: white;
            color: green;
        }
        /* Add an active class to highlight the current page */
        
        .topnav a.active {
            background-color: #E3DEDD;
            color: white;
            hieght:7px;
            padding-top:1px;
        }
        /* Hide the link that should open and close the topnav on small screens */
        
        .topnav .icon {
            display: none;
        }
        
        @media screen and (max-width: 500px) {
            .topnav a:not(: first-child) {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
        }
        /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
        
        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }
            .topnav.responsive a.icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
        
        .btn-xl {
            padding: 10px 20px;
            font-size: 20px;
            color: white;
            width: 80%;
            border-radius: 4px;
            background-color: #006699;
            margin-left: 10%;
            margin-bottom: 5%;
        }
    </style>
</head>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
   
</script>

<body>

    <nav class="navbar navbar-custom">

        <div class="container-fluid">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <h4 style="padding-top:3px;"><span  class="label label-default">Roma bank</span></h4></li>

                    <li><a href="#" style="color: black;font-weight:bold;">Jobs</a></li>
                    <li><a href="#" style="color: black;font-weight:bold;">Money mattars</a></li>
                    <li><a href="#" style="color: black;font-weight:bold;">Contact us</a></li>
                    <li><a href="#" style="color: black;font-weight:bold;s">Follow us</a></li>
                    <li><img src="{{ url('/img/youtube.png') }}" alt="Bootshop panasonoc New camera" style="padding-top:10px;" width="30">
                        <img src="https://img.icons8.com/cute-clipart/64/000000/facebook.png" style="padding-top:10px;" width="30">
                    </li>

                    <li>
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;
                        <select data-placeholder="Choose a Language..." class="browser-default custom-select" style="color: #4b4861;">
                            <option value="0">Select language</option>
                            <option value="EN">English</option>
                            <option value="AF">Afrikaans</option>
                            <option value="SQ">Albanian</option>
                            <option value="AR">Arabic</option>
                            <option value="HY">Armenian</option>
                            <option value="EU">Basque</option>
                            <option value="BN">Bengali</option>
                            <option value="BG">Bulgarian</option>
                            <option value="CA">Catalan</option>
                            <option value="KM">Cambodian</option>
                            <option value="ZH">Chinese (Mandarin)</option>
                            <option value="HR">Croatian</option>
                            <option value="CS">Czech</option>
                            <option value="DA">Danish</option>
                            <option value="NL">Dutch</option>

                            <option value="ET">Estonian</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finnish</option>
                            <option value="FR">French</option>
                            <option value="KA">Georgian</option>
                            <option value="DE">German</option>
                            <option value="EL">Greek</option>
                            <option value="GU">Gujarati</option>
                            <option value="HE">Hebrew</option>
                            <option value="HI">Hindi</option>
                            <option value="HU">Hungarian</option>
                            <option value="IS">Icelandic</option>
                            <option value="ID">Indonesian</option>
                            <option value="GA">Irish</option>
                            <option value="IT">Italian</option>
                            <option value="JA">Japanese</option>
                            <option value="JW">Javanese</option>
                            <option value="KO">Korean</option>
                            <option value="LA">Latin</option>
                            <option value="LV">Latvian</option>
                            <option value="LT">Lithuanian</option>
                            <option value="MK">Macedonian</option>
                            <option value="MS">Malay</option>
                            <option value="ML">Malayalam</option>
                            <option value="MT">Maltese</option>
                            <option value="MI">Maori</option>
                            <option value="MR">Marathi</option>
                            <option value="MN">Mongolian</option>
                            <option value="NE">Nepali</option>
                            <option value="NO">Norwegian</option>
                            <option value="FA">Persian</option>
                            <option value="PL">Polish</option>
                            <option value="PT">Portuguese</option>
                            <option value="PA">Punjabi</option>
                            <option value="QU">Quechua</option>
                            <option value="RO">Romanian</option>
                            <option value="RU">Russian</option>
                            <option value="SM">Samoan</option>
                            <option value="SR">Serbian</option>
                            <option value="SK">Slovak</option>
                            <option value="SL">Slovenian</option>
                            <option value="ES">Spanish</option>
                            <option value="SW">Swahili</option>
                            <option value="SV">Swedish </option>
                            <option value="TA">Tamil</option>
                            <option value="TT">Tatar</option>
                            <option value="TE">Telugu</option>
                            <option value="TH">Thai</option>
                            <option value="BO">Tibetan</option>
                            <option value="TO">Tonga</option>
                            <option value="TR">Turkish</option>
                            <option value="UK">Ukrainian</option>
                            <option value="UR">Urdu</option>
                            <option value="UZ">Uzbek</option>
                            <option value="VI">Vietnamese</option>
                            <option value="CY">Welsh</option>
                            <option value="XH">Xhosa</option>
                        </select>
                    </li>
                    <li>

                    </li>
                </ul>

                <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-3" style="color:white;padding-bottom:1%;padding-top:1%;background-color: #006699;font-size:40px;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
                Roma Bank
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-4">
                <br>
                <h4><a href="#" data-toggle="modal" data-target="#myModalr">Rgister acount

		<img src="https://img.icons8.com/cute-clipart/64/000000/planner.png" width="30"/></a>&nbsp;&nbsp;
		<a href="#">	Activate acount 

		<img src="https://img.icons8.com/cute-clipart/64/000000/hourglass.png" width="30"/></a>
		</h4>

            </div>
            <div class="col-sm-3">Internet banking
                <br>
                <select data-placeholder="Choose a Language..." class="browser-default custom-select" style="color: #4b4861;">
                    <option value="0">indivouls</option>
                    <option value="EN">coprates</option>
                </select>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;">Login</h4>
        </div>
        <div class="modal-body">
       <b style="color:green"> Enter your Username and Password to Sign in.</b>


         <form >
          <div class="form-group">
              <label for="email">Enter email</label>
              <input type="email" name="" class="form-control" size="10"  maxlength="25" required>
          </div>
          <div class="form-group">
              <label for="email">Enter Password</label>
              <input type="password" name="" class="form-control" maxlength="8" size="10"  required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
            </div>

        </div>

        <br />
        <div class="row">
            <div class="topnav" id="myTopnav">
                <a href="#home" class="active"><img src="https://img.icons8.com/doodle/48/000000/home--v1.png" width="40" /></a>

                <a href="#contact">Credit cards</a>
                <a href="#about">Insurance</a>
                <a href="#about">savings</a>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
           
        </div>
        <div class="row">
            <br />
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-radius:20px;">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="{{ url('/img/slide8.jpg') }}" alt="Los Angeles" style="width:100%;height:400px">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>LA is always so much fun!</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ url('/img/slide9.jpg') }}" alt="Chicago" style="width:100%;height:400px">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ url('/img/slide10.jpg') }}" alt="New York" style="width:100%;height:400px">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <br />
        <br />
        <br />
        <div class="row">
            <div class="col-sm-4">
                <b style="color:#006699;font-size:30px;font-spacing:3pxfont-weight:5px;">Welcome to Roma<br > Bank</b>
                <p>We've been offering an award-winning blend of financial products and attractive rewards to our customers since 1987.
                    <br>
                    <br> At Roma Bank, our customers are at the heart of everything we do. The products we offer are developed with our customers in mind and our colleagues are empowered and knowledgeable with a focus on delivering on our promises.
                    <br>
                    <br>
                    <b>Customer support ></b>
                </p>
            </div>
            <div class="col-sm-4">
                <div style="width:100%;hieght:20%;background-color:#006699;color:white;font-size:30px">Products and services</div>
                <div style="height: 400px;">
                    <img src="{{ url('/img/family.jpg') }}" height="40%" style="width:100%">
                    <div style="background-color:#c8c9a9;padding-top:3%;padding-left:3%;padding-right:3%;padding-bottom:2%;">
                        Whether for the home or when you're out and about, our products offer great value and a range of benefits including Nectar points. We're constantly listening to our loyal customers; sharing helpful hints and tips with our Money Matters articles and fun content for the family. So keep coming back and discover the latest news, special offers and product updates.
                    </div>
                </div>

            </div>

            <div class="col-sm-4" style="border:2px solid #006699;">
                                        <b style="color:#006699;font-size:30px;font-spacing:3pxfont-weight:5px;font-size:30px">Loans calculator</b>
                                        <hr style="width:100%;border: 0.1pt solid black;">
                                        <b style="color:#006699;font-size:30px;font-spacing:3pxfont-weight:5px;font-size:15px">How much would you like 
                                <br >to borrow ?
                                   </b>
                                        <br>

                                        <br>
                                        <input type="text" size="10">&nbsp;<small>₺1,000 - ₺25,000</small>
                                        <hr style="width:100%;border: 0.1pt solid black;">
                                        <b style="color:#006699;font-size:30px;font-spacing:3pxfont-weight:5px;font-size:15px">How much would you like 
                                Over how many months?
                                </b>
                                  <br>
                                  <br />
                                  <input type="text" size="5">
                                  <br>
                                  <b style="color:#006699;font-size:30px;font-spacing:3pxfont-weight:5px;font-size:15px"> 
                                months
                                          </b>&nbsp;<small>(12-84 months)</small>
                                    <hr style="width:100%;border: 0.1pt solid black;">
                                    <button type="button" class="btn btn-primry btn-xl">Calculate</button>
            </div>
        </div>

        <div class="row">
        <div class="col-sm-8">
                  <b style="color:#006699;font-size:30px;font-spacing:3pxfont-weight:5px;font-size:30px">Money matters<hr style="width:100%;border: 1.5pt solid #006699;"></b>
                    
        </div>
        <div class="col-sm-4"> <br /><br /><b style="font-size:25px;font-weight:bold"> More </b>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
          
              <div class="col-sm-6">

              <div style="width:100%;hieght:10%;padding-top:10px;padding-left:6px;background-color:#006699;font-weight: 900;color:white;font-size:20px">The road to fuel<br> efficiency<br /><br /></div>
              <div style="height: 400px;">
                    <img src="{{ url('/img/family.jpg') }}" height="60%" style="width:100%">
                    </div>    
               </div>
               <div class="col-sm-6">
                  <h3 style="margin-top:-4px;"><b>Papular articles</b></h3>
                      <ul class="list-group" style="background-color:#afb092;">
                        
                        <li class="list-group-item" style="background-color:#c8c9a9;border:1px solid black;">Morbi leo risus <span class="pull-right"><b>></b></span></li>
                        <li class="list-group-item" style="background-color:#c8c9a9;border:1px solid black;">Porta ac consectetur ac <span class="pull-right"><b>></b></span></li>
                        <li class="list-group-item" style="background-color:#c8c9a9;border:1px solid black;">Vestibulum at eros <span class="pull-right"><b>></b></span></li>
                      </ul>
                      
                      <table  class="table table-bordered">
                          <tr style="background-color:#afb092;" >
                              <td> travel</td>
                              <td>Family</td>
                              <td> Home</td>
                              <td> Future</td>
                              <td> Tips</td>
                          </tr>  
                      </table>
               </div>
          </div><br />
          <div class="col-sm-4">
          
  
  <div class="panel-group">
    <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#collapse1"><b>Loans</b><span class="pull pull-right"><b>+</b></span></a>
                              
                            </h4>
                          </div>
        
                            <div id="collapse1" class="panel-collapse collapse">
                              <div class="panel-body">Panel Body</div>
                              <div class="panel-footer">Panel Footer</div>
                              
                            </div>
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse2"><b>Home insurance</b><span class="pull pull-right"><b>+</b></a>
                                
                              </h4>
                            </div>
                          
                          <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">Panel 2Body</div>
                            <div class="panel-footer">Pane2l Footer</div>
                            
                          </div>
                        
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" href="#collapse3"><b>car insurance</b><span class="pull pull-right"><b>+</b></a>
                                      
                                    </h4>
                                  </div>
                          
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-body">Panel 2Body</div>
                              <div class="panel-footer">Pane2l Footer</div>
                              
                            </div>
    
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse4"><b>Travel insurance</b><span class="pull pull-right"><b>+</b></a>
                                
                              </h4>
                            </div>
     
                                  <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">Panel 2Body</div>
                                    <div class="panel-footer">Pane2l Footer</div>
                                    
                                  </div>
                                          
                                                        <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                              <a data-toggle="collapse" href="#collapse5"><b>Travel money</b><span class="pull pull-right"><b>+</b></a>
                                                        
                                                              </h4>
                                                        </div>            
                                        
                                                                  <div id="collapse5" class="panel-collapse collapse">
                                                                    <div class="panel-body">Panel 2Body</div>
                                                                    <div class="panel-footer">Pane2l Footer</div>
                                                                    
                                                                  </div>
                            </div>
                    </div>
                 </div>
              </div>
  
          </div>
          
       
    <!-- Footer -->
<footer class="page-footer font-small unique-color-white" style="background-color:#b3c9c5;font-weight:bold;">



<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h4 class="text-uppercase font-weight-bold" style="color:blue;font-weight:bold;">Company name</h4>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
        consectetur
        adipisicing elit.</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold" style="color:blue;font-weight:bold;">Products</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="#!">MDBootstrap</a>
      </p>
      <p>
        <a href="#!">MDWordPress</a>
      </p>
      <p>
        <a href="#!">BrandFlow</a>
      </p>
      <p>
        <a href="#!">Bootstrap Angular</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold" style="color:blue;font-weight:bold;">Useful links</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="#!">Your Account</a>
      </p>
      <p>
        <a href="#!">Become an Affiliate</a>
      </p>
      <p>
        <a href="#!">Shipping Rates</a>
      </p>
      <p>
        <a href="#!">Help</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold" style="color:blue;font-weight:bold;">Contact</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
      <i class="fa fa-home mr-3" style="font-size:20px;color:green;"></i> New York, NY 10012, US</p>
      <p>
      <i class="fa fa-envelope-square" style="font-size:20px;color:green;"></i> info@example.com</p>
      <p>
        <i class="fa fa-phone mr-3" style="font-size:20px;color:green;"></i> + 01 234 567 88</p>
      <p>
        <i class="fa fa-print mr-3" style="font-size:20px;color:green;"></i> + 01 234 567 89</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://www.fiverr.com/ghiasali24"> Ghias ali web developer</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
<div style="background-color: black;color:white">
  <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0">Get connected with us on social networks!</h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-7 text-center text-md-right">

        <!-- Facebook -->
        <a class="fb-ic">
          <i class="fa fa-facebook-f white-text mr-4"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fa fa-twitter white-text mr-4"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
          <i class="fa fa-google-plus-g white-text mr-4"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fa fa-linkedin-in white-text mr-4"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
          <i class="fa fa-instagram white-text"> </i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="myModalr" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title pull" style="text-align: center;">Rgistration Form</h3>
        </div>
        <div class="modal-body">


        <form action="/action_page.php" class="form-inline">
        <b style="color:green;">Enter your personal details</b><br /><br />
        
              <div class="form-group">
                     <label for="sel1">Existing account type:</label>
                    <select class="form-control" id="sel1" required>
                      <option value="0" selected>Please select</option>
                      <option>saving acount</option>
                      <option>current acount</option>
                      <option>Crediti card acount</option>
                    </select>
              </div>
              <div class="form-group">
                     <label for="sel1">Title:</label>
                    <select class="form-control" id="sel1" required="true">
                      <option value="0" selected>Please select</option>
                      <option>Mr</option>
                      <option>Mrs</option>
                      <option>Miss</option>
                      <option>Dr</option>
                      <option>Professor</option>
                      <option>Captain</option>
                    </select>
              </div>
              <div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="pwd">Forname:</label>
                <input type="text" class="form-control" id="pwd" required>
              </div><br /><br />
              <div class="form-group">
                <label for="pwd">Middlename:</label>
                <input type="text" class="form-control" id="pwd" required>
              </div>
              <div class="form-group">
                <label for="pwd">Surname:</label>
                <input type="text" class="form-control" id="pwd" required>
              </div>
              <div class="form-group">
                <label for="pwd">Date of birth:</label>
                <input type="date" class="form-control" id="pwd" required>
              </div><br /><br />
              <div class="form-group">
                <label for="pwd">Phone:</label>
                <input type="phone" class="form-control" id="pwd" required>
              </div>
              <div class="form-group">
                <label for="pwd">Email address:</label>
                <input type="email" class="form-control" id="pwd" required>
              </div>
             
              <div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="comment">Address:</label>
                <textarea class="form-control" rows="2" id="comment" required></textarea>
              </div><br /><b style="color:green;">Security questions </b><br /><br /> 
              <div class="form-group">
                <label for="pwd">1) Your home town where you born ?:</label>
                <input type="email" class="form-control" id="pwd" required>
              </div><br /> <br /> 
              <div class="form-group">
                <label for="pwd">2) Your favoriute teacher name ?:</label>
                <input type="email" class="form-control" id="pwd" required>
              </div><br />  <br /> 
  <button type="submit" class="btn btn-info pull-center">Submit</button>
</form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
<!-- 
</body>

</html>