<template>
  <div>

    <!-- Page Heading -->
      <!-- <div class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1>Post Details</h1>
              <span><a href="index.html">Home</a>Post Details {{ blog.title }}</span>
            </div>
          </div>
        </div>
      </div> -->


      <!-- Recent Cases -->
      <!-- <section class="blog-page">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
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
                          
                        </ul>
                        <h4>{{ blog.title }}</h4>
                        <p class="first-text" v-html="blog.description">
                        </p>
                        
                        <div class="share-tags">
                          <div class="row">
                            <div class="col-lg-8">
                              <ul class="social-icons">
                                
                                <div class="addthis_inline_share_toolbox"></div>
                            
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
            
          </div>
        </div>
      </section> -->


      <!-- ------------------------------------- -->
      <div class="container-fluid about-us-cont">

        <div class="row">
          <div class="col-md-4 mobile-aside">
<img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1597257755/WuakuhbmvxWrGbO5smgosmNBZtDufDxSAv3WEHbp.gif" class="img-fluid rounded about-img" alt="">
          <a href="/enroll/course" class="glow-on-hover" type="button">ENROLL NOW</a>
          </div>
          <div class="col-md-8 mobile-right">
            <div class="blog_div">

              <div v-if="loading">
                <img src="https://www.jqueryscript.net/images/collective/Placeholder%20loading.gif" alt="">
              </div>

              <section class="blog-page">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
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
                                  
                                </ul>
                                <h4>{{ blog.title }}</h4>
                                <p class="first-text" v-html="blog.description">
                                </p>
                                
                                <div class="share-tags">
                                  <div class="row">
                                    <div class="col-lg-8">
                                      <ul class="social-icons">
                                        <div class="addthis_inline_share_toolbox"></div>
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
                    
                  </div>
                </div>
              </section>

            </div>
          </div>
        </div>
        </div>
      <!-- ------------------------------------- -->

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
            id: this.$route.params.id,
            loading: false
          }
        },
        methods:{
          getBlog(){
            this.loading = true;
            // axios.get('http://localhost/hasanik/public/api/blog/' +  this.id) //base_url
            axios.get('https://app.hasanikenglish.com/api/blog/' + this.id ) //base_url
            .then(response => this.blog = response.data)
            .finally(() => (this.loading = false));
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

<style scoped>
.blog_div{
  height: 630px;
  overflow-y: scroll;
  overflow-x: hidden;
}

.blog-page{
  margin-top: 80px;
}

.blog-post{
  padding: 30px;
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

/** RESPONSIVE */
/* 768px*/

@media only screen and (max-width: 768px) {
    .mobile-aside{
      display: none;
    }

    .col-md-8 {
    -webkit-box-flex: 0;
    flex: 0 0 100%;
    max-width: 100%;
}
}
</style>