<template>
    <input
        type="submit"
        class="btn btn-danger d-block w-100 mb-2"
        value="Eliminar"
        @click="eliminarReceta"
    >
</template>
<script>
    export default {
        props: ['recetaId'],
        mounted(){
            console.log('receta actual ', this.recetaId)
        },
        methods: {
            eliminarReceta(){
                this.$swal({
                    title: '¿Estas seguro?',
                    text: 'No se podrá recuperar la información posteriormente',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Si, Eliminar'
                }).then((result) =>{
                    if (result.value) {
                        const params = {
                            id: this.recetaId
                        }

                        //enviar peticion al servidor
                        axios.post(`/recetas/${this.recetaId}`, {params, _method: 'delete'})
                            .then(response => {
                                this.$swal({
                                    title: 'Receta Eliminda',
                                    text: 'Se elimino la receta',
                                    icon: 'success'
                                })
                                //Eliminar receta del DOM
                                this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                            })
                            .catch(error => {
                                console.log(error)
                            })
                    }
                })
            }
        }
    }
</script>
