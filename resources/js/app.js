import { createRouter, createWebHistory } from 'vue-router'
import { createApp } from 'vue'

import App from './App.vue'
import Guests from './compoments/Guests.vue'
import Events from './compoments/Events.vue'


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'App',
            component: App
        },
        {
            path: '/events',
            name: 'Events',
            component: Events
        },
        {
            path: '/guests',
            name: 'Guests',
            component: Guests
        }
    ]
})

const app = createApp(App).use(router).mount('#app');
