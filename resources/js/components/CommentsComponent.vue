<template>
    <div id="comments" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <h3>Комментарии ( {{comments_count}} )</h3>
        <div class="grid gap-4 mx-auto grid-cols-1 lg:max-w-screen-lg">

            <div :id="'comment-' + comment.id" v-for="comment in comments" class="relative bg-gray-100 px-4 py-2 rounded shadow-lg"
                 :class="{'opacity-20' : comment.locked}"
            >
                <div class="flex flex-row items-center space-x-3">
                    <img :src="comment.user.avatar" :alt="comment.user.name" loading="lazy" class="h-14 mr-1 text-gray-600 rounded-full border-2 border-gray-300 ">
<!--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 mr-1 text-gray-600 rounded-full border-2 border-gray-300 " fill="currentColor" viewBox="0 0 24 24">-->
<!--                        <path d="M14.872 17.711c-.29.54-1.002.918-1.729.918-.447 0-.849-.147-1.15-.416-.301.269-.704.416-1.149.416-.729 0-1.44-.378-1.73-.918-.309-.576.536-1.14.94-.424.102.181.432.375.761.375.692 0 .631-.738.631-1.3-.423-.211-.717-.63-.717-1.006 0-.527.57-.762 1.271-.762s1.271.235 1.271.762c0 .38-.299.805-.73 1.014 0 .587-.056 1.254.599 1.254.341 0 .729-.208.863-.393.45-.624 1.185-.106.869.48zm.128-6.211c-.459 0-.833.374-.833.834 0 .459.374.833.833.833.459 0 .833-.374.833-.833 0-.46-.374-.834-.833-.834zm0 2.667c-1.011 0-1.833-.822-1.833-1.833 0-1.012.822-1.834 1.833-1.834 1.011 0 1.833.822 1.833 1.834 0 1.011-.822 1.833-1.833 1.833zm-6-2.667c-.46 0-.834.374-.834.834 0 .459.374.833.834.833.459 0 .833-.374.833-.833 0-.46-.374-.834-.833-.834zm0 2.667c-1.011 0-1.834-.822-1.834-1.833 0-1.012.823-1.834 1.834-1.834 1.011 0 1.833.822 1.833 1.834 0 1.011-.822 1.833-1.833 1.833zm12.113 3.986c-.78-7.61-2.462-11.289-4.568-13.869-1.21 1.055-2.044 1.769-3.321 3.667-.74-.121-1.769-.119-2.486.006-1.538-1.838-2.574-2.676-3.813-3.654-2.037 2.484-3.503 6.137-4.117 13.723-1.14-1.732-1.808-3.801-1.808-6.026 0-6.065 4.934-11 11-11 6.065 0 11 4.935 11 11 0 2.277-.696 4.396-1.887 6.153zm-9.113 4.847c-3.298 0-6.254-1.466-8.272-3.772.304-4.521 1.094-10.361 3.357-13.517 1.728 1.421 2.717 2.682 3.276 3.359.748-.19 1.823-.358 3.316.007.96-1.452 1.508-2.222 2.74-3.347 1.989 2.717 3.26 7.267 3.8 13.558-2.017 2.271-4.949 3.712-8.217 3.712zm0-23c-6.623 0-12 5.377-12 12 0 6.627 5.4 12 12 12 6.559 0 12-5.33 12-12 0-6.623-5.377-12-12-12z"/>-->
<!--                    </svg>-->
                    <div>
                        <p class="text-lg font-bold mb-1">{{ comment.user.name }} <span class="text-gray-400 text-sm">#{{ comment.id }}</span></p>
                        <p class="text-gray-400 text-sm">{{ localeDate(comment.created_at) }}
                            <span v-if="comment.parent_id > 0"  v-scroll-to="'#comment-' + comment.parent_id" class="text-green-500 cursor-pointer">ответ на #{{ comment.parent_id}}</span>
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center mt-2">
                    <p class="text-sm tracking-wide text-gray-800">
                        {{ comment.comment }}
                    </p>
                </div>
                <div v-if="!comment.locked" class="flex justify-end">
                    <div class="cursor-pointer inline-flex p-1 mr-1 text-xs text-white hover:text-white transition duration-200 rounded shadow-md bg-green-500 hover:bg-yellow-500 focus:shadow-outline focus:outline-none">
                        <div class="flex flex-row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/>
                            </svg>
                            <span @click="parent_id = comment.id" v-scroll-to="'#comment-form'">Ответить</span>
                        </div>
                    </div>
                    <div @click="complainShow(comment.id)" title="Пожаловаться" class="cursor-pointer absolute top-2 right-2 inline-flex p-1 mr-1 text-xs text-gray-500 hover:text-red-500 transition duration-200">
                        <div class="flex flex-row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 mx-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 1l-12 22h24l-12-22zm-1 8h2v7h-2v-7zm1 11.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div v-if="checkCount"
            @click="reloadComments"
             class="flex justify-center m-4 py-2 cursor-pointer border border-dashed rounded-md transition-all duration-300 text-gray-500 hover:text-green-700 hover:border-green-700">
            Загрузить ещё
        </div>
        <div id="comment-form" v-if="!sent" class="mt-3">
            <div class="mb-2 space-x-3">
                <span class="text-lg font-bold mb-1 ">Оставить комментарий</span>
                <span v-if="parent_id > 0" class="text-sm text-green-700 cursor-pointer">
                    <span v-scroll-to="'#comment-' + parent_id">ответ на #{{ parent_id }}</span>
                    <span @click="parent_id = 0" class="ml-3 text-gray-400">отменить</span>
                </span>
            </div>
            <textarea v-model="comment"
                class="flex-grow w-full p-1 h-24 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-primary focus:outline-none focus:shadow-outline"
            ></textarea>
            <div v-if="this.user.id > 0" class="flex flex-wrap justify-between items-center">
                <span class="text-sm text-gray-400">Ви коментуєте від імені <b class="mx-4">{{user.name}}</b> {{comment.length}}/200</span>
                <button
                    class="text-white mt-2 p-1 transition duration-200 rounded shadow-md md:w-auto focus:shadow-outline focus:outline-none"
                    :disabled="$v.$invalid"
                    :class="[$v.$invalid ? 'bg-red-400' : '', 'bg-green-500']"
                    @click="setComment"
                >
                    Комментировать
                </button>
            </div>
            <div v-else class="flex items-center space-x-3 text-sm text-red-600">
                <span>
                    Авторизуйтесь, щоб залишити коментар:
                </span>
                <auth-buttons></auth-buttons>
            </div>
        </div>
        <div v-else class="flex justify-center my-4 p-4 bg-gray-100 rounded-md">
            <span class="text-base text-gray-500">Коментар успішно відправлено</span>
        </div>

        <comments-complain :comment_id="complain_id" :show="complain_show" @hidedialog="complainClose"></comments-complain>

    </div>
