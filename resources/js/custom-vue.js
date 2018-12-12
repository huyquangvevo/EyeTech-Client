require('./bootstrap');

window.Vue = require('vue');
window.VueResource = require('vue-resource');

Vue.component('event-component', require('./components/EventComponent.vue'));

const customVue = new Vue({
    el: '#custom-vue'
});
