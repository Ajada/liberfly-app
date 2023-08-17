<template>
  <div class="rounded-md bg-white font-light p-4 m-4 flex items-center">
    <div class="flex-1">
      <h2 class="p-1 text-2xl text-left">
        <slot />
      </h2>
    </div>
    <div v-show="labelButton">
      <BaseButtonVue :href="link">
        {{ labelButton }}
      </BaseButtonVue>
    </div>
  </div>
</template>

<script>
import BaseButtonVue from '../BaseButtons/BaseButton.vue'

export default {
  components: {
    BaseButtonVue
  },
  props: {
    labelButton: String,
    link: [Object, Array]
  }
}
</script>
