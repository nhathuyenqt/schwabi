import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import BootstrapVueNext from "bootstrap-vue-next";

// CSS
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue-next/dist/bootstrap-vue-next.css'

import "vue3-carousel/dist/carousel.css";

import "./assets/custom.scss";

const app = createApp(App).use(router);
app.use(BootstrapVueNext);
app.mount('#app')