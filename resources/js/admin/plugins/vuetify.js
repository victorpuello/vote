import Vue from 'vue'
import Vuetify from 'vuetify'
import theme from '@/js/admin/plugins/theme'
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'

Vue.use(Vuetify, {
    iconfont: 'mdi',
    theme
})


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
