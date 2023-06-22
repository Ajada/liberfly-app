<template>
  <div class="flex justify-center items-center m-10">
    <form class="w-full max-w-lg">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nome">
          Nome do Cliente
        </label>
        <input
          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="nome"
          type="text"
          placeholder="Digite o nome do cliente"
        />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="data">
          Data
        </label>
        <input
          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="data"
          type="date"
        />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="relato">
          Relato do Cliente
        </label>
        <textarea
          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="relato"
          rows="4"
          placeholder="Digite o relato do cliente"
        ></textarea>
      </div>
      <div class="flex justify-center">
        <button class="bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Enviar
        </button>
      </div>
    </form>
  </div>
</template>

<script>

export default {

}
</script>
