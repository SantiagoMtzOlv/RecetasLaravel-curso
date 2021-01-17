<template>
    <span v-text="formatearFecha"></span>
</template>

<script>
export default {
    props: ['fecha'],
    mounted(){

    },
    computed: {
        formatearFecha(){
            return moment(this.fecha).locale('es').format('DD [de] MMMM [del] YYYY')
        }
    }
}
</script>
