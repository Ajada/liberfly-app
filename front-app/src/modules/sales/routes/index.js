import SalesView from '@/modules/sales/SaleView.vue'
import NewSale from '@/modules/sales/layout/NewSale.vue'

export const salesRoutes = {
  path: '/sales',
  name: 'sales',
  component: SalesView,
  children: [
    {
      path: '/new-sales',
      name: 'new-sales',
      component: NewSale
    }
  ]
}
