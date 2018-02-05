import Vue from 'vue'
import Router from 'vue-router'

import HelloWorld from '@/components/HelloWorld'
import Guide from '@/components/Guide'
import GuideItem from '@/components/GuideItem'
import Place from '@/components/Place'
import Service from '@/components/Service'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/guides',
      component: Guide,
      name: 'guide'
    },
    {
      path: '/guides/:slug',
      name: 'GuideItem',
      component: GuideItem,
    },
    {
      path: '/place/:slug',
      name: 'place',
      component: Place,
    },
    {
      path: '/service/:slug',
      name: 'service',
      component: Service,
    }
  ]
})
