// require('./bootstrap');

const Vue = require('vue');

import Datepicker from 'vuejs-datepicker'
import Alert from './components/Alert'

const app = new Vue({
    el: '#app',
    components: {
        Datepicker,
        Alert
    }
});
