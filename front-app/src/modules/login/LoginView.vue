<template>
  <div class="flex flex-col items-center justify-center h-screen bg-gray-100">
    <img src="https://blog.liberfly.com.br/wp-content/uploads/2022/05/cropped-MicrosoftTeams-image-8-e1652819689370.png" alt="Logo" class="h-16 w-auto mb-8">

    <div class="bg-white shadow-lg rounded-lg px-8 py-6 w-full max-w-md">
      <h2 class="text-2xl font-bold mb-6">Login</h2>
      <form>
        <InputEmailVue v-model="form.email" />

        <InputPasswordVue v-model="form.password" />

        <button type="submit" class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600 focus:outline-none">Entrar</button>
      </form>
    </div>
  </div>
</template>

<script>
import InputPasswordVue from '@/components/BaseInputs/InputPassword.vue'
import InputEmailVue from '@/components/BaseInputs/InputEmail.vue'
// import TheTitleVue from '@/components/BaseTitles/TheTitle.vue'

export default {
  components: {
    InputPasswordVue,
    InputEmailVue
  },
  name: 'LoginView',
  data () {
    return {
      form: {
        email: '',
        password: ''
      },
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

<style>

</style>
