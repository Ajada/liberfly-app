<template>
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="relato">
      {{ label }}
    </label>
    <textarea
      @input="$emit('input', $event.target.value)"
      class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      id="relato"
      rows="4"
      :placeholder="placeholder"
    ></textarea>
  </div>
</template>

<script>
export default {
  props: {
    label: String,
    placeholder: String
  }
}
</script>

<style>

</style>
