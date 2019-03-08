<template>
    <div class="row mt-5"> 

        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4">Ficha clinica</div>
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
                                <tr v-for="paciente in pacientes" :key="paciente.id">
                                    <td>{{ paciente.id }}</td>
                                    <td>{{ paciente.nome }}</td>
                                    <td>{{ paciente.idade }}</td>
                                    <td>{{ paciente.created_at }}</td>
                                    <td>
                                        <a v-bind:href="'pacientes/' + paciente.id" title="Visualizar Medicofichaclinica"><i class="btn btn-info btn-sm"><i class="fa fa-eye"></i></i></a>
                                        <a v-bind:href="'pacientes/' + paciente.id" title="Visualizar Medicofichaclinica"><button class="btn btn-success btn-sm">E</button></a>
                                        <a v-bind:href="'pacientes/' + paciente.id" title="Visualizar Medicofichaclinica"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
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
            pacientes: []
        }
    },
    
    created() { 
        axios.get('/api/paciente').then( res => this.pacientes = res.data ) 
    }
}
</script>

<style>

</style>
