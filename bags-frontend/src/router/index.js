import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import BagList from '../views/bags/BagList.vue'
import BagView from '../views/bags/BagView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/bags',
      component: BagList
    },
    {
      path: '/bags/:id',
      name: 'BagView',
      component: BagView,
      props: true
    }
  ]
})

export default router
