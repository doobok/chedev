<template>

</template>

<script>
export default {
    props: ['user'],
    created() {
        if (this.user) {
            this.$store.dispatch('UPDATE_USER', {
                name: this.user.name,
                id: this.user.id,
                avatar: this.user.avatar
            })
        }
    }
}
</script>
