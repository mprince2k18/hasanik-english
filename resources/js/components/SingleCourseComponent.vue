<template>
  <div>
    <!-- Page Heading -->
          <div class="page-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1>Course Details</h1>
                  <span><a href="index.html">Home</a>Course Details</span>
                </div>
              </div>
            </div>
          </div>


          <!-- Recent Cases -->
          <section class="product-details">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="single-product">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="left-image">
                          <img :src="course.thumbnail" :alt="course.title">
                        </div>
                      </div>
                      <div class="col-lg-6 align-self-center">
                        <div class="right-content">
                          <h2>{{ course.title }}</h2>
                          <span v-if="course.is_discount === 1">
                                <em>৳{{ course.discount_price }}</em>
                                ৳{{ course.price }}
                              </span>

                              <span v-else>
                                ৳{{ course.price }}
                              </span>
                          <p>{{ course.short_desc }}</p>
                          <div class="main-white-button">
                            <!-- <a href="http://localhost/hasanik/public/enroll/course">Enroll Now</a> -->
                            <a href="https://app.hasanikenglish.com/enroll/course">Enroll Now</a>
                          </div>
                          <div class="share-tags">
                            <div class="row">
                              <div class="col-lg-5">
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
                            <p>{{ course.big_desc }}</p>
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
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            course:[],
            slug: this.$route.params.slug
          }
        },
        methods:{
          getBlog(){
            // axios.get('http://localhost/hasanik/public/api/course/' +  this.slug) //base_url
            axios.get('https://app.hasanikenglish.com/api/course/' + this.slug ) //base_url
            .then(response => this.course = response.data);
          },
        },
        created(){
            this.getBlog();
        },
  }
</script>
