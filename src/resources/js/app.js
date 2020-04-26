require('./bootstrap');
window.Vue = require('vue'); //Vue.jsの読み込み
import VueRouter from 'vue-router';
import router from './router'

Vue.use(VueRouter);

const app = new Vue({
    router,
    el: '#app',
});