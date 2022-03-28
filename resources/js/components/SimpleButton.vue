<template>
    <button
      :class="cls"
      style="transition: all 0.15s ease 0s;"
      @click="opnForm"
    >
      {{txt}}
    </button>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  props: ['cls', 'txt'],
  methods:{
    opnForm(){
      this.$store.dispatch('TOGGLE_FORM', true);
      this.$store.dispatch('PUSH_SLUG', this.txt );
    },
  },

}


</script>
