import Vue from 'vue';
import Vuex from 'vuex';
import Axios from 'axios';

import leads from './leads'
import comments from './comments'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        leads,
        comments
    }
})
