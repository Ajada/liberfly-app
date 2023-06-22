import ClientsView from '@/modules/clients/ClientsView.vue'
import EditView from '@/modules/clients/layout/EditView.vue'

export const clientsRoutes = {
  path: '/clients',
  name: 'client',
  component: ClientsView
}

export const clientEditRoute = {
  path: '/edit-client',
  name: 'edit-client',
  component: EditView
}
