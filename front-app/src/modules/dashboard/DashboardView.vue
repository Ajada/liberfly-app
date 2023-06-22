<template>
  <div class="home">
    <TheTitleVue
      :label="'Ultimos Chamados'"
    />
    <DinamicTableVue :items="callsItems" class="m-10" />
  </div>
</template>

<script>
import DinamicTableVue from '@/components/Tables/DinamicTable.vue'
import TheTitleVue from '@/components/BaseTitles/TheTitle.vue'
import { api } from '@/utils/axios'

export default {
  name: 'HomeView',
  components: {
    DinamicTableVue,
    TheTitleVue
  },
  data () {
    return {
      callsItems: {}
    }
  },
  mounted () {
    api.get('v1/calleds')
      .then(res => {
        return (this.callsItems = res.data)
      })
      .catch(err => {
        return console.log(err)
      })
  }
}
</script>
