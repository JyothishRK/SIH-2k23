<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PARAKH</title>
  <link rel="stylesheet" href="views/css/bootstrap.min.css" />
  <link rel="stylesheet" href="views/css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="views/css/main.css">
  <link rel="stylesheet" href="views/css/font.css">
  <script src="views/js/jquery.js" type="text/javascript"></script>

  <script src="views/js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value;
      var letters = /^[A-Za-z]+$/;
      if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
      }
      var z = document.forms["form"]["college"].value;
      if (z == null || z == "") {
        alert("college must be filled out.");
        return false;
      }
      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address.");
        return false;
      }
      var a = document.forms["form"]["password"].value;
      if (a == null || a == "") {
        alert("Password must be filled out");
        return false;
      }
      if (a.length < 5 || a.length > 25) {
        alert("Passwords must be 5 to 25 characters long.");
        return false;
      }
      var b = document.forms["form"]["cpassword"].value;
      if (a != b) {
        alert("Passwords must match.");
        return false;
      }
    }
  </script>



  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Global Styles */
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f6f6f6;
    }

    body .modal {
      text-align: center;
    }

    @media screen and (min-width: 768px) {
      .modal:before {
        display: inline-block;
        vertical-align: middle;
        content: " ";
        height: 100%;
      }
    }

    .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }

    /* Typography */
    h2 {
      font-size: 36px;
      text-transform: uppercase;
      color: #1E3A8A;
      font-weight: 600;
      margin-bottom: 30px;
    }

    h4 {
      font-size: 24px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
    }

    /* Float Elements */
    .left {
      float: left;
    }

    .right {
      float: right;
    }

    .clear {
      clear: both;
    }

    /* Jumbotron */
    .jumbotron {
      background-color: #1E3A8A;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    }

    /* Container */
    .container-fluid {
      padding: 60px 50px;
    }

    /* Logo Styles */
    .logo-small {
      color: #f4511e;
      font-size: 50px;
    }

    .logo {
      color: #f4511e;
      font-size: 200px;
    }

    /* Thumbnail Styles */
    .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
    }

    .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
    }

    /* Carousel Styles */
    .carousel-control.right,
    .carousel-control.left {
      background-image: none;
      color: #f4511e;
    }

    .carousel-indicators li {
      border-color: #f4511e;
    }

    .carousel-indicators li.active {
      background-color: #f4511e;
    }

    /* Item Styles */
    .item h4 {
      font-size: 24px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
    }

    .item span {
      font-style: normal;
    }

    /* Panel Styles */
    .panel {
      border: none;
      border-radius: 10px;
      transition: box-shadow 0.5s;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    }

    .panel:hover {
      box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.5);
    }

    .panel-footer .btn:hover {
      border: none;
      background-color: #fff !important;
      color: #1E3A8A;
    }

    .panel-heading {
      color: #fff !important;
      background-color: #1E3A8A !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-radius: 10px 10px 0px 0px;
    }

    .panel-footer {
      background-color: #1E3A8A !important;
      border-radius: 0px 0px 10px 10px;
    }

    .panel-footer h3 {
      font-size: 32px;
      color: #fff;
    }

    .panel-footer h4 {
      color: #aaa;
      font-size: 18px;
      margin-top: 30px;
    }

    .panel-footer .btn {
      margin: 15px 0;
      background-color: #fff;
      color: #1E3A8A;
      border-radius: 20px;
      padding: 10px 20px;
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
      transition: all 0.5s;
    }

    .panel-footer .btn:hover {
      background-color: #1E3A8A;
      color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    /* Navbar Styles */
    .navbar {
      margin-bottom: 0;
      background-color: #4D648D;
      z-index: 9999;
      border: 0;
      font-size: 16px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 2px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .navbar li a,
    .navbar .navbar-brand {
      color: #f4511e !important;
      text-transform: uppercase;
      letter-spacing: 2px;
      /* background-color: #fff !important;
      border-radius: 20px;
      padding: 10px 20px; */
    }

    .navbar-nav li a:hover,
    .navbar-nav li.active a {
      color: #1E3A8A !important;
      background-color: #fff !important;
      border-radius: 20px;
      padding: 10px 20px;
      font-weight: bold;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
    }

    /* Footer Glyphicons */
    footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
    }

    /* Animation Styles */
    .slideanim {
      visibility: hidden;
    }

    .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
    }

    @keyframes slide {
      0% {
        opacity: 0;
        transform: translateY(70%);
      }

      100% {
        opacity: 1;
        transform: translateY(0%);
      }
    }

    @-webkit-keyframes slide {
      0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
      }
    }

    /* Responsive Styles */
    @media screen and (max-width: 768px) {
      .col-sm-4 {
        text-align: center;
        margin: 25px 0;
      }

      .btn-lg {
        width: 100%;
        margin-bottom: 35px;
      }
    }

    @media screen and (max-width: 480px) {
      .logo {
        font-size: 150px;
      }
    }
  </style>


