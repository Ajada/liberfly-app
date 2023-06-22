<template>
  <router-link :to="href" class="flex items-center py-2 px-4 hover:bg-gray-700">
    <i :class="icon" class="text-gray-400 mr-2"></i>
    <span>{{ label }}</span>
  </router-link>
</template>

<script>
export default {
  name: 'LinkVue',
  props: {
    href: [String, Object],
    icon: String,
    label: String
  }
}
</script>

<style>

</style>
