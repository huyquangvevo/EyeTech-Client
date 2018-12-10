require('./bootstrap');

window.Vue = require('vue');
window.VueSelect = require('vue-select');
window.AsyncComputed = require('vue-async-computed');
window.VueRouter = require('vue-router');

Vue.component('customer-update-component', require('./components/CustomerUpdateComponent.vue'));
Vue.component('v-select', VueSelect.VueSelect);

const vue = new Vue({
    el: '#vue',
});
