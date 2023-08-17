import ClientsView from '@/modules/clients/ClientsView.vue'
import EditView from '@/modules/clients/layout/EditView.vue'

export const clientsRoutes = {
  path: '/clients',
  name: 'client',
  component: ClientsView,
  beforeRouteEnter (to, from, next) {
    if (!localStorage.__access) next({ name: 'login' })
    next()
  }
}

export const clientEditRoute = {
  path: '/edit-client',
  name: 'edit-client',
  component: EditView,
  beforeRouteEnter (to, from, next) {
    if (!localStorage.__access) next({ name: 'login' })
    next()
  }
}
