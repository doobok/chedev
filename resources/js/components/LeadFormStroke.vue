<template>
    <div>
        <template v-if="!sended">

            <div v-if="errorshow" class="text-base text-center">
                <span class="text-red-400 mb-6">{{ error }}</span>
            </div>

            <div>

                <div class="flex flex-col md:flex-row">
                    <div class="flex-grow w-full mb-2 md:mr-2 relative">
                        <input
                            type="text" name="name"
                            v-model="name"
                            class="px-4 h-12 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-purple-400 focus:outline-none focus:shadow-outline"
                            :placeholder="$ml.get('name')"
                            @blur="$v.name.$touch()"
                        />
                        <span v-if="$v.name.$error"
                              class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-4 left-3">{{
                                $ml.get('enter_name')
                            }}</span>
                    </div>
                    <!-- phone -->
<!--                    <input type="text" name="phone" hidden>-->
                    <div class="flex-grow w-full mb-2 md:mr-2 relative">
                        <input
                            type="text"
                            v-model="phone"
                            name="phone"
                            v-mask="'+38 (###) ###-####'"
                            class="px-4 h-12 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-purple-400 focus:outline-none focus:shadow-outline"
                            :placeholder="$ml.get('phone')"
                            @blur="$v.phone.$touch()"
                        />
                        <span v-if="$v.phone.$error"
                              class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-4 left-3">{{
                                $ml.get('format_err')
                            }}</span>
                    </div>
                </div>
                <button
                    class="inline-flex items-center justify-center h-12 px-6 my-4 capitalize tracking-wide text-white transition duration-200 rounded shadow-md focus:shadow-outline focus:outline-none"
                    :class="[$v.$invalid ? 'bg-red-400' : '', 'bg-'+clr+'-500']"
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
        </template>
        <template v-else>
            <div
                class="w-full flex text-center flex-col rounded py-4"
                :class="'bg-'+clr+'-100'"
            >
                <div class="text-base font-semibold text-gray-700 flex flex-row justify-center">

                    <svg class="mr-2 text-green-400" xmlns="http://www.w3.org/2000/svg" width="32"
                         height="32" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"/>
                    </svg>
                    <span>{{ $ml.get('lead_success') }}</span>
                </div>

                <p class="text-sm text-gray-700 m-2">
                    {{ $ml.get('lead_success_d') }}
                </p>

            </div>
        </template>
    </div>
</template>

<script>

import {required, maxLength} from "vuelidate/lib/validators";
export default {
    props: ['clr', 'txt'],
    data() {
        return {
            sended: false,
            sending: false, //индикатор отправки
            loading: false,
            errorshow: false,
            error: '',
            name: '',
            phone: '',
        }
    },
    methods: {
        sendForm() {
            if (!this.sending) {
                this.sending = true;
                this.loading = true;

                this.$store.dispatch('SEND_LEAD', {
                    name: this.name,
                    phone: this.phoneNum,
                    slug: this.txt,
                }).then((res) => {
                    // проверяем наличие служебного сообщения из сервера
                    if (res.msg) {
                        this.loading = false;
                        this.errorshow = true;
                        this.error = res.msg;
                        // проверяем облаботал ли сервер запрос
                    } else if (res.success) {
                        // вызываем событие GA
                        gtag('event', 'sendPhone', {'event_category': 'getPhone', 'event_label': this.txt});
                        this.loading = false;
                        this.sended = true;
                        // в противном случае показываем сообщение об ошибке
                    } else {
                        this.loading = false;
                        this.errorshow = true;
                        this.error = 'Возникла ошибка. Данные не удалось отправить. Попробуйте повторить попытку немного позже.';
                    }
                })
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
    },
}
</script>
