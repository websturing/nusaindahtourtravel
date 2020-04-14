import Vue from 'vue';
import VueRouter from 'vue-router';

import urlBase from '@/js/url';
import Dashboard from '@/js/components/homepage/dashboard';
import hotel from '@/js/components/produk/hotel';
import hotelDetail from '@/js/components/produk/hotel_detail';
import ferry from '@/js/components/produk/ferry';

import notfound404 from '@/js/master/404';


import login from '@/js/master/login';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: urlBase.urlBase,
    hash: false,
    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: Dashboard,
            meta: { disallowAuthed: true }
        },
        {
            path: '/hotel',
            name: 'hotel',
            component: hotel,
        },
        {
            path: '/hotel-detail',
            name: 'hotel-detail',
            component: hotelDetail,
        },
        {
            path: '/ferry',
            name: 'ferry',
            component: ferry,
        },
        {
            path: '*',
            name: '404',
            component: notfound404
        },
    ]
});

export default router;