<template>
  <div class="flex h-screen">
    <button
      @click="toggleMenu"
      :class="[
        'fixed z-10 left-64 top-2 bg-gray-800 rounded-md p-2 text-white transition-transform duration-300',
        {'-translate-x-64': !menuOpen}
      ]"
    >
      <i :class="menuOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
    </button>

    <div
      :class="[
        'flex flex-col w-64 bg-gray-800 text-white transition-transform duration-300',
        {'-translate-x-full': !menuOpen}
      ]"
    >
      <div class="flex items-center justify-center h-16 bg-gray-900">
        <img src="https://blog.liberfly.com.br/wp-content/uploads/2022/05/cropped-MicrosoftTeams-image-8-e1652819689370.png" alt="Logo" class="h-8 w-auto">
      </div>

      <div class="flex flex-col flex-1 mt-8">
        <LinkVue :href="{name: 'dash'}" :icon="'fa-solid fa-chart-pie'" :label="'Inicio'" />
        <LinkVue :href="{name: 'client'}" :icon="'fa-solid fa-headset'" :label="'Novo Chamado'" />
      </div>
    </div>

    <div
      class="absolute inset-0 bg-gray-100"
      :class="['bg-gray-100',{'ml-0': !menuOpen, 'ml-64': menuOpen}]">
      <div class="absolute inset-0 h-screen max-h-[100vh] overflow-auto" :style="menuOpen ? 'pointer-events: auto;' : 'pointer-events: none;'">
        <ContentContainerVue>
          <slot />
        </ContentContainerVue>
      </div>
    </div>
    <FloatButtonVue :link="'client'" />
  </div>
</template>

<script>
import ContentContainerVue from '@/components/Containers/ContentContainer.vue'
import LinkVue from '../Links/TheLinkMenu.vue'
import FloatButtonVue from '../BaseButtons/FloatButton.vue'

export default {
  components: {
    ContentContainerVue,
    LinkVue,
    FloatButtonVue
  },
  name: 'SidebarMenu',
  data () {
    return {
      menuOpen: true
    }
  },
  methods: {
    toggleMenu () {
      this.menuOpen = !this.menuOpen
    }
  }
}
</script>

<style>
/* Estilos adicionais do componente aqui */
</style>
