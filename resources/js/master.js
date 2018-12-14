require('./bootstrap');

window.Vue = require('vue');
window.VueSelect = require('vue-select');
window.AsyncComputed = require('vue-async-computed');
window.VueRouter = require('vue-router');
window.VueResource = require('vue-resource');

import {ClientTable} from 'vue-tables-2';
Vue.use(ClientTable);

Vue.component('v-select', VueSelect.VueSelect);
Vue.component('customer-update-component', require('./components/CustomerUpdateComponent.vue'));
Vue.component('quick-event-component', require('./components/QuickEventComponent.vue'));
Vue.component('detail-event-component', require('./components/DetailEventComponent.vue'));
Vue.component('customer-edit-component', require('./components/CustomerEditComponent.vue'));

const vue = new Vue({
    el: '#vue',
});
