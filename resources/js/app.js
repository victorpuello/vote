// require('./bootstrap');

import Vue from 'vue'
import '@/js/admin/components'

import '@/js/admin/plugins'

import { sync} from  'vuex-router-sync'

import App from '@/js/admin/App'
import i18n from '@/js/admin/i18n'
import router from '@/js/admin/router'
import store from '@/js/admin/store'

sync(store, router)

Vue.config.productionTip = false

new Vue({
    i18n,
    router,
    store,
    render: h => h(App)
}).$mount('#app')





// window.Vue = require('vue');
//
// import Vuetify from 'vuetify';
// Vue.use(Vuetify);

// const app = new Vue({
//     el: '#app',
// });

// import Vue from 'vue'
// import Vuetify from 'vuetify'
// import 'vuetify/dist/vuetify.min.css'
//
//
// const opts = {}
//
// Vue.use(Vuetify)
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// new Vue({
//     vuetify: new Vuetify(opts)
// }).$mount('#app')
