<template>
<div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header text-white" style="background-image:url('./img/profile background/profile.jpg')">
                    <h3 class="widget-user-username">{{ getProfilefirstName() }}</h3>
                    <h5 class="widget-user-desc">{{ getProfilelastName() }}</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-5" :src="getProfilePhoto()" style="size:2px;" alt="">
                    
                </div>
                
                </div>
                </div>
            </div>

            <!-- tab -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                       <h2 class='bold' style="text-align:center;">Personal Details</h2>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- Activity Tab -->
                            <div class="tab-pane" id="activity">
                                <h3 class="text-center">Display User Activity</h3>
                            </div>
                            <!-- Setting Tab -->
                            <div class="tab-pane active show" id="settings">
                                <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Middle Name</label>

                                    <div class="col-sm-12">
                                    <input  v-model="form.name" type=""  class="form-control" id="inputName" placeholder="Middle Name" :class="{ 'is-invalid': form.errors.has('name') }">
                                    
                                     <has-error :form="form" field="name"></has-error>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">First Name</label>

                                    <div class="col-sm-12">
                                    <input v-model="form.firstName" type=""  class="form-control" id="inputName" placeholder="First Name" :class="{ 'is-invalid': form.errors.has('firstName') }" >
                                    
                                     <has-error :form="form" field="firstName"></has-error>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Last Name</label>

                                    <div class="col-sm-12">
                                    <input  v-model="form.lastName" type=""  class="form-control" id="inputName" placeholder="Last Name" :class="{ 'is-invalid': form.errors.has('lastName') }">
                                    
                                     <has-error :form="form" field="lastName"></has-error>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-12">
                                    <input  v-model="form.email" type="email"  class="form-control" id="inputEmail" placeholder="Email" :class="{ 'is-invalid': form.errors.has('email') }" >
                                     
                                      <has-error :form="form" field="email"></has-error>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputNumber" class="col-sm-2 control-label">Phone Number</label>

                                    <div class="col-sm-12">
                                    <input  v-model="form.phone" type="number"  class="form-control" id="inputNumber" placeholder="Phone Number" :class="{ 'is-invalid': form.errors.has('phone') }" >
                                     
                                      <has-error :form="form" field="phone"></has-error>
                                    </div>
                                </div>


                                 <div class="form-group">
                                    <label for="inputAddress" class="col-sm-2 control-label">Country</label>

                                    <div class="col-sm-12">
                                    
                                     
                                       <select class="form-control" id="country"  v-model="form.country" :class="{ 'is-invalid': form.errors.has('country')}"   placeholder="Country" type="text" name="country"  required autofocus>
    
                                            <option >Ascension Island</option>
                                            <option>Andorra</option>
                                            <option value='United Arab Emirates'>United Arab Emirates</option>
                                            <option >Afghanistan</option>
                                            <option >Antigua And Barbuda</option>
                                            <option >Anguilla</option>
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
                                            <option value='Cote dIvoire'>Cote d'Ivoire</option>
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
                                            <option value='Korea, Democratic Peoples Republic Of'>Korea, Democratic People's Republic Of</option>
                                            <option value='Korea, Republic Of'>Korea, Republic Of</option>
                                            <option value='Kuwait'>Kuwait</option>
                                            <option value='Cayman Islands'>Cayman Islands</option>
                                            <option value='Kazakhstan'>Kazakhstan</option>
                                            <option value='Lao Peoples Democratic Republic'>Lao People's Democratic Republic</option>
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
                                         <has-error :form="form" field="country"></has-error>
                                    </div>
                                    
                                </div>


                                
                                <div class="form-group">
                                    <label for="photo" class="col-sm-2 control-label">Profile Photo</label>
                                    <div class="col-sm-12">
                                        <input  type="file" @change="UploadPhoto" name="photo" class="form-input">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-sm-12 control-label">Password (leave empty if not changing)</label>

                                    <div class="col-sm-12">
                                    <input type="password"
                                        
                                        class="form-control"
                                        id="password"
                                        placeholder="password"
                                        v-model="form.password"
                                        :class="{ 'is-invalid': form.errors.has('password') }"
                                       
                                    >
                                    <has-error :form="form" field="password"></has-error>
                                     
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-12">
                                    <button @click.prevent="updateInfo()" type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
          </div>
          <!-- end tabs -->
        </div>
    </div>

</template>

<script>
 import Form from 'vform'
export default {
     data(){
        return{
            form: new Form({
                id: '',
                    name: '',
                    firstName: '',
                    lastName:'',
                    email:'',
                    phone:'',
                    country:'',
                    type:'',
                    photo:'',
                    password:'',
            })
        }
    },

    methods:{
        // getProfilePhoto(){
        //     return "img/profile/" + this.form.photo
        // },
        getProfilefirstName(){
          return  this.form.firstName;
        },
        getProfilelastName(){
            return this.form.lastName;
        },
        getProfilePhoto() {
        let prefix = (this.form.photo.match(/\//) ? '' : '/img/profile/');
        return prefix + this.form.photo;
        },
        updateInfo(){
            
            this.$Progress.start();
            this.form.put('api/profile')
            
            
            .then(()=>{
                swal.fire(
                    'Updated!',
                    'User has been updated successfully.',
                    'success'
                    )
            this.$Progress.finnish();
             
           
            })
            .catch(()=>{
                this.$Progress.fail();
               
            })
        },
        UploadPhoto(e){
            // console.log('uploading');
            let file = e.target.files[0];
            let limit = 1024 * 1024 * 2;
            
            let reader = new FileReader();
            if(file['size'] < limit ){
                 reader.onloadend = (file)=>{
                // console.log('RESULT', reader.result)
                this.form.photo= reader.result;
            }
          reader.readAsDataURL(file);
        }else{
            swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'You are uploading a large file',
                    })
                   
        }
            }
           
    },

    created(){
              
              axios.get("api/profile")
            .then(({ data }) => (this.form.fill(data)));
            }
}
</script>

<style scoped>

.widget-user-header{
    background-position: center center;
    background-size: cover;
    height: 250px !important;
}
.widget-user .card-footer{
    padding: 0;
}
img.img-circle{
    width: 100px;
    size: 2px;
    text-align: center;
    margin: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
h3.widget-user-username{
    color: #fff;
    font-size: 40px;
}
h5.widget-user-desc{
    color: #fff;
    font-size: 20px;
}
</style>