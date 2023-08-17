<template>
  <div class="hover:shadow-lg hover:-translate-y-1 hover:-translate-x-1 transition-all">
    <router-link
      class="bg-blue-700 hover:bg-blue-500 transition text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
      :to="href ?? '/'"
    >
      <slot />
    </router-link>
  </div>
</template>

<script>
export default {
  name: 'BaseButton',
  props: {
    href: [Array, Object]
  }
}
</script>
