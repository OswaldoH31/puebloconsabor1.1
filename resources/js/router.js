import Vue from 'vue'
import Router from 'vue-router'
import Home from './pages/Home.vue'

Vue.use(Router)

const router = new Router({
    routes:[
        {path:'',name:'home',component:Home},
    ]
})

export default router;