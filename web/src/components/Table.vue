<template>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <tr>
          <th scope="col" class="px-6 py-3">Nome</th>
          <th scope="col" class="px-6 py-3">Descrição</th>
          <th scope="col" class="px-6 py-3">Tensão</th>
          <th scope="col" class="px-6 py-3">Marca</th>
          <th scope="col" class="px-6 py-3">Editar</th>
          <th scope="col" class="px-6 py-3">Apagar</th>
        </tr>
      </thead>
      <tbody>
        <tr class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6" v-for="item in items" :key="item.id">
          <td
            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
          >{{ item.nome }}</td>
          <td class="px-6 py-4">{{ item.descricao }}</td>
          <td class="px-6 py-4">{{ item.tensao }}</td>
          <td class="px-6 py-4">{{ item.marca }}</td>
          <td class="px-6 py-4">
            <button @click="redirecionaParaEditar(item.id)" class="px-4 py-2 text-white bg-blue-700 rounded">Editar</button>
          </td>
          <td class="px-6 py-4">
            <button
              type="submit"
              class="px-4 py-2 text-white bg-red-700 rounded"
              @click="removeEletro(item.id)"
            >
              Apagar
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import httpClient from "../services/axios";
import router from '@/router'; 
import { useRouter } from 'vue-router';

export default {
  name: "Table",

  props: {
    items: {
      type: Array,
      required: true
    }
  },
  methods: {
    redirecionaParaEditar(id) {

      this.$router.push('/editar/'+id);
    },
    removeEletro(id){
      httpClient
        .delete(`apagar/eletrodomestico/${id}`)
        .then((response) => {
          this.$swal({
            title: "Enviado",
            icon: "success",
            html: "<div>Tudo certo!</div>",
            confirmButtonText: "Ok",
            customClass: {
              confirmButton:
                "text-white transition-colors duration-200 transform bg-purple-700 rounded-md hover:bg-purple-600 w-full px-4 py-2",
            },
            buttonsStyling: false,
          }).then((result) => {
            if (result.isConfirmed) {
     
              this.reloadPage()
            }
          });
        })
        .catch((error) => {      
          this.$swal({
            title: "Erro",
            icon: "warning",
            html: error.response.data.message ? error.response.data.message : "<div>Houve um erro ao tentar cadastrar.Tente novamente</div>",
            confirmButtonText: "Ok",
            customClass: {
              confirmButton:
                "text-white transition-colors duration-200 transform bg-purple-700 rounded-md hover:bg-purple-600 w-full px-4 py-2",
            },
            buttonsStyling: false,
          });
        })
    },
    reloadPage() {
      location.reload(); 
    },
  }
};
</script>
