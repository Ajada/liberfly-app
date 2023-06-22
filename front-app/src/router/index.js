import Vue from 'vue'
import VueRouter from 'vue-router'
import { dashRoutes } from '@/modules/dashboard/routes'
import { clientEditRoute, clientsRoutes } from '@/modules/clients/routes'
import { loginPage } from '@/modules/login/routes'

Vue.use(VueRouter)

const routes = [
  dashRoutes,
  clientsRoutes,
  clientEditRoute,
  loginPage
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
