<template>
  <div>


  <!-- Page Heading -->
        <div class="page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1>About Us</h1>
                <span><a href="index.html">Home</a>About Us</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Steps -->
        <section class="steps">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="step-item">
                  <div class="item-content">
                    <p class="desc" v-html="abouts.desc"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Steps -->
        <section class="steps">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="step-item">
                    <h3 class="center">Our Mission</h3>
                  <div class="item-content">
                    <p class="desc" v-html="missions.desc">
                    </p>
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
            abouts:[],
            missions:[],
          }
        },
        methods:{
          getAbout(){
            // axios.get('http://localhost/hasanik/public/api/about') //base_url
            axios.get('https://app.hasanikenglish.com/api/about') //base_url
            .then(response => this.abouts = response.data);
          },
          getMission(){
            // axios.get('http://localhost/hasanik/public/api/mission') //base_url
            axios.get('https://app.hasanikenglish.com/api/mission') //base_url
            .then(response => this.missions = response.data);
          }
        },
        created(){
          this.getAbout();
          this.getMission();
        }
        // END
    }
</script>
