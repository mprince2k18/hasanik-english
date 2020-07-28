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
                          <!-- <li><a href="#">8 Comments</a></li> -->
                        </ul>
                        <h4>{{ blog.title }}</h4>
                        <p class="first-text" v-html="blog.description">
                        </p>
                        
                        <div class="share-tags">
                          <div class="row">
                            <div class="col-lg-8">
                              <ul class="social-icons">
                                <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                                
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