<template>
  <button
    @click.prevent="$emit('click', $emit)"
    class="hover:shadow-lg hover:-translate-y-1 hover:-translate-x-1 transition-all bg-blue-700 hover:bg-blue-500 transition text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
    type="button"
  >
    <slot />
  </button>
</template>

<script>
export default {
  name: 'BaseButton',
  props: {
    label: String
  }
}
</script>
