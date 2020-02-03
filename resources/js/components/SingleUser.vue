<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="card">


          <!-- Profile Image -->
          <div class="box box-primary">
              <br>
            <div class="box-body box-profile" style="text-align:center;">
              <img class="profile-user-img img-responsive img-circle" :src="getProfilePhot()" alt="User profile picture"> <hr>

              <h3 class="profile-username text-center">{{data.firstName}}   {{data.lastName}}   {{data.name}}  </h3>

              <p class="text-muted text-center">{{data.type | upText }}</p>

             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary" style="text-align:center;">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i>  EMAIL</strong>

              <p class="text-muted">
              {{data.email}}
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">{{data.country}}</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Phone Number</strong>

             <p class="text-muted">{{data.phone}}</p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Created At</strong>

              <p>{{data.created_at}}</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
                   
                </div>
            </div>
        </div>
    
</template>

<script>
    export default {

        props:['data'],
        mounted() {
            console.log('Component mounted.')
        },

        methods:{
             getProfilePhot() {
        let prefix = "/img/profile/" + this.data.photo;
        return prefix;
        },

        
        },
    }
</script>