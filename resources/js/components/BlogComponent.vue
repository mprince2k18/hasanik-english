<template>
  <div>

    <!-- Page Heading -->
          <div class="page-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1>Blog Entries</h1>
                  <span><a href="index.html">Home</a>Blog Entries</span>
                </div>
              </div>
            </div>
          </div>


          <!-- Recent Cases -->
          <section class="blog-page">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="blog-posts">
                    <div class="row">

                      <div class="col-lg-12" v-for="blog in blogs.data" :key="blog.id">
                        <div class="blog-post">
                          <div class="blog-thumb">
                            <router-link to="single-blog">
                              <img :src="blog.thumbnail" :alt="blog.title"></router-link>
                          </div>
                          <div class="down-content">
                            <ul>
                              <li><a href="#">{{ blog.user.name }}</a></li>
                              <li>
                                  <timeago :datetime="blog.created_at" :auto-update="15"></timeago>
                              </li>
                              <li><a href="#">8 Comments</a></li>
                            </ul>
                            <h4>{{ blog.title }}</h4>
                            <p>{{ blog.description }}</p>
                            <div class="main-purple-button">
                              <router-link to="single-blog">Continue Reading</router-link>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      <div class="col-lg-12">
                        <div class="blog-pagination">
                          <pagination :data="blogs" @pagination-change-page="getResults"></pagination>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="blog-sidebar">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="blog-widget about-me">
                          <div class="about-thumb">
                            <img src="https://buttoncreative.agency/html/oxana/images/about-me.jpg" alt="">
                          </div>
                          <h4>Donald K. Huff</h4>
                          <p>Shaman synth retro slow-carb. Vape taxidermy twee, put a bird.</p>
                          <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="blog-widget search">
                          <form>
                              <input type="search" value="" placeholder="Type to search..." required="">
                              <button type="submit" class="primary-button"><i class="fa fa-search"></i></button>
                          </form>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="blog-widget categories">
                          <div class="blog-heading">
                            <h4>Categories</h4>
                          </div>
                          <ul>
                            <li><router-link to="blog">Web Analysis<span>(2)</span></router-link></li>
                            <li><router-link to="blog">Digital Marketing<span>(5)</span></router-link></li>
                            <li><router-link to="blog">Creative Agencies<span>(4)</span></router-link></li>
                            <li><router-link to="blog">Branding Design<span>(8)</span></router-link></li>
                            <li><router-link to="blog">Graphic Design<span>(9)</span></router-link></li>
                            <li><router-link to="blog">Web Re-Design<span>(11)</span></router-link></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="blog-widget recent-posts">
                          <div class="blog-heading">
                            <h4>Recent Posts</h4>
                          </div>
                          <ul>
                            <li>
                              <router-link to="single-blog">
                                <div class="blog-thumb">
                                  <img src="https://buttoncreative.agency/html/oxana/images/blog-item-03.jpg" alt="">
                                </div>
                                <div class="right-content">
                                  <h6>15 SEO Practices Web Architecture</h6>
                                  <span>Febuary 15, 2020</span>
                                </div>
                              </router-link>
                            </li>
                            <li>
                              <router-link to="single-blog">
                                <div class="blog-thumb">
                                  <img src="https://buttoncreative.agency/html/oxana/images/blog-item-03.jpg" alt="">
                                </div>
                                <div class="right-content">
                                  <h6>Few Easy Steps For Huge Audience</h6>
                                  <span>Febuary 15, 2020</span>
                                </div>
                              </router-link>
                            </li>
                            <li>
                              <router-link to="single-blog">
                                <div class="blog-thumb">
                                  <img src="https://buttoncreative.agency/html/oxana/images/blog-item-03.jpg" alt="">
                                </div>
                                <div class="right-content">
                                  <h6>Best Resolution For Social Media</h6>
                                  <span>Febuary 15, 2020</span>
                                </div>
                              </router-link>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            blogs:[],
          }
        },
        methods:{
          getBlogs(){
            // axios.get('http://localhost/hasanik/public/api/blogs') //base_url
            axios.get('https://app.hasanikenglish.com/api/blogs') //base_url
            .then(response => this.blogs = response.data);
          },
          getResults(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }

                // axios.get('http://localhost/hasanik/public/api/blogs?page=' + page) //base_url
             axios.get('https://app.hasanikenglish.com/api/blogs?page=' + page) //base_url
            .then(response => this.blogs = response.data);
            }
        },
        created(){
          this.getBlogs();
          this.getResults();
        }
    }
</script>
