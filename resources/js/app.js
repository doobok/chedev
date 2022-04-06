require('./bootstrap');

// Vue
window.Vue = require('vue').default;
// store
import store from './store/index';
// валидатор форм
import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);
// мультиязычность
import './ml';
// input mask
import VueMask from 'v-mask'
Vue.use(VueMask);

Vue.component('smpl-button', require('./components/SimpleButton.vue').default);
Vue.component('lead-form', require('./components/LeadForm.vue').default);
Vue.component('lead-form-stroke', require('./components/LeadFormStroke.vue').default);
Vue.component('vacancy-form', require('./components/VacancyForm.vue').default);

const app = new Vue({
    el: '#app',
    store
});
