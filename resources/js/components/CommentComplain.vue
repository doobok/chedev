<template>
    <transition name="modal">
        <div v-show="show" class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container text-white h-auto flex justify-center">

                    <div class="flex flex-col">
                        <div class="relative modal-body">
                            <template v-if="!sent">
                                Жалоба на #{{comment_id}}
                                <p class="text-xs mt-2">Повідомте нас про порушення, щоб ми могли оперативно вирішити ситуацію</p>
                                <textarea v-model="complain"
                                          class="flex-grow text-gray-700 w-full p-1 h-24 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-primary focus:outline-none focus:shadow-outline"
                                ></textarea>
                                <span class="text-sm">
                                {{complain.length}}/150
                            </span>
                                <div class="flex justify-between">
                                    <button
                                        class="text-white mt-2 p-1 transition duration-200 rounded shadow-md md:w-auto focus:shadow-outline focus:outline-none bg-gray-700"
                                        @click="closeDialog">
                                        Отмена
                                    </button>
                                    <button
                                        class="text-white mt-2 p-1 transition duration-200 rounded shadow-md md:w-auto focus:shadow-outline focus:outline-none"
                                        :disabled="$v.$invalid"
                                        :class="[$v.$invalid ? 'bg-gray-400' : '', 'bg-green-500']"
                                        @click="sendComplain"
                                    >
                                        Отправить
                                    </button>
                                </div>
                            </template>
                            <template v-else>
                                <div class="grid grid-cols-1 justify-items-end">
                                    <div class="text-base text-gray-700 bg-white p-3 rounded-md relative">
                                        Дякуємо за допомогу, ми отримали ваше повідомлення і скоро з усім розберемось
                                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 -left-3 h-4 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M3 12l18-12v24z"/></svg>
                                    </div>
                                    <button
                                        class="text-white mt-4 p-1 transition duration-200 rounded shadow-md md:w-auto focus:shadow-outline focus:outline-none bg-gray-700 px-4"
                                        @click="closeDialog">
                                        Ok
                                    </button>
                                </div>
                            </template>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </transition>
</template>

<script>
import {required, maxLength, minLength} from "vuelidate/lib/validators";
export default {
    props: ['show', 'comment_id'],
    data: function () {
        return {
            complain: '',
            sent: false,
        }
    },
    methods: {
        sendComplain () {
            axios.post('/api/v1/send-complain', {
                    user_id: 1,
                    comment_id: this.comment_id,
                    complain: this.complain
                })
                .then(response => {
                    this.sent = true
                })
                .catch(error => {
                    console.log(error)
                })
        },
        closeDialog () {
            this.complain = ''
            this.$emit('hidedialog')
        }
    },
    validations: {
        complain: {
            required,
            minLength: minLength(4),
            maxLength: maxLength(150),
        }
    }
}
</script>

