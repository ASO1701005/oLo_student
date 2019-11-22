import Vue from 'vue'
import Router from 'vue-router'
import Hisyo_Imagechange from '@/components/Hisyo_Imagechange'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            component: Hisyo_Imagechange
        }
    ]
})