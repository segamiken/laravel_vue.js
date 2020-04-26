import Router from 'vue-router'

import Top from './components/Tasks.vue'
import About from './components/About.vue'
import NotFound from './components/NotFound.vue'
import TaskDetail from './components/TaskDetail.vue'
import TaskEdit from './components/TaskEdit.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
        path: '*',
        component: NotFound
    }, 
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
    {
        path: '/tasks/:id',
        name: 'task_details',
        component: TaskDetail
    },
    {
        path: '/tasks/:id/edit',
        name: 'task_edit',
        component: TaskEdit
    },
  ]
});