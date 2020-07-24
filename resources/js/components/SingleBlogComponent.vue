<template>
  <div>

    <!-- Page Heading -->
      <div class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1>Post Details</h1>
              <span><a href="index.html">Home</a>Post Details {{ blog.title }}</span>
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
                  <div class="col-lg-12">
                    <div class="blog-post post-details">
                      <div class="blog-thumb">
                        <a href="#"><img :src="blog.thumbnail" :alt="blog.title"></a>
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
                        <p class="first-text">
                          {{ blog.desc }}
                        </p>
                        
                        <div class="share-tags">
                          <div class="row">
                            <div class="col-lg-6">
                              <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
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
                        <img src="images/about-me.jpg" alt="">
                      </div>
                      <h4>{{ blog.user.name }}</h4>
                      <p>{{ blog.user.position }}</p>
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
                        <li v-for="recentBlog in recentBlogs.data" :key="recentBlog.id">
                          <router-link to="single-blog">
                            <div class="blog-thumb">
                              <img :src="recentBlog.thumbnail" :alt="recentBlog.title">
                            </div>
                            <div class="right-content">
                              <h6>{{ recentBlog.title }}</h6>
                              <span><timeago :datetime="recentBlog.created_at" :auto-update="15"></timeago></span>
                            </div>
                          </router-link>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="blog-widget tags">
                      <div class="blog-heading">
                        <h4>Tag Clouds</h4>
                      </div>
                      <ul>
                        <li><a href="#">Web Analysis</a></li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Branding</a></li>
                        <li><a href="#">Digital Agency</a></li>
                        <li><a href="#">Optimize</a></li>
                        <li><a href="#">Marketing</a></li>
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
            blog:[],
            recentBlogs:[],
            id: this.$route.params.id
          }
        },
        methods:{
          getBlog(){
            // axios.get('http://localhost/hasanik/public/api/blog/' +  this.id) //base_url
            axios.get('https://app.hasanikenglish.com/api/blog/' + this.id ) //base_url
            .then(response => this.blog = response.data);
          },
          getBlogs(){
            // axios.get('http://localhost/hasanik/public/api/blogs') //base_url
            axios.get('https://app.hasanikenglish.com/api/blogs') //base_url
            .then(response => this.recentBlogs = response.data);
          }
        },
        created(){
            this.getBlog();
            this.getBlogs();
        },
  }
</script>