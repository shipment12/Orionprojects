



<html><script src="chrome-extension://ljdobmomdgdljniojadhoplhkpialdid/page/prompt.js"></script><script src="chrome-extension://ljdobmomdgdljniojadhoplhkpialdid/page/runScript.js"></script><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/css/app.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Register</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form method="POST" action="{{ route('register') }}">
                        @csrf
      <div class="form-group has-feedback">
      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Middle name" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" placeholder="Last Name" name="lastName" value="{{ old('lastName') }}" required autofocus>

            @if ($errors->has('lastName'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lastName') }}</strong>
                </span>
            @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" placeholder="First Name" name="firstName" value="{{ old('firstName') }}" required autofocus>

            @if ($errors->has('lastName'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lastName') }}</strong>
                </span>
            @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Phone" name="phone" value="{{ old('phone') }}" required autofocus>

                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <select class="form-control" id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" placeholder="Country" name="country" value="{{ old('country') }}" required autofocus>
    
    <option value='Ascension Island'>Ascension Island</option>
    <option value='Andorra'>Andorra</option>
    <option value='United Arab Emirates'>United Arab Emirates</option>
    <option value='Afghanistan'>Afghanistan</option>
    <option value='Antigua And Barbuda'>Antigua And Barbuda</option>
    <option value='Anguilla'>Anguilla</option>
    <option value='Albania'>Albania</option>
    <option value='Armenia'>Armenia</option>
    <option value='Angola'>Angola</option>
    <option value='Antarctica'>Antarctica</option>
    <option value='Argentina'>Argentina</option>
    <option value='American Samoa'>American Samoa</option>
    <option value='Austria'>Austria</option>
    <option value='Australia'>Australia</option>
    <option value='Aruba'>Aruba</option>
    <option value='Åland Islands'>Åland Islands</option>
    <option value='Azerbaijan'>Azerbaijan</option>
    <option value='Bosnia & Herzegovina'>Bosnia & Herzegovina</option>
    <option value='Barbados'>Barbados</option>
    <option value='Bangladesh'>Bangladesh</option>
    <option value='Belgium'>Belgium</option>
    <option value='Burkina Faso'>Burkina Faso</option>
    <option value='Bulgaria'>Bulgaria</option>
    <option value='Bahrain'>Bahrain</option>
    <option value='Burundi'>Burundi</option>
    <option value='Benin'>Benin</option>
    <option value='Saint Barthélemy'>Saint Barthélemy</option>
    <option value='Bermuda'>Bermuda</option>
    <option value='Brunei Darussalam'>Brunei Darussalam</option>
    <option value='Bolivia, Plurinational State Of'>Bolivia, Plurinational State Of</option>
    <option value='Bonaire, Saint Eustatius And Saba'>Bonaire, Saint Eustatius And Saba</option>
    <option value='Brazil'>Brazil</option>
    <option value='Bahamas'>Bahamas</option>
    <option value='Bhutan'>Bhutan</option>
    <option value='Bouvet Island'>Bouvet Island</option>
    <option value='Botswana'>Botswana</option>
    <option value='Belarus'>Belarus</option>
    <option value='Belize'>Belize</option>
    <option value='Canada'>Canada</option>
    <option value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands</option>
    <option value='Democratic Republic Of Congo'>Democratic Republic Of Congo</option>
    <option value='Central African Republic'>Central African Republic</option>
    <option value='Republic Of Congo'>Republic Of Congo</option>
    <option value='Switzerland'>Switzerland</option>
    <option value='Cote d'Ivoire'>Cote d'Ivoire</option>
    <option value='Cook Islands'>Cook Islands</option>
    <option value='Chile'>Chile</option>
    <option value='Cameroon'>Cameroon</option>
    <option value='China'>China</option>
    <option value='Colombia'>Colombia</option>
    <option value='Clipperton Island'>Clipperton Island</option>
    <option value='Costa Rica'>Costa Rica</option>
    <option value='Cuba'>Cuba</option>
    <option value='Cabo Verde'>Cabo Verde</option>
    <option value='Curacao'>Curacao</option>
    <option value='Christmas Island'>Christmas Island</option>
    <option value='Cyprus'>Cyprus</option>
    <option value='Czech Republic'>Czech Republic</option>
    <option value='Germany'>Germany</option>
    <option value='Diego Garcia'>Diego Garcia</option>
    <option value='Djibouti'>Djibouti</option>
    <option value='Denmark'>Denmark</option>
    <option value='Dominica'>Dominica</option>
    <option value='Dominican Republic'>Dominican Republic</option>
    <option value='Algeria'>Algeria</option>
    <option value='Ceuta, Mulilla'>Ceuta, Mulilla</option>
    <option value='Ecuador'>Ecuador</option>
    <option value='Estonia'>Estonia</option>
    <option value='Egypt'>Egypt</option>
    <option value='Western Sahara'>Western Sahara</option>
    <option value='Eritrea'>Eritrea</option>
    <option value='Spain'>Spain</option>
    <option value='Ethiopia'>Ethiopia</option>
    <option value='European Union'>European Union</option>
    <option value='Finland'>Finland</option>
    <option value='Fiji'>Fiji</option>
    <option value='Falkland Islands'>Falkland Islands</option>
    <option value='Micronesia, Federated States Of'>Micronesia, Federated States Of</option>
    <option value='Faroe Islands'>Faroe Islands</option>
    <option value='France'>France</option>
    <option value='France, Metropolitan'>France, Metropolitan</option>
    <option value='Gabon'>Gabon</option>
    <option value='United Kingdom'>United Kingdom</option>
    <option value='Grenada'>Grenada</option>
    <option value='Georgia'>Georgia</option>
    <option value='French Guiana'>French Guiana</option>
    <option value='Guernsey'>Guernsey</option>
    <option value='Ghana'>Ghana</option>
    <option value='Gibraltar'>Gibraltar</option>
    <option value='Greenland'>Greenland</option>
    <option value='Gambia'>Gambia</option>
    <option value='Guinea'>Guinea</option>
    <option value='Guadeloupe'>Guadeloupe</option>
    <option value='Equatorial Guinea'>Equatorial Guinea</option>
    <option value='Greece'>Greece</option>
    <option value='South Georgia And The South Sandwich Islands'>South Georgia And The South Sandwich Islands</option>
    <option value='Guatemala'>Guatemala</option>
    <option value='Guam'>Guam</option>
    <option value='Guinea-bissau'>Guinea-bissau</option>
    <option value='Guyana'>Guyana</option>
    <option value='Hong Kong'>Hong Kong</option>
    <option value='Heard Island And McDonald Islands'>Heard Island And McDonald Islands</option>
    <option value='Honduras'>Honduras</option>
    <option value='Croatia'>Croatia</option>
    <option value='Haiti'>Haiti</option>
    <option value='Hungary'>Hungary</option>
    <option value='Canary Islands'>Canary Islands</option>
    <option value='Indonesia'>Indonesia</option>
    <option value='Ireland'>Ireland</option>
    <option value='Israel'>Israel</option>
    <option value='Isle Of Man'>Isle Of Man</option>
    <option value='India'>India</option>
    <option value='British Indian Ocean Territory'>British Indian Ocean Territory</option>
    <option value='Iraq'>Iraq</option>
    <option value='Iran, Islamic Republic Of'>Iran, Islamic Republic Of</option>
    <option value='Iceland'>Iceland</option>
    <option value='Italy'>Italy</option>
    <option value='Jersey'>Jersey</option>
    <option value='Jamaica'>Jamaica</option>
    <option value='Jordan'>Jordan</option>
    <option value='Japan'>Japan</option>
    <option value='Kenya'>Kenya</option>
    <option value='Kyrgyzstan'>Kyrgyzstan</option>
    <option value='Cambodia'>Cambodia</option>
    <option value='Kiribati'>Kiribati</option>
    <option value='Comoros'>Comoros</option>
    <option value='Saint Kitts And Nevis'>Saint Kitts And Nevis</option>
    <option value='Korea, Democratic People's Republic Of'>Korea, Democratic People's Republic Of</option>
    <option value='Korea, Republic Of'>Korea, Republic Of</option>
    <option value='Kuwait'>Kuwait</option>
    <option value='Cayman Islands'>Cayman Islands</option>
    <option value='Kazakhstan'>Kazakhstan</option>
    <option value='Lao People's Democratic Republic'>Lao People's Democratic Republic</option>
    <option value='Lebanon'>Lebanon</option>
    <option value='Saint Lucia'>Saint Lucia</option>
    <option value='Liechtenstein'>Liechtenstein</option>
    <option value='Sri Lanka'>Sri Lanka</option>
    <option value='Liberia'>Liberia</option>
    <option value='Lesotho'>Lesotho</option>
    <option value='Lithuania'>Lithuania</option>
    <option value='Luxembourg'>Luxembourg</option>
    <option value='Latvia'>Latvia</option>
    <option value='Libya'>Libya</option>
    <option value='Morocco'>Morocco</option>
    <option value='Monaco'>Monaco</option>
    <option value='Moldova'>Moldova</option>
    <option value='Montenegro'>Montenegro</option>
    <option value='Saint Martin'>Saint Martin</option>
    <option value='Madagascar'>Madagascar</option>
    <option value='Marshall Islands'>Marshall Islands</option>
    <option value='Macedonia, The Former Yugoslav Republic Of'>Macedonia, The Former Yugoslav Republic Of</option>
    <option value='Mali'>Mali</option>
    <option value='Myanmar'>Myanmar</option>
    <option value='Mongolia'>Mongolia</option>
    <option value='Macao'>Macao</option>
    <option value='Northern Mariana Islands'>Northern Mariana Islands</option>
    <option value='Martinique'>Martinique</option>
    <option value='Mauritania'>Mauritania</option>
    <option value='Montserrat'>Montserrat</option>
    <option value='Malta'>Malta</option>
    <option value='Mauritius'>Mauritius</option>
    <option value='Maldives'>Maldives</option>
    <option value='Malawi'>Malawi</option>
    <option value='Mexico'>Mexico</option>
    <option value='Malaysia'>Malaysia</option>
    <option value='Mozambique'>Mozambique</option>
    <option value='Namibia'>Namibia</option>
    <option value='New Caledonia'>New Caledonia</option>
    <option value='Niger'>Niger</option>
    <option value='Norfolk Island'>Norfolk Island</option>
    <option value='Nigeria'>Nigeria</option>
    <option value='Nicaragua'>Nicaragua</option>
    <option value='Netherlands'>Netherlands</option>
    <option value='Norway'>Norway</option>
    <option value='Nepal'>Nepal</option>
    <option value='Nauru'>Nauru</option>
    <option value='Niue'>Niue</option>
    <option value='New Zealand'>New Zealand</option>
    <option value='Oman'>Oman</option>
    <option value='Panama'>Panama</option>
    <option value='Peru'>Peru</option>
    <option value='French Polynesia'>French Polynesia</option>
    <option value='Papua New Guinea'>Papua New Guinea</option>
    <option value='Philippines'>Philippines</option>
    <option value='Pakistan'>Pakistan</option>
    <option value='Poland'>Poland</option>
    <option value='Saint Pierre And Miquelon'>Saint Pierre And Miquelon</option>
    <option value='Pitcairn'>Pitcairn</option>
    <option value='Puerto Rico'>Puerto Rico</option>
    <option value='Palestinian Territory, Occupied'>Palestinian Territory, Occupied</option>
    <option value='Portugal'>Portugal</option>
    <option value='Palau'>Palau</option>
    <option value='Paraguay'>Paraguay</option>
    <option value='Qatar'>Qatar</option>
    <option value='Reunion'>Reunion</option>
    <option value='Romania'>Romania</option>
    <option value='Serbia'>Serbia</option>
    <option value='Russian Federation'>Russian Federation</option>
    <option value='Rwanda'>Rwanda</option>
    <option value='Saudi Arabia'>Saudi Arabia</option>
    <option value='Solomon Islands'>Solomon Islands</option>
    <option value='Seychelles'>Seychelles</option>
    <option value='Sudan'>Sudan</option>
    <option value='Sweden'>Sweden</option>
    <option value='Singapore'>Singapore</option>
    <option value='Saint Helena, Ascension And Tristan Da Cunha'>Saint Helena, Ascension And Tristan Da Cunha</option>
    <option value='Slovenia'>Slovenia</option>
    <option value='Svalbard And Jan Mayen'>Svalbard And Jan Mayen</option>
    <option value='Slovakia'>Slovakia</option>
    <option value='Sierra Leone'>Sierra Leone</option>
    <option value='San Marino'>San Marino</option>
    <option value='Senegal'>Senegal</option>
    <option value='Somalia'>Somalia</option>
    <option value='Suriname'>Suriname</option>
    <option value='South Sudan'>South Sudan</option>
    <option value='São Tomé and Príncipe'>São Tomé and Príncipe</option>
    <option value='USSR'>USSR</option>
    <option value='El Salvador'>El Salvador</option>
    <option value='Sint Maarten'>Sint Maarten</option>
    <option value='Syrian Arab Republic'>Syrian Arab Republic</option>
    <option value='Swaziland'>Swaziland</option>
    <option value='Tristan de Cunha'>Tristan de Cunha</option>
    <option value='Turks And Caicos Islands'>Turks And Caicos Islands</option>
    <option value='Chad'>Chad</option>
    <option value='French Southern Territories'>French Southern Territories</option>
    <option value='Togo'>Togo</option>
    <option value='Thailand'>Thailand</option>
    <option value='Tajikistan'>Tajikistan</option>
    <option value='Tokelau'>Tokelau</option>
    <option value='Timor-Leste, Democratic Republic of'>Timor-Leste, Democratic Republic of</option>
    <option value='Turkmenistan'>Turkmenistan</option>
    <option value='Tunisia'>Tunisia</option>
    <option value='Tonga'>Tonga</option>
    <option value='Turkey'>Turkey</option>
    <option value='Trinidad And Tobago'>Trinidad And Tobago</option>
    <option value='Tuvalu'>Tuvalu</option>
    <option value='Taiwan'>Taiwan</option>
    <option value='Tanzania, United Republic Of'>Tanzania, United Republic Of</option>
    <option value='Ukraine'>Ukraine</option>
    <option value='Uganda'>Uganda</option>
    <option value='United Kingdom'>United Kingdom</option>
    <option value='United States Minor Outlying Islands'>United States Minor Outlying Islands</option>
    <option value='United States'>United States</option>
    <option value='Uruguay'>Uruguay</option>
    <option value='Uzbekistan'>Uzbekistan</option>
    <option value='Vatican City State'>Vatican City State</option>
    <option value='Saint Vincent And The Grenadines'>Saint Vincent And The Grenadines</option>
    <option value='Venezuela, Bolivarian Republic Of'>Venezuela, Bolivarian Republic Of</option>
    <option value='Virgin Islands (British)'>Virgin Islands (British)</option>
    <option value='Virgin Islands (US)'>Virgin Islands (US)</option>
    <option value='Viet Nam'>Viet Nam</option>
    <option value='Vanuatu'>Vanuatu</option>
    <option value='Wallis And Futuna'>Wallis And Futuna</option>
    <option value='Samoa'>Samoa</option>
    <option value='Yemen'>Yemen</option>
    <option value='Mayotte'>Mayotte</option>
    <option value='South Africa'>South Africa</option>
    <option value='Zambia'>Zambia</option>
    <option value='Zimbabwe'>Zimbabwe</option>    
</select>
       </div>


       <div class="form-group has-feedback">
       <select class="form-control" id="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" placeholder="Type" name="type" value="{{ old('type') }}" required autofocus>
            <option>Role.....</option>
            <option>Publisher</option>
            <option>Advertiser</option>
           
       </select>
       </div>


      <div class="form-group has-feedback">
     
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
                        
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <input id="password-confirm" type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label class="">
              <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"   ></ins></div> By registration you agree to the <a href="#" data-toggle="modal" data-target="#myModal">terms and conditions</a>
            </label>
          </div>


        </div>
        <!-- /.col -->
        

        <div class="col-xs-12">
        <br><br>
        <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
        </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="/login" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
      ADVERTISER
Terms & Conditions
This Affiliate Program Operating Agreement (the "Agreement") is made and entered into by and between Orion Tech Resources ("Orion Tech Resources " or "we"), and you, ("you" or "Affiliate") the party submitting an application to become Orion Tech Resources affiliate). The terms and conditions contained in this Agreement apply to your participation with https://oriontech-dash.vene.io/ ("Affiliate Program"). Each Affiliate Program offer (an "Offer") may be for any offering by Orion Tech Resources or a third party (each such third party a "Client") and may link to a specific web site for that particular Offer ("Program Web Site"). Furthermore, each Offer may have additional terms and conditions on pages within the Affiliate Program and are incorporated as part of this Agreement. By submitting an application or participating in an Offer, you expressly consent to all the terms and conditions of this Agreement.
<br> 1.     Sign up as an Affiliate
You must submit an Affiliate Program application from our website. You must accurately complete the application to become an affiliate (and provide us with future updates) and not use any aliases or other means to mask your true identity or contact information. After we review your application, we will notify you of your acceptance or rejection to the Affiliate Program, generally within two(2) business days. We may accept or reject your application at our sole discretion for any reason.
<br> 2.     Obligations of both Parties
Subject to our acceptance of you as an affiliate and your continued compliance with the terms and conditions of this Agreement, Orion Tech Resources agrees as follows:
   <br> I.   We will make available to you via the Affiliate Program graphic and textual links to the Program Web Site and/or other creative materials (collectively, the "Links") which you may display on web sites owned or controlled by you, in emails sent by you and clearly identified as coming from you and in online advertisements (collectively, "Media"). The Links will serve to identify you as a member of our Affiliate Program and will establish a link from your Media to the Program Web Site.
    <br> II.   We will pay Affiliate for each Qualified Action (the "Commission"). A "Qualified Action" means an individual person who (i) accesses the Program Web Site via the Link, where the Link is the last link to the Program Web Site, (ii) is not a computer generated user, such as a robot, spider, computer script or other automated, artificial or fraudulent method to appear like an individual, real live person, (iii) is not using pre-populated fields (iv) completes all of the information required for such action within the time period allowed by Orion Tech Resources and (v) is not later determined by Orion Tech Resources to be fraudulent, incomplete, unqualified or a duplicate.
  <br> III.   We will pay you any Commissions earned monthly, provided that your account is currently greater than $50. Accounts with a balance of less than $50 will roll over to the next month, and will continue to roll over monthly until $50 is reached. We reserve the right to charge back to your account any previously paid Qualified Actions that are later determined to have not met the requirements to be a Qualified Action.
 <br> IV.   Payment for Commissions is dependent upon Clients providing such funds to Orion Tech Resources, and therefore, you agree that Orion Tech Resources shall only be liable to you for Commissions to the extent that Orion Tech Resources has received such funds from the Clients. You hereby release Orion Tech Resources from any claim for Commissions if Orion Tech Resources has not received such funds from the Clients.
  <br>V.   Orion Tech Resources shall automatically generate an invoice on behalf of Affiliate for all Commissions payable under this Agreement and shall remit payment to Affiliate based upon that invoice. All tracking of Links and determinations of Qualified Actions and Commissions shall be made by Orion Tech Resources in its sole discretion. In the event that Affiliate disputes in good faith any portion of an invoice, Affiliate must submit that dispute to Orion Tech Resources in writing and in sufficient detail within thirty (30) days of the date on the invoice. If Affiliate does not dispute the invoice as set forth herein, then Affiliate agrees that it irrevocably waives any claims based upon that invoice. In the event that Affiliate is also tracking Qualified Actions and Affiliate claims a discrepancy, Affiliate must provide Orion Tech Resources with Affiliate's reports within three (3) days after 30th day of the calendar month, and if Orion Tech Resources and Affiliate's reported statistics vary by more than 10% and Orion Tech Resources reasonably determines that Affiliate has used generally accepted industry methods to track Qualified Actions, then Orion Tech Resources and Affiliate agree to make a good faith effort to arrive at a reconciliation. If the parties are unable to arrive at a reconciliation, then Orion Tech Resources numbers shall govern.
 <br> VI.   If Affiliate has an outstanding balance due to Orion Tech Resources under this Agreement or any other agreement between the Affiliate and Orion Tech Resources, whether or not related to the Affiliate Program, Affiliate agrees that Orion Tech Resources may offset any such amounts due to Orion Tech Resources from amounts payable to Affiliate under this Agreement.
<br> <b><u>Affiliate also agrees to:</u></b>
I.   Have sole responsibility for the development, operation, and maintenance of, and all content on or linked to, your Media.
II.   Ensure that all materials posted on your Media or otherwise used in connection with the Affiliate Program (i) are not illegal, (ii) do not infringe upon the intellectual property or personal rights of any third party and (iii) do not contain or link to any material which is harmful, threatening, defamatory, obscene, sexually explicit, harassing, promotes violence, promotes discrimination (whether based on sex, religion, race, ethnicity, nationality, disability or age), promotes illegal activities (such as gambling), contains profanity or otherwise contains materials that Orion Tech Resources informs you that it considers objectionable (collectively, "Objectionable Content").
III.   Not make any representations, warranties or other statements concerning Orion Tech Resources or Client or any of their respective products or services, except as expressly authorized herein.
IV. Make sure that your Media does not copy or resemble the look and feel of the Program Web Site or create the impression that your Media is endorsed by Orion Tech Resources or Clients or a part of the Program Web Site, without prior written permission from us.
V.   Comply with all (i) obligations, requirements and restrictions under this Agreement and (ii) laws, rules and regulations as they relate to your business, your Media or your use of the Links.
VI. Comply with the terms, conditions, guidelines and policies of any third party services used by Affiliate in connection with the Affiliate Program, including but not limited to, email providers, social networking services and ad networks.
VII. Always prominently post and make available to end-users, including prior to the collection of any personally identifiable information, a privacy policy in compliance with all applicable laws that clearly and thoroughly discloses all information collection, use and sharing practices, including providing for the collection of such personally identifiable information in connection with the Affiliate Program and the provision of such personally identifiable information to Orion Tech Resources and Clients for use as intended by Orion Tech Resources and Clients.
VIII.     Always prominently post and make available to end-users any terms and conditions in connection with the Offer set forth by Orion Tech Resources or Client, or as required by applicable laws regarding such Offers.
IX. Make sure to not place Orion Tech Resources ads on any online auction platform (i.e. eBay, Amazon, Taobao, etc).
The following additional program-specific terms shall apply to any promotional programs set forth below:
I.     Email Campaigns. For all email campaigns, Affiliate must download the "Suppression List" from the Offers section of Orion Tech Resources. Affiliate shall filter its email list by removing any entries appearing on the Suppression List and will only send emails to the remaining addresses on its email list. Orion Tech Resources will provide an opt-out method in all Links, however, if any opt-out requests come directly to Affiliate, Affiliate shall immediately forward them to Orion Tech Resources at admin@oriontechresources.com. Affiliate's emails containing the Links may not include any content other than the Links, except as required by applicable law.
A.     Affiliate agrees that failure to download the Suppression List and remove all emails from the database before mailing may result in Commission withholdings, removal or suspension from all or part of the Affiliate Program, possible legal action and any other rights or remedies available to Orion Tech Resources pursuant to this Agreement or otherwise. Affiliate further agrees that it will not mail or market to any suppression files generated through the Orion Tech Resources network, and that doing so may result in Commission withholdings, removal or suspension from the Affiliate Program, possible legal action and any other rights or remedies available to Orion Tech Resources pursuant to this Agreement or otherwise.
II.   Advertising Campaigns. No Links can appear to be associated with or be positioned on chat rooms or bulletin boards unless otherwise agreed by Orion Tech Resources in writing. Any pop-ups/unders used for the Affiliate Program shall be clearly identified as Affiliate served in the title bar of the window and any client-side ad serving software used by Affiliate shall only have been installed on an end-user's computer if the function of the software is clearly disclosed to end-users prior to installation, the installation is pursuant to an affirmatively accepted and plain-english end user license agreement and the software be easily removed according to generally accepted methods.
III.   Affiliate Network Campaigns. For all Affiliate's that maintain their own affiliate networks, Affiliate agrees to place the Links in its affiliate network (the "Network") for access and use by those affiliates in Affiliate's Network (each a "Third Party Affiliate"). Affiliate agrees that it will expressly forbid any Third Party Affiliate to modify the Links in any way. Affiliate agrees to maintain its Network according to the highest industry standards. Affiliate shall not permit any party to be a Third Party Affiliate whose web site or business model involves content containing Objectionable Content. All Third Party Affiliates must be in good standing with Affiliate. Affiliate must require and confirm that all Third Party Affiliates affirmatively accept, through verifiable means, this Agreement prior to obtaining access to the Links. Affiliate shall promptly terminate any Third Party Affiliate who takes, or could reasonably be expected to take, any action that violates the terms and conditions of this Agreement. In the event that either party suspects any wrongdoing by a Third Party Affiliate with respect to the Links, Affiliate shall promptly disclose to Orion Tech Resources the identity and contact information for such Third Party Affiliate. Affiliate shall promptly remove any Third Party Affiliate from the Affiliate Program and terminate their access to future Offers of Orion Tech Resources in the Network upon written notice from Orion Tech Resources. Unless Orion Tech Resources has been provided with all truthful and complete contact information for a Third Party Affiliate and such Third Party Affiliate has affirmatively accepted this Agreement as recorded by Orion Tech Resources, Affiliate shall remain liable for all acts or omissions of any Third Party Affiliate.
3.     Consensus of Confidentiality
Except as otherwise provided in this Agreement or with the consent of Orion Tech Resources, you agree that all information, including, without limitation, the terms of this Agreement, business and financial information, customer and vendor lists, and pricing and sales information, concerning us or any of our affiliates provided by or on behalf of any of them shall remain strictly confidential and secret and shall not be utilized, directly or indirectly, by you for any purpose other than your participation in the Affiliate Program, except and solely to the extent that any such information is generally known or available to the public through a source other than you. Affiliate shall not use any information obtained from the Affiliate Program to develop, enhance or operate a service that competes with the Affiliate Program, or assist another party to do the same.
4.     Limited License & Intellectual Property
We grant you a nonexclusive, nontransferable, revocable right to use the Links and to access our web site through the Links solely in accordance with the terms of this Agreement, for the sole purpose of identifying your Media as a participant in the Affiliate Program and assisting in increasing sales through the Program Web Site.
You may not alter, modify, manipulate or create derivative works of the Links or any Orion Tech Resources graphics, creative, copy or other materials owned by, or licensed to, Orion Tech Resources in any way. You are only entitled to use the Links to the extent that you are a member in good standing of the Affiliate Program. We may revoke your license anytime by giving you written notice. Except as expressly stated herein, nothing in this Agreement is intended to grant you any rights to any of Orion Tech Resources’s trademarks, service marks, copyrights, patents or trade secrets. You agree that Orion Tech Resources may use any suggestion, comment or recommendation you choose to provide to Orion Tech Resourceswithout compensation. All rights not expressly granted in this Agreement are reserved by Orion Tech Resources.
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
13. Disclaimers
THE AFFILIATE PROGRAM AND LINKS, AND THE PRODUCTS AND SERVICES PROVIDED IN CONNECTION THEREWITH, ARE PROVIDED TO AFFILIATE "AS IS". EXCEPT AS EXPRESSLY SET FORTH HEREIN, ORION TECH RESOURCES EXPRESSLY DISCLAIMS ALL WARRANTIES, EXPRESS, IMPLIED OR STATUTORY, INCLUDING BUT NOT LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NONINFRINGEMENT, AND ANY WARRANTIES ARISING OUT OF COURSE OF DEALING, USAGE, OR TRADE. ORION TECH RESOURCES DOES NOT WARRANT THAT THE AFFILIATE PROGRAM OR LINKS WILL MEET AFFILIATE'S SPECIFIC REQUIREMENTS OR THAT THE OPERATION OF THE AFFILIATE PROGRAM OR LINKS WILL BE COMPLETELY ERROR- FREE OR UNINTERRUPTED. ORION TECH RESOURCES EXPRESSLY DISCLAIMS ANY LIABILITY FOR ANY ACT OR OMISSION OF A CLIENT OR THEIR PRODUCTS OR SERVICES. ORION TECH RESOURCES DOES NOT GUARANTEE THAT AFFILIATE WILL EARN ANY SPECIFIC AMOUNT OF COMMISSIONS.
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

<script src='/js/app.js'></script>


</body></html>