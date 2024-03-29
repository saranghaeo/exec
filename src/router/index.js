import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('@/views/MainPage.vue')
    },
    {
      path: '/players',
      name: 'players',
      component: () => import('../views/PlayersPage.vue')
    },
    {
      path: '/players/:steam_id',
      name: 'profiles',
      props: true,
      component: () => import('../views/PlayerProfile.vue')
    },
    {
      path: '/edit',
      name: 'edit',
      component: () => import('../views/ProfileEdit.vue')
    },
    {
      path: '/profile',
      name: 'profile',
      props: true,
      component: () => import('../views/Profile.vue')
    },
    {
      path: '/blog',
      name: 'blog',
      component: () => import('../views/BlogPage.vue')
    },
    {
      path: '/cs2',
      name: 'cs2',
      component: () => import('../views/Blogs/cs2.vue')
    },
    {
      path: '/gsync',
      name: 'gsync',
      component: () => import('../views/Blogs/gsync.vue')
    },
    {
      path: '/fps',
      name: 'fps',
      component: () => import('../views/Blogs/fps.vue')
    },
    {
      path: '/training',
      name: 'training',
      component: () => import('../views/TrainingPage.vue')
    },
    {
      path: '/generator',
      name: 'generator',
      component: () => import('../views/GeneratorPage.vue')
    },
    {
      path: '/generator/bind',
      name: 'bind',
      component: () => import('../views/BindPage.vue')
    },
    {
      path: '/generator/crosshair',
      name: 'crosshair',
      component: () => import('../views/CrosshairPage.vue')
    },
    {
      path: '/human',
      name: 'human',
      component: () => import('../views/HumanBench.vue')
    },
    {
      path: '/help',
      name: 'help',
      component: () => import('../views/HelpPage.vue')
    },
  ]
})

export default router
