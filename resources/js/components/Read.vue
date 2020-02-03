<template>
    <div >
        <single-user

            :data = user>
        </single-user>
       
    </div>
</template>

<script>
import SingleUser from './SingleUser';
    export default {
  components: {SingleUser},
        data(){ 
             return {
            user:{}
        }
        },
       
        mounted() {
            console.log('Component mounted.')
        },

        created(){
            axios.get(`/api/user/${this.$route.params.id}`)
            
            .then((data)=>{
              this.user = data.data
            })
        }
    }
</script>