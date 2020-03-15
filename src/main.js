import '@fortawesome/fontawesome-free/css/all.min.css'
import 'bootstrap-css-only/css/bootstrap.min.css'
import 'mdbvue/lib/css/mdb.min.css'
import Vue from 'vue'
import App from './App.vue'
import router from './router'
import VueParticles from 'vue-particles'
import VueGoogleCharts from 'vue-google-charts'
import VuePageTransition from 'vue-page-transition'

Vue.config.productionTip = false
Vue.use(VueParticles, VueGoogleCharts, VuePageTransition)

new Vue({
  router,
  render: function (h) { return h(App) }
}).$mount('#app')
