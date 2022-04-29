import Axios from "axios";

export default {
    state: {
        user: {
            id: 0,
            name: 'Incognito',
            avatar: ''
        }
    },
    getters: {
        user: state => {
            return state.user
        }
    },
    mutations: {
        SET_USER: (state, payload) => {
            state.user = payload
        }
    },
    actions: {
        UPDATE_USER: (context, payload) => {
            context.commit('SET_USER', payload)
        }
    }
}
