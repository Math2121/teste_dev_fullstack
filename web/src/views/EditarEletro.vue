<template>
  <main class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
      <div>
        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1">
            <form @submit.prevent="submitEdit">
              <div class="grid gap-4 gap-y-5 text-sm grid-cols-1 auto-cols-max">
                <div>
                  <label for="nome">Nome</label>
                  <input
                    type="text"
                    name="nome"
                    id="nome"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                    v-model="nome"
                    required
                  />
                </div>

                <div>
                  <label for="descricao">Descrição</label>
                  <input
                    type="text"
                    name="descricao"
                    id="descricao"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                    v-model="descricao"
                    required
                  />
                </div>

                <div>
                  <label for="tensao">Tensão</label>
                  <input
                    type="number"
                    name="tensao"
                    id="tensao"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                    v-model="tensao"
                    required
                  />
                </div>

                <div>
                  <label for="marca">Marca</label>
                  <input
                    type="text"
                    name="marca"
                    id="marca"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                    v-model="marca"
                    required
                  />

                  <span class="text-gray-400 italic mt-2 block text-xs"
                    >Marcas aceitas: (Electrolux, Brastemp, Fischer, Samsung,
                    LG)</span
                  >
                </div>

                <div class="text-right">
                  <div class="inline-flex items-end">
                    <button
                      :disabled="isDisabled"
                      class="bg-emerald-500 text-white font-bold py-2 px-4 rounded"
                      :class="
                        isDisabled
                          ? 'opacity-5 cursor-progress ... hover:none'
                          : 'hover:bg-blue-700'
                      "
                    >
                      Editar
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import httpClient from "../services/axios";
import router from "@/router";
export default {
  name: "EditarEletro",
  data() {
    return {
      userId: null,
      nome: "",
      descricao: "",
      tensao: "",
      marca: "",
      isDisabled: false,
    };
  },
  props: ["id"],
  mounted() {
    this.pegarEletro(this.id);
  },
  methods: {
    pegarEletro(id) {
      httpClient.get("eletrodomestico/" + id).then((response) => {
        this.nome = response.data.nome;
        this.descricao = response.data.descricao;
        this.tensao = response.data.tensao;
        this.marca = response.data.marca;
      });
    },
    submitEdit() {
      this.isDisabled = true;
      const data = {
        nome: this.nome,
        descricao: this.descricao,
        tensao: this.tensao.toString(),
        marca: this.marca.toUpperCase(),
      };

      httpClient
        .put(`editar/eletrodomestico/${this.id}`, data)
        .then((response) => {
          this.$swal({
            title: "Enviado",
            icon: "success",
            html: "<div>Tudo certo!</div>",
          });
          router.push("/");
        })
        .catch((error) => {
          this.$swal({
            title: "Erro",
            icon: "warning",
            html: error.response.data.message
              ? error.response.data.message
              : "<div>Houve um erro ao tentar cadastrar.Tente novamente</div>",
            confirmButtonText: "Ok",
            customClass: {
              confirmButton:
                "text-white transition-colors duration-200 transform bg-purple-700 rounded-md hover:bg-purple-600 w-full px-4 py-2",
            },
            buttonsStyling: false,
          }).then((result) => {
            if (result.isConfirmed) {
              this.pegarEletro(this.id);
          
            }
          });
        });
    },
  },
};
</script>
