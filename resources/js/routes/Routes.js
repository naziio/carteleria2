import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '../components/Dashboard'

Vue.use(Router);

const router = new Router({

    routes: [
        {
            path: '/:id?',
            component: Dashboard
        },
  
    ],

})

export default router
