<template>
  <main class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
      <Table />
    </div>
  </main>
</template>

<script>
import Table from "../components/Table.vue";
export default {
  components: {
    Table,
  },
  name: "ListagemEletro",
};
</script>
