import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeComponent from './components/HomeComponent'
import AboutComponent from './components/AboutComponent'
import ContactComponent from './components/ContactComponent'
import TeamComponent from './components/TeamComponent'
import BlogComponent from './components/BlogComponent'
import SingleBlogComponent from './components/SingleBlogComponent'
import CourseComponent from './components/CourseComponent'
import SingleCourseComponent from './components/SingleCourseComponent'

Vue.use(VueRouter)

export default new VueRouter({
  routes:[
    {
      path:'/',
      component: HomeComponent
    },
    {
      path:'/about-us',
      component: AboutComponent
    },
    {
      path:'/contact-us',
      component: ContactComponent
    },
    {
      path:'/our-team',
      component: TeamComponent
    },
    {
      path:'/blog',
      component: BlogComponent
    },
    {
      path:'/single-blog',
      component: SingleBlogComponent
    },
    {
      path:'/courses',
      component: CourseComponent
    },
    {
      path:'/single-course',
      component: SingleCourseComponent
    },
  ],
  mode: 'history'
});
