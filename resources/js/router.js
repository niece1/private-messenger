import { createWebHistory, createRouter } from 'vue-router'
import Login from './views/Login.vue'
import Register from './views/Register.vue'
import Messenger from './views/Messenger.vue'

const routes = [
    { 
        path: '/login',
        name: 'Login',
        component: Login
    },
    { 
        path: '/register',
        name: 'Register',
        component: Register
    },
    { 
        path: '/',
        name: 'Messenger',
        component: Messenger
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
    