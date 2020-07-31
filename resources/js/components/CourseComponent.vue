<template>
  <div>

    <!-- Page Heading -->
          <!-- <div class="page-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1>Our Courses</h1>
                  <span><a href="index.html">Home</a>Our Courses</span>
                </div>
              </div>
            </div>
          </div> -->


          <!-- Recent Cases -->
          <!-- <section class="shop-page">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="shop-products">
                    <div class="row">

                      <div class="col-lg-3" v-for="course in courses.data" :key="course.id">
                        <div class="course-item">
                          <router-link :to="`/page/course/${course.slug}`">
                            <div class="course-thumb">
                              <img :src="course.thumbnail" :alt="course.name">
                            </div>
                            <div class="down-content">
                              <h4>{{ course.name }}</h4>

                              <span v-if="course.is_discount === 1">
                                <em>৳{{ course.discount_price }}</em>
                                ৳{{ course.price }}
                              </span>

                              <span v-else>
                                ৳{{ course.price }}
                              </span>

                            </div>
                          </router-link>
                        </div>
                      </div>
                      
                      <div class="col-lg-12">
                        <div class="shop-pagination">
                          <ul>
                            <pagination :data="courses" @pagination-change-page="getResults"></pagination>
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
            <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1595766017/heist.png" class="img-fluid rounded about-img" alt="">
            
          </div>
          <div class="col-md-8">
            <div class="blog_div">
            <div v-if="loading">
                <img src="https://www.jqueryscript.net/images/collective/Placeholder%20loading.gif" alt="">
              </div>
                <section class="shop-page">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="shop-products">
                          <div class="row">

                            <div class="col-lg-4" v-for="course in courses.data" :key="course.id">
                              <div class="course-item">
                                <router-link :to="`/page/course/${course.slug}`">
                                  <div class="course-thumb">
                                    <img :src="course.thumbnail" :alt="course.name">
                                  </div>
                                  <div class="down-content">
                                    <h6>{{ course.name }}</h6>

                                    <span v-if="course.is_discount === 1">
                                      <em>৳{{ course.discount_price }}</em>
                                      ৳{{ course.price }}
                                    </span>

                                    <span v-else>
                                      ৳{{ course.price }}
                                    </span>

                                  </div>
                                </router-link>
                              </div>
                            </div>

                            
                            
                            <!-- <div class="col-lg-12">
                              <div class="shop-pagination">
                                <ul>
                                  <pagination :data="courses" @pagination-change-page="getResults"></pagination>
                                </ul>
                              </div>
                            </div> -->
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
            courses:[],
            loading: false
          }
        },
        methods:{
          getCourses(){
            this.loading = true;
            // axios.get('http://localhost/hasanik/public/api/courses') //base_url
            axios.get('https://app.hasanikenglish.com/api/courses') //base_url
            .then(response => this.courses = response.data)
            .finally(() => (this.loading = false));
          },
          getResults(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }

                // axios.get('http://localhost/hasanik/public/api/courses?page=' + page) //base_url
             axios.get('https://app.hasanikenglish.com/api/courses?courses=' + page) //base_url
            .then(response => this.courses = response.data);
            }
        },
        created(){
          this.getCourses();
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

.shop-page{
  margin-top: 10px;
}
</style>
