<template>
    <div v-if="!dismissed">
        {{ message }}
    </div>
</template>

<script>
export default {
    props: ['type', 'message', 'flash'],
    data() {
        return {
            'dismissed': false
        }
    },
    mounted() {
        if (this.flash) {
            setTimeout(() => {
              this.dismissed = true
            }, 2000)
        }
    },
    computed: {
        classname() {

        }
    }
}
</script>
