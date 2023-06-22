<template>
  <div class="mb-4">
    <label for="email" class="block text-gray-700 font-semibold mb-2">E-mail</label>
    <input @input="$emit('input', $event.target.value)" type="email" id="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required placeholder="Digite seu e-mail">
  </div>
</template>

<script>
export default {
  name: 'InputEmail'
}
</script>
