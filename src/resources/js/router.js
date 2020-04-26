import Router from 'vue-router'

import Top from './components/Top.vue'
import About from './components/About.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
        path: '/',
        name: 'top',
        component: Top
    },
    { 
        path: '/about', 
        nama: 'about',
        component: About
    },
  ]
});