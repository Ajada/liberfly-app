<template>
  <div>
    <TheTitleVue>
      <i class="fa-solid fa-house"></i>
      Inicio
    </TheTitleVue>

    <ContentBlockVue>
      <div class="flex justify-center">
        <div class="inline-block">
          <ChartTitleVue>
            Movimento
          </ChartTitleVue>
          <TheChartVue />
        </div>
      </div>
    </ContentBlockVue>
  </div>
</template>

<script>
import ContentBlockVue from '@/components/Containers/ContentBlock.vue'
import TheTitleVue from '@/components/BaseTitles/TheTitle.vue'
import { api } from '@/utils/axios'
import TheChartVue from '@/components/Charts/TheChart.vue'
import ChartTitleVue from '@/components/BaseTitles/ChartTitle.vue'

export default {
  name: 'HomeView',
  components: {
    TheChartVue,
    TheTitleVue,
    ChartTitleVue,
    ContentBlockVue
  },
  data () {
    return {
      callsItems: {}
    }
  },
  mounted () {
    api.get('calleds')
      .then(res => {
        return (this.callsItems = res.data)
      })
      .catch(err => {
        return console.log(err)
      })
  }
}
</script>
