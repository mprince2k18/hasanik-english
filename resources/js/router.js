import Vue from 'vue'
import VueRouter from 'vue-router'
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
      path:'/page/about-us',
      component: AboutComponent,
      name: 'about-us'
    },
    {
      path:'/page/contact-us',
      component: ContactComponent,
      name: 'contact-us'
    },
    {
      path:'/page/our-team',
      component: TeamComponent,
      name: 'our-team'
    },
    {
      path:'/page/blog',
      component: BlogComponent,
      name: 'blog'
    },
    {
      path:'/single-blog',
      component: SingleBlogComponent,
      name: 'single-blog'
    },
    {
      path:'/page/courses',
      component: CourseComponent,
      name: 'courses'
    },
    {
      path:'/page/single-course',
      component: SingleCourseComponent,
      name: 'single-course'
    },
  ],
  mode: 'history'
});
