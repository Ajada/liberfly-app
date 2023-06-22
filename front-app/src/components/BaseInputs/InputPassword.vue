<template>
  <div class="mb-4">
    <label for="password" class="block text-gray-700 font-semibold mb-2">Senha</label>
    <div class="relative">
      <input @input="$emit('input', $event.target.value)" :type="passwordVisible ? 'text' : 'password'" id="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Digite sua senha" required>
      <button
        @click.prevent="togglePasswordVisibility"
        :class="[
          'absolute right-2 top-2',
          {'text-gray-500': passwordVisible, 'text-blue-500': !passwordVisible}
        ]"
        class="text-lg focus:outline-none"
      >
        <i :class="passwordVisible ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'InputPassword',
  data () {
    return {
      passwordVisible: false
    }
  },
  methods: {
    togglePasswordVisibility () {
      this.passwordVisible = !this.passwordVisible
    }
  }
}
</script>
