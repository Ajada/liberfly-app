<template>
  <div>
    <TheTitleVue>
      Registrar Chamado
    </TheTitleVue>
    <ContentBlockVue>
      <TheFormVue />
    </ContentBlockVue>
  </div>
</template>

<script>
import TheTitleVue from '@/components/BaseTitles/TheTitle.vue'
import TheFormVue from '@/components/TheForm.vue'
import ContentBlockVue from '@/components/Containers/ContentBlock.vue'

export default {
  components: {
    TheTitleVue,
    TheFormVue,
    ContentBlockVue
  }
}
</script>
