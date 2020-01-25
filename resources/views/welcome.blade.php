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

<a class="navbar-brand" href="#"><img class="img-circle elevation-3" src="img/orion_tech.png" style="size:2px;" alt="">Orion Tech Resources</a>
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
            <form method = "post" action="{{url('welcome')}}">
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
            <p class="text-justify"><i>Orion Tech Resources </i> is an initiative  to help digital marketers find the right market to invest their resources canfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
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
             
             
              <li> <a href="#" data-toggle="modal" data-target="#myModal">terms and conditions</a></li>
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



<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
      ADVERTISER
<h4 style="color:blue;">Terms & Conditions</h4>
<p  style="color:brown;">This Affiliate Program Operating Agreement (the "Agreement") is made and entered into by and between Orion Tech Resources ("Orion Tech Resources " or "we"), and you, ("you" or "Affiliate") the party submitting an application to become Orion Tech Resources affiliate). The terms and conditions contained in this Agreement apply to your participation with <a  href="https://oriontech-dash.vene.io/">oriontech-dash.vene.io</a> ("Affiliate Program"). Each Affiliate Program offer (an "Offer") may be for any offering by Orion Tech Resources or a third party (each such third party a "Client") and may link to a specific web site for that particular Offer ("Program Web Site"). Furthermore, each Offer may have additional terms and conditions on pages within the Affiliate Program and are incorporated as part of this Agreement. By submitting an application or participating in an Offer, you expressly consent to all the terms and conditions of this Agreement.</p>
<br> 1.     Sign up as an Affiliate
You must submit an Affiliate Program application from our website. You must accurately complete the application to become an affiliate (and provide us with future updates) and not use any aliases or other means to mask your true identity or contact information. After we review your application, we will notify you of your acceptance or rejection to the Affiliate Program, generally within two(2) business days. We may accept or reject your application at our sole discretion for any reason. <br>
<br> 2.     Obligations of both Parties
Subject to our acceptance of you as an affiliate and your continued compliance with the terms and conditions of this Agreement, Orion Tech Resources agrees as follows: <br>
   <br> I.   We will make available to you via the Affiliate Program graphic and textual links to the Program Web Site and/or other creative materials (collectively, the "Links") which you may display on web sites owned or controlled by you, in emails sent by you and clearly identified as coming from you and in online advertisements (collectively, "Media"). The Links will serve to identify you as a member of our Affiliate Program and will establish a link from your Media to the Program Web Site. <br>
    <br> II.   We will pay Affiliate for each Qualified Action (the "Commission"). A "Qualified Action" means an individual person who (i) accesses the Program Web Site via the Link, where the Link is the last link to the Program Web Site, (ii) is not a computer generated user, such as a robot, spider, computer script or other automated, artificial or fraudulent method to appear like an individual, real live person, (iii) is not using pre-populated fields (iv) completes all of the information required for such action within the time period allowed by Orion Tech Resources and (v) is not later determined by Orion Tech Resources to be fraudulent, incomplete, unqualified or a duplicate. <br>
  <br> III.   We will pay you any Commissions earned monthly, provided that your account is currently greater than $50. Accounts with a balance of less than $50 will roll over to the next month, and will continue to roll over monthly until $50 is reached. We reserve the right to charge back to your account any previously paid Qualified Actions that are later determined to have not met the requirements to be a Qualified Action. <br>
 <br> IV.   Payment for Commissions is dependent upon Clients providing such funds to Orion Tech Resources, and therefore, you agree that Orion Tech Resources shall only be liable to you for Commissions to the extent that Orion Tech Resources has received such funds from the Clients. You hereby release Orion Tech Resources from any claim for Commissions if Orion Tech Resources has not received such funds from the Clients. <br>
  <br>V.   Orion Tech Resources shall automatically generate an invoice on behalf of Affiliate for all Commissions payable under this Agreement and shall remit payment to Affiliate based upon that invoice. All tracking of Links and determinations of Qualified Actions and Commissions shall be made by Orion Tech Resources in its sole discretion. In the event that Affiliate disputes in good faith any portion of an invoice, Affiliate must submit that dispute to Orion Tech Resources in writing and in sufficient detail within thirty (30) days of the date on the invoice. If Affiliate does not dispute the invoice as set forth herein, then Affiliate agrees that it irrevocably waives any claims based upon that invoice. In the event that Affiliate is also tracking Qualified Actions and Affiliate claims a discrepancy, Affiliate must provide Orion Tech Resources with Affiliate's reports within three (3) days after 30th day of the calendar month, and if Orion Tech Resources and Affiliate's reported statistics vary by more than 10% and Orion Tech Resources reasonably determines that Affiliate has used generally accepted industry methods to track Qualified Actions, then Orion Tech Resources and Affiliate agree to make a good faith effort to arrive at a reconciliation. If the parties are unable to arrive at a reconciliation, then Orion Tech Resources numbers shall govern. <br>
 <br> VI.   If Affiliate has an outstanding balance due to Orion Tech Resources under this Agreement or any other agreement between the Affiliate and Orion Tech Resources, whether or not related to the Affiliate Program, Affiliate agrees that Orion Tech Resources may offset any such amounts due to Orion Tech Resources from amounts payable to Affiliate under this Agreement. <br>
