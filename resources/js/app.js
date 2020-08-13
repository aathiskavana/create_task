require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('task-component', require('./components/TaskComponent.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        createTask: '',
        tasks: [{text: ''}, {text: ''}]
      }
   
});
