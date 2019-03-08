<template>
    <div class="mt-3">
        <div class="container posicao-botao">
            <button @click="adicionarAluno" class="mb-4">Adicionar Aluno</button>
			<transition-group name="slide" tag="div">
				<div v-for="(aluno, i) in alunos" :key="aluno">
					<div @click="removerAluno(i)"> {{ aluno }} </div>
				</div>
			</transition-group>
        </div>
    </div>
</template>

<script>
export default {
    data(){
		return {
			alunos: ['Roberto', 'Julia', 'Tereza', 'Paulo' ],
        }
    }, 

    methods: {
        adicionarAluno(){
            const s = "<input type='text' >"
            this.alunos.push(s)
        },
        removerAluno(indice){
            this.alunos.splice(indice, 1)
        },
    }
}
</script>

<style>
    .posicao-botao {
        display: flex;
        justify-content: center; 
        align-items: center;
        flex-direction: column;
    }
</style>
