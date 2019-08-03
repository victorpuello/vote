require('./bootstrap');

// window.Vue = require('vue');
//
// import Vuetify from 'vuetify';
// Vue.use(Vuetify);

// const app = new Vue({
//     el: '#app',
// });

import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
const opts = {}

Vue.use(Vuetify)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

new Vue({
    vuetify: new Vuetify(opts)
}).$mount('#app')
