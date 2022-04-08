<template>
    <div>
        <template v-if="!sended">

            <div v-if="errorshow" class="text-base text-center">
                <span class="text-red-400 mb-6">{{ error }}</span>
            </div>

            <div>

                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 px-1 py-1 relative">
                        <span class="text-sm text-gray-700">{{ $ml.get('name') }}</span>
                        <input
                            type="text" name="name"
                            v-model="name"
                            class="px-4 h-12 w-full transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-purple-400 focus:outline-none focus:shadow-outline"
                            :placeholder="$ml.get('name')"
                            @blur="$v.name.$touch()"
                        />
                        <span v-if="$v.name.$error"
                              class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-2 left-3">{{
                                $ml.get('enter_name')
                            }}</span>
                    </div>
                    <div class="w-full md:w-1/2 px-1 py-1 relative">
                        <span class="text-sm text-gray-700">{{ $ml.get('lname') }}</span>
                        <input
                            type="text" name="last-name"
                            v-model="lname"
                            class="px-4 h-12 w-full transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-purple-400 focus:outline-none focus:shadow-outline"
                            :placeholder="$ml.get('lname')"
                            @blur="$v.lname.$touch()"
                        />
                        <span v-if="$v.lname.$error"
                              class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-2 left-3">{{
                                $ml.get('format_err')
                            }}</span>
                    </div>
                    <div class="w-full px-1 py-1 relative">
                        <span class="text-sm text-gray-700">{{ $ml.get('phone') }}</span>
                        <input
                            type="text"
                            v-model="phone"
                            name="phone"
                            v-mask="'+38 (###) ###-####'"
                            class="px-4 h-12 w-full transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-purple-400 focus:outline-none focus:shadow-outline"
                            :placeholder="$ml.get('phone')"
                            @blur="$v.phone.$touch()"
                        />
                        <span v-if="$v.phone.$error"
                              class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-2 left-3">{{
                                $ml.get('format_err')
                            }}</span>
                    </div>
                    <div class="w-full md:w-1/2 px-1 py-1 relative">
                        <span class="text-sm text-gray-700">{{ $ml.get('specialty') }}</span>
                        <select
                            v-model="specialty"
                            class="px-4 h-12 w-full transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-purple-400 focus:outline-none focus:shadow-outline"
                            :placeholder="$ml.get('specialty')"
                            @blur="$v.specialty.$touch()"
                        >
                            <option value="">--</option>
                            <option v-for="prof in professions" :value="prof">{{ prof }}</option>
                        </select>
                        <span v-if="$v.specialty.$error"
                              class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-2 left-3">{{
                                $ml.get('format_err')
                            }}</span>
                    </div>
                    <div class="w-full md:w-1/3 px-1 py-1 relative">
                        <span class="text-sm text-gray-700">{{ $ml.get('age') }}</span>
                        <input
                            type="number"
                            v-model="age"
                            name="age"
                            v-mask="'##'"
                            class="px-4 h-12 w-full transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-purple-400 focus:outline-none focus:shadow-outline"
                            :placeholder="$ml.get('age')"
                            @blur="$v.age.$touch()"
                        />
                        <span v-if="$v.age.$error"
                              class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-2 left-3">{{
                                $ml.get('format_err')
                            }}</span>
                    </div>
                    <div class="w-full px-1 py-1 relative">
                        <span class="text-sm text-gray-700">{{ $ml.get('bio_comment') }}</span>
                        <textarea v-model="comment" name="comment"
                                  class="px-4 h-32 w-full transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-purple-400 focus:outline-none focus:shadow-outline"
                        ></textarea>
                    </div>
                    <div class="w-full px-1 py-1 relative">
                        <span class="text-sm text-gray-700">{{ $ml.get('bio_link') }}</span>
                        <input
                            type="text"
                            v-model="link"
                            class="px-4 h-12 w-full transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-purple-400 focus:outline-none focus:shadow-outline"
                            :placeholder="$ml.get('bio_link')"
                        />
                    </div>
                </div>
                <div class="flex justify-center">
                    <button
                        class="inline-flex items-center justify-center h-12 px-6 my-4 capitalize tracking-wide text-white transition duration-200 rounded shadow-md focus:shadow-outline focus:outline-none"
                        :class="[$v.$invalid ? 'bg-red-400' : '', 'bg-green-400']"
                        :disabled="$v.$invalid"
                        @click="sendForm"
                    >
                        <template v-if="$v.$invalid">
                            {{ $ml.get('fill_form') }}
                        </template>
                        <template v-else>
                        <span class="flex justify-center text-white">
                            <svg v-if="loading" class="animate-spin h-5 w-5 mr-3"
                                 viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm8 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-19 0c0-6.065 4.935-11 11-11v2c-4.962 0-9 4.038-9 9 0 2.481 1.009 4.731 2.639 6.361l-1.414 1.414.015.014c-2-1.994-3.24-4.749-3.24-7.789z"/>
                            </svg>
                            <span>{{ $ml.get('continue') }}</span>
                        </span>
                        </template>
                    </button>
                </div>

            </div>
        </template>
        <template v-else>
            <div
                class="w-full flex text-center flex-col rounded py-4"
            >
                <div class="text-base font-semibold text-gray-700 flex flex-row justify-center">

                    <svg class="mr-2 text-green-400" xmlns="http://www.w3.org/2000/svg" width="32"
                         height="32" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"/>
                    </svg>
                    <span>{{ $ml.get('vacancy_success') }}</span>
                </div>

                <p class="text-sm text-gray-700 m-2">
                    {{ $ml.get('vacancy_success_d') }}
                </p>

            </div>
        </template>
    </div>
</template>

<script>

import {required, between} from "vuelidate/lib/validators";
export default {
    data() {
        return {
            sended: false,
            sending: false, //индикатор отправки
            loading: false,
            errorshow: false,
            error: '',
            name: '',
            lname: '',
            phone: '',
            specialty: '',
            age: '',
            comment: '',
            link: '',
            professions: [
                'PHP backend',
                'Vue.js frontend',
                'Web-дизайн',
                'Копирайтер',
                'Другое'
            ]
        }
    },
    methods: {
        sendForm() {
            if (!this.sending) {
                this.sending = true;
                this.loading = true;

                axios.post('/api/v1/send-vacancy', {
                    name: this.name,
                    lname: this.lname,
                    phone: this.phoneNum,
                    specialty: this.specialty,
                    age: this.age,
                    comment: this.comment,
                    link: this.link,
                }).then(response => {
                    if (response.data.success) {
                        // вызываем событие GA
                        gtag('event', 'sendPhone', {'event_category': 'getVacancy', 'event_label': 'Отправка вакансии'});
                        this.loading = false;
                        this.sended = true;
                        // в противном случае показываем сообщение об ошибке
                    } else {
                        this.loading = false;
                        this.errorshow = true;
                        this.error = 'Возникла ошибка. Данные не удалось отправить. Попробуйте повторить попытку немного позже.';
                    }
                }).catch(err => {
                    let e = { ...err    }
                    console.log(e);
                    alert('Ошибка! попробуйте повторить позже')
                });
            }
        },
    },
    computed: {
        phoneNum: function () {
            let str = this.phone;
            str = str.replace(/[^0-9.]/g, '');
            str = str.substr(2);
            return str;
        },
    },
    validations: {
        phone: {
            required,
            validFormat: val => /^\+38 \(0\d{2}\) \d{3}\-\d{4}$/.test(val),
        },
        name: {
            required,
        },
        lname: {
            required,
        },
        specialty: {
            required,
        },
        age: {
            required,
            between: between(18, 40)
        }
    },
}
</script>
