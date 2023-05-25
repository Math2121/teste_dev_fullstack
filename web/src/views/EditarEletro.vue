<template>
    <main class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
      <div>
        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1">
            <div>
              <div class="grid gap-4 gap-y-5 text-sm grid-cols-1 auto-cols-max">
                <div>
                  <label for="nome">Nome</label>
                  <input type="text" name="nome" id="nome" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  />
                </div>
  
                <div >
                  <label for="descricaao">Descrição</label>
                  <input type="text" name="descricao" id="descricao" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                </div>
  
                <div>
                  <label for="tensao">Tensão</label>
                  <input type="text" name="tensao" id="tensao" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  />
                </div>
  
                <div>
                  <label for="marca">Marca</label>
                  <input type="text" name="marca" id="marca" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  />
  
                  <span class="text-gray-400 italic mt-2 block text-xs">Marcas aceitas: (Electrolux, Brastemp, Fischer, Samsung, LG)</span>
                </div>
  
  
  
                <div class="text-right">
                  <div class="inline-flex items-end">
                    <button class="bg-emerald-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                  </div>
                </div>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  </template>
  
  <script>
  export default {
    name: "EditarEletro",
  
  }
  </script>
  