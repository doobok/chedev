<template>
    <div id="comments" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <h3>{{ $ml.get('comments') }} ( {{comments_count}} )</h3>
        <div class="grid gap-4 mx-auto grid-cols-1 lg:max-w-screen-lg">

            <div :id="'comment-' + comment.id" v-for="comment in comments" class="relative bg-gray-100 px-4 py-2 rounded shadow-lg"
                 :class="{'opacity-20' : comment.locked}"
            >
                <div class="flex flex-row items-center space-x-3">
                    <img :src="comment.user.avatar" :alt="comment.user.name" loading="lazy" class="h-14 mr-1 text-gray-600 rounded-full border-2 border-gray-300 ">
                    <div>
                        <p class="text-lg font-bold mb-1">{{ comment.user.name }} <span class="text-gray-400 text-sm">#{{ comment.id }}</span></p>
                        <p class="text-gray-400 text-sm">{{ localeDate(comment.created_at) }}
                            <span v-if="comment.parent_id > 0"  v-scroll-to="'#comment-' + comment.parent_id" class="text-green-500 cursor-pointer"> {{ $ml.get('answer_to') }} #{{ comment.parent_id}}</span>
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
                            <span @click="parent_id = comment.id" v-scroll-to="'#comment-form'">
                                {{ $ml.get('answer') }}
                            </span>
                        </div>
                    </div>
                    <div @click="complainShow(comment.id)" :title="$ml.get('complain')" class="cursor-pointer absolute top-2 right-2 inline-flex p-1 mr-1 text-xs text-gray-500 hover:text-red-500 transition duration-200">
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
            {{ $ml.get('load_more') }}
        </div>
        <div id="comment-form" v-if="!sent" class="mt-3">
            <div class="mb-2 space-x-3">
                <span class="text-lg font-bold mb-1 ">{{ $ml.get('leave_comment') }}</span>
                <span v-if="parent_id > 0" class="text-sm text-green-700 cursor-pointer">
                    <span v-scroll-to="'#comment-' + parent_id">{{ $ml.get('answer_to') }} #{{ parent_id }}</span>
                    <span @click="parent_id = 0" class="ml-3 text-gray-400">
                        {{ $ml.get('cancel') }}
                    </span>
                </span>
            </div>
            <textarea v-model="comment"
                class="flex-grow w-full p-1 h-24 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-primary focus:outline-none focus:shadow-outline"
            ></textarea>
            <div v-if="this.user.id > 0" class="flex flex-wrap justify-between items-center">
                <span class="text-sm text-gray-400">{{ $ml.get('commentate_from') }} <b class="mx-4">{{user.name}}</b> {{comment.length}}/200</span>
                <button
                    class="text-white mt-2 p-1 transition duration-200 rounded shadow-md md:w-auto focus:shadow-outline focus:outline-none"
                    :disabled="$v.$invalid"
                    :class="[$v.$invalid ? 'bg-red-400' : '', 'bg-green-500']"
                    @click="setComment"
                >
                    {{ $ml.get('commentate') }}
                </button>
            </div>
            <div v-else class="flex items-center space-x-3 text-sm text-red-600">
                <span>
                    {{ $ml.get('login_please') }}:
                </span>
                <auth-buttons></auth-buttons>
            </div>
        </div>
        <div v-else class="flex justify-center my-4 p-4 bg-gray-100 rounded-md">
            <span class="text-base text-gray-500">
                {{ $ml.get('comment_success') }}
            </span>
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
