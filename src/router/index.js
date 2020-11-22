import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/blog',
    name: 'Blog',
    props: true,
    component: function () {
      return import('../views/Blog.vue')
    }
  },
  {
    path: '/article/:id',
    name: 'Article',
    props: true,
    component: function () {
      return import('../views/Article.vue')
    }
  },
  {
    path: '/param_page',
    name: 'ParamPage',
    component: function () {
      return import('../views/ParamPage.vue')
    }
  },
  {
    path: '/params/:id',
    name: 'Params',
    component: function () {
      return import('../views/ParamDetail.vue')
    }
  },
  {
    path: '/links',
    name: 'Links',
    props: true,
    component: function () {
      return import('../views/Links.vue')
    }
  },
]

const router = new VueRouter({
  routes
})

export default router
