<template>
  <div class="overflow-x-auto">

    <div class="flex justify-left">
      <div class="inline-block">
        <ChartTitleVue>
          <slot />
        </ChartTitleVue>
      </div>
    </div>

    <div class="flex flex-col">
      <div class="align-middle inline-block w-full">
        <div class="overflow-x-auto shadow overflow-hidden border-b p-2 border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-white">
              <tr>
                <th v-for="(column, index) in tableColumns" :key="index" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ column }}
                </th>

                <!-- <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Detalhes</span>
                </th> -->
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
<!-- <div class="flex-shrink-0 h-10 w-10">
  <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Sebas+Luna&background=random" alt="Some">
</div> -->
              <tr v-for="(row, index) in tableRows" :key="index" class="text-left hover:shadow-lg hover:-translate-y-1 hover:-translate-x-1 transition-all" :class="index % 2 === 0 ? 'bg-gray-100' : 'bg-white'">
                <td v-for="(column, indexColumn) in tableColumns" :key="indexColumn" class="px-6 py-4 whitespace-nowrap">
                  {{ row[column] }}
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
// import { api } from '@/utils/axios'
import ChartTitleVue from '../BaseTitles/ChartTitle.vue'

export default {
  name: 'DinamicTable',
  components: {
    ChartTitleVue
  },
  props: {
    items: [Array, Object]
  },
  methods: {
    formatDate (createdAt) {
      const date = new Date(createdAt)
      const options = { year: 'numeric', month: 'long', day: 'numeric' }
      return date.toLocaleDateString('pt-BR', options)
    },
    removeItem (id) {
      const confirm = window.confirm('Esta ação não pode ser desfeita, deseja continuar ?')

      if (!confirm) return

      api.delete(`v1/calleds/${id}`)
        .then(res => {
          alert(res.data.success)
          window.location.reload()
        })
        .catch(err => {
          console.log(err.data)
        })
    }
  }
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
