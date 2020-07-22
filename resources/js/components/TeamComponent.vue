<template>
  <div>
    <!-- Page Heading -->
         <div class="page-heading">
           <div class="container">
             <div class="row">
               <div class="col-lg-12">
                 <h1>Our Team</h1>
                 <span><a href="index.html">Home</a>Our Team</span>
               </div>
             </div>
           </div>
         </div>


         <!-- Our Team -->
         <section class="our-team">
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
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-behance"></i></a></li>
                         <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                       </ul>
                     </div>
                     <img src="team.photo" alt="#">
                   </div>
                   <div class="down-content">
                     <h4>{{ team.name }}</h4>
                     <span>{{ team.position }}</span>
                   </div>
                 </div>
               </div>

             </div>
           </div>
         </section>


         <!-- Fun Facts -->
         <section class="fun-facts">
           <div class="container">
             <div class="row">
               <div class="col-lg-3 col-sm-6">
                 <div class="count-area-content">
                   <div class="count-digit first-digit">4860</div>
                   <div class="count-title">Hours Worked</div>
                 </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                 <div class="count-area-content">
                   <div class="count-digit second-digit">120</div>
                   <div class="count-title">Projects completed</div>
                 </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                 <div class="count-area-content">
                   <div class="count-digit third-digit">460</div>
                   <div class="count-title">happy clients</div>
                 </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                 <div class="count-area-content">
                   <div class="count-digit fourth-digit">11</div>
                   <div class="count-title">awards won</div>
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
            console.log('Component mounted.');
        },
        data(){
          return{
            teams:[]
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