<br> <h4 style="color:blue;"><b>Affiliate also agrees to:</b></h4> <br>
<br> I.   Have sole responsibility for the development, operation, and maintenance of, and all content on or linked to, your Media. <br>
<br> II.   Ensure that all materials posted on your Media or otherwise used in connection with the Affiliate Program <br>
           <c> (i) are not illegal, <br>
            (ii) do not infringe upon the intellectual property or personal rights of any third party and <br>
            <br>(iii) do not contain or link to any material which is harmful, threatening, defamatory, obscene, sexually explicit, harassing, promotes violence, promotes discrimination (whether based on sex, religion, race, ethnicity, nationality, disability or age), promotes illegal activities (such as gambling), contains profanity or otherwise contains materials that Orion Tech Resources informs you that it considers objectionable (collectively, "Objectionable Content"). <br>
<br> III.   Not make any representations, warranties or other statements concerning Orion Tech Resources or Client or any of their respective products or services, except as expressly authorized herein. <br>
IV. Make sure that your Media does not copy or resemble the look and feel of the Program Web Site or create the impression that your Media is endorsed by Orion Tech Resources or Clients or a part of the Program Web Site, without prior written permission from us. <br>
V.   Comply with all (i) obligations, requirements and restrictions under this Agreement and (ii) laws, rules and regulations as they relate to your business, your Media or your use of the Links. <br>
VI. Comply with the terms, conditions, guidelines and policies of any third party services used by Affiliate in connection with the Affiliate Program, including but not limited to, email providers, social networking services and ad networks. <br>
VII. Always prominently post and make available to end-users, including prior to the collection of any personally identifiable information, a privacy policy in compliance with all applicable laws that clearly and thoroughly discloses all information collection, use and sharing practices, including providing for the collection of such personally identifiable information in connection with the Affiliate Program and the provision of such personally identifiable information to Orion Tech Resources and Clients for use as intended by Orion Tech Resources and Clients. <br>
VIII.     Always prominently post and make available to end-users any terms and conditions in connection with the Offer set forth by Orion Tech Resources or Client, or as required by applicable laws regarding such Offers. <br>
IX. Make sure to not place Orion Tech Resources ads on any online auction platform (i.e. eBay, Amazon, Taobao, etc). <br>
<h4 style="color:blue;">The following additional program-specific terms shall apply to any promotional programs set forth below:</h4> <br>
<br> I.     Email Campaigns. For all email campaigns, Affiliate must download the "Suppression List" from the Offers section of Orion Tech Resources. Affiliate shall filter its email list by removing any entries appearing on the Suppression List and will only send emails to the remaining addresses on its email list. Orion Tech Resources will provide an opt-out method in all Links, however, if any opt-out requests come directly to Affiliate, Affiliate shall immediately forward them to Orion Tech Resources at admin@oriontechresources.com. Affiliate's emails containing the Links may not include any content other than the Links, except as required by applicable law. <br>
<br> A.     Affiliate agrees that failure to download the Suppression List and remove all emails from the database before mailing may result in Commission withholdings, removal or suspension from all or part of the Affiliate Program, possible legal action and any other rights or remedies available to Orion Tech Resources pursuant to this Agreement or otherwise. Affiliate further agrees that it will not mail or market to any suppression files generated through the Orion Tech Resources network, and that doing so may result in Commission withholdings, removal or suspension from the Affiliate Program, possible legal action and any other rights or remedies available to Orion Tech Resources pursuant to this Agreement or otherwise. <br>
<br> II.   Advertising Campaigns. No Links can appear to be associated with or be positioned on chat rooms or bulletin boards unless otherwise agreed by Orion Tech Resources in writing. Any pop-ups/unders used for the Affiliate Program shall be clearly identified as Affiliate served in the title bar of the window and any client-side ad serving software used by Affiliate shall only have been installed on an end-user's computer if the function of the software is clearly disclosed to end-users prior to installation, the installation is pursuant to an affirmatively accepted and plain-english end user license agreement and the software be easily removed according to generally accepted methods. <br>
<br> III.   Affiliate Network Campaigns. For all Affiliate's that maintain their own affiliate networks, Affiliate agrees to place the Links in its affiliate network (the "Network") for access and use by those affiliates in Affiliate's Network (each a "Third Party Affiliate"). Affiliate agrees that it will expressly forbid any Third Party Affiliate to modify the Links in any way. Affiliate agrees to maintain its Network according to the highest industry standards. Affiliate shall not permit any party to be a Third Party Affiliate whose web site or business model involves content containing Objectionable Content. All Third Party Affiliates must be in good standing with Affiliate. Affiliate must require and confirm that all Third Party Affiliates affirmatively accept, through verifiable means, this Agreement prior to obtaining access to the Links. Affiliate shall promptly terminate any Third Party Affiliate who takes, or could reasonably be expected to take, any action that violates the terms and conditions of this Agreement. In the event that either party suspects any wrongdoing by a Third Party Affiliate with respect to the Links, Affiliate shall promptly disclose to Orion Tech Resources the identity and contact information for such Third Party Affiliate. Affiliate shall promptly remove any Third Party Affiliate from the Affiliate Program and terminate their access to future Offers of Orion Tech Resources in the Network upon written notice from Orion Tech Resources. Unless Orion Tech Resources has been provided with all truthful and complete contact information for a Third Party Affiliate and such Third Party Affiliate has affirmatively accepted this Agreement as recorded by Orion Tech Resources, Affiliate shall remain liable for all acts or omissions of any Third Party Affiliate. <br> <br>
3.     Consensus of Confidentiality Except as otherwise provided in this Agreement or with the consent of Orion Tech Resources, you agree that all information, including, without limitation, the terms of this Agreement, business and financial information, customer and vendor lists, and pricing and sales information, concerning us or any of our affiliates provided by or on behalf of any of them shall remain strictly confidential and secret and shall not be utilized, directly or indirectly, by you for any purpose other than your participation in the Affiliate Program, except and solely to the extent that any such information is generally known or available to the public through a source other than you. Affiliate shall not use any information obtained from the Affiliate Program to develop, enhance or operate a service that competes with the Affiliate Program, or assist another party to do the same. <br>
4.    Limited License & Intellectual Property We grant you a nonexclusive, nontransferable, revocable right to use the Links and to access our web site through the Links solely in accordance with the terms of this Agreement, for the sole purpose of identifying your Media as a participant in the Affiliate Program and assisting in increasing sales through the Program Web Site.
You may not alter, modify, manipulate or create derivative works of the Links or any Orion Tech Resources graphics, creative, copy or other materials owned by, or licensed to, Orion Tech Resources in any way. You are only entitled to use the Links to the extent that you are a member in good standing of the Affiliate Program. We may revoke your license anytime by giving you written notice. Except as expressly stated herein, nothing in this Agreement is intended to grant you any rights to any of Orion Tech Resources’s trademarks, service marks, copyrights, patents or trade secrets. You agree that Orion Tech Resources may use any suggestion, comment or recommendation you choose to provide to Orion Tech Resourceswithout compensation. All rights not expressly granted in this Agreement are reserved by Orion Tech Resources. <br>
5.     Termination
This Agreement shall commence on the date of our approval of your Affiliate Program application and shall continue thereafter until terminated as provided herein. You may terminate your participation in the Affiliate Program at any time by removing all Links from your Media, deleting all copies of the Links. We may terminate your participation in one or more Offers or this Agreement at any time and for any reason which we deem appropriate with or without prior notice to you by disabling the Links or providing you with a written notice. Upon termination of your participation in one or more Offers or this Agreement for any reason, you will immediately cease all use of and delete all Links, plus all Orion Tech Resources or Client intellectual property, and will cease representing yourself as aOrion Tech Resources or Client affiliate for such one or more Offers. All rights to validly accrued payments, causes of action and any provisions, which by their terms are intended to survive termination, shall survive any termination.
6.     Amendments
In addition to any other rights and remedies available to us under this Agreement Orion Tech Resources reserves the right to delete any actions submitted through your Links and withhold and freeze any unpaid Commissions or charge back paid Commissions to your account if (i) Orion Tech Resources determines that you have violated this Agreement, (ii) Orion Tech Resources receives any complaints about your participation in the Affiliate Program which Orion Tech Resources reasonably believes to violate this Agreement or (iii) any Qualified Action is later determined to have not met the requirements set forth in this Agreement or on the Affiliate Program. Such withholding or freezing of Commissions, or charge backs for paid Commissions, shall be without regard as to whether or not such Commissions were earned as a result of such breach. In the event of a material breach of this Agreement, Orion Tech Resources reserves the right to disclose your identity and contact information to appropriate law enforcement or regulatory authorities or any third party that has been directly damaged by your actions.
7.     Counter-Spam Policy
You must strictly comply with the federal CAN-SPAM Act of 2003 (the "Act"). All emails sent in connection with the Affiliate Program must include the appropriate party's opt-out link. From time to time, we may request - prior to your sending emails containing linking or referencing the Affiliate Program that you submit the final version of your email to Orion Tech Resources for approval by sending it to your Orion Tech Resources representative and upon receiving written approval from Orion Tech Resources of your email the email may be transmitted to third parties.
It is solely your obligation to ensure that the email complies with the Act. You agree not to rely upon Orion Tech Resources’s approval of your email for compliance with the Act, or assert any claim that you are in compliance with the Act based upon Orion Tech Resources’s approval.
8.     About Fraud
You are expressly prohibited from using any persons, means, devices or arrangements to commit fraud, violate any applicable law, interfere with other affiliates or falsify information in connection with referrals through the Links or the generation of Commissions or exceed your permitted access to the Affiliate Program. Such acts include, but are in no way limited to, using automated means to increase the number of clicks through the Links or completion of any required information, using spyware, using stealware, cookie-stuffing and other deceptive acts or click-fraud. Orion Tech Resources shall make all determinations about fraudulent activity in its sole discretion.
9.     Representations and Warranties
You hereby represent and warrant that this Agreement constitutes your legal, valid, and binding obligation, enforceable against you in accordance with its terms and that you have the authority to enter into this Agreement. Subject to the other terms and conditions of this Agreement, Orion Tech Resources represents and warrants that it shall not knowingly violate any law, rule or regulation which is applicable to Orion Tech Resources’s own business operations or Orion Tech Resources’s proprietary products or services.
10. Modifications
In addition to any notice permitted to be given under this Agreement, we may modify any of the terms and conditions of this Agreement at any time by providing you with a notification by email. The changes will become effective ten (10) business days after such notice. If the modifications are unacceptable to you, you may terminate this Agreement without penalty solely on the account of such termination within such ten (10) business day period. Your continued participation in this Affiliate Program ten (10) business days after a change notice has been posted will constitute your acceptance of such change. In addition, Orion Tech Resources may change, suspend or discontinue any aspect of an Offer or Link or remove, alter, or modify any tags, text, graphic or banner ad in connection with a Link. Affiliate agrees to promptly implement any request from Orion Tech Resources to remove, alter or modify any Link, graphic or banner ad that is being used by Affiliate as part of the Affiliate Program.
11. Independent Investigation
You acknowledge that you have read this Agreement and agree to all its terms and conditions. You have independently evaluated the desirability of participating in the Affiliate Program and each Offer and are not relying on any representation, guarantee or statement other than as set forth in this Agreement or on the Affiliate Program.
12. Mutual Indemnification
Affiliate hereby agrees to indemnify, defend and hold harmless Orion Tech Resources and Clients and their respective subsidiaries, affiliates, partners and licensors, directors, officers, employees, owners and agents against any and all claims, actions, demands, liabilities, losses, damages, judgments, settlements, costs, and expenses (including reasonable attorneys' fees and costs) based on (i) any failure or breach of this Agreement, including any representation, warranty, covenant, restriction or obligation made by Affiliate herein, (ii) any misuse by Affiliate, or by a party under the reasonable control of Affiliate or obtaining access through Affiliate, of the Links, Offers or Orion Tech Resources or Client intellectual property, or (iii) any claim related to your Media, including but not limited to, the content contained on such Media (except for the Links).
Orion Tech Resources hereby agrees to indemnify, defend and hold harmless Affiliate and its subsidiaries, affiliates, partners, and their respective directors, officers, employees, owners and agents against any and all claims, actions, demands, liabilities, losses, damages, judgments, settlements, costs, and expenses (including reasonable attorneys' fees and costs) based on a claim that Orion Tech Resources is not authorized to provide you with the Links.
<br> 13. Disclaimers <br>
<h5 style="color:brown;">THE AFFILIATE PROGRAM AND LINKS, AND THE PRODUCTS AND SERVICES PROVIDED IN CONNECTION THEREWITH, ARE PROVIDED TO AFFILIATE "AS IS". EXCEPT AS EXPRESSLY SET FORTH HEREIN, ORION TECH RESOURCES EXPRESSLY DISCLAIMS ALL WARRANTIES, EXPRESS, IMPLIED OR STATUTORY, INCLUDING BUT NOT LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NONINFRINGEMENT, AND ANY WARRANTIES ARISING OUT OF COURSE OF DEALING, USAGE, OR TRADE. ORION TECH RESOURCES DOES NOT WARRANT THAT THE AFFILIATE PROGRAM OR LINKS WILL MEET AFFILIATE'S SPECIFIC REQUIREMENTS OR THAT THE OPERATION OF THE AFFILIATE PROGRAM OR LINKS WILL BE COMPLETELY ERROR- FREE OR UNINTERRUPTED. ORION TECH RESOURCES EXPRESSLY DISCLAIMS ANY LIABILITY FOR ANY ACT OR OMISSION OF A CLIENT OR THEIR PRODUCTS OR SERVICES. ORION TECH RESOURCES DOES NOT GUARANTEE THAT AFFILIATE WILL EARN ANY SPECIFIC AMOUNT OF COMMISSIONS.</h5>
14. Limitation of Liability
IN NO EVENT SHALL ORION TECH RESOURCES BE LIABLE FOR ANY UNAVAILABILITY OR INOPERABILITY OF THE LINKS, PROGRAM WEB SITES, TECHNICAL MALFUNCTION, COMPUTER ERROR, CORRUPTION OR LOSS OF INFORMATION, OR OTHER INJURY, DAMAGE OR DISRUPTION OF ANY KIND BEYOND THE REASONABLE CONTROL OF ORION TECH RESOURCES. IN NO EVENT WILL ORION TECH RESOURCES BE LIABLE FOR ANY INDIRECT, INCIDENTAL, CONSEQUENTIAL, PERSONAL INJURY / WRONGFUL DEATH, SPECIAL OR EXEMPLARY DAMAGES, INCLUDING BUT NOT LIMITED TO, LOSS OF PROFITS OR LOSS OF BUSINESS OPPORTUNITY, EVEN IF SUCH DAMAGES ARE FORESEEABLE AND WHETHER OR NOT ORION TECH RESOURCES HAS BEEN ADVISED OF THE POSSIBILITY THEREOF. ORION TECH RESOURCES'S CUMULATIVE LIABILITY TO AFFILIATE, FROM ALL CAUSES OF ACTION AND ALL THEORIES OF LIABILITY, WILL BE LIMITED TO AND WILL NOT EXCEED THE AMOUNTS PAID TO AFFILIATE BY ORION TECH RESOURCES IN COMMISSIONS DURING THE SIX (6) MONTHS IMMEDIATELY PRIOR TO SUCH CLAIM.
15. Governing Law & Miscellaneous
Affiliate shall be responsible for the payment of all attorneys fees and expenses incurred by Orion Tech Resources to enforce the terms of this Agreement. This Agreement contains the entire agreement between Orion Tech Resources and Affiliate with respect to the subject matter hereof, and supersedes all prior and/or contemporaneous agreements or understandings, written or oral. Affiliate agrees that Orion Tech Resources shall not be subject to or bound by any Affiliate insertion order or online terms and conditions that amend, conflict with or supplement this Agreement, regardless of whether Orion Tech Resources "clicks through" or otherwise indicates its acceptance thereof. Affiliate may not assign all or any part of this Agreement without Orion Tech Resources prior written consent. Orion Tech Resources may assign this Agreement at any time with notice to Affiliate. This Agreement will be binding on and will inure to the benefit of the legal representatives, successors and valid assigns of the parties hereto. The provisions of Section 3, 4(b), 6, 7, 8, 12-15 and any accrued payment obligations shall survive the termination of this Agreement. Except as set forth in the "Modifications" section above, this Agreement may not be modified without the prior written consent of both parties. If any provision of this Agreement is held to be void, invalid or inoperative, the remaining provisions of this Agreement shall continue in effect and the invalid portion of any provision shall be deemed modified to the least degree necessary to remedy such invalidity while retaining the original intent of the parties. Each party to this Agreement is an independent contractor in relation to the other party with respect to all matters arising under this Agreement. Nothing herein shall be deemed to establish a partnership, joint venture, association or employment relationship between the parties. No course of dealing nor any delay in exercising any rights hereunder shall operate as a waiver of any such rights. No waiver of any default or breach shall be deemed a continuing waiver or a waiver of any other breach or default.
By submitting and application to Affiliate Program, you affirm and acknowledge that you have read this Agreement in its entirety and agree to be bound by all of its terms and conditions. If you do not wish to be bound by this Agreement, you should not submit an application to Affiliate Program. If an individual is accessing this Agreement on behalf of a business entity, by doing so, such individual represents that they have the legal capacity and authority to bind such business entity to this Agreement. This Agreement was last revised on 20-06-2016.

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">ok</button>
        
      </div>
    </div>
  </div>
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

 
 