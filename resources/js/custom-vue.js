require('./bootstrap');

window.Vue = require('vue');

Vue.component('event-component', require('./components/EventComponent.vue'));

const customVue = new Vue({
    el: '#custom-vue'
});
