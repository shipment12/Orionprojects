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
                    <img class="img-circle elevation-3" :src="getProfilePhoto()" style="size:2px;" alt="">
                    
                </div>
                <div class="card-footer">
                    <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">3,200</h5>
                        <span class="description-text">SALES</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">13,000</h5>
                        <span class="description-text">FOLLOWERS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">PRODUCTS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
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
                                    <input  v-model="form.country" type="text"  class="form-control" id="inputAddress" placeholder="Country" :class="{ 'is-invalid': form.errors.has('country') }" >
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