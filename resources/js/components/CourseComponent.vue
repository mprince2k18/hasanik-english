<template>
  <div>

    <!-- Page Heading -->
          <div class="page-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1>Our Courses</h1>
                  <span><a href="index.html">Home</a>Our Courses</span>
                </div>
              </div>
            </div>
          </div>


          <!-- Recent Cases -->
          <section class="shop-page">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="shop-products">
                    <div class="row">

                      <div class="col-lg-3" v-for="course in courses.data" :key="course.id">
                        <div class="course-item">
                          <router-link :to="`/page/course/${course.slug}`">
                            <div class="course-thumb">
                              <img :src="course.thumbnail" :alt="course.title">
                            </div>
                            <div class="down-content">
                              <h4>{{ course.title }}</h4>

                              <span v-if="course.is_discount === 1">
                                <em>৳{{ course.discount_price }}</em>
                                ৳{{ course.price }}
                              </span>

                              <span v-else>
                                ৳{{ course.price }}
                              </span>

                              <p>{{ course.short_desc }}</p>
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
            courses:[],
          }
        },
        methods:{
          getCourses(){
            // axios.get('http://localhost/hasanik/public/api/courses') //base_url
            axios.get('https://app.hasanikenglish.com/api/courses') //base_url
            .then(response => this.courses = response.data);
          },
          getResults(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }

                // axios.get('http://localhost/hasanik/public/api/courses?page=' + page) //base_url
             axios.get('https://app.hasanikenglish.com/api/blogs?page=' + page) //base_url
            .then(response => this.courses = response.data);
            }
        },
        created(){
          this.getCourses();
          this.getResults();
        }
    }
</script>
