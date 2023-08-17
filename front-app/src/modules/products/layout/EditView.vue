<template>
  <div>
    <TheTitleVue :label="'Editar Chamado'" />

    <TheFormEditVue  />

  </div>
</template>

<script>
import TheTitleVue from '@/components/BaseTitles/TheTitle.vue'
import TheFormEditVue from '@/components/TheFormEdit.vue'

export default {
  components: {
    TheTitleVue,
    TheFormEditVue
  }
}
</script>
