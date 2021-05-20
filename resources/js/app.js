require('@/bootstrap');
require('@/modernizr');

import Vue from 'vue';
import Vuex from 'vuex';

/* Vuex */
Vue.use(Vuex);
const store = new Vuex.Store({
  modules: {},
  state: {
    // requestPath: 'http://elect.optimagp66.ru'
    requestPath: ''
  }
});

/* Mixins */
Vue.mixin(require('./mixins/variables').default);
Vue.mixin(require('./mixins/helpers').default);

/* Views */
Vue.component('view-layout', () => import(/* webpackChunkName: "ViewLayout" */ '@/views/ViewLayout'));
Vue.component('view-index', () => import(/* webpackChunkName: "ViewCheck" */ '@/views/ViewIndex'));
Vue.component('view-user', () => import(/* webpackChunkName: "ViewUser" */ '@/views/ViewUser'));

/* Base Components */
Vue.component('hamburger', () => import(/* webpackChunkName: "Hamburger" */'./components/_base/Hamburger'));

/* Custom Components */

if (document.querySelectorAll('#app').length) {
  new Vue({}).$mount("#app");
}
