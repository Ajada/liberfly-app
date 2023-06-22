import DashboardView from '@/modules/dashboard/DashboardView.vue'

export const dashRoutes = {
  path: '/',
  alias: 'home',
  name: 'dash',
  component: DashboardView,
  beforeRouteEnter (to, from, next) {
    if (!localStorage.__access) next({ name: 'login' })
    next()
  }
}
