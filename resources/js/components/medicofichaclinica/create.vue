<template>
    <div class="mt-4 mb-4">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h4">
                        Ficha Clinica
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="anamnese-tab" data-toggle="tab" href="#anamnese" role="tab" aria-controls="anamnese" aria-selected="true">anamnese</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="atestado-tab" data-toggle="tab" href="#atestado" role="tab" aria-controls="atestado" aria-selected="false">atestado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="medicamento-tab" data-toggle="tab" href="#medicamento" role="tab" aria-controls="medicamento" aria-selected="false">medicamento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="historico-tab" data-toggle="tab" href="#historico" role="tab" aria-controls="historico" aria-selected="false">historico</a>
                                </li>
                            </ul>
                            <form @submit.prevent="salvarFichaclinica">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="anamnese" role="tabpanel" aria-labelledby="anamnese-tab">
                                        <AnamneseComponent />
                                    </div>
                                    <div class="tab-pane fade show active" id="atestado" role="tabpanel" aria-labelledby="atestado-tab">
                                        <AtestadoComponent />
                                    </div>
                                    <div class="tab-pane fade" id="medicamento" role="tabpanel" aria-labelledby="medicamento-tab">
                                        <MedicamentoComponent />
                                    </div>
                                    <div class="tab-pane fade" id="historico" role="tabpanel" aria-labelledby="historico-tab">
                                        <HistoricoComponent />
                                    </div>
                                </div>

                                <button class="btn btn-primary">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AnamneseComponent from './componentes/AnamneseComponent'
import AtestadoComponent from './componentes/AtestadoComponent'
import MedicamentoComponent from './componentes/MedicamentoComponent'
import HistoricoComponent from './componentes/HistoricoComponent'
export default {
    components: { AnamneseComponent, AtestadoComponent, MedicamentoComponent, HistoricoComponent},

    methods: {
        data(){
            return {
                form: {
                    titulo: '',
                    conteudo: ''
                }
            }
        },
        salvarFichaclinica() {
            axios.post('/api/medicofichaclinica', this.form).then(res => console.log(res))
        }
    }
}
</script>

<style>

</style>
