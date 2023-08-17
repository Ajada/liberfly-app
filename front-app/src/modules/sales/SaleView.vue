<template>
  <div>
    <TheTitleVue :labelButton="'Nova Venda'">
      Vendas
    </TheTitleVue>
    <transition name="slide" mode="out-in">
      <router-view/>
    </transition>
    <ContentBlockVue>
      <DinamicTableVue
        :tableRows="tableRows"
        :tableColumns="tableColumns"
      >
        Ultimas Vendas
      </DinamicTableVue>
    </ContentBlockVue>
  </div>
</template>

<script>
import TheTitleVue from '@/components/BaseTitles/TheTitle.vue'
import ContentBlockVue from '@/components/Containers/ContentBlock.vue'
import DinamicTableVue from '@/components/Tables/DinamicTable.vue'

export default {
  components: {
    TheTitleVue,
    ContentBlockVue,
    DinamicTableVue
  },
  data () {
    return {
      tableColumns: ['Produto', 'Valor', 'Cliente', 'Data', 'Status'],
      tableRows: [
        {
          Produto: 'Caixa de doces',
          Valor: 'R$ 13,50',
          Cliente: 'Consumidor',
          Data: '13/07/2023',
          Status: 'Finalizado'
        },
        {
          Produto: 'Caixa de doces',
          Valor: 'R$ 13,50',
          Cliente: 'Consumidor',
          Data: '13/07/2023',
          Status: 'Finalizado'
        },
        {
          Produto: 'Caixa de doces',
          Valor: 'R$ 13,50',
          Cliente: 'Consumidor',
          Data: '13/07/2023',
          Status: 'Finalizado'
        },
        {
          Produto: 'Caixa de doces',
          Valor: 'R$ 13,50',
          Cliente: 'Consumidor',
          Data: '13/07/2023',
          Status: 'Finalizado'
        }
        // Add more rows here
      ]
    }
  }
}
</script>
