<template>
  <div id="app">
    <LoginView v-if="!local" />
    <TheSidebarVue v-else>
      <transition name="slide" mode="out-in">
        <router-view/>
      </transition>
    </TheSidebarVue>
  </div>
</template>

<script>
import TheSidebarVue from './components/Sidebar/TheSidebar.vue'
import LoginView from './modules/login/LoginView.vue'

export default {
  components: {
    TheSidebarVue,
    LoginView
  },
  data () {
    return {
      local: localStorage.__access
    }
  }
}
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

.slide-enter,
.slide-leave-to {
  transform: translate(-50px);
  opacity: 0;
}

.slide-enter-active,
.slide-leave-active {
  transition: all 0.3s;
}
</style>
