import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App.vue'
import Hello from './views/Hello.vue'
import Home from './views/Home.vue'

import PrimeVue from 'primevue/config';
Vue.use(PrimeVue);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/admin/',
            name: 'home',
            component: Home
        },
        {
            path: '/admin/hello',
            name: 'hello',
            component: Hello,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});