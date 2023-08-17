<template>
  <div>
    <TheTitleVue>
      Movimentações
    </TheTitleVue>
    <ContentBlockVue>
      <DinamicTableVue
        :tableRows="tableRows"
        :tableColumns="tableColumns"
      />
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
    DinamicTableVue,
    ContentBlockVue
  },
  data () {
    return {
      tableColumns: ['Produto', 'Valor', 'Forma', 'Cliente', 'Data', 'Status'],
      tableRows: [
        {
          Produto: 'Caixa de doces',
          Valor: 'R$ 13,50',
          Forma: 'Boleto',
          Cliente: 'Consumidor',
          Data: '13/07/2023',
          Status: 'Finalizado'
        },
        {
          Produto: 'Caixa de doces',
          Valor: 'R$ 13,50',
          Forma: 'Dinheiro',
          Cliente: 'Consumidor',
          Data: '13/07/2023',
          Status: 'Finalizado'
        },
        {
          Produto: 'Caixa de doces',
          Valor: 'R$ 13,50',
          Forma: 'PIX',
          Cliente: 'Consumidor',
          Data: '13/07/2023',
          Status: 'Finalizado'
        },
        {
          Produto: 'Caixa de doces',
          Valor: 'R$ 13,50',
          Forma: 'C. Crédito',
          Cliente: 'Consumidor',
          Data: '13/07/2023',
          Status: 'Finalizado'
        },
        {
          Produto: 'Caixa de doces',
          Valor: 'R$ 13,50',
          Forma: 'C. Débito',
          Cliente: 'Consumidor',
          Data: '13/07/2023',
          Status: 'Finalizado'
        }
      ]
    }
  }
}
</script>
