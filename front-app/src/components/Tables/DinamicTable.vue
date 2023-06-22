<template>
  <div class="bg-white overflow-x-auto shadow-md rounded">
    <div class="">
      <div class="max-w-s">
        <div class="h-100 overflow-y-auto">
          <table class="min-w-full table-auto">
            <thead>
              <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Atendente</th>
                <th class="py-3 px-6 text-left">Cliente</th>
                <th class="py-3 px-6 text-left">Data</th>
                <th class="py-3 px-6 text-left">Motivo</th>
                <th class="py-3 px-6 text-center">Ações</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
              <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left">user.name</td>
                <td class="py-3 px-6 text-left">user.current</td>
                <td class="py-3 px-6 text-left">user.mail</td>
                <td class="py-3 px-6 text-left">user.password</td>
                <td class="py-3 px-6 text-center">
                  <button class="bg-blue-400 m-1 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Editar
                  </button>
                  <button @click.prevent="deleteStudent(user.id)" class="bg-red-400 m-1 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                    Excluir
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'DinamicTable'
}
</script>

<style scoped>
.h-100 {
  height: 30rem;
}
.bg-white {
  background-color: #fff;
}

.shadow-md {
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.rounded {
  border-radius: 0.375rem;
}

.my-6 {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.overflow-x-auto {
  overflow-x: auto;
}

.max-w-3xl {
  max-width: 48rem;
}

.table {
  display: table;
  width: 100%;
  table-layout: auto;
}

.table th,
.table td {
  padding: 0.75rem;
}

.text-left {
  text-align: left;
}

.text-center {
  text-align: center;
}

.uppercase {
  text-transform: uppercase;
}

.text-sm {
  font-size: 0.875rem;
}

.leading-normal {
  line-height: 1.5;
}

.text-gray-200 {
  color: #edf2f7;
}

.text-gray-600 {
  color: #4a5568;
}

.border-b {
  border-bottom-width: 1px;
}

.hover\:bg-gray-100:hover {
  background-color: #f7fafc;
}

.text-blue-500 {
  color: #4299e1;
}

.m-1 {
  margin: 0.25rem;
}

.hover\:bg-blue-700:hover {
  background-color: #1a365d;
}

.text-white {
  color: #fff;
}

.font-bold {
  font-weight: 700;
}

.bg-red-500 {
  background-color: #f56565;
}

.hover\:bg-red-700:hover {
  background-color: #c53030;
}

</style>
