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
// scroll
import VueScrollTo from 'vue-scrollto'
Vue.use(VueScrollTo)

Vue.component('smpl-button', require('./components/SimpleButton.vue').default);
Vue.component('lead-form', require('./components/LeadForm.vue').default);
Vue.component('lead-form-stroke', require('./components/LeadFormStroke.vue').default);
Vue.component('vacancy-form', require('./components/VacancyForm.vue').default);
Vue.component('star-rating', require('./components/StarRating.vue').default);
Vue.component('comments-component', require('./components/CommentsComponent.vue').default);
Vue.component('comments-complain', require('./components/CommentComplain.vue').default);
Vue.component('user-auth', require('./components/UserAuth.vue').default);
Vue.component('auth-buttons', require('./components/AuthButtons.vue').default);
Vue.component('lang-toggle', require('./components/LangToggle.vue').default);


const app = new Vue({
    el: '#app',
    store
});
