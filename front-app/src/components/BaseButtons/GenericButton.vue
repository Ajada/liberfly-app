<template>
  <button
    @click.prevent="$emit('click', $emit)"
    type="button"
  >
    {{ label }}
  </button>
</template>

<script>
export default {
  name: 'GenericButton',
  props: {
    label: String
  }
}
</script>
