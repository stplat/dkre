require('@/bootstrap');
require('@/modernizr');

/* Vue 3.x */
import { createApp, defineAsyncComponent } from 'vue';
const app = createApp({});

/* Vuex 4.x */
import { createStore } from 'vuex';
const store = createStore({
  modules: {},
  state: {
    // requestPath: 'http://elect.optimagp66.ru'
    requestPath: ''
  }
});

app.use(store);

/* Mixins */
app.mixin(require('./mixins/variables').default);
app.mixin(require('./mixins/helpers').default);


/* Views */
app.component('view-layout', defineAsyncComponent(() => import('@/views/ViewLayout')));
app.component('view-index', defineAsyncComponent(() => import('@/views/ViewIndex')));
app.component('view-user', defineAsyncComponent(() => import('@/views/ViewUser')));

/* Base Components */
app.component('hamburger', defineAsyncComponent(() => import('./components/_base/Hamburger')));

/* Custom Components */
app.component('user-list', defineAsyncComponent(() => import('./components/UserList')));

if (document.querySelectorAll('#app').length) {
  app.mount('#app');
}
