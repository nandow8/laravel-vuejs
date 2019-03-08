<template>
    <div class="mt-3">
        <div class="container"> 
            <div class="row">
                <div class="col-3">
                    <button @click.prevent="exibeAtestado(atestado.id)" v-for="atestado in titulosatestados" :key="atestado.id" class="btn btn-outline-success mb-2">{{ 'Atestado ' + atestado.titulo }}</button>
                </div>
                <div class="col-9">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Atestado</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="atestados.conteudo"></textarea>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            titulosatestados: [],

            atestados: {
                titulo: '',
                conteudo: ''
            }
        }
    },

    methods: {
        exibeAtestado(atestadoid){
            axios.get('/api/medicoatestado/' + atestadoid).then( res => {
                this.atestados = res.data 
            })
        }
    },

    created(){
        axios.get('/api/medicoatestado').then( res => {
            this.titulosatestados = res.data  
        })
    }
}
</script>

<style>

</style>