</template>

<script>
import {required, maxLength, minLength} from "vuelidate/lib/validators";
import {mapGetters} from "vuex";

export default {
    props: ['blog_id'],
    data() {
        return {
            comment: '',
            sent: false,
            parent_id: 0,
            offset: 0,
            complain_id: 0,
            complain_show: false,
        }
    },
    methods: {
        getComments() {
            this.$store.dispatch('GET_COMMENTS', {
                blog_id: this.blog_id,
                user_id: this.user.id,
                offset: this.offset,
            })
        },
        reloadComments() {
            this.offset = this.offset + 5
            this.getComments()
        },
        setComment() {
            this.$store.dispatch('NEW_COMMENT', {
                blog_id: this.blog_id,
                user_id: this.user.id,
                parent_id: this.parent_id,
                comment: this.comment,
            })
            .then(response => {
                this.sent = true
                this.parent_id = 0
            })
        },
        localeDate: function (date) {
            return (new Date(date).toLocaleString())
        },
        complainShow(id) {
            this.complain_id = id
            this.complain_show = true
        },
        complainClose() {
            this.complain_id = 0
            this.complain_show = false
        }
    },
    created() {
        this.getComments()
    },
    computed: {
        ...mapGetters(['comments']),
        ...mapGetters(['comments_count']),
        ...mapGetters(['user']),
        checkCount() {
            return (this.comments.length < this.comments_count)
        }
    },
    validations: {
        comment: {
            required,
            minLength: minLength(4),
            maxLength: maxLength(200),
        }
    }
}
</script>
