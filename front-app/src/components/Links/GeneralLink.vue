<template>
  <router-link :to="href">
    <i v-if="icon" :class="icon" class="text-gray-400 mr-2"></i>
    <span>{{ label }}</span>
  </router-link>
</template>

<script>
export default {
  name: 'GeneralLink',
  props: {
    href: [String, Object],
    icon: String,
    label: String
  }
}
</script>

<style>

</style>
