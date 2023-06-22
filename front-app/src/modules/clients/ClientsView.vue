<template>
  <div>
    <TheTitleVue :label="'Registrar Chamado'" />

    <TheFormVue />
  </div>
</template>

<script>
import TheTitleVue from '@/components/BaseTitles/TheTitle.vue'
import TheFormVue from '@/components/TheForm.vue'

export default {
  components: {
    TheTitleVue,
    TheFormVue
  }
}
</script>
