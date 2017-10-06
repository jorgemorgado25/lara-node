
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueResource from 'vue-resource';
Vue.use(VueResource);

import VueSocketio from 'vue-socket.io';
Vue.use(VueSocketio, 'http://localhost:8890');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('write-message', require('./components/WriteMessage.vue'));

Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr("content");

const app = new Vue({
    el: '#app'
});
