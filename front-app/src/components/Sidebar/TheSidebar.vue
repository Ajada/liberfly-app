<template>
  <div class="flex h-screen">
    <button
      @click="toggleMenu"
      class="ml-1"
      :class="[
        'fixed z-10 left-64 top-2 bg-gray-800 rounded-md p-2 text-white transition-transform duration-300',
        {'-translate-x-64': !menuOpen}
      ]"
    >
      <i class="text-xl" :class="menuOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
    </button>

    <div
      class="fixed inset-y-0 left-0 z-10 w-72 bg-gray-700 text-white overflow-y-auto transition-transform duration-300 ease-in-out transform sl:w-96 md:w-96 md:relative md:translate-x-0"
      :class="[
        'flex flex-col w-64 bg-gray-800 text-white transition-transform duration-300',
        {'-translate-x-full': !menuOpen}
      ]"
    >
      <div class="flex items-center justify-center h-16 bg-gray-900">
        <img src="https://blog.liberfly.com.br/wp-content/uploads/2022/05/cropped-MicrosoftTeams-image-8-e1652819689370.png" alt="Logo" class="h-8 w-auto">
      </div>

      <div class="flex flex-col flex-1 mt-2">
        <TheLinkMenu v-for="(item, index) in menuItens" :key="index" :href="item.href" :icon="item.icon">
          <span class="ml-2">
            {{ item.label }}
          </span>
        </TheLinkMenu>
      </div>
    </div>

    <div
      class="absolute inset-0 bg-gray-100"
      :class="['bg-gray-100',{'ml-0': !menuOpen, 'ml-64': menuOpen}]">
      <div class="absolute inset-0 h-screen max-h-[100vh] overflow-auto" :style="menuOpen ? 'pointer-events: auto;' : 'pointer-events: none;'">
        <ContentContainerVue class="z-10">
          <slot />
        </ContentContainerVue>
      </div>
    </div>

    <FloatButtonVue :link="'client'" />

  </div>
</template>

<script>
import ContentContainerVue from '@/components/Containers/ContentContainer.vue'
import TheLinkMenu from '@/components/Links/TheLinkMenu.vue'
import FloatButtonVue from '../BaseButtons/FloatButton.vue'

export default {
  components: {
    ContentContainerVue,
    TheLinkMenu,
    FloatButtonVue
  },
  name: 'SidebarMenu',
  data () {
    return {
      menuOpen: true,
      menuItens: [
        { href: { name: 'dash' }, icon: 'fa-solid fa-chart-pie', label: 'Inicio' },
        { href: { name: 'sales' }, icon: 'fa-solid fa-sack-dollar', label: 'Venda' },
        { href: { name: 'moviment' }, icon: 'fa-solid fa-cash-register', label: 'Movimento' },
        { href: { name: 'products' }, icon: 'fa-solid fa-boxes-stacked fa-2xs', label: 'Produtos' }
      ]
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
