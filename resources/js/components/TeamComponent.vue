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
            <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1597257755/WuakuhbmvxWrGbO5smgosmNBZtDufDxSAv3WEHbp.gif" class="img-fluid rounded about-img" alt="">
          <a href="/enroll/course" class="glow-on-hover" type="button">ENROLL NOW</a>
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
