require('./bootstrap');
window.$ = require('jquery')
window.JQuery = require('jquery')

import Vue from 'vue'
import router from './router'
import VueTimeago from 'vue-timeago'
Vue.use(require('vue-resource'));
Vue.use(require('vue2-animate/dist/vue2-animate.min.css'));

Vue.use(VueTimeago, {
    name: 'Timeago', // Component name, `Timeago` by default
    locale: 'en', // Default locale
    // We use `date-fns` under the hood
    // So you can use all locales from it
    // locales: {
    //     'zh-CN': require('date-fns/locale/zh_cn'),
    //     ja: require('date-fns/locale/ja')
    // }
})

Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
    el: '#app',
    components:{

    },
    router
});
