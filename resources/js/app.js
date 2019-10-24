/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import DataTable from 'laravel-vue-datatable';
Vue.use(DataTable);

Vue.component('candidates', require('./components/Candidates.vue').default);
Vue.component('modal', require('./components/Modal').default);
Vue.config.devtools = true;
const app = new Vue({
    el: '#app',
});
