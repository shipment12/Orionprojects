
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import moment from 'moment';





import { Form, HasError, AlertError } from 'vform';

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

window.Form = Form; 

import VueRouter from 'vue-router'
import Gate from './Gate.js';

Vue.prototype.$gate = new Gate(window.user);

Vue.use(VueRouter)

Vue.component('pagination', require('laravel-vue-pagination'));



import VueProgressBar from 'vue-progressbar'

const options = {
    color: '#bffaf3',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
      speed: '0.2s',
      opacity: '0.6s',
      termination: 300
    },
    autoRevert: true,
    location: 'left',
    inverse: false
  }
  
  Vue.use(VueProgressBar, options)


  import swal from 'sweetalert2';

  window.swal = swal; 

  const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', swal.stopTimer)
      toast.addEventListener('mouseleave', swal.resumeTimer)
    }
  })

  window.toast = toast; 
  
  let Fire = new Vue()
  window.Fire = Fire

  // const User = {
  //   template: `<div>User {{ $route.params.id }}</div>`,
  //   watch: {
  //     beforeRouteUpdate (to, from, next) {
  //       // react to route changes...
  //     }
  //   }
  // }

  


let routes = [
  { path: '*', component: require('./components/User.vue').default },
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/developer', component: require('./components/Developer.vue').default },
    { path: '/users', component: require('./components/User.vue').default },
    { path: '/user/:id', component: require('./components/Read.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '*', component: require('./components/NotFound.vue').default },
    
  ]


  const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang:false,
    mode:'history'
  })

  Vue.filter('upText', function(text){
    
    return text.charAt(0).toUpperCase() + text.slice(1);
  });

  Vue.filter('myDate', function(created){
    return moment(created).format('ll');
  });


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);



Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component(
  'not-found',
  require('./components/NotFound.vue').default
);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    data:{
      search: ''
    },

    methods:{
      searchIt: _.debounce(()=>{
        console.log('searching...')
        Fire.$emit('searching')
      },1500)
    }
});



