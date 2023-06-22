<template>
  <div class="home">
    <TheTitleVue
      :label="'Ultimos Chamados'"
    />
    <DinamicTableVue
      class="m-10"
      :fields="fields"
      :data="data"
    />
  </div>
</template>

<script>
import DinamicTableVue from '@/components/Tables/DinamicTable.vue'
import TheTitleVue from '@/components/BaseTitles/TheTitle.vue'

export default {
  name: 'HomeView',
  components: {
    DinamicTableVue,
    TheTitleVue
  },
  data () {
    return {
      fields: [
        { key: 'name', label: 'Nome' },
        { key: 'age', label: 'Idade' },
        { key: 'email', label: 'E-mail' }
      ],
      data: [
        { id: 1, name: 'João', age: 25, email: 'joao@example.com' },
        { id: 2, name: 'Maria', age: 30, email: 'maria@example.com' },
        { id: 3, name: 'Pedro', age: 35, email: 'pedro@example.com' }
      ]
    }
  }
}
</script>
