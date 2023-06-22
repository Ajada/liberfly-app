import Vue from 'vue'
import VueRouter from 'vue-router'
import { dashRoutes } from '@/modules/dashboard/routes'
import { clientsRoutes } from '@/modules/clients/routes'

Vue.use(VueRouter)

const routes = [
  dashRoutes, clientsRoutes
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
