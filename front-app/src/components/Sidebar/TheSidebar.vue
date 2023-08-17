<template>
  <div class="flex h-screen">
    <button
      @click="toggleMenu"
      class="fixed m-1 z-20 left-72 top-0 p-2 rounded-md bg-gray-800 text-white focus:outline-none md:hidden transition-transform duration-300"
      :class="[{'-translate-x-72': !menuOpen}]"
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

    <div class="overflow-auto w-full">
      <ContentContainerVue>
        <slot />
      </ContentContainerVue>
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
.content {
  min-height: 100vh;
}
</style>
