
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
import router from './routes/Routes.js'
import Base from './Base';

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('daily-program', require('./components/DailyProgram.vue').default);
Vue.component('live-module', require('./components/LiveModule.vue').default);
Vue.component('title-project', require('./components/Title.vue').default);
Vue.component('weather-temperature', require('./components/WeatherTemperature.vue').default);
Vue.component('temperature', require('./components/Temperature.vue').default);
Vue.component('activity', require('./components/Activity.vue').default);
Vue.component('content-camera', require('./components/ContentCamera.vue').default);
Vue.component('content-map', require('./components/ContentMap.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    render: (h) => h(Base)
});
