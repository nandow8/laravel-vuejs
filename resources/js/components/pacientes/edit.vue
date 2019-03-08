<template>
    <div class="mt-5">
        <h1>edit: {{ param_id }} </h1>
        <input type="text" :value="paciente.id">
        <input type="text" :value="paciente.nome">
        <input type="text" :value="paciente.idade">
    </div>
</template>

<script>
export default {
    data(){
        return {
            param_id: '',

            paciente: {
                id: Number,
                nome: String,
                idade: Number
            }
        }
    },

    created(){
        this.param_id = window.location.href.split('/').pop()
        axios.get('/api/paciente/' + this.param_id).then( res => this.paciente = res.data ) 
    }
}
</script>

<style>

</style>
