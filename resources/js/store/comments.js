import Axios from "axios";

export default {
    state: {
        comments: [],
        count: 0,
    },
    getters: {
        comments: state => {
            return state.comments
        },
        comments_count: state => {
            return state.count
        },
    },
    mutations: {
        SET_COMMENTS: (state, payload) => {
            state.comments.push(...payload)
        },
        SET_COMMENTS_COUNT: (state, payload) => {
            state.count = payload
        }

    },
    actions: {
        GET_COMMENTS: (context, payload) => {
            Axios.get('/api/v1/get-comments', { params: payload})
                .then(response => {
                    console.log(response.data)
                    context.commit('SET_COMMENTS', response.data.comments)
                    context.commit('SET_COMMENTS_COUNT', response.data.count)
                })
                .catch(error => {
                    return error
                })
        },
        NEW_COMMENT: (context, payload) => {
            Axios.post('/api/v1/set-comment', payload)
                .then(response => {
                    console.log(response)
                    context.commit('SET_COMMENTS', response.data)
                })
                .catch(error => {
                    return error
                })
        }
    }

}