</head>





<body>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-home"></span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target="#login">ADMIN</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal">SIGN IN</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal1">SIGN UP</a></li>
            <li><a href="#" data-toggle="modal" data-target="#login2">TEACHER</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#developers">DEVELOPERS</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <h1>PARAKH</h1>
      <p>e-EXAMINATION</p>
      <!--  form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form -->
    </div>



    <!-- Container (Admin Section) -->
    <div class="modal fade" id="login">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title"><span style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>LOGIN -ADMIN</b></span></h4>
          </div>
          <div class="modal-body title1">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <form role="form" method="post" action="models/head.php?q=index.php">
                  <div class="form-group">
                    <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" />
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
                  </div>
                  <div class="form-group" align="center">
                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
          <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <!----Teacher signin--->
    <div class="modal fade" id="login2">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title"><span style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>LOGIN -TEACHER</b></span></h4>
          </div>
          <div class="modal-body title1">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <form role="form" method="post" action="models/admin.php?q=index.php">
                  <div class="form-group">
                    <input type="text" name="uname" maxlength="20" placeholder="Teacher user id" class="form-control" />
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
                  </div>
                  <div class="form-group" align="center">
                    <input type="submit" name="login2" value="Login" class="btn btn-primary" />
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
          <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <div class="container-fluid bg-grey">
      <div class="row">
        <div class="col-sm-4">
          <img src="views/img/logo.png" alt="Your New Logo" class="logo slideanim" />

          <!-- <span class="glyphicon glyphicon-globe logo slideanim"></span> -->
        </div>
        <div class="col-sm-8">
          <h2>Pillars of Integrity</h2><br>
          <h4><strong>MISSION:</strong> At PARAKH, our mission is to revolutionize education through the integration of cutting-edge Artificial Intelligence technology. We are dedicated to enhancing the learning experience for engineering students across India, by providing a dynamic and adaptive online assessment platform that continuously evolves to meet individual needs and abilities. Our mission is to empower students to excel academically and develop critical thinking skills through personalized, AI-driven multiple-choice question assessments. </h4><br>
          <h4><strong>VISION:</strong> Our vision is to transform the landscape of technical education in India by leveraging the power of AI. We envision a future where every engineering student has access to a tailored learning experience that adapts to their unique strengths and weaknesses. Through our innovative AI-driven platform, we aim to set new standards in online assessments, making education more engaging, effective, and accessible. We strive to be at the forefront of educational technology, shaping the future of learning for the betterment of students and institutions alike. </h4>
        </div>
      </div>
    </div>



    <!-- Container (USERS section) -->
    <!--sign in modal start-->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content title1">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title title1"><span style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>LOGIN -USER</b></span></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="models/login.php?q=index.php" method="POST">
              <fieldset>


                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email"></label>
                  <div class="col-md-6">
                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

                  </div>
                </div>


                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="password"></label>
                  <div class="col-md-6">
                    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

                  </div>
                </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Log in</button>
            </fieldset>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--sign in modal closed-->

    <!--sign up modal start-->
    <div class="modal fade" id="myModal1">
      <div class="modal-dialog">
        <div class="modal-content title1">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title title1"><span style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>SIGN UP</b></span></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" name="form" action="models/sign.php?q=views/account.php" onSubmit="return validateForm()" method="POST">
              <fieldset>


                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name"></label>
                  <div class="col-md-6">
                    <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="gender"></label>
                  <div class="col-md-6">
                    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md">
                      <option value="Male">Select Gender</option>
                      <option value="M">Male</option>
                      <option value="F">Female</option>
                    </select>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name"></label>
                  <div class="col-md-6">
                    <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">

                  </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-3 control-label title1" for="email"></label>
                  <div class="col-md-6">
                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="mob"></label>
                  <div class="col-md-6">
                    <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">

                  </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="password"></label>
                  <div class="col-md-6">
                    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">

                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="cpassword"></label>
                  <div class="col-md-6">
                    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">

                  </div>
                </div>
                <?php if (@$_GET['q7']) {
                  echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
                } ?>
                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for=""></label>
                  <div class="col-md-6">
                    <input type="submit" style="background: #f4511e;" class="sub" value="sign up" />
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--sign up modal closed-->








    <!-- Container (Services Section) -->
    <div id="services" class="container-fluid text-center">
      <h2>SERVICES</h2>
      <h4>What We Offer</h4>
      <br>
      <div class="row slideanim">
        <div class="col-sm-4">
          <!-- span class="glyphicon glyphicon-off logo-small"></span-->
          <i class="material-icons" style="font-size:60px;color:red">group_add</i>
          <h4>e Examination</h4>
          <p> One platform, Multiple users!</p>
        </div>
        <div class="col-sm-4">
          <span class="logo-small">&#8377;</span>
          <h4>COST OPTIMISATION</h4>
          <p>Reduces Paper Work</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-user logo-small"></span>
          <h4>USER SATISFACTION</h4>
          <p>User Satisfaction is our Satisfaction!</p>
        </div>
      </div>
      <br><br>
      <div class="row slideanim">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-leaf logo-small"></span>
          <h4>GREEN</h4>
          <p>Eco-Friendly</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-certificate logo-small"></span>
          <h4>CERTIFIED</h4>
          <p>Certified from the GOI(AICTE)</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-envelope logo-small"></span>
          <h4 style="color:#303030;">CONTACT US</h4>
          <p>Fell free to reach out to us!</p>
        </div>
      </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div id="developers" class="container-fluid text-center bg-grey">
      <h2>Developers</h2><br>
      <h4>Who We Are</h4>
      <div class="row text-center slideanim">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="photo.jpg" alt="APOORV" width="400" height="300">
            <p><strong>APOORV D</strong></p>
            <p>CSE Junior @ VIT</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="profilepic.jpg" alt="MANASHWINI" width="400" height="300">
            <p><strong>MANASHWINI R</strong></p>
            <p>ECE Junior @ VIT</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="profilepic.jpg" alt="ANISH" width="400" height="300">
            <p><strong>ANISH V</strong></p>
            <p>CSE AI ROBOTICS Junior @ VIT</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="profilepic.jpg" alt="ROSHAN" width="400" height="300">
            <p><strong>ROSHAN T</strong></p>
            <p>CS AI ROBOTICS Junior @ VIT</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="profilepic.jpg" alt="NANDANA" width="400" height="300">
            <p><strong>NANDANA V</strong></p>
            <p>CSE Junior @ VIT</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="profilepic.jpg" alt="JYOTHISH" width="400" height="300">
            <p><strong>JYOTHISH R K</strong></p>
            <p>CSE Junior @ VIT</p>
          </div>
        </div>

      </div><br>

      <h2>What our Users say</h2>
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h4>"Very good iniative. I am so happy with the results!"<br><span>Michael Roe, Vice President, Arena Inc</span></h4>
          </div>
          <div class="item">
            <h4>"One word... WOW!!"<br><span>John Doe, CHO, AIR Inc</span></h4>
          </div>
          <div class="item">
            <h4>"The AI feedback helps me study better."<br><span>Chandler, HOD, FRIENDS University</span></h4>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- Container (About Section) -->
    <div id="about" class="container-fluid">
      <div class="row">
        <div class="col-sm-8">
          <h2>ABOUT US</h2><br>
          <h4>Our Journey</h4><br>
          <p>Welcome to PARAKH, a pioneering force in the realm of educational technology and adaptive learning. Our journey began with a clear vision: to revolutionize education through the integration of Artificial Intelligence. We recognized the need for a more dynamic and personalized approach to learning, particularly in the context of engineering education in India.
            Our story is intertwined with the mission of the All India Council for Technical Education (AICTE) to enhance the skills of engineering students across the country. As part of this mission, we embarked on a quest to create an innovative solution that would not only assess but also improve students' abilities. We believe that education should not be one-size-fits-all, and every learner deserves a tailored experience.
            Our dedication to this cause led us to develop a web-based adaptive multiple-choice question (MCQ) testing system, unlike any other. This system leverages the power of AI to deliver MCQ assessments over the internet, adapting the questions based on each user's performance and abilities. We understand that a student's knowledge is diverse and dynamic, and our platform reflects this reality.
            At the heart of our platform lies an adaptive algorithm that analyzes user responses, time spent on questions, and the level of difficulty. It even considers how many times questions have been asked in the past. This wealth of data allows us to gauge a student's knowledge level and proficiency in specific areas, enabling us to select the most appropriate questions for them.
            We are proud to integrate AI-based question generation into our portal, ensuring that every question is purposeful and relevant. With PARAKH, random questions are a thing of the past, and overall performance sees a significant boost.
            Our journey is fueled by a commitment to excellence and a passion for education. We envision a future where every engineering student can unlock their full potential through personalized, AI-driven assessments. Join us on this exciting journey as we continue to shape the future of learning in India and beyond.</p>
          <br><br>
          <h4>Our Vision</h4><br>
          <p>At PARAKH, our vision extends far beyond the present. We are driven by a profound belief in the transformative power of education and technology. Our vision paints a picture of a future where learning is not a static process but a dynamic, personalized journey.
            In this future, engineering students across India will experience education like never before. They will have access to a platform that understands them, adapts to their unique strengths and weaknesses, and empowers them to excel academically. This platform will not only assess their knowledge but also foster critical thinking skills, nurturing well-rounded professionals.
            Our vision is to set new standards in online assessments, making education engaging, effective, and accessible to all. We aim to be at the forefront of educational technology, constantly innovating to meet the evolving needs of students and institutions alike.
            PARAKH is more than a technology platform; it's a catalyst for change. We aspire to be the driving force behind a paradigm shift in technical education in India. We envision a future where education is not confined by geographical boundaries, and every student can tap into their full potential.
            As we work tirelessly towards this vision, we invite you to join us on this remarkable journey. Together, we can shape a future where education is not just a means to an end but a transformative experience that enriches lives and builds a brighter tomorrow. At PARAKH, the future of learning is within reach, and we're excited to explore it with you.</p>
          <br>
          <button class="btn btn-default btn-lg">
            <a href="#contact">Get in Touch</a>
          </button>
        </div>
        <div class="col-sm-4">
          <img src="views/img/about.webp" alt="Your New Logo" class="logo slideanim" />
          <!-- <span class="glyphicon glyphicon-signal logo"></span> -->
        </div>
      </div>
    </div>


    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
      <h2 class="text-center">ENGAGE</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Chennai, INDIA</p>
          <!-- <p><span class="glyphicon glyphicon-phone"></span> +91  </p> -->
          <p><span class="glyphicon glyphicon-envelope"></span> parakh@gmail.com</p>
        </div>
        <div class="col-sm-7 slideanim">







          <?php if (@$_GET['q']) echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;' . @$_GET['q'] . '</span>';
          else {
            echo '
      <form role="form"  method="post" action="feed.php?q=index.php">





      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="subject" placeholder="Subject" type="text" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="feedback" placeholder="Comment" rows="4"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" name="submit" input type="submit">Send</button>
        </div>
      </form>';
          } ?>
        </div>
      </div>
    </div>
    </div>


    <!-- Add Google Maps -->
    <div id="googleMap" style="height:400px;width:100%;"></div>
    <script>
      function myMap() {
        var myCenter = new google.maps.LatLng(12.840839737429542, 80.15338538045556);
        var mapProp = {
          center: myCenter,
          zoom: 12,
          scrollwheel: false,
          draggable: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        var marker = new google.maps.Marker({
          position: myCenter
        });
        marker.setMap(map);
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFj4gNzJYXg7z8mlzs0fHLKvi1MAZYI3c&callback=myMap"></script>
    <!--To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp -->

    <footer class="container-fluid text-center">
      <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
      <p>Thank you for visiting us!</p>
    </footer>

    <script>
      $(document).ready(function() {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function() {

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });

        $(window).scroll(function() {
          $(".slideanim").each(function() {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
          });
        });
      })
    </script>

  </body>


</html>