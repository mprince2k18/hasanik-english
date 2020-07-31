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
            <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1595766017/heist.png" class="img-fluid rounded about-img" alt="">
          </div>
          <!-- col-md-4:END -->
              <!-- Our Team -->
          <!-- col-md-8 -->
          <div class="col-md-8">
            <!-- tabs -->
               <div class="blog_div">

                 <div v-if="loading">
                <img src="https://www.jqueryscript.net/images/collective/Placeholder%20loading.gif" alt="">
              </div>

                 <section class="our-team">
                  <div class="container">
                    <div class="row">

                      <div class="col-lg-4" v-for="team in teams" :key="team.id">
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
                            <h6>{{ team.name }}</h6>
                            <span>{{ team.position }}</span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
         </section>
         
                </div>
            <!-- tabs::ENd -->
          </div>
          <!-- col-md-8:END -->

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
            teams:[],
            loading: false
          }
        },
        methods:{
          getTeam(){
            this.loading = true;
            // axios.get('http://localhost/hasanik/public/api/team') //base_url
            axios.get('https://app.hasanikenglish.com/api/team') //base_url
            .then(response => this.teams = response.data)
            .finally(() => (this.loading = false));
          }
        },
        created(){
          this.getTeam();
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

.our-team{
  padding-top: 45px;
}
</style>
