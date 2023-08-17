import Vue from 'vue'
import VueRouter from 'vue-router'
import { dashRoutes } from '@/modules/dashboard/routes'
// import { clientEditRoute, clientsRoutes } from '@/modules/clients/routes'
import { loginPage } from '@/modules/login/routes'
import { productsRoutes } from '@/modules/products/routes'
import { movimentRoutes } from '@/modules/moviment/routes'
import { salesRoutes } from '@/modules/sales/routes'

Vue.use(VueRouter)

const routes = [
  loginPage,
  dashRoutes,
  productsRoutes,
  movimentRoutes,
  salesRoutes
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
