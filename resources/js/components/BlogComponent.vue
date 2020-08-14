<template>
  <div>

    <!-- Page Heading -->
          <!-- <div class="page-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1>Blog Entries</h1>
                  <span><a href="index.html">Home</a>Blogs</span>
                </div>
              </div>
            </div>
          </div> -->


          <!-- Recent Cases -->
          <!-- <section class="blog-page">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="blog-posts">
                    <div class="row">

                      <div class="col-lg-12" v-for="blog in blogs" :key="blog.id">
                        <div class="blog-post">
                          <div class="blog-thumb">
                            <router-link :to="`/page/blog/${blog.id}`">
                              <img :src="blog.thumbnail" :alt="blog.title"></router-link>
                          </div>
                          <div class="down-content">
                            <ul>
                              <li><a href="#">{{ blog.user.name }}</a></li>
                              <li>
                                  <timeago :datetime="blog.created_at" :auto-update="15"></timeago>
                              </li>
                            </ul>
                            <h4>{{ blog.title }}</h4>
                            <p v-html="blog.description"></p>
                            <div class="main-purple-button">
                              <router-link :to="`/page/blog/${blog.id}`">Continue Reading</router-link>
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
                        <div class="blog-widget categories">
                          <div class="blog-heading">
                            <h4>Categories</h4>
                          </div>
                          <ul>

                            <li v-for="category in categories" :key="category.id">
                              <router-link to="blog">{{ category.name }}<span>({{ category.posts_count }})</span></router-link>
                            </li>
                            
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="blog-widget recent-posts">
                          <div class="blog-heading">
                            <h4>Posts</h4>
                          </div>
                          <ul>

                            <li v-for="blog in blogs.data" :key="blog.id">
                              <router-link :to="`/page/blog/${blog.id}`">
                                <div class="blog-thumb">
                                  <img :src="blog.thumbnail" :alt="blog.title">
                                </div>
                                <div class="right-content">
                                  <h6>{{ blog.title }}</h6>
                                  <span><timeago :datetime="blog.created_at" :auto-update="15"></timeago></span>
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
          </section> -->

          <!-- -------------------------------------- -->
        <div class="container-fluid about-us-cont">

        <div class="row">
          <div class="col-md-4">
            <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1597257755/WuakuhbmvxWrGbO5smgosmNBZtDufDxSAv3WEHbp.gif" class="img-fluid rounded about-img" alt="">
            <a href="/enroll/course" class="glow-on-hover" type="button">ENROLL NOW</a>
          </div>
          <div class="col-md-8">
            <div class="blog_div">

              <div v-if="loading">
                <img src="https://www.jqueryscript.net/images/collective/Placeholder%20loading.gif" alt="">
              </div>

          <div class="row">
            
            <div class="col-lg-4" v-for="blog in blogs" :key="blog.id">
                        <div class="blog-post">
                          <div class="blog-thumb">
                            <router-link :to="`/page/blog/${blog.id}`">
                              <img :src="blog.thumbnail" :alt="blog.title"></router-link>
                          </div>
                          <div class="down-content">
                            <ul>
                              <li><a href="#">{{ blog.user.name }}</a></li>
                              <li>
                                  <timeago :datetime="blog.created_at" :auto-update="15"></timeago>
                              </li>
                            </ul>
                            <router-link :to="`/page/blog/${blog.id}`">
                              <h5>{{ blog.title }}</h5>
                            </router-link>
                            <!-- <div class="main-purple-button">
                              <router-link :to="`/page/blog/${blog.id}`">Continue Reading</router-link>
                            </div> -->
                          </div>
                        </div>
                      </div>
            
          </div>
            </div>
          </div>
        </div>
        </div>
        <!-- -------------------------------------- -->

      </div>
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.');
        },
        data(){
          return{
            blogs:[],
            categories:[],
            loading: false
          }
        },
        methods:{
          getBlogs(){
            this.loading = true;
            // axios.get('http://localhost/hasanik/public/api/blogs') //base_url
            axios.get('https://app.hasanikenglish.com/api/blogs') //base_url
            .then(response => this.blogs = response.data)
            .finally(() => (this.loading = false));
          },
          
          getResults(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }

                // axios.get('http://localhost/hasanik/public/api/blogs?page=' + page) //base_url
             axios.get('https://app.hasanikenglish.com/api/blogs?page=' + page) //base_url
            .then(response => this.blogs = response.data);
            },

            getCategories(){
            // axios.get('http://localhost/hasanik/public/api/categories') //base_url
            axios.get('https://app.hasanikenglish.com/api/categories') //base_url
            .then(response => this.categories = response.data);
          }
        },
        created(){
          this.getBlogs();
          this.getCategories();
          this.getResults();
        }
    }
</script>

<style scoped>
.blog_div{
  height: 550px;
  overflow-y: scroll;
  overflow-x: hidden;
  margin-top: 10%;
}

.blog-post{
  padding: 30px;
  border: 1px solid #c8d6e5;
  border-radius: 10px;
}

.blog_div::-webkit-scrollbar-track {
  border: 1px solid #000;
  padding: 2px 0;
  background-color: #404040;
  border-radius: 10px;
}

.blog_div::-webkit-scrollbar {
  width: 10px;
}

.blog_div::-webkit-scrollbar-thumb {
  border-radius: 10px;
  box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: #737272;
  border: 1px solid #000;
}

.rounded{
  border-radius: 10px;
}

/** Enroll */
.glow-on-hover {
    width: 150px;
    height: 40px;
    border: none;
    outline: none;
    color: #fff;
    background: #192a56;
    cursor: pointer;
    position: absolute;
    letter-spacing: 3px;
    z-index: 0;
    border-radius: 5px;
    padding: 8px;
    top: 60%;
    left: 35%
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left: -2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 5px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #192a56;
    left: 0;
    top: 0;
    border-radius: 5px;
}

@keyframes glowing {
    0% {
        background-position: 0 0;
    }

    50% {
        background-position: 400% 0;
    }

    100% {
        background-position: 0 0;
    }
}
</style>
