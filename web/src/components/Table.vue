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
        <tr class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
          <th
            scope="row"
            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
          ></th>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4">
            <a href=""   class="px-4 py-2 text-white bg-blue-700 rounded">Editar</a>
          </td>
          <td class="px-6 py-4">
            <button
              type="submit"
              class="px-4 py-2 text-white bg-red-700 rounded"
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
export default {
  name: "Table",
};
</script>
