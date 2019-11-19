import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '../components/Dashboard'

Vue.use(Router);

const router = new Router({

    routes: [
        {
            path: '/',
            component: Dashboard
        },
        {
            path: '/state-two',
            component: Dashboard,
           
        },
        {
            path: '/state-three',
            component: Dashboard,
          
        },
        {
            path: '/state-four',
            component: Dashboard,
           
        },           
        {
            path: '/state-five',
            component: Dashboard,
           
        },           
        {
            path: '/state-six',
            component: Dashboard,
           
        },           
        {
            path: '/state-seven',
            component: Dashboard,
           
        },           
    
    ],

})

export default router
