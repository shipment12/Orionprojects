<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="boot/css/style.css">
    <link rel="stylesheet" href="boot/css/animate.min.css">

    <script src="https://kit.fontawesome.com/e6f9fcf671.js" crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
<!--NAVIGATION-->
<div id='app'>
<nav class="navbar navbar-expand-lg navbar-light  fixed-top" >

<a class="navbar-brand" href="#">Orion Concept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a data-page="home" class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a data-page="about" class="nav-link" href="#">About</a>
      </li>

      <router-link to='/advertisersignup'>
      <li class="nav-item">
        <a data-page="advertiser" class="nav-link" href="#">Advertiser</a>
      </li>
      </router-link>

    <!-- <router-link to='/publishersignup'>
      <li class="nav-item">
        <a class="nav-link" href="#">Publisher</a>
      </li>
    </router-link> -->

      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>

       <li class="nav-item">
        <a data-page="about" class="nav-link" href="#">Contact Us</a>
      </li>
<v-spacer></v-spacer>
        
       <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
      
        
     
      
  </div>
</nav>



<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/8.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/6.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/5.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!--OUR COMPANY-->


     <!-- services -->

     <div id="services" class="services" data-index="0">
         <div class="container">
             <h2>About Our Company</h2><span class="colorborder"></span><br>
             <p>At Orion Concept, we employ various channels and modern technology in <br> 
                a network environment to provide outstanding media solutions to <br> advertising
                needs and promotions.</p>
             <div class="row">
                 <div class="col-lg-3 col-md-3 wow bounceInLeft" data-wow-delay="1s"> 
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                     <h4>Real Company</h4>
                     <p>We are a real company with legal grounds to do business.</p>
                 </div>
                 <div class="col-lg-3 col-md-3 wow bounceInLeft" data-wow-delay="1.2s">
                     <i class="fa fa-coffee"></i> 
                     <h4>1 Year Experience</h4>
                     <p>Though new in the digital market, we are determined to make an outstanding impact with your surport.</p>
                     
                </div>
                 <div class="col-lg-3 col-md-3 wow bounceInLeft" data-wow-delay="1.4s">
                      <i class="fa fa-slideshare"></i>
                     <h4>Inovative Work</h4>
                     <p>At Orion Tech Resources we are inovative in our approach to business with different strategic methods.</p>
                 </div>
                 <div class="col-lg-3 col-md-3 wow bounceInLeft" data-wow-delay="1.6s">
                     <i class="fa fa-university" aria-hidden="true"></i>
                     <h4>Consultancy</h4>
                     <p>We offer consultancy services advice to our clients</p>
                 </div>
             </div>
         </div>
     </div> <br>


     
                                          <!--ADVERTISER-->

                                          <div id="advertisers" class="advertisers" data-index="1">
         <div class="container">
             <h2>Advertisers</h2><span class="colorborder"></span> <br>
             
             <div class="row">
                 <div class="col-lg-6 col-md-3"> 
                   
                    <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Zero tolerance for fraud. </p>
                     <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Promotional materials and result based strategies for high ROI.</p>
                      <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Dedicated and experienced publishers with proven result to bring about campaign success. </p>
                       <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Active account Managers to ensure quality assurance. </p>
                       <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Updated and accurate data statistics and report system. </p>
                 </div>
                 <div class="col-lg-6 col-md-3">
                    <img src="https://www.digitalconceptz.com/assets/images/free.jpg" alt="" class="img-responsive" width="400px" height="300px">
                     
                </div>
                
             </div>
         </div>
     


     <div id="team" class="team" data-index="2">
    <div class="container">
        
        <h2>Meet Our Team</h2><span class="colorborder"></span><br>
             <p>At Orion Concept, we employ various channels and modern technology in.</p>
             <div class="row">
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="2s">
                <img src="img/538321.png" class="img-circle" alt="">
                <h4>John Doe</h4>
                <b>CEO and Founder</b>
                <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
              
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-3 col-md-3  wow fadeInLeft"  data-wow-delay="1.6s">
                <img src="img/538321.png" class="img-circle" alt="">
                <h4>John Doe</h4>
                <b>CEO and Founder</b>
                <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-3 col-md-3  wow fadeInLeft"  data-wow-delay="1.2s">
                <img src="img/538321.png" class="img-circle" alt="">
                <h4>John Doe</h4>
                <b>CEO and Founder</b>
                <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-3 col-md-3  wow fadeInLeft" 0.8>
                <img src="img/538321.png" class="img-circle" alt="">
                <h4>John Doe</h4>
                <b>CEO and Founder</b>
                <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
 
<!--- End Team ---->


<!--- Contact ------>

<div id="contact" class="contact" data-index="3">
    <div class="container">
        @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <ul>
          @foreach($errors->all() as $error)
          <li> {{$error}}</li>
          @endforeach
          </ul>
          </div>
        @endif

        @if($message = Session::get('success'))

        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Thanks!</strong> For contacting us
        </div>
        @endif
            <form method = "post" action="{{url('/')}}">
            {{csrf_field()}}
        
            <h2 class="wow fadeInUp">Contact</h2><span class="colorborder"></span>
            <p class="wow fadeInUp" data-wow-delay="0.4">send us a message to walk you through</p>
            <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" name="name" class="form-control" aria-describedby="sizing-addon1" placeholder="Full Name">
                </div>
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input type="text" name="email" class="form-control" aria-describedby="sizing-addon1" placeholder="Email Address">
                </div>
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <input type="text" name="phone" class="form-control" aria-describedby="sizing-addon1" placeholder="Phone Number">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="input-group wow fadeInUp" data-wow-delay="2s">
                    <textarea name="message" id="" cols="80" rows="6" class="form-control"></textarea>
                </div>
                <button class="btn btn-lg wow fadeInUp" data-wow-delay="2.4s">Submit Your Message</button>
            </div>
        </div>
        </form>
    </div>
</div>
 
 <!---- End Contact ----->
 





  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Useful Links</h6>
            <ul class="footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Advertiser</a></li>
              <li><a href="#">Publisher</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
             
             
              <li><a href="#">Terms and Conditions</a></li>
              <li><a href="#">Refund Policy</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Support</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Orion concepts</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

</div>

  


 
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="boot/js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="boot/js/bootstrap.min.js"></script>
<script src="boot/js/orion.js"></script>
     
 </body>

 
 