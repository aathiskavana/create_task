<<<<<<< HEAD
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

=======
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
require('./bootstrap');

window.Vue = require('vue');

<<<<<<< HEAD
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('task-component', require('./components/TaskComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#create-modal',
    data: {
        tasks: '',
        tasks: [{name: ''}, {body: ''}]
      },
   
});
=======
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('task-component', require('./components/TaskComponent.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        createTask: '',
        tasks: [{text: ''}, {text: ''}]
      }
   
});
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
