require('./bootstrap');

window.Vue = require('vue');

Vue.component('event-component', require('./components/EventComponent.vue'));

const event = new Vue({
    el: '#event'
});
