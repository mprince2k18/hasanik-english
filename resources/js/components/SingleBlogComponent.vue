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
          <div class="col-md-4">
            <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1595766017/heist.png" class="img-fluid rounded about-img" alt="">
          </div>
          <div class="col-md-8">
            <div class="blog_div">

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

<style scoped>
.blog_div{
  height: 550px;
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
</style>