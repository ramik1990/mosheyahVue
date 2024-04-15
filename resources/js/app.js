import '../css/app.css'

import { createApp } from 'vue'
import App from './Components/App.vue'

import AdminApp from './Components/AdminApp.vue'



createApp(App).mount('#app')                // Основное приложение VueJS
//createApp(AdminApp).mount('#adminapp')      // Административная часть приложение VueJS
