<template>
  <router-link :to="href" class="flex items-center text-lg py-2 px-6 hover:bg-gray-700 mb-1">
    <i :class="icon" class="text-gray-400 mr-2 text-xl"></i>
    <slot />
  </router-link>
</template>

<script>
export default {
  name: 'LinkVue',
  props: {
    href: [String, Object],
    icon: String
  }
}
</script>

<style>

</style>
