<template>
  <div class="flex flex-wrap my-5">
    <div class="flex flex-nowrap space-x-1">
      <span v-for="n in 5"
        class="text-gray-300 cursor-pointer"
        @mouseover="hoverRating(n)"
        @mouseleave="hoverLeave()"
        @click="setRating(n)"
        v-bind:class="{ 'text-yellow-300': starStyle(n) }">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
        </svg>
      </span>
    </div>

    <template v-if="saverating > 0">
      <span class="text-2xl mx-4 text-gray-400 font-medium">{{saverating}}</span>
      <span v-if="voted" class="text-sm text-gray-400 self-center">- Ваш голос</span>
      <span class="text-lg flex flex-nowrap text-gray-500" :title="$ml.get('votes-count')"
        v-bind:class="{ 'hidden': voted }"
        >
        <svg xmlns="http://www.w3.org/2000/svg"class="h-6 self-center mx-2" viewBox="0 0 24 26" fill="currentColor">
            <path d="M23.873 9.81c.086-.251.127-.508.127-.763 0-.77-.379-1.514-1.055-1.982-2.152-1.492-1.868-1.117-2.68-3.544-.339-1.014-1.321-1.7-2.429-1.696-2.654.008-2.193.153-4.335-1.354-.446-.314-.974-.471-1.501-.471s-1.055.157-1.502.471c-2.154 1.515-1.687 1.362-4.335 1.354-1.107-.003-2.09.683-2.429 1.696-.812 2.433-.533 2.055-2.68 3.544-.675.469-1.054 1.212-1.054 1.982 0 .255.041.512.127.763.83 2.428.827 1.963 0 4.38-.086.251-.127.509-.127.763 0 .77.379 1.514 1.055 1.982 2.147 1.489 1.869 1.114 2.68 3.544.339 1.014 1.321 1.7 2.429 1.696 2.654-.009 2.193-.152 4.335 1.354.446.314.974.471 1.501.471s1.055-.157 1.502-.471c2.141-1.506 1.681-1.362 4.335-1.354 1.107.003 2.09-.683 2.429-1.696.812-2.428.528-2.053 2.68-3.544.675-.468 1.054-1.212 1.054-1.982 0-.254-.041-.512-.127-.763-.831-2.427-.827-1.963 0-4.38zm-7.565 1.984c.418.056.63.328.63.61 0 .323-.277.66-.844.705-.348.027-.434.312-.016.406.351.08.549.326.549.591 0 .314-.279.654-.913.771-.383.07-.421.445-.016.477.344.026.479.146.479.312 0 .466-.826 1.333-2.426 1.333-2.501.001-3.407-1.499-6.751-1.499v-4.964c1.766-.271 3.484-.817 4.344-3.802.239-.831.39-1.734 1.187-1.734 1.188 0 1.297 2.562.844 4.391.656.344 1.875.468 2.489.442.886-.036 1.136.409 1.136.745 0 .505-.416.675-.677.755-.304.094-.444.404-.015.461z"/>
        </svg>
        <span class="self-center text-base">- {{count}}</span>
      </span>
    </template>

  </div>
</template>

<script>
export default {
    props: ['itemid', 'model'],
    data(){
        return{
            rating: 0,
            saverating: 0,
            count: 1,
            voted: false,
        }
    },
    mounted: function (){
        this.getRating();
    },
    methods: {
        findRateLocal() {
            if (localStorage.getItem('stars')) {
                try {
                    let stars = JSON.parse(localStorage.getItem('stars'));
                    if (stars) {
                        let myVote = stars.find(star => star.itemid === this.itemid, star => star.model === this.model).rating;
                        if (myVote != null) {
                            this.voted = true;
                            this.rating = myVote;
                            this.saverating = myVote;
                            // console.log(myVote);
                        }
                    }
                } catch(e) {
                    // console.log('Ошибка чтения рейтинга' + e);
                    // console.log(typeof(myVote));
                    // localStorage.removeItem('stars');
                }
            }
        },
        starStyle(n) {
            if (this.rating >= n) {
                return true;
            }
        },
        hoverRating(n) {
            if (!this.voted) {
                this.rating = n;
            }
        },
        hoverLeave() {
            if (!this.voted) {
                this.rating = this.saverating;
            }
        },
        getRating() {
            axios
                .get('/api/v1/get-rating', { params: {itemid: this.itemid, model: this.model}})
                .then(response => {
                    this.rating = response.data.rating;
                    this.saverating = response.data.rating;
                    this.count = response.data.count;
                    this.findRateLocal();
                });
        },
        setRating(n) {
            if (!this.voted) {
                axios
                    .post('/api/v1/set-rating', {itemid: this.itemid, model: this.model, rating: n, count: this.count})
                    .then(response => {
                        this.voted = true;
                        this.saverating = n;
                        // set to localStorage
                        let vote = {itemid: this.itemid, model: this.model, rating: n};
                        this.SaveDataToLocalStorage(vote);

                    })
                    .catch(err => {
                        let e = { ...err    }
                        console.log(e);
                        alert('Не удалось проголосовать, попробуйте повторить попытку позже');
                    });
            }
        },
        SaveDataToLocalStorage(data)
        {
            var a = [];
            // сохранение в массив в localStorage
            a = JSON.parse(localStorage.getItem('stars')) || [];
            a.push(data);
            localStorage.setItem('stars', JSON.stringify(a));
        }
    }

}
</script>
