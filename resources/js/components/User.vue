<template>
    <div class="container">
       <div class="row mt-5">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Active User Table</h3>

              <div class="card-tools">
                <button class="btn btn-sucess" @click='newModal' style='background-color:green; color:#fff'>Add New</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                   <th>Role</th>
                  <th>Registered At</th>
                  <th>Modify</th>
                </tr>
                <tr v-for="user in users" :key="user.id">
                  <td>{{user.id}}</td>
                  <td>{{user.name}} </td>
                  <td>{{user.firstName}} </td>
                  <td>{{user.lastName}}</td>
                  <td> {{user.phone}}</td>
                  <td> {{user.email}}</td>
                  <td> {{user.type}}</td>
                  <td>{{user.created_at}}</td>
                  
                  <td><a href="#" @click="editUser(user)"><i class='fa fa-edit blue'></i></a>
                        <a href="#" @click="deleteUser(user.id)" >
                            <i class='fa fa-trash' style='color:red;'></i>
                        </a>
                  
                  </td>
                </tr>
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <form @submit.prevent="createUser">
      <div class="modal-body">


    <div class="form-group row">
          <div class="col-sm-12">
          <input v-model="form.name"
           :class="{ 'is-invalid': form.errors.has('name')}"  type="text" class="form-control" id="inputFirstNmae" placeholder="middle name">
          </div>
    </div>

    <div class="form-group row">
          <div class="col-sm-12">
          <input v-model="form.firstName"
           :class="{ 'is-invalid': form.errors.has('firstName')}"  type="text" class="form-control" id="inputFirstNmae" placeholder="First Name">
          </div>
    </div>

    <div class="form-group row">
          <div class="col-sm-12">
          <input v-model="form.lastName"
           :class="{ 'is-invalid': form.errors.has('lastName')}"  type="text" class="form-control" id="inputLastName" placeholder="Last Name">
          </div>
    </div>

    <div class="form-group row">
          <div class="col-sm-12">
          <input v-model="form.email"
           :class="{ 'is-invalid': form.errors.has('email')}"  type="email" class="form-control" id="inputEmail" placeholder="Email">
          </div>
    </div>

    <div class="form-group row">
          <div class="col-sm-12">
          <input v-model="form.phone"
           :class="{ 'is-invalid': form.errors.has('phone')}"  type="text" class="form-control" id="inputPhone" placeholder="Phone">
          </div>
    </div>

    <div class="form-group row">
          <div class="col-sm-12">
          <input v-model="form.country"
           :class="{ 'is-invalid': form.errors.has('country')}"  type="text" class="form-control" id="inputPhone" placeholder="Country">
          </div>
    </div>

    <div class="form-group row">
    <div class=" col-sm-12">
      
      <select id="inputState" class="form-control" v-model="form.type">
        <option selected>Role..</option>
        <option>admin</option>
        <option>publisher</option>
        <option>advertiser</option>
      </select>
    </div>
    </div>

    <div class="form-group row">
          <div class="col-sm-12">
          <input v-model="form.password"
           :class="{ 'is-invalid': form.errors.has('password')}"  type="password" class="form-control" id="inputPhone" placeholder="password">
          </div>
    </div>
    
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
      </div>
  </form>

    </div>
    
    
  </div>
</div>
    </div>
    

     
</template>

<script>
    export default {
        data(){
            return{
                users:{},
                form: new Form({
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

            editUser(user){
                this.form.reset();
                $('#exampleModalScrollable').modal('show')
                this.form.fill(user)

            },

            newModal(){
                this.form.reset()
                $('#exampleModalScrollable').modal('show')
            },

            deleteUser(id){
               swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                     if (result.value) {

                    //send http request
                    this.form.delete('api/user/'+id).then(()=>{
                        
                    swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                     Fire.$emit('AfterCreate');
                
                    })
                    .catch(()=>{
                        swal('Failed', 'there was something wrong')
                    })
                     }
               
                })
            },
            loadUser(){
                axios.get('api/user').then(({data}) => (this.users = data.data))
            },
             createUser(){
                 this.$Progress.start();
                this.form.post('api/user')
                .then(()=>{
                     Fire.$emit('AfterCreate');
                $('#exampleModalScrollable').modal('hide')

                 toast.fire({
                icon: 'success',
                title: 'User created successfully'
                })
                this.$Progress.finish()
                })
                .catch(()=>{

                })
               
            },

           
        },
           
        
        created() {
            this.loadUser();
            Fire.$on('AfterCreate',()=>{
                this.loadUser();
            })
        }
    }
</script>
