import Axios from 'axios';

export default {
  state: {
     toggleform: false,
    slug: ""
  },
  getters: {
    formstatus: state => {
      return state. toggleform;
    },
    slug: state => {
      return state.slug;
    }
  },
  mutations: {
    SET_FORM_STATUS: (state, payload) => {
        state. toggleform = payload;
    },
    SET_SLUG: (state, payload) => {
      state.slug = payload;
      // console.log(state.slug);
    },
  },
  actions: {
    TOGGLE_FORM : (context, payload) => {
      context.commit('SET_FORM_STATUS', payload);
    },
    // Сохранение фразы с кнопки
    PUSH_SLUG : (context, payload) => {
        context.commit('SET_SLUG', payload);
    },

    // отправка лида
    SEND_LEAD : (context, payload) => {
      console.log(payload);
      return Axios.post('/api/v1/send-lead', tempyGen(payload))
      .then((response) => {
        // какоето действие из состоянием (оставил на будущее)
        // if (response.success === true) {
        //   context.commit('SOME_MUTATOR', response.data);
        // }
        return response.data
      })
      .catch(error => {
        // console.log(error);
        return error;
      });
    }

  }
}

function tempyGen(payload) {
  // проверяем наличие персонального идентификатора
  let tempy;
  if (localStorage.getItem('tempy')) {
    try {
      tempy = JSON.parse(localStorage.getItem('tempy'));
    } catch(e) {
      localStorage.removeItem('tempy');
    }
  } else {
    // если не обнаружен
    // генерируем случайную строку
    let s = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    tempy = Array(16).join().split(',').map(function() { return s.charAt(Math.floor(Math.random() * s.length)); }).join('');

    // сохраняем в браузер пользователя
    const parsed = JSON.stringify(tempy);
    localStorage.setItem('tempy', parsed);
  };
  // добавляем к данным из формы
  payload.tempy = tempy;

  return payload;
}
