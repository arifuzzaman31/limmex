/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./vue-asset.js');

window.Vue = require('vue');

import ContactUs  from './components/ContactUs.vue';
import Blog  from './components/Blog'
import Team  from './components/team'
import Feature  from './components/Feature'

const app = new Vue({
    el: '#app',
    components : {

    	'contact-us' : ContactUs,
    	'team-member' : Team,
    	'our-blog' : Blog,
    	'feature' : Feature,
    }
});
