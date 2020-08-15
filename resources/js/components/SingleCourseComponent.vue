<template>
  <div>
    <!-- Page Heading -->
          <!-- <div class="page-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1>Course Details</h1>
                  <span><a href="index.html">Home</a>Course Details</span>
                </div>
              </div>
            </div>
          </div> -->

          <!-- Recent Cases -->
          <!-- <section class="product-details">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="single-product">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="left-image">
                          <img :src="course.thumbnail" :alt="course.name">
                        </div>
                      </div>
                      <div class="col-lg-6 align-self-center">
                        <div class="right-content">
                          <h2>{{ course.name }}</h2>
                          <span v-if="course.is_discount === 1">
                                <em>৳{{ course.discount_price }}</em>
                                ৳{{ course.price }}
                              </span>

                              <span v-else>
                                ৳{{ course.price }}
                              </span>
                          <p v-html="course.short_desc"></p>
                          <div class="main-white-button">
                            <a href="https://app.hasanikenglish.com/enroll/course">Enroll Now</a>
                          </div>
                          <div class="share-tags">
                            <div class="row">
                              <div class="col-lg-5">
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
          </section> -->

          <!-- <section class="product-info">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div id="tabs">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul>
                          <li><a href='#tabs-1'>Description</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-12">
                        <section class='tabs-content'>
                          <article id='tabs-1'>
                            <p v-html="course.big_desc"></p>
                          </article>
                        </section>
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
          <div class="col-md-4 mobile-aside">
<img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1597257755/WuakuhbmvxWrGbO5smgosmNBZtDufDxSAv3WEHbp.gif" class="img-fluid rounded about-img" alt="">
          <a href="/enroll/course" class="glow-on-hover" type="button">ENROLL NOW</a>
          </div>
          <div class="col-md-8 mobile-right">
            <div class="blog_div">

              

              <section class="product-details">

                <div v-if="loading">
                <img src="https://www.jqueryscript.net/images/collective/Placeholder%20loading.gif" alt="">
              </div>
              
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="single-product">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="left-image">
                              <img :src="course.thumbnail" :alt="course.name">
                            </div>
                          </div>
                          <div class="col-lg-6 align-self-center">
                            <div class="right-content">
                              <h2>{{ course.name }}</h2>
                              <span v-if="course.is_discount === 1">
                                    <em>৳{{ course.discount_price }}</em>
                                    ৳{{ course.price }}
                                  </span>

                                  <span v-else>
                                    ৳{{ course.price }}
                                  </span>
                              <p v-html="course.short_desc"></p>
                              <div class="main-white-button">
                                <a href="https://app.hasanikenglish.com/enroll/course">Enroll Now</a>
                              </div>
                              <div class="share-tags">
                                <div class="row">
                                  <div class="col-lg-5">
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
              </section>

              <section class="product-info">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div id="tabs">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul>
                              <li><a href='#tabs-1'>Description</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-12">
                            <section class='tabs-content'>
                              <article id='tabs-1'>
                                <p v-html="course.big_desc"></p>
                              </article>
                            </section>
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
        <!-- -------------------------------------- -->
          
      </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            course:[],
            slug: this.$route.params.slug,
            loading: false
          }
        },
        methods:{
          getBlog(){
            this.loading = true;
            // axios.get('http://localhost/hasanik/public/api/course/' +  this.slug) //base_url
            axios.get('https://app.hasanikenglish.com/api/course/' + this.slug ) //base_url
            .then(response => this.course = response.data)
            .finally(() => (this.loading = false));
          },
        },
        created(){
            this.getBlog();
        },
  }
</script>

<style scoped>
.blog_div{
  height: 630px;
  overflow-y: scroll;
  overflow-x: hidden;
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
