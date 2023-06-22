<template>
  <div class="mb-4">
    <label for="email" class="block text-gray-700 font-semibold mb-2">{{ label }}</label>
    <input
      @input="$emit('input', $event.target.value)"
      type="text"
      id="email"
      class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
      :placeholder="placeholder"
    >
  </div>
</template>

<script>
export default {
  name: 'InputText',
  props: {
    label: String,
    placeholder: String
  }
}
</script>
