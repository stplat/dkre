require('./bootstrap');
import Vue from 'vue';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

if (document.querySelectorAll('#app').length) {
  new Vue({}).$mount("#app");
}
