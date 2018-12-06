require('./bootstrap');

window.Vue = require('vue');
window.VueSelect = require('vue-select');
window.AsyncComputed = require('vue-async-computed');
window.VueRouter = require('vue-router');
Vue.component('register-component', require('./components/RegisterComponent.vue'));
Vue.component('v-select', VueSelect.VueSelect);

const registerVue = new Vue({
    el: '#register',
});
