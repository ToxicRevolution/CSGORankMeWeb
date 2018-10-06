require('./bootstrap');

window.Vue = require('vue');

// User List in admin Dashboard
Vue.component('userlist', require('./components/UserList.vue'));

// Used for tables
Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
    el: '#app'
});
