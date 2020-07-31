<template>
  <div>
    <!-- Page Heading -->
         <!-- <div class="page-heading">
           <div class="container">
             <div class="row">
               <div class="col-lg-12">
                 <h1>Our Team</h1>
                 <span><a href="index.html">Home</a>Our Team</span>
               </div>
             </div>
           </div>
         </div> -->


         <!-- Our Team -->
         <!-- <section class="our-team">
           <div class="container">
             <div class="row">
               <div class="col-lg-12">
                 <div class="section-heading">
                   <h6>Our Team</h6>
                   <h2>Meet Our Members</h2>
                 </div>
               </div>

               <div class="col-lg-3" v-for="team in teams" :key="team.id">
                 <div class="team-item">
                   <div class="team-thumb">
                     <div class="hover-effect">
                       <ul>
                         <li><a :href="team.fb"><i class="fa fa-facebook"></i></a></li>
                         <li><a :href="team.tw"><i class="fa fa-twitter"></i></a></li>
                         <li><a :href="team.skype"><i class="fa fa-skype"></i></a></li>
                         <li><a :href="team.linked"><i class="fa fa-linkedin"></i></a></li>
                       </ul>
                     </div>
                     <img :src="team.photo" alt="#">
                   </div>
                   <div class="down-content">
                     <h4>{{ team.name }}</h4>
                     <span>{{ team.position }}</span>
                   </div>
                 </div>
               </div>

             </div>
           </div>
         </section> -->


         <!-- Fun Facts -->
         <!-- <section class="fun-facts">
           <div class="container">
             <div class="row">
               <div class="col-lg-3 col-sm-6">
                 <div class="count-area-content">
                   <div class="count-digit first-digit">8</div>
                   <div class="count-title">Members</div>
                 </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                 <div class="count-area-content">
                   <div class="count-digit second-digit">120</div>
                   <div class="count-title">Students</div>
                 </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                 <div class="count-area-content">
                   <div class="count-digit third-digit">6</div>
                   <div class="count-title">Courses</div>
                 </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                 <div class="count-area-content">
                   <div class="count-digit fourth-digit">11</div>
                   <div class="count-title">Blogs</div>
                 </div>
               </div>
             </div>
           </div>
         </section> -->

          <!-- -------------------------------------- -->
        <div class="container-fluid about-us-cont">

        <div class="row">

          <!-- col-md-4 -->
          <div class="col-md-4">
            <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1595766017/heist.png" class="img-fluid about-img" alt="">
          </div>
          <!-- col-md-4:END -->
              <!-- Our Team -->
          <!-- col-md-8 -->
          <div class="col-md-8">
            <!-- tabs -->
                <section class="our-team">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="section-heading">
                          <h2>Meet Our Members</h2>
                        </div>
                      </div>

                      <!-- <div class="col-lg-3" v-for="team in teams" :key="team.id">
                        <div class="team-item">
                          <div class="team-thumb">
                            <div class="hover-effect">
                              <ul>
                                <li><a :href="team.fb"><i class="fa fa-facebook"></i></a></li>
                                <li><a :href="team.tw"><i class="fa fa-twitter"></i></a></li>
                                <li><a :href="team.skype"><i class="fa fa-skype"></i></a></li>
                                <li><a :href="team.linked"><i class="fa fa-linkedin"></i></a></li>
                              </ul>
                            </div>
                            <img :src="team.photo" alt="#">
                          </div>
                          <div class="down-content">
                            <h4>{{ team.name }}</h4>
                            <span>{{ team.position }}</span>
                          </div>
                        </div>
                      </div> -->

            <carousel>

              <slide v-for="team in teams" :key="team.id">
                <div class="team-item">
                          <div class="team-thumb">
                            <div class="hover-effect">
                              <ul>
                                <li><a :href="team.fb"><i class="fa fa-facebook"></i></a></li>
                                <li><a :href="team.tw"><i class="fa fa-twitter"></i></a></li>
                                <li><a :href="team.skype"><i class="fa fa-skype"></i></a></li>
                                <li><a :href="team.linked"><i class="fa fa-linkedin"></i></a></li>
                              </ul>
                            </div>
                            <img :src="team.photo" alt="#">
                          </div>
                          <div class="down-content">
                            <h4>{{ team.name }}</h4>
                            <span>{{ team.position }}</span>
                          </div>
                        </div>
              </slide>
              
            </carousel>

                    </div>
                  </div>
                </section>
            <!-- tabs::ENd -->
          </div>
          <!-- col-md-8:END -->

        </div>
        </div>
        <!-- -------------------------------------- -->

      </div>
</template>

<script>
import { Carousel, Slide } from 'vue-carousel';

    export default {
        mounted() {
            console.log('Component mounted.');
        },
        components: {
          Carousel,
          Slide
        },
        data(){
          return{
            teams:[],
          }
        },
        methods:{
          getTeam(){
            
            // axios.get('http://localhost/hasanik/public/api/team') //base_url
            axios.get('https://app.hasanikenglish.com/api/team') //base_url
            .then(response => this.teams = response.data);
          }
        },
        created(){
          this.getTeam();
        }
    }
</script>

<style scoped>
section.our-team {
    padding: 100px 0px 0px 0px;
}
.team-item{
  width: 75%;
  margin: 10px;
}
</style>
