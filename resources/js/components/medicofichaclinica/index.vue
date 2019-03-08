<template>
    <div class="row mt-5"> 

        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4">
                    Ficha clinica
                    <a class="btn btn-outline-success float-right" v-bind:href="'medicofichaclinica/create'">Cadastrar Ficha clinica</a>
                </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="fichaclinica in fichaclinica" :key="fichaclinica.id">
                                    <td>{{ fichaclinica.id }}</td>
                                    <td>{{ fichaclinica.nome }}</td>
                                    <td>{{ fichaclinica.idade }}</td>
                                    <td>{{ fichaclinica.created_at }}</td>
                                    <td>
                                        <a v-bind:href="'fichaclinica/' + fichaclinica.id" title="Visualizar Medicofichaclinica"><i class="btn btn-info btn-sm"><i class="fa fa-eye"></i></i></a>
                                        <a v-bind:href="'fichaclinica/' + fichaclinica.id" title="Visualizar Medicofichaclinica"><button class="btn btn-success btn-sm">E</button></a>
                                        <a v-bind:href="'fichaclinica/' + fichaclinica.id" title="Visualizar Medicofichaclinica"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
            fichaclinica: []
        }
    },

    created(){
        axios.get('api/medicofichaclinica/').then( res => this.fichaclinica = res.data )
    }

}
</script>

<style>

</style>
