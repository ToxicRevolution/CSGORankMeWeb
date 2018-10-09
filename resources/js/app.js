require('./bootstrap');

window.Vue = require('vue');

// User List in admin Dashboard
Vue.component('userlist', require('./components/UserList.vue'));

// Create Admin Form
Vue.component('adduser', require('./components/CreateAdmin.vue'));
const app = new Vue({
    el: '#app'
});
