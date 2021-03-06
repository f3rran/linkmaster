import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App.vue'
import Hello from './views/Hello.vue'
import Home from './views/Home.vue'
import Settings from './views/Settings.vue'
import Edit from './views/LinkBoards/Edit.vue'

import PrimeVue from 'primevue/config';
Vue.use(PrimeVue);

import ToastService from 'primevue/toastservice';
Vue.use(ToastService);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/admin/home',
            name: 'home',
            component: Home
        },
        {
            path: '/admin/hello',
            name: 'hello',
            component: Hello,
        },
        {
            path: '/admin/create',
            name: 'Create LinkBoard',
            component: Edit
        },
        {
            path: '/admin/settings',
            name: 'Settings',
            component: Settings
        },
        {
            path: '/admin/:id/edit',
            name: 'Edit LinkBoard',
            props: true,
            component: Edit
        }
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});