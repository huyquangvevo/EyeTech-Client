require('./bootstrap');

window.Vue = require('vue');
window.VueSelect = require('vue-select');
window.AsyncComputed = require('vue-async-computed');
window.VueRouter = require('vue-router');
window.VueResource = require('vue-resource');

import {ClientTable} from 'vue-tables-2';
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import vueDropzone from 'vue2-dropzone';

Vue.use(ClientTable);
Vue.use(BootstrapVue);
Vue.use(vueDropzone);

Vue.component('vue-dropzone', vueDropzone);
Vue.component('v-select', VueSelect.VueSelect);
Vue.component('quick-event-component', require('./components/QuickEventComponent.vue'));
Vue.component('detail-event-component', require('./components/DetailEventComponent.vue'));
Vue.component('customer-edit-component', require('./components/CustomerEditComponent.vue'));
Vue.component('customer-quick-info-component', require('./components/CustomerQuickInfoComponent.vue'));
Vue.component('customer-info-component', require('./components/CustomerInfoComponent.vue'));
Vue.component('customer-message-component', require('./components/CustomerMessageComponent.vue'));
Vue.component('customer-profile-action-component', require('./components/CustomerProfileActionComponent.vue'));
Vue.component('nav-right-noti-component', require('./components/NavRightNotiComponent.vue'));
Vue.component('nav-right-profile-component', require('./components/NavRightProfileComponent.vue'));
Vue.component('register-component', require('./components/RegisterComponent.vue'));
Vue.component('feedback-component', require('./components/FeedbackComponent.vue'));
Vue.component('gallery-component', require('./components/GalleryComponent.vue'));
Vue.component('gallery-upload-component', require('./components/GalleryUploadComponent.vue'));

// new by huy
Vue.component('statistics-store', require('./components/Statistics.vue'));
Vue.component('employee-info',require('./components/EmployeeInfo.vue'));
Vue.component('list-customer',require('./components/ListCustomer.vue'));
Vue.component('event-component',require('./components/EventComponent.vue'));
Vue.component('event-in-component',require('./components/EventInComponent.vue'));

const vue = new Vue({
    el: '#vue',
});
