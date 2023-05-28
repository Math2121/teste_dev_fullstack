<template>
  <main class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
      <Table :items="itemsArr"/>
    </div>
  </main>
</template>

<script>
import Table from "../components/Table.vue";
import httpClient from "../services/axios";
export default {
  components: {
    Table,
  },
  name: "ListagemEletro",
  data() {
    return {
      itemsArr: [],
    };
  },
  created() {
    this.pegarTodosEletros();
  },
  methods: {
    pegarTodosEletros() {
      httpClient
        .get("eletrodomesticos")
        .then((response) => {
          this.itemsArr = response.data;

        });
    },
  }
};
</script>
